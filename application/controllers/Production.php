<?php

class Production extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('production_model');
    }

    public function input() {
        $this->load->view('production/input');
	}
	function index() {
		$data = array(
			 'data1'  => $this->production_model->get_slide() , 
			 'data2'  => $this->production_model->get_slide1(), 
			 'data3' => $this->production_model->get_slide2()
		) ;
	  
		$this->load->view('production/slide',  $data) ;
	}
	public function grafik1() {
		
		// logic input untuk data harian

		$result_oil = $this->production_model->get_data_all('oil');
		$result_gas = $this->production_model->get_data_all('gas');
		$label_oil = [];
		$label_gas = [];
		$data_oil = [];
		$data_gas = [];
		
		foreach ($result_gas as $r) {
			array_push($label_gas, $r['tanggal']);
			array_push($data_gas, $r['value']);
		}
		foreach ($result_oil as $r) {
			array_push($label_oil, $r['tanggal']);
			array_push($data_oil, $r['value']);
		}

		// logic input untuk data bulanan

		$label_monthly_oil = [];
		$label_monthly_gas = [];
		$data_monthly_oil = [];
		$data_monthly_gas = [];
		$temp_date = "";
		$total = 0;
		$count = 0;
		foreach ($result_gas as $r) {
			$temp_time = strtotime($r['tanggal']);
			if ($count==0) {
				$temp_date = date('Y-m', $temp_time);
				array_push($label_monthly_gas, date('Y-m', $temp_time));
				$total = $total + $r['value'];
			}
			else {
				if ($temp_date!=date('Y-m', $temp_time)) {
					$temp_date = date('Y-m', $temp_time);
					array_push($label_monthly_gas, date('Y-m', $temp_time));
					array_push($data_monthly_gas, $total);
					$total = $r['value'];
				}
				else {
					$total = $total + $r['value'];
				}
			}
			$count++;	
		}
		array_push($data_monthly_gas, $total);

		$temp_date = "";
		$total = 0;
		$count = 0;
		foreach ($result_oil as $r) {
			$temp_time = strtotime($r['tanggal']);
			if ($count==0) {
				$temp_date = date('Y-m', $temp_time);
				array_push($label_monthly_oil, date('Y-m', $temp_time));
				$total = $total + $r['value'];
			}
			else {
				if ($temp_date!=date('Y-m', $temp_time)) {
					$temp_date = date('Y-m', $temp_time);
					array_push($label_monthly_oil, date('Y-m', $temp_time));
					array_push($data_monthly_oil, $total);
					$total = $r['value'];
				}
				else {
					$total = $total + $r['value'];
				}
			}
			$count++;	
		}
		array_push($data_monthly_oil, $total);

		$data = array(
			'label_gas' => $label_gas,
			'label_oil' => $label_oil,
			'data_gas' => $data_gas,
			'data_oil' => $data_oil,
			'label_monthly_gas' => $label_monthly_gas,
			'label_monthly_oil' => $label_monthly_oil,
			'data_monthly_gas' => $data_monthly_gas,
			'data_monthly_oil' => $data_monthly_oil,
		);
		$this->load->view('production/chart1', $data);
		// $this->output
        // ->set_content_type('application/json')
		// ->set_output(json_encode($data));
	}
	public function grafik() {
		
		// logic input untuk data harian

		$result_oil = $this->production_model->get_data_all('oil');
		$result_gas = $this->production_model->get_data_all('gas');
		$label_oil = [];
		$label_gas = [];
		$data_oil = [];
		$data_gas = [];
		
		foreach ($result_gas as $r) {
			array_push($label_gas, $r['tanggal']);
			array_push($data_gas, $r['value']);
		}
		foreach ($result_oil as $r) {
			array_push($label_oil, $r['tanggal']);
			array_push($data_oil, $r['value']);
		}

		// logic input untuk data bulanan

		$label_monthly_oil = [];
		$label_monthly_gas = [];
		$data_monthly_oil = [];
		$data_monthly_gas = [];
		$temp_date = "";
		$total = 0;
		$count = 0;
		foreach ($result_gas as $r) {
			$temp_time = strtotime($r['tanggal']);
			if ($count==0) {
				$temp_date = date('Y-m', $temp_time);
				array_push($label_monthly_gas, date('Y-m', $temp_time));
				$total = $total + $r['value'];
			}
			else {
				if ($temp_date!=date('Y-m', $temp_time)) {
					$temp_date = date('Y-m', $temp_time);
					array_push($label_monthly_gas, date('Y-m', $temp_time));
					array_push($data_monthly_gas, $total);
					$total = $r['value'];
				}
				else {
					$total = $total + $r['value'];
				}
			}
			$count++;	
		}
		array_push($data_monthly_gas, $total);

		$temp_date = "";
		$total = 0;
		$count = 0;
		foreach ($result_oil as $r) {
			$temp_time = strtotime($r['tanggal']);
			if ($count==0) {
				$temp_date = date('Y-m', $temp_time);
				array_push($label_monthly_oil, date('Y-m', $temp_time));
				$total = $total + $r['value'];
			}
			else {
				if ($temp_date!=date('Y-m', $temp_time)) {
					$temp_date = date('Y-m', $temp_time);
					array_push($label_monthly_oil, date('Y-m', $temp_time));
					array_push($data_monthly_oil, $total);
					$total = $r['value'];
				}
				else {
					$total = $total + $r['value'];
				}
			}
			$count++;	
		}
		array_push($data_monthly_oil, $total);

		$data = array(
			'label_gas' => $label_gas,
			'label_oil' => $label_oil,
			'data_gas' => $data_gas,
			'data_oil' => $data_oil,
			'label_monthly_gas' => $label_monthly_gas,
			'label_monthly_oil' => $label_monthly_oil,
			'data_monthly_gas' => $data_monthly_gas,
			'data_monthly_oil' => $data_monthly_oil,
		);
		$this->load->view('production/chart', $data);
		// $this->output
        // ->set_content_type('application/json')
		// ->set_output(json_encode($data));
	}
    public function tabel1() {
        $time_object = new DateTimeZone('Asia/Jakarta');
        $datetime = new DateTime();
        $datetime->setTimezone($time_object);
        $today = $datetime->format("Y-m-d");
        $interval = new DateInterval('P1D');
        $datetime->sub($interval); 
        $yesterday = $datetime->format("Y-m-d");
        $parameter = array(
            'tanggal' => $today,
            'tipe' => 'oil'
        );
        $oil_today = $this->production_model->get_data($parameter);
        $parameter = array(
            'tanggal' => $today,
            'tipe' => 'gas'
        );
        $gas_today = $this->production_model->get_data($parameter);
        $parameter = array(
            'tanggal' => $yesterday,
            'tipe' => 'oil'
        );
        $oil_yesterday = $this->production_model->get_data($parameter);
        $parameter = array(
            'tanggal' => $yesterday,
            'tipe' => 'gas'
        );
        $gas_yesterday = $this->production_model->get_data($parameter);
        $data = array(
            'oil_today' => isset($oil_today['value']),
            'gas_today' => isset($gas_today['value']),
            'oil_yesterday' => isset($oil_yesterday['value']),
            'gas_yesterday' => isset($gas_yesterday['value'])
        );
        $this->load->view('production/tabel1', $data);
	}
	
    public function proses_input() {
        $data['tanggal'] = $this->input->post('tanggal');
        $data['prod_type'] = $this->input->post('tipe');
        $data['value'] = $this->input->post('nilai');
        $this->production_model->input_data($data);
        redirect('production/input', 'refresh');
    }
    public function test() {
        $time_object = new DateTimeZone('Asia/Jakarta');
        $datetime = new DateTime();
        $datetime->setTimezone($time_object);

        // untuk interval kemarin

        $interval = new DateInterval('P1D');
        $datetime->sub($interval); 
        $today = $datetime->format("Y-m-d");
        // $data['tanggal'] = $today;
        // $data['prod_type'] = 'oil';
        // $data['value'] = 1000;
        // $this->production_model->input_data($data);
        // echo date("Y-m-d");
        $result = $this->production_model->get_data($today);
        echo $result['tanggal'];
    }
    
}


?>
