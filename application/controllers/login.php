<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}

	function index(){
		$this->load->view('view_login');
	}

	function proses_login(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->model_login->cek_login($username,$password);
		if($cek->num_rows() > 0){
			$data=$cek->row_array();
                   
                    $this->session->set_userdata('ses_id',$data['id_pegawai']);
                    $this->session->set_userdata('ses_name',$data['username']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    $this->session->set_userdata('ses_email',$data['email']);
                    $this->session->set_userdata('ses_foto',$data['foto']);
                    $this->session->set_userdata('status',"login");
			redirect(base_url("pegawai"));
		}else{
			echo "<script>
					alert('Username / Password Salah ! ');
					window.location='".base_url('login')."';
				</script>";


		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}