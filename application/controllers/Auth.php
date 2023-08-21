<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('M_Login');
   }


   public function index()
   {
      $this->load->view('login');
   }

   public function cek_login()
   {
      $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
      $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

      $cek_hasil = $this->M_Login->cek_user($username, $password);
      echo ("<script type='text/javascript'> console.log(JSON.parse('" . json_encode($cek_hasil) . "'));</script>");

      if ($cek_hasil->num_rows() > 0) { //jika login sebagai ADMIN
         $data = $cek_hasil->row_array();
         $this->session->set_userdata('masuk', TRUE);
         if ($data['level'] == 'Admin') { //Akses admin
            $this->session->set_userdata('akses', '1');
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);

            redirect('home');
         } else if ($data['level'] == 'Petugas') { //Akses petugas
            $this->session->set_userdata('akses', '2');
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);
            redirect('home');
         } else if ($data['level'] == 'Analis') { //Akses analis
            $this->session->set_userdata('akses', '3');
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);
            redirect('home');
         } else if ($data['level'] == 'Kepala Balai') { //Akses kepala balai
            $this->session->set_userdata('akses', '4');
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);
            redirect('home');
         } else if ($data['level'] == 'Koordinator Tanaman') { //Akses subkoor KT
            $this->session->set_userdata('akses', '5');
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);
            redirect('home');
         } else if ($data['level'] == 'Tata Usaha') { //akses Tata Usaha
            $this->session->set_userdata('akses', '6');
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);
            redirect('home');
         } else { //akses Pelanggan
            $this->session->set_userdata('akses', '7'); // akses pelanggan
            $this->session->set_userdata('ses_id', $data['id_user']);
            $this->session->set_userdata('ses_username', $data['username']);
            redirect('HomeAll');
         }
      } else {
         redirect("?pesan=gagal");
      }
   }


   function logout()
   {
      $this->session->sess_destroy();
      $url = base_url('');
      redirect($url);
   }
}
