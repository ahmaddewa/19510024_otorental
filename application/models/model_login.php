<?php

class Model_Login extends CI_Model{
	function cek_login($username,$password){
        $query=$this->db->query("SELECT * FROM pegawai WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
}