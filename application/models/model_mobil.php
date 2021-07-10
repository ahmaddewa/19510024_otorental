<?php
class Model_Mobil extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getMobilKeyword($keyword){
			$this->db->select('*');
			$this->db->from('mobil');
			$this->db->like('nama_mobil',$keyword);
			$this->db->or_like('warna',$keyword);
			return $this->db->get()->result();
		}

	public function getAllMobil(){
		$query = $this->db->get('mobil');
		return $query->result();
	}

	public function addMobil($data){
		$this->load->database();
		return $query = $this->db->insert('mobil',$data);
	}

	public function getMobilId($id){
		$query = $this->db->get_where('mobil',array('id'=>$id));
		return $query->row_array();
	}

	public function updateMobil($data, $id){
		$this->db->where('mobil.id',$id);
		return $this->db->update('mobil', $data);
	}

	public function deleteMobil($id){
		$this->db->where('mobil.id',$id);
		return $this->db->delete('mobil');
	}

}

?>