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
    // public function adduser()
    // {
    //     $data = [
    //         'screen' => $this->input->post('username', true),
    //         "email" => $this->input->post('email', true),
    //         "password" => md5($this->input->post('password', true))
    //     ];
    //     return $this->db->insert('akun', $data);
    // }

    // // public function getUserbyemail($email){
    // //     $this->db->where('email',$email);
    // //     $que = $this->db->get('akun');
    // //     return $que->result_array();
    // // }
    
    // // public function login($table, $login)
    // // {
    // //     return $this->db->get_where($table, $login);
    // // }

    // // public function cek_email($email)
    // // {
    // //     $this->db->where('email', $email);
    // //     return $this->db->get('akun')->num_rows();
    // // }

    // public function isExist($email){
    //     $this->db->where('email',$email);
    //     $result = $this->db->get('akun')->result_array();
    //     if(isset($result[0])){
    //         return true;
    //     }else{
    //         return false;
    //     };
    // }

    // public function findUser(){
    //     $email = $this->input->post('email');
    //     $password = md5($this->input->post('password'));
        
    //     $this->db->select('email');
    //     $this->db->from('akun');
    //     $this->db->where('email',$email);
    //     $this->db->where('password',$password);
    //     $result = $this->db->get();
    //     if($result->num_rows()==0){
    //         return FALSE;
    //     }else{
    //         return $result->row_array();
    //     }
    // }
