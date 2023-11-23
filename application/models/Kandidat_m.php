<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat_m extends CI_Model {

    public function login($post) {
		$this->db->from('tb_pemilih');
		$this->db->where('username', $post['username']);
		$this->db->where('password', $post['password']);
		$query = $this->db->get();
		return $query;
	}

    public function getId($id){
        return $this->db->get_where('tb_kandidat', ['id_kandidat' => $id])->row_array();
    }

    public function pilih(){
        $data = [
            'id_kandidat' => $this->input->post('id_kandidat'),
            'id_pemilih' => $this->input->post('id_pemilih'),
        ];
        $this->db->insert('tb_hasil', $data);
    }

}