<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_model
{
    public function Register() {
        $data = array(
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
			"password" => md5($this->input->post('password'))
        );

        if($this->isExist($data['username'])) {
            return false;
        } else {
            $this->db->insert('akun', $data);
            return true;
        };
    }

    public function isExist($username){
        $this->db->where('username',$username);
        $result = $this->db->get('akun')->result_array();
        if(isset($result[0])){
            return true;
        }else{
            return false;
        };
    }

    public function findUser(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
        $this->db->select('username');
        $this->db->from('akun');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get();
        if($result->num_rows()==0){
            return FALSE;
        }else{
            return $result->row_array();
        }
    }
    
    public function save()
    {
        $pass = md5($this->input->post('new'));
        $data = array (
        'password' => $pass
        );
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->update('akun', $data);
    }

    public function cek_old()
    {
        $old = md5($this->input->post('old'));   
        $this->db->where('password',$old);
        $query = $this->db->get('akun');
            return $query->result();;
    }

    public function check_saldo()
    {
        $this->db->select('saldo');
        $this->db->from('nasabah');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }

    public function history()
    {
        $this->db->select('no_transaksi, no_rek_penerima, jumlah, tanggal');
        $this->db->from('transaksi');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }

    public function get_saldo()
    {
        
        $this->db->select('saldo');
        $this->db->from('nasabah');
        $this->db->where('username',$this->session->userdata('username'));
        $saldo = $this->db->get();
        return $saldo->result();
        // $this->db->select('no_rekening');
        // $this->db->from('nasabah');
        // $rek = $this->db->get();
        // $akhir = $result-$jumlah;
        // return $akhir->result();
        // return $rekening_tujuan->result();
    }

    // public function get_rekening()
    // {
    //     $this->db->select('no_rekening');
    //     $this->db->from('nasabah');
    //     $rek = $this->db->get();
    //     // if ($rek->num_rows() > 0) {
    //     //     foreach ($query->result() as $row) 
    //     //     {
    //     //     $data[] = $row;
    //     //     }
    //     //     return $data;
    //     //     }    
    //     return $rek->result();
    // }

    public function updateT()
    {
        $data = array(
            'username'=>$this->session->userdata('username'),
            'no_rek_penerima'=> $this->input->post('rek'),
            'jumlah'=> $this->input->post('jum'),
            'tanggal'=> date('Y-m-d')
        );
        $this->db->insert('transaksi', $data);
        // $this->db->where('username', $this->session->userdata('username'));
        // $this->db->update('nasabah', $akhir);
    }

    // public function updateSaldo($akhir)
    // {
    //     $data = array (
    //     'saldo' => $akhir
    //     );
    //     $this->db->where('username', $this->session->userdata('username'));
    //     $this->db->update('nasabah', $saldo);
    // }

    public function findRek(){
        $rekTuj = $this->input->post('rek');   
        $this->db->select('no_rekening');
        $this->db->from('nasabah');
        $this->db->where('no_rekening',$rekTuj);
        $result = $this->db->get();
        if($result->num_rows()==0){
            return FALSE;
        }else{
            return TRUE;
        }
    }

    // public function updateSaldoPenerima($jumlah,$tujuan)
    // {
    //     $data = array (
    //     'saldo' => $jumlah
    //     );
    //     $this->db->where('no_rekening', $tujuan);
    //     $this->db->update('nasabah', $akhir);
    // }
    public function transfer($amount, $from, $to)
    {   
        // $jumlah = $this->input->post('jum');
        // $user = $this->db->select('username');
        // $this->db->from('nasabah');
        // $this->db->where('username',$this->session->userdata('username'));
        // $this->db->get();
        $sender = 'update nasabah SET saldo = saldo - ? where no_rekening = ?';
        $receiver = 'update nasabah SET saldo = saldo + ? where no_rekening = ?';
        $this->db->trans_start();
        $this->db->query($sender, array($amount, $from));
        $this->db->query($receiver, array($amount, $to));
        $this->db->trans_complete();

        if ($this->db->trans_status() == false){
            echo 'rollback!';
        }else{
            echo 'commited!';
        }

    }

    public function test()
    {
        $this->db->select('no_rekening');
        $this->db->from('nasabah');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }
    
}
