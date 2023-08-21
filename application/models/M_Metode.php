<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Metode extends CI_Model {

	function getDataMetode(){
		$query = $this->db->get('metode');
		return $query->result();
	}

	function insertDataMetode($data){
		$this->db->insert('metode', $data);
	}

	function getDataDetailMetode($id_metode){
		$this->db->where('id_metode',$id_metode);
		$query = $this->db->get('metode');
		return $query->row();
	}

	function updateDataMetode($id_metode,$data){
		$this->db->where('id_metode',$id_metode);
		$this->db->update('metode',$data);
	}

	function deleteDataMetode($id_metode){
		$this->db->where('id_metode',$id_metode);
		$this->db->delete('metode');
	}
}