<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	
	public function login($post)
	{
		$this->db->from('tb_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', $post['password']);
		$query = $this->db->get('');
		return $query;
	}


	public function get_data()
	{
		return $this->db->get('tb_user')->result_array();
	}

	public function getIduser($id)
	{
		$query = "SELECT * FROM tb_user
					WHERE `id_user` = $id";
		return $this->db->query($query)->row_array();
	}
	public function tambah_user()
	{
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            
        ];
         $this->db->insert('tb_user', $data);
	}
	public function gantiData($id){
		$data = [
			'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
           
        ];
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);

	}
	public function hapusData($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
	}
	
	
}