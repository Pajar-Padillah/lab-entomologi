<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kaji_Ulang extends CI_Model {

	function getDataKaji_Ulang(){
		$query = $this->db->get('kaji_ulang');
		return $query->result();
	}

	function insertDataKaji_Ulang($data){
		$this->db->insert('kaji_ulang', $data);
	}

	function getDataDetailKaji_Ulang($id_kaji_ulang){
		$this->db->where('id_kaji_ulang',$id_kaji_ulang);
		$query = $this->db->get('kaji_ulang');
		return $query->row();
	}

	function updateDataKaji_Ulang($id_kaji_ulang,$data){
		$this->db->where('id_kaji_ulang',$id_kaji_ulang);
		$this->db->update('kaji_ulang',$data);
	}

	function deleteDataKaji_Ulang($id_kaji_ulang){
		$this->db->where('id_kaji_ulang',$id_kaji_ulang);
		$this->db->delete('kaji_ulang');
	}
	function kaji_ulangAll() {
		$query = $this->db->get('view_kaji_ulang');
		return $query->result();
	}

	function DetailKaji_Ulang($id_kaji_ulang){
		$this->db->where('id_kaji_ulang',$id_kaji_ulang);
		$query = $this->db->get('view_kaji_ulang');
		return $query->row();
	}


}



