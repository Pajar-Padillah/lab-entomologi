<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Status extends CI_Model {

	function getDataStatus(){
		$query = $this->db->get('status');
		return $query->result();
	}

	function insertDataStatus($data){
		$this->db->insert('status', $data);
	}

	function getDataDetailStatus($id_status){
		$this->db->where('id_status',$id_status);
		$query = $this->db->get('status');
		return $query->row();
	}

	function updateDataStatus($id_status,$data){
		$this->db->where('id_status',$id_status);
		$this->db->update('status',$data);
	}

	function deleteDataStatus($id_status){
		$this->db->where('id_status',$id_status);
		$this->db->delete('status');
	}
}