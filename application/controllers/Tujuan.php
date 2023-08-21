<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tujuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Tujuan');
	}

	public function index()
	{
		$queryAlltujuan = $this->M_Tujuan->getDataTujuan();
		$Data = array('queryAllTj'=> $queryAlltujuan);
		
		$this->load->view('v_tujuan',$Data);
	}

	public function halaman_tambah()
	{
		$this->load->view('tambah_tujuan');
	}

	public function halaman_edit($id_tujuan)
	{
		$queryDetailtujuan= $this->M_Tujuan->getDataDetailTujuan($id_tujuan);
		$Data=array('queryDetailTj'=>$queryDetailtujuan);
		$this->load->view('edit_tujuan',$Data);
	}

	public function fungsiTambah_Tj(){
		$id_tujuan= $this->input->post('id_tujuan');
		$tujuan = $this->input->post('tujuan');
		
		$Arr_Insert_Tj=array(
			'id_tujuan'=>$id_tujuan,
			'tujuan'=>$tujuan,
			
		);

		$this->M_Tujuan->InsertDataTujuan($Arr_Insert_Tj);
		redirect(base_url('tujuan'));
	}

	public function fungsiEdit_Tj(){

		$id_tujuan= $this->input->post('id_tujuan');
		$tujuan = $this->input->post('tujuan');

		$Arr_Update_Tj=array(
			'id_tujuan'=>$id_tujuan,
			'tujuan'=>$tujuan,
		);

		$this->M_Tujuan->UpdateDataTujuan($id_tujuan,$Arr_Update_Tj);
		redirect(base_url('tujuan'));
	}

	public function fungsiDelete_Tj($id_tujuan){
		$this->M_Tujuan->deleteDataTujuan($id_tujuan);
		redirect(base_url('tujuan'));
	}
}

