<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semua_tulis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('semua_tulis_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'semua_tulis_view';
			$data['all_data'] = $this->semua_tulis_model->get_all_data();
			$this->load->view('index', $data);
		} else {
			$this->session->set_flashdata('failed', 'Anda Belum Login, Silahkan Login Terlebih Dahulu Untuk Membuka Akses Ini');
			redirect('dashboard');
		}
		
			
	}

}

/* End of file semua_tulis.php */
/* Location: ./application/controllers/semua_tulis.php */