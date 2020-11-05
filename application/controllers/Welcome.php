<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('add_model','AM');
		$this->load->helper("url");
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$result['AM'] = $this->AM->select_all();
		$this->load->view('View_insert',$result);
	}
	public function Add_train(){
		$data = array(
			'no_train' => $this->input->post("origin_no_train"),
			'station' => $this->input->post("origin_station"),
			'time_out' => $this->input->post("origin_time_out"),
			'note_id' => $this->input->post("note_id"),
		);
		$data1 = array(
			'time_in' => $this->input->post("huay_time_in"),
			'time_out' => $this->input->post("huay_time_out"),
			'no_train' => $this->input->post("origin_no_train"),
		);
		$data2 = array(
			'satation' => $this->input->post("des_satation"),
			'time_full' => $this->input->post("des_time_full"),
			'no_train' => $this->input->post("origin_no_train"),
		);
		
		
		
		if($this->input->post("origin_no_train")!= "" && $this->input->post("origin_station")!== ""){
			$this->AM->origin_insert($data);
			$this->AM->huayrach_insert($data1);
			$this->AM->destination_insert($data2);
			$result['AM'] = $this->AM->select_all();
			$this->load->view('View_select',$result);
		}else {
			echo "ไม่สามารถเพิ่มรอบขบวนได้";
		}
	}

	public function showall()
	{
		$result['AM'] = $this->AM->select_all();
		$this->load->view('View_select',$result);
	}
}
