<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuser extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
     $this->load->model('M_user');
     $this->load->library('unit_test');
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
      $this->load->view('page_footer');
    }

    public function ceksaldo()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_CekSaldo');
      $this->load->view('page_footer');
    }

    public function history()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_HistoryTransaksi');
      $this->load->view('page_footer');
    }

    public function virtual()
    {
      $this->load->view('page_header');
      $this->load->view('user/page_RekeningVirtualPage');
      $this->load->view('page_footer');
    }

    // public function transfer()
    // {
    //   $this->load->view('page_header');
    //   $this->load->view('user/page_TransferPage');
    //   $this->load->view('page_footer');
    // }

    public function test()
    {
      $data_rek = $this->M_user->test();
      $this->load->view('page_header');
      $this->load->view('user/page_TransferPage',['data'=>$data_rek]);
      $this->load->view('page_footer');
    }

    public function addUser(){
      $this->form_validation->set_rules('username','username','required|min_length[5]|max_length[20]');
      $this->form_validation->set_rules('email','email','required|valid_email');
      $this->form_validation->set_rules('password','password','required|min_length[5]|max_length[20]');
  
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
    
    public function save_password()
    { 
     $this->form_validation->set_rules('old', 'old', 'required|min_length[5]|max_length[20]');
     $this->form_validation->set_rules('new','New','required|min_length[5]|max_length[20]');
     $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
       if($this->form_validation->run() == FALSE)
     {
      redirect(site_url('Cuser/gantipass'));
     }else{
      $cek_old = $this->M_user->cek_old();
      if ($cek_old == False){
       $this->session->set_flashdata('error','Old password not match!' );
       redirect(site_url('Cuser/gantipass'));
      }else{
       $this->M_user->save();
       $this->session->sess_destroy();
      //  $this->session->set_userdata('password',$user['password']);
       $this->session->set_flashdata('error','Your password success to change, please relogin !' );
       redirect(site_url('Cuser/logPage'));
      }//end if valid_user
     }
    }

    public function check_saldo()
    {
      $data_saldo = $this->M_user->check_saldo();
      $this->load->view('page_header');
      $this->load->view('user/page_CekSaldo', ['data'=>$data_saldo]);
      $this->load->view('page_footer');
    }

    public function history_user()
    {
      $data_history = $this->M_user->history();
      $this->load->view('page_header');
      $this->load->view('user/page_HistoryTransaksi', ['data'=>$data_history]);
      $this->load->view('page_footer');
    }

    public function transferjum()
      {
        $this->form_validation->set_rules('rek', 'rek', 'required');
        $this->form_validation->set_rules('jum','jum','required');
        if($this->form_validation->run() == FALSE)
        {
          redirect(site_url('Cuser/transfer'));
        // }else{
        // $tujuan = $this->input->post('rek');
        // $jumlah = $this->input->post('jum');
        // $sal = $this->M_user->get_saldo();
        // $akhir = (int)$sal-(int)$jumlah;
        //   if($akhir>0){
        //     redirect(site_url('Cuser/transfer'));
          }else{
            // $rek = $this->M_user->get_rekening();
            $user = $this->M_user->findrek();
            if($user != FALSE){
              $receiver = $this->input->post('rek');
              $sender_id = $this->input->post('rek');
              $amount = $this->input->post('jum');
              $jumlah = $this->input->post('jum');
              $sender = $this->input->post('rek1'); 
              $this->M_user->transfer($amount, $sender, $sender_id);
              $this->M_user->updateT();
              // $this->M_user->updateSaldo();
              // $this->M_user->updateSaldoPenerima();
              redirect(site_url('Cuser/homeUserPage'));
            }else{
              redirect(site_url('Cuser/test'));
            }
        }
      }

    }
    
