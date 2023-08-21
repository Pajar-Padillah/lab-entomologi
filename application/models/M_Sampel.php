<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sampel extends CI_Model {

	function getDataSampel(){
		$query = $this->db->get('sampel');
		return $query->result();
	}

	function insertDataSampel($data){
		$this->db->insert('sampel', $data);
	}

	function getDataDetailSampel($id_sampel){
		$this->db->where('id_sampel',$id_sampel);
		$query = $this->db->get('sampel');
		return $query->row();
	}

	function updateDataSampel($id_sampel,$data){
		$this->db->where('id_sampel',$id_sampel);
		$this->db->update('sampel',$data);
	}

	function deleteDataSampel($id_sampel){
		$this->db->where('id_sampel',$id_sampel);
		$this->db->delete('sampel');
	}
}