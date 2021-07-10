<?php
class Model_Print extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	

	public function getAllPrint(){
		$query = $this->db->get('penyewa');
		return $query->result();
	}


}

?>