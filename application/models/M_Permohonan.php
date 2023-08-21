<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Permohonan extends CI_Model {

	function getDataPermohonan(){
		$query = $this->db->get('permohonan');
		return $query->result();
	}

	function insertDataPermohonan($data){
		$this->db->insert('permohonan', $data);
	}

	function getDataDetailPermohonan($id_permohonan){
		$this->db->where('id_permohonan',$id_permohonan);
		$query = $this->db->get('permohonan');
		return $query->row();
	}

	function updateDataPermohonan($id_permohonan,$data){
		$this->db->where('id_permohonan',$id_permohonan);
		$this->db->update('permohonan',$data);
	}

	function deleteDataPermohonan($id_permohonan){
		$this->db->where('id_permohonan',$id_permohonan);
		$this->db->delete('permohonan');
	}
	// function permohonanAll() {
	// 	$query = $this->db->get('view_permohonan');
	// 	return $query->result();
	// }

	function DetailPermohonan($id_user){
		$this->db->where('id_user',$id_user);
		$query = $this->db->get('view_permohonan');
		return $query->result();
	}

	public function cek_NoTerbesar() {
		$query=$this->db->query("SELECT max(no_permohonan) as NoTerbesar FROM permohonan;");
		return $query->row();
	} 

	public function cek_jumlah_permohonan() {
		$query=$this->db->query("SELECT COUNT(id_permohonan) AS jumlah_permohonan FROM permohonan;");
		return $query->row();
	}
		public function cek_jumlah_pengujian() {
		$query=$this->db->query("SELECT COUNT(id_pengujian) AS jumlah_pengujian FROM pengujian;");
		return $query->row();
	}
		public function cek_jumlah_respon() {
		$query=$this->db->query("SELECT COUNT(id_respon) AS jumlah_respon FROM respon;");
		return $query->row();
	}

	public function cetak_permohonan_plg($id_permohonan) {
		$query=$this->db->query("SELECT * FROM `view_permohonan` WHERE id_permohonan=$id_permohonan");
		return $query->row();
	}

	function deleteAllData(){
		$this->db->delete('permohonan');
	}

	// public function permohonan_masuk() {
	// 	$Masuk="Masuk";
	// 	$query=$this->db->query("SELECT COUNT(id_permohonan) AS jumlah_permohonan FROM permohonan JOIN jenis_keterangan ON permohonan.id_jenis_keterangan= jenis_keterangan.id_jenis_keterangan WHERE jenis_keterangan='$Masuk';");
	// 	return $query->row();
	// }
	// public function permohonan_keluar() {
	// 	$Keluar="Keluar";
	// 	$query=$this->db->query("SELECT COUNT(id_permohonan) AS jumlah_permohonan FROM permohonan JOIN jenis_keterangan ON permohonan.id_jenis_keterangan= jenis_keterangan.id_jenis_keterangan WHERE jenis_keterangan='$Keluar';");
	// 	return $query->row();
	// }


}



