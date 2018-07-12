<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_incident extends CI_Model {

	function input($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	
	function input2($table,$data){
		$this->db->insert_batch($table,$data);
	}

}

/* End of file m_incident.php */
/* Location: ./application/models/m_incident.php */