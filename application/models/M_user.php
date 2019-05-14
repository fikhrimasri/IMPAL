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

}
