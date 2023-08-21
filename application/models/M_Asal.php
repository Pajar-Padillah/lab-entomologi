<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Asal extends CI_Model {

	function getDataAsal(){
		$query = $this->db->get('asal');
		return $query->result();
	}

	function insertDataAsal($data){
		$this->db->insert('asal', $data);
	}

	function getDataDetailAsal($id_asal){
		$this->db->where('id_asal',$id_asal);
		$query = $this->db->get('asal');
		return $query->row();
	}

	function updateDataAsal($id_asal,$data){
		$this->db->where('id_asal',$id_asal);
		$this->db->update('asal',$data);
	}

	function deleteDataAsal($id_asal){
		$this->db->where('id_asal',$id_asal);
		$this->db->delete('asal');
	}
}