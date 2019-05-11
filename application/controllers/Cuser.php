<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuser extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_user');
    }

    public function index()
	{
		$this->load->view('page_awal');
    }
    
    public function logPage()
	{
		$this->load->view('page_header');
		$this->load->view('user/page_login');
		$this->load->view('page_footer');
    }
    
    public function sigPage()
	{
		$this->load->view('page_header');
		$this->load->view('user/page_SignUp');
		$this->load->view('page_footer');
    }

    public function addUser(){
      $this->form_validation->set_rules('username','username','required');
      $this->form_validation->set_rules('email','email','required');
      $this->form_validation->set_rules('password','password','required');
  
      if($this->form_validation->run()==FALSE){
          redirect('Cuser/sigPage');
      }else{
          $this->M_user->Register();
          redirect(site_url('Cuser/logPage'));
          }
      }

      public function signIn(){
        $user = $this->M_user->findUser();
        if($user != FALSE){
          $this->session->set_userdata('username',$user['username']);
          redirect(site_url('Cuser'));
        }else{
          redirect(site_url('Cuser/logPage'));
        }
      }

    }
    
    // function tambahuser()
    // {
    //     $this->form_validation->set_rules('nama', 'name', 'required');
    //     $this->form_validation->set_rules('email', 'email', 'required');
    //     $this->form_validation->set_rules('password', 'password', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         $data['title'] = "LOGIN";
    //         $this->load->view('page_header', $data);
    //         $this->load->view('page_SignUp');
    //         $this->load->view('page_footer');
    //     }else {
    //         $e = $this->user_model->findUser($this->input->post('email', true));
    //         if($e > 0){
    //             $this->session->set_flashdata('flash', '1. An account using this email address has already registered. Please enter a valid password or request a new one.');
    //             redirect('index.php/Cuser/sigPage');
    //         }else{
    //             $login = [
    //                 "email" => $this->input->post('email', true),
    //                 "password"=> $this->input->post('password', true),
    //             ];
    //             $this->session->set_userdata('login', $login);
    //             $this->user_model->addUser();
    //             $this->session->set_flashdata('flash', 'register berhasil');
    //             redirect('index.php/user/logPage');
    //         }
    //     }
    // }

