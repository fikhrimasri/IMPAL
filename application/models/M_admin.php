<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_model
{

    public function findUser(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $this->db->select('username');
        $this->db->from('admin');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get();
        if($result->num_rows()==0){
            return FALSE;
        }else{
            return $result->row_array();
        }
    }

    public function Getnasabah_rek(){
		$this->db->select('*');
		$this->db->from('nasabah');
		// $this->db->join('jurusan','jurusan.id_jurusan=mahasiswa.id_jurusan');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_nasabah($no_rekening)
	{
		$this->db->delete('nasabah', array('no_rekening' => $no_rekening));
	    return;
	}

	public function edit_nasabah($no_rekening,$data)
	{
		$this->db->where('no_rekening', $no_rekening);
		$this->db->update('nasabah', $data);
	    return;
	}
	public function tambah_nasabah($data)
	{
		$this->db->insert('nasabah',$data);
	    return;
	}
}
