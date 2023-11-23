<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kandidat_m', 'tb_kandidat');
    }

    public function index()
    {
        $data['tb_pemilih'] = $this->db->get_where('tb_pemilih', ['username' => $this->session->userdata('username')])->row_array();
        $data['tb_kandidat'] = $this->db->get('tb_kandidat')->result_array();
        $cek = $this->session->userdata('id_pemilih');
        $hasil = $this->db->get_where('tb_hasil', ['id_pemilih' => $cek]);
        $banyak = $hasil->num_rows();

        if($banyak >= 1) {
            $this->session->set_flashdata('message', '<small class="text-danger" >Anda Telah Mengisi Data</small>');
            redirect('log/login');
        } else{
            
            $this->load->view('kandidat/kandidat', $data);
           

        }
    }

    public function detail($id)
    {
        $data['tb_kandidat'] = $this->tb_kandidat->getId($id);

        
        $this->load->view('kandidat/detail', $data);
       
    }

    public function pilih($id){
        $this->form_validation->set_rules('id_kandidat', 'kandidat', 'required');
        $this->form_validation->set_rules('id_pemilih', 'pemilih', 'required');

        $data['tb_kandidat'] = $this->tb_kandidat->getId($id);
        $data['tb_user'] = $this->db->get_where('tb_pemilih', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->form_validation->run() == FALSE) {    
            $this->load->view('kandidat/pilih', $data);
        } else {
            $this->tb_kandidat->pilih();
            redirect('log/login');
        }
    }
}
