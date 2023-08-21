<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }

         $this->load->model('M_Permohonan');
  }


	public function index()
	{
		$queryCountPermohonan = $this->M_Permohonan->cek_jumlah_permohonan();
		$queryCountPengujian= $this->M_Permohonan->cek_jumlah_pengujian();
		$queryCountRespon = $this->M_Permohonan->cek_jumlah_respon();
		
		$Data = array('queryCountPmh'=> $queryCountPermohonan,
						'queryCountPg'=> $queryCountPengujian,
						'queryCountRsp'=> $queryCountRespon,);
		
		return $this->load->view('home',$Data);
		
	}

	
}

