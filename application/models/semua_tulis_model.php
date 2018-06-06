<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semua_tulis_model extends CI_Model {

	public function get_all_data()
	{
		return $this->db->select('*')
						->from('tb_artikel')
						->join('tb_user','tb_user.id_user = tb_artikel.id_user')
						->where('tb_user.id_user', $this->session->userdata('id_user'))
						->get()
						->result();
	}

}

/* End of file semua_rulis_model.php */
/* Location: ./application/models/semua_rulis_model.php */