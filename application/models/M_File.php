<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_File extends CI_Model
{

	function getDataFile()
	{
		$query = $this->db->get('file');
		return $query->result();
	}

	function insertDataFile($data)
	{
		$this->db->insert('file', $data);
	}

	function getDataDetailFile($id_file)
	{
		$this->db->where('id_file', $id_file);
		$query = $this->db->get('file');
		return $query->row();
	}

	function updateDataFile($id_file, $data)
	{
		$this->db->where('id_file', $id_file);
		$this->db->update('file', $data);
	}

	function deleteDataFile($id_file)
	{
		$this->db->where('id_file', $id_file);
		$this->db->delete('file');
	}
	function getDataFileAll()
	{
		$query = $this->db->get('view_file');
		return $query->result();
	}
	// pelanggan

	// function belum_verifikasi($id_user) {
	// 	$query=$this->db->query("SELECT * FROM `view_file` WHERE id_pelanggan=$id_user and keterangan ='Menunggu Verifikasi'");
	// 	return $query->result();
	// }
	// function sudah_verifikasi($id_user) {
	// 	$query=$this->db->query("SELECT * FROM `view_file` WHERE id_pelanggan=$id_user and keterangan !='Menunggu Verifikasi'");
	// 	return $query->result();
	// }
	function verifikasiP($id_user)
	{
		$query = $this->db->query("SELECT * FROM view_file WHERE id_pelanggan=$id_user and keterangan LIKE 'Disetujui%'");
		return $query->result();
	}

	// analis

	// function belum_verifikasiAnalis($id_user) {
	// 	$query=$this->db->query("SELECT * FROM `view_file` WHERE id_analis=$id_user and keterangan ='Menunggu Verifikasi'");
	// 	return $query->result();
	// }
	// function sudah_verifikasiAnalis($id_user) {
	// 	$query=$this->db->query("SELECT * FROM `view_file` WHERE id_analis=$id_user and keterangan !='Menunggu Verifikasi'");
	// 	return $query->result();
	// }

	function verifikasiA($id_user)
	{
		$query = $this->db->query("SELECT * FROM view_file WHERE id_analis=$id_user ");
		return $query->result();
	}


	// all
	function disetujuiAll()
	{
		$query = $this->db->query("SELECT * FROM view_file WHERE keterangan='Disetujui'");
		return $query->result();
	}
	function ditolakAll()
	{
		$query = $this->db->query("SELECT * FROM view_file WHERE keterangan='Ditolak'");
		return $query->result();
	}
	function belum_verifikasiAll()
	{
		$query = $this->db->query("SELECT * FROM view_file WHERE keterangan ='Menunggu Verifikasi'");
		return $query->result();
	}
	function sudah_verifikasiAll()
	{
		$query = $this->db->query("SELECT * FROM view_file WHERE keterangan !='Menunggu Verifikasi'");
		return $query->result();
	}
}
