<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class metode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Metode');
	}

	public function index()
	{
		$queryAllmetode = $this->M_Metode->getDataMetode();
		$Data = array('queryAllMtd'=> $queryAllmetode);
		
		$this->load->view('v_metode',$Data);
	}

	public function halaman_tambah()
	{
		$this->load->view('tambah_metode');
	}

	public function halaman_edit($id_metode)
	{
		$queryDetailmetode= $this->M_Metode->getDataDetailMetode($id_metode);
		$Data=array('queryDetailMtd'=>$queryDetailmetode);
		$this->load->view('edit_metode',$Data);
	}

	public function fungsiTambah_Mtd(){
		$id_metode= $this->input->post('id_metode');
		$metode = $this->input->post('metode');
		
		$Arr_Insert_Mtd=array(
			'id_metode'=>$id_metode,
			'metode'=>$metode,
			
		);

		$this->M_Metode->InsertDataMetode($Arr_Insert_Mtd);
		redirect(base_url('metode'));
	}

	public function fungsiEdit_Mtd(){

		$id_metode= $this->input->post('id_metode');
		$metode = $this->input->post('metode');

		$Arr_Update_Mtd=array(
			'id_metode'=>$id_metode,
			'metode'=>$metode,
		);

		$this->M_Metode->UpdateDataMetode($id_metode,$Arr_Update_Mtd);
		redirect(base_url('metode'));
	}

	public function fungsiDelete_Mtd($id_metode){
		$this->M_Metode->deleteDataMetode($id_metode);
		redirect(base_url('metode'));
	}
}

