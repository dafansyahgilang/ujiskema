<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$this->load->view('admin/login_admin');
	}

	public function process()
	{
		$post = $this->input->post(null, true);
		if (isset($post['login'])) {
			$this->load->model('Admin_m');
			$query = $this->Admin_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'iduser' => $row->id_user,
					
				);
				$this->session->set_userdata($params);
				echo "<script>alert('Selamat, anda telah berhasil login!');
				window.location='" . base_url('admin') . "';
				</script>";
			} else {
				echo "<script>alert('Login anda gagal!');
				window.location='" . base_url('auth/login') . "';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('iduser');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
