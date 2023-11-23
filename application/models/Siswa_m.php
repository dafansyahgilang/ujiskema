<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_m extends CI_Model {

    public function getId($id){
        return $this->db->get_where('tb_pemilih', ['id_pemilih' => $id])->row_array();
    }

    public function tambah(){
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'NISN' => $this->input->post('NISN'),
            'alamat' => $this->input->post('alamat'),
        ];
        
        $this->db->insert('tb_pemilih', $data);
    }

    public function edit($id){
        $data = [
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'NISN' => $this->input->post('NISN'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->where('id_pemilih', $id);
        $this->db->update('tb_pemilih', $data);
    }

    public function hapus($id){
        $this->db->where('id_pemilih', $id);
        $this->db->delete('tb_pemilih');
    }

}