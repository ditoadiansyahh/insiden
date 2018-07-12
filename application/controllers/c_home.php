<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Spipu\Html2Pdf\Html2Pdf;

class C_home extends CI_Controller {
	//s
	public function __construct() {
		parent::__construct();
		$this->load->model('m_incident');
		//$this->load->library('Dates');			
	}

	public function index(){
		$this->load->view('v_home');
	}

	public function printpdf($hasil){
		$html2pdf = new Html2Pdf('P', 'A4', 'en');
		$html2pdf->pdf->SetMargins(20, 5, 20);
        $html2pdf->pdf->SetMargins(20, 5, 20);
        $html2pdf->pdf->SetFont('Times', '', 10);
		$html2pdf->pdf->AddPage(); 
		$html2pdf->pdf->WriteHTML($hasil); 
		$html2pdf->pdf->lastPage();
		$html2pdf->output('my.pdf');
	}

	public function submitForm(){
		$table = 'incident_reports';
		$table1 = 'incident_detail';
		$table2 = 'incident_test';
		$arr_log_time = $this->input->post('log_time');
		$arr_detail = $this->input->post('log_detail');
		$data_insert = array();
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
			'check_by' => $this->input->post('check'),
			 );		
			 		
		$insert_id = $this->m_incident->input($table,$data);

		for($i=0;$i<count($arr_log_time);$i++){
	    	$data_insert[] = array(
	    		'incident_id' => $insert_id,
	    		'time_detail' => $arr_log_time[$i],
	    		'detail_desc' => $arr_detail[$i],
	    	);
	    }

		$this->m_incident->input2($table1,$data_insert);

	} 

	public function result(){
		$this->printpdf($this->load->view('cetak',$this->submitForm(),true));
		
	}

}

/* End of file c_home.php */
/* Location: ./application/controllers/c_home.php */