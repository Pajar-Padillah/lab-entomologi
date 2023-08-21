<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAll extends CI_Controller {

	function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }

  
  }


	public function index()
	{
		
		return $this->load->view('homeAll');
		
	}

	
}

