<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function tambah($foto)
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama_user' => $this->input->post('nama_user'),
			'nomor_telepon' => $this->input->post('nomor_telepon'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'tentang_penulis' => $this->input->post('tentang_penulis'),
			'foto_profil' => $foto['file_name']
		);

		$this->db->insert('tb_user', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file register_model.php */
/* Location: ./application/models/register_model.php */