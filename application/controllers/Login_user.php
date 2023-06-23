<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model'); //load model login
	}
	
	public function index()
	{
		if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){redirect('welcome/diagnosa');}
		$data['contentuser'] = 'user/login'; 
		$this->load->view('templates/user/home/index', $data);
	}

	public function login()
	{
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLoginPeserta($username, $password);
			if (!$check) {
				$this->session->set_flashdata('error', 'Username atau Password salah');
				redirect('login_user');
			}else{
				if ($check->status == 1) {
					$this->session->set_flashdata('error', 'Akun anda belum aktif, silahkan periksa email verifikasi untuk mengaktifkan');
					redirect('login_user');
				}
				
				$data = array(
						'user_id' => $check->id,
						'username' => $username,
						'password' => $password,
						// 'is_login' => TRUE,
						'nama' => $check->nama,
						'level' => $check->level
				);
				$this->session->set_userdata($data);
				redirect('welcome/diagnosa');
			}

		}
	}

	public function logout()
	{
		$data = array('username','password','is_login', 'nama', 'level');
		$this->session->unset_userdata($data);
		redirect('welcome');	
	}

}
