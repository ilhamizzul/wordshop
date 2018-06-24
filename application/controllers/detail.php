<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('detail_model');
		$this->load->model('komentar_model');
	}

	public function detail_artikel($id)
	{
		$data['main_view'] = 'detail_view';
		$data['detail_artikel'] = $this->detail_model->get_artikel($id);
		$data['komentar'] = $this->komentar_model->get_komentar($id);
		$this->load->view('index', $data);
	}

	public function detail_private($id)
	{
		$data['main_view'] = 'detail_edit_view';
		$data['detail_artikel'] = $this->detail_model->get_artikel($id);
		$data['komentar'] = $this->komentar_model->get_komentar($id);
		$this->load->view('index', $data);
	}

	public function hapus($id)
	{
		if ($this->detail_model->delete($id) == TRUE) {
			$this->session->set_flashdata('success', 'Artikel Berhasil Dihapus');
			redirect('dashboard');
		} else {
			
		}
	}

	public function add_komentar($id)
	{
		if ($this->komentar_model->tulis_komentar($id) == TRUE) {
			redirect('detail/detail_artikel/'.$this->uri->segment(3));
		} else {
			$this->session->set_flashdata('failed', 'Komentar anda gagal terkirim silahkan coba lagi');
			redirect('detail/detail_artikel/'.$this->uri->segment(3));
		}
		
	}

	public function ubah($id)
	{
		if ($this->detail_model->edit($id) == TRUE) {
			$this->session->set_flashdata('success', 'Artikel Berhasil Diubah');
			redirect('detail/detail_private/'.$this->uri->segment(3));
		} else {
			$this->session->set_flashdata('failed', 'Artikel Gagal Diubah');
			redirect('detail/detail_private/'.$this->uri->segment(3));
		}
		
	}

}

/* End of file detail.php */
/* Location: ./application/controllers/detail.php */