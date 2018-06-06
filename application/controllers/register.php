<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}

	public function index()
	{
		$this->load->view('register_view');
	}

	public function insert()
	{
		if ($this->input->post('submit')) {

			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[20]|is_unique[tb_user.username]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|is_unique[tb_user.password]');
			$this->form_validation->set_rules('nama_user', 'Nama User', 'required|min_length[5]|max_length[20]|is_unique[tb_user.nama_user]');
			$this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'required|min_length[12]|max_length[12]|is_unique[tb_user.nomor_telepon]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user.email]');

			if ($this->form_validation->run() == TRUE) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']  = '100';
				$config['max_width']  = '300';
				$config['max_height']  = '300';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('foto_profil')){
					$this->session->set_flashdata('failed', $this->upload->display_errors());
					redirect('register');
				}
				else{
					if ($this->register_model->tambah($this->upload->data()) == TRUE) {
						$this->session->set_flashdata('success', 'Akun baru berhasil Dibuat. Silahkan Login');
						redirect('dashboard');
					} else {
						$this->session->set_flashdata('failed', 'Ada kesalahan dalam membuat akun. Silahkan Coba Lagi');
						redirect('register');
					}
				}
			} else {
				$this->session->set_flashdata('failed', validation_errors());
				redirect('register');
			}

				
		}
			
	}

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */