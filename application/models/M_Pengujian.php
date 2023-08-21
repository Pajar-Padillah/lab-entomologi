<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengujian extends CI_Model
{

	function getDataPengujian()
	{
		$query = $this->db->get('pengujian');
		return $query->result();
	}

	function insertDataPengujian($data)
	{
		$this->db->insert('pengujian', $data);
	}

	function getDataDetailPengujian($id_pengujian)
	{
		$this->db->where('id_pengujian', $id_pengujian);
		$query = $this->db->get('pengujian');
		return $query->row();
	}

	function updateDataPengujian($id_pengujian, $data)
	{
		$this->db->where('id_pengujian', $id_pengujian);
		$this->db->update('pengujian', $data);
	}

	function deleteDataPengujian($id_pengujian)
	{
		$this->db->where('id_pengujian', $id_pengujian);
		$this->db->delete('pengujian');
	}
	function pengujianAll()
	{
		$query = $this->db->query("SELECT * FROM view_pengujian WHERE hasil!='Belum Diuji'");
		return $query->result();
	}

	function DetailPengujian($id_pengujian)
	{
		$this->db->select('*');
		$this->db->from('view_pengujian');
		$this->db->where('id_user', $id_pengujian);
		$this->db->limit(1);
		$this->db->order_by('id_pengujian DESC');
		return $this->db->get()->row();
	}

	function DetailPengujian_tabel($id_pengujian)
	{
		$this->db->select('*');
		$this->db->where('id_pengujian', $id_pengujian);
		$query = $this->db->get('view_pengujian');
		return $query->row();
	}

	public function daftarUjiAnalis($id_user)
	{

		$query = $this->db->query("SELECT * FROM pengujian WHERE id_user=$id_user and hasil='Belum Diuji'");
		return $query->result();
	}

	public function daftarUjiAll()
	{

		$query = $this->db->query("SELECT * FROM pengujian WHERE hasil='Belum Diuji'");
		return $query->result();
	}
	public function hasilUjiAnalis($id_user)
	{

		$query = $this->db->query("SELECT * FROM pengujian WHERE id_user=$id_user and hasil!='Belum Diuji'");
		return $query->result();
	}
	public function hasilUjiPlg($id_user)
	{

		$query = $this->db->query("SELECT * FROM view_pengujian WHERE id_user=$id_user and hasil !='Belum Diuji'");
		return $query->result();
	}

	public function hasilUjiAll()
	{

		$query = $this->db->query("SELECT * FROM view_pengujian WHERE hasil!='Belum Diuji'");
		return $query->result();
	}
}
