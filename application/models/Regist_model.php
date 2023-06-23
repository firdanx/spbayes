<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_model extends CI_Model {

	
	public function insert($kode){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
	
	$data = array(
					'username'=>$username,
					'password'=>$password,
					'nama'=>$nama,
					'email'=>$email,
					'level' => 'pasien',
					'kode_verifikasi' => $kode,
					'status' => 0
			);
	$this->db->insert('user', $data);
	return $this->db->insert_id();
	
	}

	function getEmail($id){
		return $this->db->get_where('user', array('id'=>$id))->row();
	}
}
