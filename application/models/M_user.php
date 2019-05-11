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

        if($this->isExist($data['email'])) {
            return false;
        } else {
            $this->db->insert('akun', $data);
            return true;
        };
    }

    public function isExist($email){
        $this->db->where('email',$email);
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
}
