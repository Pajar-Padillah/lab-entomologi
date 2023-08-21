<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Sampel');
	}

	public function index()
	{
		$queryAllsampel = $this->M_Sampel->getDataSampel();
		$Data = array('queryAllSmp'=> $queryAllsampel);
		
		$this->load->view('v_sampel',$Data);
	}

	public function halaman_tambah()
	{
		$this->load->view('tambah_sampel');
	}

	public function halaman_edit($id_sampel)
	{
		$queryDetailsampel= $this->M_Sampel->getDataDetailSampel($id_sampel);
		$Data=array('queryDetailSmp'=>$queryDetailsampel);
		$this->load->view('edit_sampel',$Data);
	}

	public function fungsiTambah_Smp(){
		$id_sampel= $this->input->post('id_sampel');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');

		$Arr_Insert_Smp=array(
			'id_sampel'=>$id_sampel,
			'nama'=>$nama,
			'jenis'=>$jenis
		);

		$this->M_Sampel->InsertDataSampel($Arr_Insert_Smp);
		redirect(base_url('sampel'));
	}

	public function fungsiEdit_Smp(){

		$id_sampel= $this->input->post('id_sampel');
		$nama = $this->input->post('nama');
		$jenis = $this->input->post('jenis');

		$Arr_Update_Smp=array(
			'id_sampel'=>$id_sampel,
			'nama'=>$nama,
			'jenis'=>$jenis
		);

		$this->M_Sampel->UpdateDataSampel($id_sampel,$Arr_Update_Smp);
		redirect(base_url('sampel'));
	}

	public function fungsiDelete_Smp($id_sampel){
		$this->M_Sampel->deleteDataSampel($id_sampel);
		redirect(base_url('sampel'));
	}
}

