<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_m', 'tb_pemilih');
    }

    public function index()
    {
        $data['tb_pemilih'] = $this->db->get('tb_pemilih')->result_array();
        $this->load->view('siswa/siswa', $data);
    }

    public function tambah(){   
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('NISN', 'NISN', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('siswa/tambah');

        } else {
            $this->tb_pemilih->tambah();
            redirect('siswa');
        }
    }

    public function edit($id){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('NISN', 'NISN', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        $data['tb_pemilih'] = $this->tb_pemilih->getId($id);

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('siswa/edit', $data);
            
        } else {
            $this->tb_pemilih->edit($id);
            redirect('siswa');
        }
    }

    public function hapus($id){
        $this->tb_pemilih->hapus($id);
        redirect('siswa');
    }
}

