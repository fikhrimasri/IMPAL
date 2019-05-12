<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_admin');
    }

    public function index()
	{
		$this->load->view('page_awal');
    }

    public function logPage()
	{
		$this->load->view('user/page_login');
    }

    public function homeAdminPage()
	{
		$this->load->view('admin/page_HomeAdmin');
    }

      public function signIn(){
        $user = $this->M_admin->findUser();
        if($user != FALSE){
          $this->session->set_userdata('username',$user['username']);
          redirect(site_url('Cadmin/homeAdminPage'));
        }else{
          redirect(site_url('Cadmin/logPage'));
        }
      }

      public function logOut(){
        $this->session->sess_destroy();
        redirect(base_url(''));
    }

    }