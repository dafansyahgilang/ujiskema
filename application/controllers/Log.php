<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Log extends CI_Controller
{
	public function login()
	{
		$this->load->view('kandidat/login_pemilih');
	}

	public function process() {
		$post = $this->input->post(null, true);
		if(isset($post['login'])) {
			$this->load->model('Kandidat_m');
			$query = $this->Kandidat_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id_pemilih' => $row->id_pemilih,
					
					'username'=> $row->username,
				);
				$this->session->set_userdata($params);
				echo "<script>
				window.location='".site_url('kandidat')."'
				</script>";
			} else {
				echo "<script>alert('Gagal!');
				window.location='".site_url('log/login')."'
				</script>";
			}
		}
	}

	public function logout() {
		$params = array('id_pemilih');
		$this->session->unset_userdata($params);
		redirect('log/login');
	}
}
