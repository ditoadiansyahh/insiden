<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_incident extends CI_Model {

	function input($table,$data)
	{
		$this->db->insert($table,$data);
	}

}

/* End of file m_incident.php */
/* Location: ./application/models/m_incident.php */