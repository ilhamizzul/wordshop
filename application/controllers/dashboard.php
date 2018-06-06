<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('dashboard_model');
		$this->load->model('profile_model');
	}

	public function index()
	{
		$data['main_view'] = 'dashboard_view';
		$data['tulisan'] = $this->dashboard_model->get_tulisan();
		$data['count_tulisan'] = $this->profile_model->get_count_tulisan();
		$this->load->view('index', $data);	
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */