<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_user extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Regist_model'); //load model gejala
	}
	
	public function index()
	{
		$data['contentuser'] = 'user/regist'; 
		$this->load->view('templates/user/login/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$kode =  uniqid(). uniqid();

			$id = $this->Regist_model->insert($kode);
			$check = $this->Regist_model->getEmail($id);

			$pesan = 'terima kasih telah mendaftar di sistem kami';
			$pesan .= '<br>';
			$pesan .= 'silahkan klik link dibawah ini utk melakukan konfirmasi ';
			$pesan .= '<br>';
			$pesan .= base_url().'regist_user/konfirmasi/'.$kode;
			$result = $this->email
						    ->from('hardiantiarsyad@gmail.com', 'Hardianti')
						    ->to($check->email)
						    ->subject('Email Konfirmasi')
						    ->message($pesan)
						    ->send();
			redirect('login_user/index');
		}
		
		$data['contentuser'] = 'user/login'; 
		$this->load->view('templates/user/index', $data);
	}
	

	public function konfirmasi($kode){
		$check = $this->db->query("SELECT * FROM user WHERE kode_verifikasi ='$kode' ")->row();
		if ($check) {
			$this->db->query("UPDATE user set status = 1 WHERE id='$check->id' ");
			echo "Terima kasih telah melakukan konfirmasi. klik link dibawah ini untuk login dengan akun anda";
			echo "<br>";
			echo base_url().'login_user';
		}else{
			echo "kode verifikasi salah";
		}
	}

	public function emailtest(){
		$kode =  base_url().'regist_user/konfirmasi/'.uniqid(). uniqid();
		$pesan = 'terima kasih telah mendaftar di sistem kami';
		$pesan .= '<br>';
		$pesan .= 'silahkan klik link dibawah ini utk melakukan konfirmasi ';
		$pesan .= '<br>';
		$pesan .= $kode;
		$result = $this->email
					    ->from('hardiantiarsyad@gmail.com', 'Hardianti')
					    ->to('akbar@isysedge.com')
					    ->subject('Email Konfirmasi')
					    ->message($pesan)
					    ->send();


		var_dump($result);
		echo '<br />';
		echo $this->email->print_debugger();
	}



}