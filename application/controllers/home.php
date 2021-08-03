<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->model('m_link');
	}

	public function index(){
		$url = "http://localhost/majooteknologi/api/data_produk";
		$json = file_get_contents($url);
		$json = json_decode($json);

		// var_dump($json);
		// echo "<br>";
		// echo "<br>";
		// var_dump($json[2]);
		// die();
		$data = array(
			'data' => $json,
			'view' => 'v_beranda',
		 );
		$this->load->view('v_template',$data);
	}
	public function detail(){
		$url = "http://localhost/majooteknologi/api/data_produk";
		$json = file_get_contents($url);
		$json = json_decode($json);

		// var_dump($json);
		// echo "<br>";
		// echo "<br>";
		// var_dump($json[2]);
		// die();
		$data = array(
			'data' => $json,
			'view' => 'v_detail',
		 );
		$this->load->view('v_template',$data);
	}
}
?>