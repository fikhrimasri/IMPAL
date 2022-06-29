    <?php 

class Production_model extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }

    public function input_data($data) {
        $this->db->insert('produksi', $data);
    }
    public function get_data($parameter) {
        $query = $this->db->get_where('produksi', array('tanggal' => $parameter['tanggal'], 'prod_type' => $parameter['tipe']))->result_array();
        if (count($query)>0)
            return $query[0];
    }

    public function get_data_all($produksi) {
		$this->db->order_by('tanggal');
		$query = $this->db->get_where('produksi', array('prod_type' => $produksi))->result_array();
        return $query;
    }
    function get_slide(){
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
            'oil_today' => $oil_today['value'],
            'gas_today' => $gas_today['value'],
            'oil_yesterday' => $oil_yesterday['value'],
            'gas_yesterday' => $gas_yesterday['value']
		);
		return $data;
    }
    function get_slide1(){
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
		return $data;
    }
    function get_slide2(){
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
		return $data;
    }
    
}
?>
