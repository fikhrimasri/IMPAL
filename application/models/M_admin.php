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
}
