<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tulis_model extends CI_Model {

	public function write()
	{
		$data = array(
			'judul' => $this->input->post('judul'), 
			'isi_singkat' => $this->input->post('isi_singkat'), 
			'isi' => $this->input->post('isi'),
			'id_user' => $this->session->userdata('id_user') 
		);

		$this->db->insert('tb_artikel', $data);

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}	
	}
}

/* End of file tulis_model.php */
/* Location: ./application/models/tulis_model.php */