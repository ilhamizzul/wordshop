<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tulis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('tulis_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'tulis_view';
			$this->load->view('index', $data);	
		} else {
			$this->session->set_flashdata('failed', 'Anda Belum Login, Silahkan Login Terlebih Dahulu Untuk Membuka Akses Ini');
			redirect('dashboard');
		}	
	}

	public function tambah()
	{
		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required|is_unique[tb_artikel.judul]');
			$this->form_validation->set_rules('isi_singkat', 'Isi Singkat', 'trim|required|min_length[5]');

			if ($this->form_validation->run() == TRUE) {
				if ($this->tulis_model->write() == TRUE) {
					$this->session->set_flashdata('success', 'Selamat, Tulisan anda berhasil ditambah');
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('failed', 'Tulisan Anda Gagal Ditambah, Silahkan Coba Lagi');
					redirect('tulis');
				}
			} else {
				$this->session->set_flashdata('failed', validation_errors());
				redirect('tulis');
			}	
		}
	}

}

/* End of file tulis.php */
/* Location: ./application/controllers/tulis.php */