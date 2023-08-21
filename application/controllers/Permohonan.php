<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_Permohonan');
		$this->load->model('M_Sampel');
		$this->load->model('M_Asal');
		$this->load->model('M_Tujuan');
		$this->load->model('M_Metode');
		$this->load->model('M_User');
		$this->load->model('M_Respon');
		$this->session->userdata('ses_username');

		$id_user = 	$this->session->userdata('ses_id');
	}

	public function index()
	{

		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllSampel = $this->M_Sampel->getDataSampel();
		$queryAllAsal = $this->M_Asal->getDataAsal();
		$queryAllTujuan = $this->M_Tujuan->getDataTujuan();
		$queryAllmetode = $this->M_Metode->getDataMetode();
		$queryAllUser = $this->M_User->getDataUser();


		$Data = array(
			'queryAllSmp' => $queryAllSampel,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllAsl' => $queryAllAsal,
			'queryAllTj' => $queryAllTujuan,
			'queryAllMtd' => $queryAllmetode,
			'queryAllUsr' => $queryAllUser,


		);

		$this->load->view('v_permohonan', $Data);
	}

	public function halaman_tambah()
	{
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllSampel = $this->M_Sampel->getDataSampel();
		$queryAllAsal = $this->M_Asal->getDataAsal();
		$queryAllTujuan = $this->M_Tujuan->getDataTujuan();
		$queryAllmetode = $this->M_Metode->getDataMetode();
		$queryAllUser = $this->M_User->getDataUser();
		$querycekNoTerbesar = $this->M_Permohonan->cek_NoTerbesar();
		$Data = array(
			'queryAllSmp' => $queryAllSampel,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllAsl' => $queryAllAsal,
			'queryAllTj' => $queryAllTujuan,
			'queryAllMtd' => $queryAllmetode,
			'queryAllUsr' => $queryAllUser,
			'querycekNoTerbesar' => $querycekNoTerbesar
		);


		$this->load->view('tambah_permohonan', $Data);
	}


	public function halaman_tambah_plg_analis()
	{
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllSampel = $this->M_Sampel->getDataSampel();
		$queryAllAsal = $this->M_Asal->getDataAsal();
		$queryAllTujuan = $this->M_Tujuan->getDataTujuan();
		$queryAllmetode = $this->M_Metode->getDataMetode();
		$queryAllUser = $this->M_User->getDataUser();
		$querycekNoTerbesar = $this->M_Permohonan->cek_NoTerbesar();
		$Data = array(
			'queryAllSmp' => $queryAllSampel,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllAsl' => $queryAllAsal,
			'queryAllTj' => $queryAllTujuan,
			'queryAllMtd' => $queryAllmetode,
			'queryAllUsr' => $queryAllUser,
			'querycekNoTerbesar' => $querycekNoTerbesar
		);


		$this->load->view('tambah_permohonan_plg_analis', $Data);
	}


	public function halaman_edit($id_permohonan)
	{
		$getDataDetailPermohonan = $this->M_Permohonan->getDataDetailPermohonan($id_permohonan);
		$queryAllSampel = $this->M_Sampel->getDataSampel();
		$queryAllAsal = $this->M_Asal->getDataAsal();
		$queryAllTujuan = $this->M_Tujuan->getDataTujuan();
		$queryAllmetode = $this->M_Metode->getDataMetode();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(
			'queryAllSmp' => $queryAllSampel,
			'queryDetailPmh' => $getDataDetailPermohonan,
			'queryAllAsl' => $queryAllAsal,
			'queryAllTj' => $queryAllTujuan,
			'queryAllMtd' => $queryAllmetode,
			'queryAllUsr' => $queryAllUser
		);

		$this->load->view('edit_permohonan', $Data);
	}


	// public function permohonanAll()
	// {
	// 	$querypermohonanAll= $this->M_Permohonan->permohonanAll();
	// 	$Data=array('querypermohonanAlls'=>$querypermohonanAll);
	// 	$this->load->view('v_detailpermohonanAll',$Data);
	// }
	public function permohonan_plg($id_user)
	{
		$queryresponPlg = $this->M_Respon->DetailRespon($id_user);
		$querypermohonanPelanggan = $this->M_Permohonan->DetailPermohonan($id_user);
		$Data = array('querypermohonanPlg' => $querypermohonanPelanggan, 'queryresponPlg' => $queryresponPlg);
		$this->load->view('v_permohonan_pelanggan', $Data);
	}





	public function fungsiTambah_Pmh()
	{
		$id_permohonan = $this->input->post('id_permohonan');
		$no_permohonan = $this->input->post('no_permohonan');
		$tgl_permohonan = $this->input->post('tgl_permohonan');
		$id_sampel = $this->input->post('id_sampel');
		$jumlah = $this->input->post('jumlah');
		$berat = $this->input->post('berat');
		$id_asal = $this->input->post('id_asal');
		$id_tujuan = $this->input->post('id_tujuan');
		$id_metode = $this->input->post('id_metode');
		$id_user = $this->input->post('id_user');


		$Arr_Insert_Pmh = array(
			'id_permohonan' => $id_permohonan,
			'no_permohonan' => $no_permohonan,
			'tgl_permohonan' => $tgl_permohonan,
			'id_sampel' => $id_sampel,
			'jumlah' => $jumlah,
			'berat' => $berat,
			'id_asal' => $id_asal,
			'id_tujuan' => $id_tujuan,
			'id_metode' => $id_metode,
			'id_user' => $id_user,

		);

		$this->M_Permohonan->InsertDatapermohonan($Arr_Insert_Pmh);

		redirect(base_url('permohonan'));
	}



	public function fungsiEdit_Pmh()
	{
		$id_permohonan = $this->input->post('id_permohonan');
		$no_permohonan = $this->input->post('no_permohonan');
		$tgl_permohonan = $this->input->post('tgl_permohonan');
		$id_sampel = $this->input->post('id_sampel');
		$jumlah = $this->input->post('jumlah');
		$berat = $this->input->post('berat');
		$id_asal = $this->input->post('id_asal');
		$id_tujuan = $this->input->post('id_tujuan');
		$id_metode = $this->input->post('id_metode');
		$id_user = $this->input->post('id_user');

		$Arr_Update_Pmh = array(
			'id_permohonan' => $id_permohonan,
			'no_permohonan' => $no_permohonan,
			'tgl_permohonan' => $tgl_permohonan,
			'id_sampel' => $id_sampel,
			'jumlah' => $jumlah,
			'berat' => $berat,
			'id_asal' => $id_asal,
			'id_tujuan' => $id_tujuan,
			'id_metode' => $id_metode,
			'id_user' => $id_user,
		);

		$this->M_Permohonan->UpdateDatapermohonan($id_permohonan, $Arr_Update_Pmh);
		redirect(base_url('permohonan'));
	}

	public function fungsiDelete_Pmh($id_permohonan)
	{
		$this->M_Permohonan->deleteDatapermohonan($id_permohonan);
		redirect(base_url('permohonan'));
	}
}
