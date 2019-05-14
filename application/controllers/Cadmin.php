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

    public function datanasabah()
    {
      // $this->load->view('admin/page_NasabahAdmin');
      $this->load->view('page_header_admin');
      $this->load->view('page_footer');
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

      public function nasabah()
      {
        $data_nasabah = $this->M_admin->Getnasabah_rek();
        $this->load->view('page_header_admin');
        $this->load->view('admin/page_datanasabah',['data'=>$data_nasabah]);
      }

      public function hapusnasabah($no_rekening)
      {
        $this->M_admin->hapus_nasabah($no_rekening);
        redirect('Cadmin/nasabah');	
      }

      public function tambahnasabah()
      {
        $no_rekening = $this->input->post('rek');
        $username = $this->input->post('username');
        $umur = $this->input->post('umur');
        $nama = $this->input->post('nama');
        $saldo = $this->input->post('saldo');
        $data = array(
          'no_rekening' => $no_rekening,
          'username' => $username,
          'umur' => $umur,
          'nama' => $nama,
          'saldo' => $saldo,
        );
        $this->M_admin->tambah_nasabah($data);
    
        redirect('Cadmin/nasabah');	
    
      }

      public function editnasabah()
      {
        $no_rekening = $this->input->post('rek');
        $username = $this->input->post('username');
        $umur = $this->input->post('umur');
        $nama = $this->input->post('nama');
        $saldo = $this->input->post('saldo');
        $data = array(
          'no_rekening' => $no_rekening,
          'username' => $username,
          'umur' => $umur,
          'nama' => $nama,
          'saldo' => $saldo,
        );
        $this->M_admin->edit_nasabah($no_rekening,$data);
    
        redirect('Cadmin/nasabah');	
      }
      
      public function history()
      {
        $data_history = $this->M_admin->Getransaksi();
        $this->load->view('page_header_admin');
        $this->load->view('admin/page_history', ['data'=>$data_history]);
      }

      public function logOut(){
        $this->session->sess_destroy();
        redirect(base_url(''));
    }

    }