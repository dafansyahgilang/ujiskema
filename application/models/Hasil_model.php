<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_model extends CI_Model {

    public function getData(){
        $query = "SELECT * FROM tb_hasil as h
                JOIN tb_kandidat as k ON k.id_kandidat = h.id_kandidat
                JOIN tb_pemilih as p ON p.id_pemilih = h.id_pemilih";
        return $this->db->query($query)->result_array();
    }

    public function getId($id){
        $query = "SELECT * FROM tb_hasil as h
                JOIN tb_kandidat as k ON k.id_kandidat = h.id_kandidat
                JOIN tb_pemilih as p ON p.id_pemilih = h.id_pemilih
                WHERE `id_hasil` = $id";
        return $this->db->query($query)->row_array();
    }

    public function edit($id){
        $data = [
            'id_kandidat' => $this->input->post('id_kandidat'),
        ];
        $this->db->where('id_hasil', $id);
        $this->db->update('hasil', $data);
    }

    public function hapus($id){
        $this->db->where('id_hasil', $id);
        $this->db->delete('hasil');
    }
    public function data1(){
		$this->db->from('tb_hasil');
		$this->db->where('id_kandidat',1);
		return $this->db->count_all_results();
	}
    public function data2(){
		$this->db->from('tb_hasil');
		$this->db->where('id_kandidat',2);
		return $this->db->count_all_results();
	}
    public function data3(){
		$this->db->from('tb_hasil');
		$this->db->where('id_kandidat',3);
		return $this->db->count_all_results();
	}


}