<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Respon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_Respon');
		$this->load->model('M_Status');
		$this->load->model('M_Permohonan');
		$this->load->model('M_User');
		$this->load->model('M_Kaji_Ulang');

		$this->session->userdata('ses_username');

		$id_user = 	$this->session->userdata('ses_id');
	}

	public function index()
	{
		$queryAllRespon = $this->M_Respon->getDataRespon();
		$queryAllStatus = $this->M_Status->getDataStatus();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(
			'queryAllSts' => $queryAllStatus,
			'queryAllRsp' => $queryAllRespon,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser
		);

		$this->load->view('v_respon', $Data);
	}

	public function halaman_tambah()
	{
		$queryAllKaji_Ulang = $this->M_Kaji_Ulang->getDataKaji_Ulang();
		$queryAllRespon = $this->M_Respon->getDataRespon();
		$queryAllStatus = $this->M_Status->getDataStatus();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(
			'queryAllKU' => $queryAllKaji_Ulang, 'queryAllSts' => $queryAllStatus,
			'queryAllRsp' => $queryAllRespon,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser
		);


		$this->load->view('tambah_respon', $Data);
	}


	public function halaman_edit($id_respon)
	{
		$getDataDetailRespon = $this->M_Respon->getDataDetailRespon($id_respon);
		$queryAllStatus = $this->M_Status->getDataStatus();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(
			'queryAllSts' => $queryAllStatus,
			'queryDetailRsp' => $getDataDetailRespon,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser
		);

		$this->load->view('edit_respon', $Data);
	}


	// public function responAll()
	// {
	// 	$queryresponAll= $this->M_Respon->responAll();
	// 	$Data=array('queryresponAlls'=>$queryresponAll);
	// 	$this->load->view('v_detailResponAll',$Data);
	// }
	public function respon_plg($id_pelanggan)
	{
		$queryresponPlg = $this->M_Respon->DetailRespon($id_pelanggan);
		$Data = array('queryresponPlg' => $queryresponPlg);
		$this->load->view('v_respon_pelanggan', $Data);
	}



	public function fungsiTambah_Rsp()
	{
		$id_respon = $this->input->post('id_respon');
		$id_status = $this->input->post('id_status');
		$id_permohonan = $this->input->post('id_permohonan');
		$tgl_respon = $this->input->post('tgl_respon');
		$id_user = $this->input->post('id_user');
		$keterangan_tolak = $this->input->post('keterangan_tolak');

		$Arr_Insert_Rsp = array(
			'id_respon' => $id_respon,
			'id_status' => $id_status,
			'id_permohonan' => $id_permohonan,
			'tgl_respon' => $tgl_respon,
			'id_user' => $id_user,
			'keterangan_tolak' => $keterangan_tolak

		);

		$this->M_Respon->InsertDataRespon($Arr_Insert_Rsp);
		redirect(base_url('respon'));
	}

	public function fungsiEdit_Rsp()
	{
		$id_respon = $this->input->post('id_respon');
		$id_status = $this->input->post('id_status');
		$id_permohonan = $this->input->post('id_permohonan');
		$tgl_respon = $this->input->post('tgl_respon');
		$id_user = $this->input->post('id_user');
		$keterangan_tolak = $this->input->post('keterangan_tolak');

		$Arr_Update_Rsp = array(
			'id_respon' => $id_respon,
			'id_status' => $id_status,
			'id_permohonan' => $id_permohonan,
			'tgl_respon' => $tgl_respon,
			'id_user' => $id_user,
			'keterangan_tolak' => $keterangan_tolak
		);

		$this->M_Respon->UpdateDataRespon($id_respon, $Arr_Update_Rsp);
		redirect(base_url('respon'));
	}

	public function fungsiDelete_Rsp($id_respon)
	{
		$this->M_Respon->deleteDataRespon($id_respon);
		redirect(base_url('respon'));
	}
	// public function fungsiDeleteAll_Rsp(){
	// 	$this->M_Respon->deleteAllData();
	// 	redirect(base_url('respon'));
	// }
}
