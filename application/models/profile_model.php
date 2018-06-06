<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function get_count_tulisan()
	{
		return $this->db->where('id_user', $this->session->userdata('id_user'))
						->count_all_results('tb_artikel');
	}

	public function get_tulisan_profil()
	{
		return $this->db->select('*')
						->from('tb_artikel')
						->join('tb_user', 'tb_user.id_user = tb_artikel.id_user')
						->where('tb_user.id_user', $this->session->userdata('id_user'))
						->get()
						->result();
	}

}

/* End of file profile_model.php */
/* Location: ./application/models/profile_model.php */