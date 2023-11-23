<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_m', 'user');
	}
	public function index()
	{
		
        $data['title'] = 'user';
        $data['user'] = $this->user->get_data();

		$this->load->view('admin/dashboard',$data);
	}
	public function tambah_user()
	{		
        $data['title'] = 'tambah';

		$this->form_validation->set_rules('username', 'nama', 'required');
        $this->form_validation->set_rules('email', 'required');
        $this->form_validation->set_rules('password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/tambah_user', $data);
         
        } else {
            $this->user->tambah_user();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selesai Ditambah</div>');
            redirect('admin');
		}


	}
	public function edit($id){
        $data['id_user'] = $this->user->getIduser($id);

		$this->form_validation->set_rules('username', 'nama', 'required');
        $this->form_validation->set_rules('email', 'required');
        $this->form_validation->set_rules('password', 'required');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/edit_user', $data);
           
        } else {
            $this->user->gantiData($id);
            $this->session->set_flashdata('message', '<div class="alert ah lert-success" role="alert">Selesai Ditambah</div>');
            redirect('admin');
		}

	}

	public function hapus($id){
		$this->user->hapusData($id);
		redirect('admin');
	}


}
