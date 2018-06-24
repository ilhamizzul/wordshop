<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar_model extends CI_Model {

	public function get_komentar($id)
	{
		return $this->db->select('*')
			->from('tb_komentar')
			->where('tb_komentar.id_artikel', $id)
			->join('tb_artikel' , 'tb_artikel.id_artikel = tb_komentar.id_artikel')
			->join('tb_user', 'tb_user.id_user = tb_komentar.id_user')
			->get()
			->result();
	}

	public function tulis_komentar($id)
	{
		$data = array(
			'isi_komentar' => $this->input->post('komentar'), 
			'id_user' => $this->session->userdata('id_user'),
			'id_artikel' => $id
		);

		$this->db->insert('tb_komentar', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file komentar model.php */
/* Location: ./application/models/komentar model.php */