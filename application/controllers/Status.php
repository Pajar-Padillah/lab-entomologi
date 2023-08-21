<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Status');
	}

	public function index()
	{
		$queryAllStatus = $this->M_Status->getDataStatus();
		$Data = array('queryAllSts'=> $queryAllStatus);
		
		$this->load->view('v_status',$Data);
	}

	public function halaman_tambah()
	{
		$this->load->view('tambah_status');
	}

	public function halaman_edit($id_status)
	{
		$queryDetailStatus= $this->M_Status->getDataDetailStatus($id_status);
		$Data=array('queryDetailSts'=>$queryDetailStatus);
		$this->load->view('edit_status',$Data);
	}

	public function fungsiTambah_sts(){
		$id_status= $this->input->post('id_status');
		$status = $this->input->post('status');
		
		$Arr_Insert_Sts=array(
			'id_status'=>$id_status,
			'status'=>$status,
			
		);

		$this->M_Status->InsertDataStatus($Arr_Insert_Sts);
		redirect(base_url('status'));
	}

	public function fungsiEdit_sts(){

		$id_status= $this->input->post('id_status');
		$status = $this->input->post('status');

		$Arr_Update_Sts=array(
			'id_status'=>$id_status,
			'status'=>$status,
		);

		$this->M_Status->UpdateDataStatus($id_status,$Arr_Update_Sts);
		redirect(base_url('status'));
	}

	public function fungsiDelete_sts($id_status){
		$this->M_Status->deleteDataStatus($id_status);
		redirect(base_url('status'));
	}
}

