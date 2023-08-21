<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tujuan extends CI_Model {

	function getDataTujuan(){
		$query = $this->db->get('tujuan');
		return $query->result();
	}

	function insertDataTujuan($data){
		$this->db->insert('tujuan', $data);
	}

	function getDataDetailTujuan($id_tujuan){
		$this->db->where('id_tujuan',$id_tujuan);
		$query = $this->db->get('tujuan');
		return $query->row();
	}

	function updateDataTujuan($id_tujuan,$data){
		$this->db->where('id_tujuan',$id_tujuan);
		$this->db->update('tujuan',$data);
	}

	function deleteDataTujuan($id_tujuan){
		$this->db->where('id_tujuan',$id_tujuan);
		$this->db->delete('tujuan');
	}
}