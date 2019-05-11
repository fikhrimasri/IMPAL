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
		$this->load->view('user/page_login');
    }
    
    public function sigPage()
	{
		$this->load->view('user/page_SignUp');
    }

    public function homeUserPage()
    {
      $this->load->view('user/page_UserHome');
    }
    public function gantiPasswordPage()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_GantiPassword');
      $this->load->view('page_footer');
      }
    public function hapusDataNasabahPage()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_hapusDataNasabah');
      $this->load->view('page_footer');
     }
     public function updateDataNasabahPage()
     {
       $this->load->view('page_header');
       $this->load->view('user/page_updateDataNasabah');
       $this->load->view('page_footer');
      }

    public function gantipass()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_GantiPassword');
    }

    public function ceksaldo()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_CekSaldo');
    }

    public function history()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_HistoryTransaksi');
    }

    public function virtual()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_RekeningVirtualPage1');
    }

    public function transfer()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_TransferPage1');
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
          redirect(site_url('Cuser/homeUserPage'));
        }else{
          redirect(site_url('Cuser/logPage'));
        }
      }

      public function logOut(){
        $this->session->sess_destroy();
        redirect(base_url(''));
    }

    }
    
