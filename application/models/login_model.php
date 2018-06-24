<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$query = $this->db->where('username', $username)->where('password', $password)->get('tb_user');

		if ($this->db->affected_rows() > 0) {
			$data = $query->row_array();
			
			$session = array(
				'logged_in' => TRUE,
				'id_user' => $data['id_user'],
				'username' => $data['username'],
				'nama_user' => $data['nama_user'],
				'alamat' => $data['alamat'],
				'email' => $data['email'],
				'foto_profil' => $data['foto_profil'],
				'tanggal_lahir' => $data['tanggal_lahir'],
				'nomor_telepon' => $data['nomor_telepon'],
				'tentang_penulis' => $data['tentang_penulis']
			);
			
			$this->session->set_userdata( $session );

			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */