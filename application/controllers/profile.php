<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
		$this->load->model('profile_model');
	}

	public function index()
	{
		$data['main_view'] = 'profile_view';
		$data['tulisan'] = $this->profile_model->get_tulisan_profil();
		$data['count_tulisan'] = $this->profile_model->get_count_tulisan();
		$this->load->view('index', $data);		
	}

}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */