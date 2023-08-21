<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Asal');
	}

	public function index()
	{
		$queryAllasal = $this->M_Asal->getDataAsal();
		$Data = array('queryAllAsl'=> $queryAllasal);
		
		$this->load->view('v_asal',$Data);
	}

	public function halaman_tambah()
	{
		$this->load->view('tambah_asal');
	}

	public function halaman_edit($id_asal)
	{
		$queryDetailasal= $this->M_Asal->getDataDetailAsal($id_asal);
		$Data=array('queryDetailAsl'=>$queryDetailasal);
		$this->load->view('edit_asal',$Data);
	}

	public function fungsiTambah_Asl(){
		$id_asal= $this->input->post('id_asal');
		$asal = $this->input->post('asal');
		
		$Arr_Insert_Asl=array(
			'id_asal'=>$id_asal,
			'asal'=>$asal,
			
		);

		$this->M_Asal->InsertDataAsal($Arr_Insert_Asl);
		redirect(base_url('asal'));
	}

	public function fungsiEdit_Asl(){

		$id_asal= $this->input->post('id_asal');
		$asal = $this->input->post('asal');

		$Arr_Update_Asl=array(
			'id_asal'=>$id_asal,
			'asal'=>$asal,
		);

		$this->M_Asal->UpdateDataAsal($id_asal,$Arr_Update_Asl);
		redirect(base_url('asal'));
	}

	public function fungsiDelete_Asl($id_asal){
		$this->M_Asal->deleteDataAsal($id_asal);
		redirect(base_url('asal'));
	}
}

