<?php
class Model_Pegawai extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	

	public function getAllPegawai(){
		$query = $this->db->get('pegawai');
		return $query->result();
	}

	public function addPegawai($data){
		$this->load->database();
		return $query = $this->db->insert('pegawai',$data);
	}


}

?>