<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	function getDataUser(){
		$query = $this->db->get('user');
		return $query->result();
	}

	function insertDataUser($data){
		$this->db->insert('user', $data);
	}

	function getDataDetailUser($id_user){
		$this->db->where('id_user',$id_user);
		$query = $this->db->get('user');
		return $query->row();
	}

	function updateDataUser($id_user,$data){
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
	}

	function deleteDataUser($id_user){
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');
	}
}