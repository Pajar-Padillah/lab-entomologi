<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kaji_Ulang extends CI_Controller {

	public function __construct()
	{

		parent::__construct();

		$this->load->model('M_Kaji_Ulang');
		$this->load->model('M_Permohonan');
		$this->load->model('M_User');
		$this->load->model('M_Respon');
		$this->session->userdata('ses_username');
	
		$id_user = 	$this->session->userdata('ses_id');
	}

	public function index()
	{
		$queryAllKaji_Ulang = $this->M_Kaji_Ulang->getDataKaji_Ulang();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$queryAllRespon = $this->M_Respon->getDataRespon();
		$Data = array(	'queryAllKU'=> $queryAllKaji_Ulang,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser,
						'queryAllRsp'=> $queryAllRespon
						);
		
		$this->load->view('v_kaji_ulang',$Data);
	}

	public function halaman_tambah()
	{
		$queryAllKaji_Ulang = $this->M_Kaji_Ulang->getDataKaji_Ulang();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$queryAllRespon = $this->M_Respon->getDataRespon();
		$Data = array(	'queryAllKU'=> $queryAllKaji_Ulang,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser,
						'queryAllRsp'=> $queryAllRespon
						);
		

		$this->load->view('tambah_kaji_ulang',$Data);

	} 


	public function halaman_edit($id_kaji_ulang)
	{	$getDataDetailKaji_Ulang = $this->M_Kaji_Ulang->getDataDetailKaji_Ulang($id_kaji_ulang);
		$queryAllKaji_Ulang = $this->M_Kaji_Ulang->getDataKaji_Ulang();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();

		$Data = array(	'queryDetailKU'=> $getDataDetailKaji_Ulang,
						'queryAllKU'=> $queryAllKaji_Ulang,
						'queryAllPmh'=> $queryAllPermohonan,
						'queryAllUsr'=> $queryAllUser
						);
		
		$this->load->view('edit_kaji_ulang',$Data);
	}

	
	public function Kaji_UlangAll()
	{
		$queryKaji_UlangAll= $this->M_Kaji_Ulang->Kaji_UlangAll();
		$Data=array('queryKaji_UlangAlls'=>$queryKaji_UlangAll);
		$this->load->view('v_detailKaji_UlangAll',$Data);
	}

	

	public function fungsiTambah_KU(){
		$id_kaji_ulang= $this->input->post('id_kaji_ulang');
		$id_permohonan = $this->input->post('id_permohonan');
		$tgl_kaji_ulang = $this->input->post('tgl_kaji_ulang');
		$lab = $this->input->post('lab');
		$kondisi = $this->input->post('kondisi');
		$id_user = $this->input->post('id_user');
		

		$Arr_Insert_KU=array(
			'id_kaji_ulang'=>$id_kaji_ulang,
			'id_permohonan'=>$id_permohonan,
			'tgl_kaji_ulang'=>$tgl_kaji_ulang,
			'lab'=>$lab,
			'kondisi'=>$kondisi,
			'id_user'=>$id_user,
			
			
		);

		$this->M_Kaji_Ulang->InsertDataKaji_Ulang($Arr_Insert_KU);
		redirect(base_url('Kaji_Ulang'));
		
				
	}

	public function fungsiEdit_KU(){
		$id_kaji_ulang= $this->input->post('id_kaji_ulang');
		$id_permohonan = $this->input->post('id_permohonan');
		$tgl_kaji_ulang = $this->input->post('tgl_kaji_ulang');
		$lab = $this->input->post('lab');
		$kondisi = $this->input->post('kondisi');
		$id_user = $this->input->post('id_user');

		$Arr_Update_KU=array(
			'id_kaji_ulang'=>$id_kaji_ulang,
			'id_permohonan'=>$id_permohonan,
			'tgl_kaji_ulang'=>$tgl_kaji_ulang,
			'lab'=>$lab,
			'kondisi'=>$kondisi,
			'id_user'=>$id_user,
		);

		$this->M_Kaji_Ulang->UpdateDataKaji_Ulang($id_kaji_ulang,$Arr_Update_KU);
		redirect(base_url('Kaji_Ulang'));
	}

	public function fungsiDelete_KU($id_kaji_ulang){
		$this->M_Kaji_Ulang->deleteDataKaji_Ulang($id_kaji_ulang);
		redirect(base_url('Kaji_Ulang'));
	}
}

