<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan_pdf extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //validasi jika user belum login

        $this->load->model('M_Permohonan');
        $this->load->model('M_Pengujian');
        $this->load->model('M_Permohonan');
        $this->load->model('M_User');
        $this->load->model('M_File');
    }



    public function cetak_permohonan_plg($id_permohonan)
    {
        $queryCetakPelanggan = $this->M_Permohonan->cetak_permohonan_plg($id_permohonan);
        $Data = array('queryCetakPlg' => $queryCetakPelanggan);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_rekap";
        $this->pdf->load_view('cetak_permohonan_pelanggan', $Data);
    }

    public function pengujianAll()
    {
        $queryAllpengujian = $this->M_Pengujian->pengujianAll();
        $queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
        $queryAllUser = $this->M_User->getDataUser();
        $Data = array(
            'queryAllUji' => $queryAllpengujian,
            'queryAllPmh' => $queryAllPermohonan,
            'queryAllUsr' => $queryAllUser
        );
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_rekap";
        $this->pdf->load_view('laporan_pengujianAll', $Data);
    }
    public function lihat_surat($id_pengujian)
    {
        $queryLihatTugas = $this->M_Pengujian->DetailPengujian($id_pengujian);
        $queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
        $queryAllUser = $this->M_User->getDataUser();
        $Data = array(
            'queryLihatTugas' => $queryLihatTugas,
            'queryAllPmh' => $queryAllPermohonan,
            'queryAllUsr' => $queryAllUser
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_rekap";
        $this->pdf->load_view('cetak_surat_penugasan', $Data);
    }

    public function lihat_surat_tabel($id_pengujian)
    {
        $queryLihatTugas = $this->M_Pengujian->DetailPengujian_tabel($id_pengujian);
        $queryAllPermohonan = $this->M_Permohonan->getDataPermohonan();
        $queryAllUser = $this->M_User->getDataUser();
        $Data = array(
            'queryLihatTugas' => $queryLihatTugas,
            'queryAllPmh' => $queryAllPermohonan,
            'queryAllUsr' => $queryAllUser
        );

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_rekap";
        $this->pdf->load_view('cetak_surat_penugasan', $Data);
    }

    public function lihat_surat_plg($id_pengujian)
    {
        $queryLihatHasil = $this->M_Pengujian->DetailPengujian($id_pengujian);
        $Data = array('queryLihatHasil' => $queryLihatHasil);

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan_rekap";
        $this->pdf->load_view('cetak_pengujianPlg', $Data);
    }

    public function cetak_file($id_file)
    {

        $getDataDetailFile = $this->M_File->getDataDetailFile($id_file);

        $Data = array(
            'queryDetailFile' => $getDataDetailFile
        );

        // $this->load->library('pdf');
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "laporan_rekap";
        // $this->pdf->load_view('cetak_file', $Data);
        $this->load->view('cetak_file', $Data);
    }
}
