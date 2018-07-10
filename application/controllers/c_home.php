<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_incident');
		//$this->load->library('Dates');			
	}

	public function index()
	{
		$this->load->view('v_home');
	}

	public function submitForm()
	{
		$table = 'incident_reports';
		$data = array(
			'title' => $this->input->post('title'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time'),
			'detail' => $this->input->post('detail'),
			'cause_of_incident' => $this->input->post('coi'),
			'remedial_action' => $this->input->post('ra'),
			'follow_up' => $this->input->post('fu'),
			'remarks' => $this->input->post('remarks'),
			'reported_by' => $this->input->post('reported'),
			'check_by' => $this->input->post('submit'),
			 );

		$this->m_incident->input($table,$data);
	} 

}

/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */