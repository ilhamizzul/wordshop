<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_tulisan()
	{
		return $this->db->select('*')
						->from('tb_artikel')
						->join('tb_user', 'tb_user.id_user = tb_artikel.id_user')
						->get()
						->result();
	}

}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */