<?php
class Model_Supir extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getSupirKeyword($keyword){
			$this->db->select('*');
			$this->db->from('sopir');
			$this->db->like('nama',$keyword);
			return $this->db->get()->result();
		}

	public function getAllSupir(){
		$query = $this->db->get('sopir');
		return $query->result();
	}

	public function addSupir($data){
		$this->load->database();
		return $query = $this->db->insert('sopir',$data);
	}

	public function getSupirId($id){
		$query = $this->db->get_where('sopir',array('id'=>$id));
		return $query->row_array();
	}

	public function updateSupir($data, $id){
		$this->db->where('sopir.id',$id);
		return $this->db->update('sopir', $data);
	}

	public function deleteSupir($id){
		$this->db->where('sopir.id',$id);
		return $this->db->delete('sopir');
	}

}

?>