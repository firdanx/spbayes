<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala_model extends CI_Model {

	public function gejala($limit, $start = 0, $q = null){
		// return $this->db->get('gejala')->result();

		//ini menggunakan query standar
		//jadi silahkan ppilih mau yg mana sama saja
		//bye
		// return $this->db->query("SELECT *, gejala.id AS gid FROM gejala JOIN kelompok_gejala on kelompok_gejala.id = gejala.kelompok_gejala_id")->result();

		//jadi ini query bawaan CI
		return $this->db->select('*, gejala.id AS gid')
				 ->from('gejala')
                 ->limit($limit, $start)
				 ->get()
				 ->result_array();
	}

	function total_rows($q = NULL) {
        $this->db->from('gejala');
        return $this->db->count_all_results();
    }

	public function insert(){
		$kode = $this->input->post('kode');
		$nama_gejala = $this->input->post('nama_gejala');
		$nilai_gejala = $this->input->post('nilai_gejala');

	$data = array(
					'kode'=>$kode,
					'nama_gejala'=>$nama_gejala,
					'nilai'=>$nilai_gejala,
			);
	$this->db->insert('gejala', $data);

	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM gejala WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama_gejala = $this->input->post('nama_gejala');
		$nilai_gejala = $this->input->post('nilai_gejala');

		$data = array(
					'kode'=>$kode,
					'nama_gejala'=>$nama_gejala,
					'nilai'=>$nilai_gejala,
		);
		$this->db->where('id',$id);
		$this->db->update('gejala', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('gejala');
	}

	public function getlistkelompokgejala()
	{
		return $this->db->get('kelompok_gejala');
	}

	function get_list_by_id($id){
         $sql = "select id,kode,nama_gejala from gejala where id in (".$id.")";
         return $this->db->query($sql);
     }

     function get_by_kelompok($kelompok){
        $this->db->select('*');
        $this->db->from('gejala');
         $this->db->where('kelompok_gejala_id',$kelompok);
        return $this->db->get();
    }
	function get_by_id_gejala($id){
		 $this->db->select('*');
        $this->db->from('gejala'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
        $this->db->where_in('id', $id); // Ganti 'checkbox_column' dengan nama kolom checkbox yang sesuai
        $query = $this->db->get();
        return $query;
	}
	public function sumColumnValue($id) {
    $this->db->select_sum('nilai');
    $this->db->where_in('id', $id);
    $query = $this->db->get('gejala');
    $result = $query->row();
    $sumValue = $result->nilai ?? 0;
	return $sumValue;
	}
}
