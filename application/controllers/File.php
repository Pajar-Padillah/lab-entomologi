<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_Permohonan');
		$this->load->model('M_Sampel');
		$this->load->model('M_Pengujian');
		$this->load->model('M_Tujuan');
		$this->load->model('M_Metode');
		$this->load->model('M_User');
		$this->load->model('M_Respon');
		$this->load->model('M_File');
		$this->session->userdata('ses_username');

		$id_user = 	$this->session->userdata('ses_id');
	}

	public function index()
	{

		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllpengujian = $this->M_Pengujian->getDataPengujian();
		$queryAllUser = $this->M_User->getDataUser();
		// $queryAllFile = $this->M_File->getDataFile();
		$queryAllViewFile = $this->M_File->getDataFileAll();
		$Data = array(
			'queryAllUji' => $queryAllpengujian,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser,
			// 'queryAllFile'=> $queryAllFile,
			'queryAllViewFile' => $queryAllViewFile,

		);

		$this->load->view('v_file', $Data);
	}

	// daftar file verifikasi pada pelanggan
	public function verifikasiP($id_user)
	{


		$queryAllViewFile = $this->M_File->verifikasiP($id_user);
		$Data = array(
			'queryAllViewFile' => $queryAllViewFile,

		);

		$this->load->view('v_daftarFileP', $Data);
	}

	//  daftar file verifikasi pada analis
	public function verifikasiA($id_user)
	{

		$queryAllViewFile = $this->M_File->verifikasiA($id_user);
		$Data = array(
			'queryAllViewFile' => $queryAllViewFile,

		);

		$this->load->view('v_daftarFileP', $Data);
	}




	public function halaman_tambah()
	{
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllpengujian = $this->M_Pengujian->getDataPengujian();
		$queryAllUser = $this->M_User->getDataUser();
		$queryAllFile = $this->M_File->getDataFile();
		$queryHasilpengujian = $this->M_Pengujian->hasilUjiAll();

		$Data = array(
			'queryAllUji' => $queryAllpengujian,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser,
			'queryAllFile' => $queryAllFile,
			'queryHasilUji' => $queryHasilpengujian

		);


		$this->load->view('tambah_file', $Data);
	}


	public function halaman_edit($id_file)
	{
		$getDataDetailFile = $this->M_File->getDataDetailFile($id_file);
		$queryAllpengujian = $this->M_Pengujian->getDataPengujian();
		$queryAllUser = $this->M_User->getDataUser();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryHasilpengujian = $this->M_Pengujian->hasilUjiAll();
		$Data = array(
			'queryAllUji' => $queryAllpengujian,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser,
			'queryDetailFile' => $getDataDetailFile,
			'queryHasilUji' => $queryHasilpengujian
		);

		$this->load->view('edit_file', $Data);
	}


	// verifikasi All
	public function belum_verifikasiAll()
	{
		$queryHasilVerifikasi = $this->M_File->belum_verifikasiAll();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(
			'queryHasilVerifikasi' => $queryHasilVerifikasi,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser
		);

		$this->load->view('v_belumVerifikasi', $Data);
	}

	public function sudah_verifikasiAll()
	{
		$queryHasilVerifikasi = $this->M_File->sudah_verifikasiAll();
		$queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
		$queryAllUser = $this->M_User->getDataUser();
		$Data = array(
			'queryHasilVerifikasi' => $queryHasilVerifikasi,
			'queryAllPmh' => $queryAllPermohonan,
			'queryAllUsr' => $queryAllUser
		);

		$this->load->view('v_sudahVerifikasi', $Data);
	}


	// public function permohonanAll()
	// {
	// 	$querypermohonanAll= $this->M_Permohonan->permohonanAll();
	// 	$Data=array('querypermohonanAlls'=>$querypermohonanAll);
	// 	$this->load->view('v_detailpermohonanAll',$Data);
	// }

	// public function permohonan_plg($id_user)
	// {	$queryresponPlg= $this->M_Respon->DetailRespon($id_user);
	// 	$querypermohonanPelanggan= $this->M_Permohonan->DetailPermohonan($id_user);
	// 	$Data=array('querypermohonanPlg'=>$querypermohonanPelanggan, 'queryresponPlg'=>$queryresponPlg);
	// 	$this->load->view('v_permohonan_pelanggan',$Data);
	// }





	public function fungsiTambah_File()
	{

		$config['upload_path']          = './file_upload/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			echo 'Gagal Tambah';
		} else {
			$file = $this->upload->data();
			$file = $file['file_name'];
			$id_file = $this->input->post('id_file', true);
			$nama_file = $this->input->post('nama_file', true);
			$id_permohonan = $this->input->post('id_permohonan', true);
			$id_user = $this->input->post('id_user', true);
			$keterangan = $this->input->post('keterangan', true);


			$data = array(
				'id_file' => $id_file,
				'nama_file' => $nama_file,
				'file' => $file,
				'id_permohonan' => $id_permohonan,
				'id_user' => $id_user,
				'keterangan' => $keterangan,
			);
			$this->M_File->InsertDataFile($data);
			redirect(base_url('file/halaman_tambah'));
		}
	}

	public function fungsiEdit_File()
	{
		// $id_file= $this->input->post('id_file');
		// $nama_file = $this->input->post('nama_file');
		// $file = $this->input->post('tgl_permohonan');
		// $id_permohonan= $this->input->post('id_permohonan');
		// $id_pengujian= $this->input->post('id_pengujian');
		// $id_user = $this->input->post('id_user');
		// $keterangan = $this->input->post('keterangan');


		// $Arr_Update_File=array(
		// 	'id_file'=>$id_file,
		// 	'nama_file'=>$nama_file,
		// 	'file'=>$file,
		// 	'id_permohonan'=>$id_permohonan,
		// 	'id_pengujian'=>$id_pengujian,
		// 	'id_user'=>$id_user,
		// 	'keterangan'=>$keterangan
		// );

		// $this->M_File->UpdateDataFile($id_file,$Arr_Update_File);
		// redirect(base_url('file/halaman_edit'));
		$id_file = $this->input->post('id_file');
		$config['upload_path']          = './file_upload/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {

			$id_file = $this->input->post('id_file', true);
			$nama_file = $this->input->post('nama_file', true);
			$id_permohonan = $this->input->post('id_permohonan', true);
			$id_user = $this->input->post('id_user', true);
			$keterangan = $this->input->post('keterangan', true);
			$keterangan_tolak = $this->input->post('keterangan_tolak', true);


			$data = array(
				'id_file' => $id_file,
				'nama_file' => $nama_file,
				'id_permohonan' => $id_permohonan,
				'id_user' => $id_user,
				'keterangan' => $keterangan,
				'keterangan_tolak' => $keterangan_tolak
			);
			$this->M_File->UpdateDataFile($id_file, $data);
			redirect(base_url('file'));
		} else {
			$file = $this->upload->data();
			$file = $file['file_name'];
			$id_file = $this->input->post('id_file', true);
			$nama_file = $this->input->post('nama_file', true);
			$id_permohonan = $this->input->post('id_permohonan', true);
			$id_user = $this->input->post('id_user', true);
			$keterangan = $this->input->post('keterangan', true);
			$keterangan_tolak = $this->input->post('keterangan_tolak', true);

			$data = array(
				'id_file' => $id_file,
				'nama_file' => $nama_file,
				'file' => $file,
				'id_permohonan' => $id_permohonan,
				'id_user' => $id_user,
				'keterangan' => $keterangan,
				'keterangan_tolak' => $keterangan_tolak
			);
			$this->M_File->UpdateDataFile($id_file, $data);
			redirect(base_url('file'));
		}
	}

	public function fungsiDelete_File($id_file)
	{
		$this->M_File->deleteDataFile($id_file);
		redirect(base_url('file'));
	}
}
