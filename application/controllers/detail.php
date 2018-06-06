<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('detail_model');
	}

	public function detail_artikel($id)
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'detail_view';
		} else {
			$data['main_view'] = 'detail_guest_view';
		}
		
		
		$data['detail_artikel'] = $this->detail_model->get_artikel($id);
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

	public function ubah($id)
	{
		if ($this->detail_model->edit($id) == TRUE) {
			$this->session->set_flashdata('success', 'Artikel Berhasil Diubah');
			redirect('detail/detail_artikel/'.$this->uri->segment(3));
		} else {
			$this->session->set_flashdata('failed', 'Artikel Gagal Diubah');
			redirect('detail/detail_artikel/'.$this->uri->segment(3));
		}
		
	}

}

/* End of file detail.php */
/* Location: ./application/controllers/detail.php */