<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Respon extends CI_Model
{

	function getDataRespon()
	{
		$query = $this->db->get('respon');
		return $query->result();
	}

	function insertDataRespon($data)
	{
		$this->db->insert('respon', $data);
	}

	function getDataDetailRespon($id_respon)
	{
		$this->db->where('id_respon', $id_respon);
		$query = $this->db->get('respon');
		return $query->row();
	}

	function updateDataRespon($id_respon, $data)
	{
		$this->db->where('id_respon', $id_respon);
		$this->db->update('respon', $data);
	}

	function deleteDataRespon($id_respon)
	{

		$this->db->where('id_respon', $id_respon);
		$this->db->delete('respon');
	}
	// function responAll() {
	// 	$query = $this->db->get('view_respon');
	// 	return $query->result();
	// }

	function DetailRespon($id_pelanggan)
	{
		$this->db->where('id_pelanggan', $id_pelanggan);
		$query = $this->db->get('view_respon');
		return $query->result();
	}
	// function deleteAllData(){
	// 	$this->db->delete('respon');
	// }


}
