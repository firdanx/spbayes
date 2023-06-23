<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit_model extends CI_Model {

	public function daftarPenyakit(){
		return $this->db->get('penyakit')->result();
	}
	
	public function insert(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$nilai = $this->input->post('nilai');
	
	$data = array(
					'kode'=>$kode,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
					'nilai'=>$nilai
			);
	$this->db->insert('penyakit', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM penyakit WHERE id='$id' ")->row_array();

	}
	

	public function edit(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$nilai = $this->input->post('nilai');

		$data = array(
					'kode'=>$kode,
					'nama'=>$nama,
					'keterangan'=>$keterangan,
					'nilai'=>$nilai
		);
		$this->db->where('id',$id);
		$this->db->update('penyakit', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('penyakit');
	}
	function get_by_id_gejala($id){
		 $this->db->select('*');
        $this->db->from('penyakit'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
        $this->db->where_in('id', $id); // Ganti 'checkbox_column' dengan nama kolom checkbox yang sesuai
        $query = $this->db->get();
        return $query;
	}
}
