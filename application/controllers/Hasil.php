<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_model', 'hasil');
       
    }

    public function index()
    {
        $data['data1'] = $this->hasil->data1();
        $data['data2'] = $this->hasil->data2();
        $data['data3'] = $this->hasil->data3();
        $data['hasil'] = $this->hasil->getData();
            $this->load->view('hasil/index', $data);
       
    }

    public function detail($id)
    {
        $data['hasil'] = $this->hasil->getId($id);

      
        $this->load->view('hasil/detail', $data);
       
    }

    public function hapus($id){
        $this->hasil->hapus($id);
        redirect('hasil');
    }

    public function selamat()
    {
       
        redirect('login/logout');
    }

}