<?php
class Model_Penyewa extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getPenyewaKeyword($keyword){
			$this->db->select('*');
			$this->db->from('penyewa');
			$this->db->like('nama',$keyword);
			$this->db->or_like('mobil',$keyword);
			return $this->db->get()->result();
		}

	public function getAllPenyewa(){
		$query = $this->db->get('penyewa');
		return $query->result();
	}

	public function addPenyewa($data){
		return $query = $this->db->insert('penyewa',$data);
	}

	public function getPenyewaId($id){
		$query = $this->db->get_where('penyewa',array('id_penyewa'=>$id));
		return $query->row_array();
	}

	public function updatePenyewa($data, $id){
		$this->db->where('penyewa.id_penyewa',$id);
		return $this->db->update('penyewa', $data);
	}

	public function deletePenyewa($id){
		$this->db->where('penyewa.id_penyewa',$id);
		return $this->db->delete('penyewa');
	}

}

?>