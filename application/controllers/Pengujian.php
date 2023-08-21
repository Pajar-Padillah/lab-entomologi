<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Pengujian');
		$this->load->model('M_Status');
		$this->load->model('M_Permohonan');
		$this->load->model('M_User');
		$this->load->model('M_Kaji_Ulang');
		$this->load->model('M_Respon');

		$this->session->userdata('ses_username');
	
		$id_user = 	$this->session->userdata('ses_id');
	}

	public function index()
	{
		$queryAllpengujian = $this->M_Pengujian->getDataPengujian();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryAllUji'=> $queryAllpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('v_pengujian',$Data);
	}

	public function halaman_tambah()
	{
		$queryAllpengujian = $this->M_Pengujian->getDataPengujian();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$queryAllKaji_Ulang = $this->M_Kaji_Ulang->getDataKaji_Ulang();
		$queryAllRespon = $this->M_Respon->getDataRespon();
		$Data = array(	'queryAllUji'=> $queryAllpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser,
						'queryAllKU'=> $queryAllKaji_Ulang,
						'queryAllRsp'=> $queryAllRespon
						);
		

		$this->load->view('tambah_pengujian',$Data);

	} 


	public function halaman_edit($id_pengujian)
	{	
		$getDataDetailpengujian = $this->M_Pengujian->getDataDetailPengujian($id_pengujian);
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryDetailUji'=> $getDataDetailpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('edit_pengujian',$Data);
	}

	
	// public function pengujianAll()
	// {
	// 	$querypengujianAll= $this->M_Pengujian->pengujianAll();
	// 	$Data=array('querypengujianAlls'=>$querypengujianAll);
	// 	$this->load->view('laporan_pengujianAll',$Data);
	// }

	public function daftarUjiAnalis($id_user)
	{
		$queryDaftarpengujian = $this->M_Pengujian->daftarUjiAnalis($id_user);
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryDaftarUji'=> $queryDaftarpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('v_daftarpengujianAnalis',$Data);
	}

	public function daftarUjiAll()
	{
		$queryDaftarpengujian = $this->M_Pengujian->daftarUjiAll();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryDaftarUji'=> $queryDaftarpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('v_daftarUjiAll',$Data);
	}

	public function hasilUjiAnalis($id_user)
	{
		$queryHasilpengujian = $this->M_Pengujian->hasilUjiAnalis($id_user);
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryHasilUji'=> $queryHasilpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('v_HasilUjiAnalis',$Data);
	}

	public function hasilUjiPlg($id_user)
	{
		$queryHasilpengujian = $this->M_Pengujian->hasilUjiPlg($id_user);
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryHasilUji'=> $queryHasilpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('v_hasilUjiPlg',$Data);
	}

	public function hasilUjiAll()
	{
		$queryHasilpengujian = $this->M_Pengujian->hasilUjiAll();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(	'queryHasilUji'=> $queryHasilpengujian,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('v_HasilUjiAll',$Data);
	}

	

	public function fungsiTambah_Uji(){
		$id_pengujian= $this->input->post('id_pengujian');
		$id_permohonan = $this->input->post('id_permohonan');
		$tgl_pengujian = $this->input->post('tgl_pengujian');
		$hasil = $this->input->post('hasil');
		$id_user = $this->input->post('id_user');
		

		$Arr_Insert_Uji=array(
			'id_pengujian'=>$id_pengujian,
			'id_permohonan'=>$id_permohonan,
			'tgl_pengujian'=>$tgl_pengujian,
			'hasil'=>$hasil,
			'id_user'=>$id_user,
			
			
		);

		$this->M_Pengujian->InsertDataPengujian($Arr_Insert_Uji);

		redirect(base_url('pengujian/halaman_tambah'));
		if ($this->session->userdata('akses') == '7') :
		else:
		endif;
				
		
		
				
	}

	public function fungsiEdit_Uji(){
		$id_user = 	$this->session->userdata('ses_id');

		$id_pengujian= $this->input->post('id_pengujian');
		$id_permohonan = $this->input->post('id_permohonan');
		$tgl_pengujian = $this->input->post('tgl_pengujian');
		$hasil = $this->input->post('hasil');
		$id_user = $this->input->post('id_user');

		$Arr_Update_Uji=array(
			'id_pengujian'=>$id_pengujian,
			'id_permohonan'=>$id_permohonan,
			'tgl_pengujian'=>$tgl_pengujian,
			'hasil'=>$hasil,
			'id_user'=>$id_user,
		);

		$this->M_Pengujian->UpdateDataPengujian($id_pengujian,$Arr_Update_Uji);
		redirect(base_url('pengujian'));
	}

	public function fungsiDelete_Uji($id_pengujian){
		$this->M_Pengujian->deleteDataPengujian($id_pengujian);
		redirect(base_url('pengujian'));
	}
}

