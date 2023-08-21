<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_Login extends CI_Model
{

    public function cek_user($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password=md5('$password') LIMIT 1");
        return $query;
    }
}
