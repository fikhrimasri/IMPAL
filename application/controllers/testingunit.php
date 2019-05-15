<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testingunit extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('M_user');
        $this->load->model('M_admin');
    }

    
    //     $test = $this->M_model->getAcust('adikamuh');
    //     $expected_result = array(
    //         'alamat_cust'=>'Sukabirus',
    //         'email_cust'=>'adika@gmail.com',
    //         'no_hp_cust'=>'083835911506',
    //         'photo'=>'default.png'
    //     );
    //     $test_name = 'Testing get a customer from database';
        
    //     echo $this->unit->run($test, $expected_result, $test_name);
    // }

    public function test_get_a_cust(){
        $test = $this->M_user->findUser('testes',md5('testes'));
        $expected_result = array(
            'usernma'=>'testes',
            'password'=>md5('testes'),
            'email'=>'dandibaroes88@gmail.com',
        );
        $test_name = 'Testing get a customer from database';
        
        echo $this->unit->run($test, $expected_result, $test_name);
    }
    
    // public function test_get_a_vendor(){
    //     $test = $this->Profile_model->getAvendor('V1958');
    //     $expected_result = array(
    //         'alamat_vendor'=>'Malang',
    //         'email_vendor'=>'masaling@gmail.com',
    //         'no_hp'=>'083835911506',
    //         'photo'=>'default.png'
    //     );
    //     $test_name = 'Testing get a vendor from database';
        
    //     echo $this->unit->run($test, $expected_result, $test_name);
    // }
    
    public function test_isExist_user(){
        $test = $this->M_user->isExist('gasgas');
        $expected_result = true;
        $test_name = 'Testing check a customer from database';
        
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function test_findRek(){
        $test = $this->M_user->findRek('12346');
        $expected_result = true;
        $test_name = 'Testing find rek';
        
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function test_saldo()
    {
        $test = $this->M_user->check_saldo('dandib');
        $expected_result = array(
            'saldo'=>'10000',
        );
        $test_name = 'Testing saldo from database';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    public function get_rek()
    {
        $test = $this->M_user->test('dandib');
        $expected_result = array(
            'no_rekening'=>'111111',
        );
        $test_name = 'Testing get rek from database';
        echo $this->unit->run($test, $expected_result, $test_name);
    }

    // public function test_isExist_email(){
    //     $test = $this->Register_model->isExistEmail('masaling@gmail.com');
    //     $expected_result = true;
    //     $test_name = 'Testing check an email from database';
        
    //     echo $this->unit->run($test, $expected_result, $test_name);
    // }

    // public function test_get_category(){
    //     $test = $this->Barang_model->get_category('masaling@gmail.com');
    //     $expected_result = array(
    //         array(
    //             'id_category' => 1,
    //             'category' => 'Stage'
    //         ),
    //         array(
    //             'id_category' => 2,
    //             'category' => 'Sound System'
    //         ),
    //         array(
    //             'id_category' => 3,
    //             'category' => 'Light System'
    //         ),
    //         array(
    //             'id_category' => 4,
    //             'category' => 'Gear Band'
    //         ),
    //         array(
    //             'id_category' => 5,
    //             'category' => 'Tenant'
    //         ),
    //         array(
    //             'id_category' => 6,
    //             'category' => 'Other'
    //         )
    //     );
    //     $test_name = 'Testing get category data from database';
        
    //     echo $this->unit->run($test, $expected_result, $test_name);
    // }

    public function report_all(){
        $this->test_get_a_cust();
        // $this->test_get_a_vendor();
        $this->test_isExist_user();
        $this->test_saldo();
        // $this->test_get_category();
        $this->test_findRek();
        $this->get_rek();

    }
}

    
