<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilaicf_model extends CI_Model {

	public function daftarNilaicf($limit, $start = 0, $q = null){
		// return $this->db->query("SELECT * FROM gejala_penyakit JOIN penyakit on penyakit.penyakit_id = gejala_penyakit.id ")->result();
		// return $this->db->get("gejala_penyakit")->result();

		return $this->db->select('*, gejala_penyakit.id AS gpid ')
						->from('gejala_penyakit')
						->join('gejala', 'gejala.id = gejala_penyakit.gejala_id ')
						->join('penyakit', 'penyakit.id = gejala_penyakit.penyakit_id ')
						->order_by('gejala_penyakit.id', 'DESC')
                        ->limit($limit, $start)
						->get()
						->result_array();
	}

	public function insert(){ 
		$gejala_id = $this->input->post('gejala_id');
		$penyakit_id = $this->input->post('penyakit_id');
		$nilaigp = $this->db->get_where('penyakit', array('id' => $penyakit_id))->row();
		$data = array(
					'gejala_id'=>$gejala_id,
					'penyakit_id'=>$penyakit_id,
					'nilai_gp'=>$nilaigp->nilai
				);
		$this->db->insert('gejala_penyakit', $data);

	}

	public function getById($id){
		return $query = $this->db->query("SELECT *, a.id as nid FROM gejala_penyakit a JOIN penyakit b ON b.id = a.penyakit_id WHERE a.id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$gejala_id = $this->input->post('gejala_id');
		$penyakit_id = $this->input->post('penyakit_id');
		$nilaigp = $this->db->get_where('penyakit', array('id' => $penyakit_id))->row();

		$data = array(
					'gejala_id'=>$gejala_id,
					'penyakit_id'=>$penyakit_id,
					'nilai_gp'=>$nilaigp->nilai
		);
		$this->db->where('id',$id);
		$this->db->update('gejala_penyakit', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('gejala_penyakit');
	}

	public function getlistnilaicf()
	{
		// return $this->db->get('gejala');

		return $this->db->select('*, gejala_penyakit.id AS gpid ')
						->from('gejala_penyakit')
						->join('gejala', 'gejala.id = gejala_penyakit.gejala_id ')
						->join('penyakit', 'penyakit.id = gejala_penyakit.penyakit_id ')
						->get()
						->result_array();
	}

	function get_by_gejala($gejala){
        //  $sql = "select distinct penyakit_id,p.kode,p.nama,p.keterangan from gejala_penyakit gp inner join penyakit p on gp.penyakit_id=p.id where gejala_id in (".$gejala.") order by penyakit_id,gejala_id";
        //  return $this->db->query($sql);
		$sql = "SELECT penyakit_id, kode, nama, keterangan 
        FROM (
            SELECT DISTINCT gp.penyakit_id, p.kode, p.nama, p.keterangan 
            FROM gejala_penyakit gp 
            INNER JOIN penyakit p ON gp.penyakit_id = p.id 
            WHERE gp.gejala_id IN ($gejala)
        ) AS subquery 
        ORDER BY penyakit_id, kode";

		return $this->db->query($sql);
     }
	 

     function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select gejala_penyakit.gejala_id,mb,md from gejala_penyakit where penyakit_id=".$id;
         if($gejala!=null)
            $sql=$sql." and gejala_id in (".$gejala.")";
        $sql=$sql." order by gejala_id";
         return $this->db->query($sql);
     }

     function getgejala(){
     	return $this->db->get('gejala');
     }

     function getpenyakit(){
     	return $this->db->get('penyakit');
     }

      function total_rows($q = NULL) {
        $this->db->from('gejala_penyakit');
        return $this->db->count_all_results();
    }


	// meeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
	public function getPenyakitf()
    {
        return $this->db->get('penyakit')->result();
    }

    public function getGejalaf()
    {
        return $this->db->get('gejala')->result();
    }

    public function saveHasilDiagnosa($kodePenyakit, $namaPenyakit, $nilaiBayes, $keteranganPenyakit)
    {
        $data = array(
			'user_id' => 0,
			'kode' => $kodePenyakit,
			'nama' => $namaPenyakit,
            'kepercayaan' => $nilaiBayes,
            'keterangan' => $keteranganPenyakit,
			'created_at' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('hasil_diagnosa', $data);
    }
	function get_by_id_gejala($id){
		 $this->db->select('*');
        $this->db->from('gejala_penyakit gp'); // Ganti 'nama_tabel' dengan nama tabel yang sesuai
		$this->db->join('gejala g', 'g.id=gp.gejala_id');
        $this->db->where_in('gejala_id', $id); // Ganti 'checkbox_column' dengan nama kolom checkbox yang sesuai
        $query = $this->db->get();
        return $query;
	}
}
