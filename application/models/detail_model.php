<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model {

	public function get_artikel($id)
	{
		return $this->db->select('*')
						->from('tb_artikel')
						->where('id_artikel', $id)
						->join('tb_user', 'tb_user.id_user = tb_artikel.id_user')
						->get()
						->result();
	}

	public function delete($id)
	{
		$this->db->where('id_artikel', $id)->delete('tb_artikel');

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	public function edit($id)
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'isi_singkat' => $this->input->post('isi_singkat'),
			'isi' => $this->input->post('isi') 
		);

		return $this->db->where('id_artikel', $id)->update('tb_artikel', $data);
		

		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	

}

/* End of file detail_model.php */
/* Location: ./application/models/detail_model.php */