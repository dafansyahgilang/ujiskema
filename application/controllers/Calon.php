<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Calon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Calon_m', 'admin');
        // is_logged_in();
    }

    public function index()
    {
        $data['tb_kandidat'] = $this->db->get('tb_kandidat')->result_array();

      
        $this->load->view('calon/calon', $data);
       
    }

    public function tambah(){
        $this->form_validation->set_rules('nama_ketos', 'ketos', 'required');
        $this->form_validation->set_rules('nama_waketos', 'waketos', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        if ($this->form_validation->run() == FALSE) {
          
            $this->load->view('calon/tambah');
           
        } else {
            $this->admin->tambah();
            redirect('calon');
        }
    }

    public function edit($id){
        $this->form_validation->set_rules('nama_ketos', 'ketos', 'required');
        $this->form_validation->set_rules('nama_waketos', 'waketos', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');

        $data['tb_kandidat'] = $this->admin->getId($id);

        if ($this->form_validation->run() == FALSE) {
          
            $this->load->view('calon/edit', $data);
           
        } else {
            $this->admin->edit($id);
            redirect('calon');
        }
    }

    public function hapus($id){
        $this->admin->hapus($id);
        redirect('calon');
    }
}
