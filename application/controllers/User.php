<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model(['anggota_model','umum_model']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if(!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}
    }
	
	public function index()
	{
        $this->load->view('user/home');
	}

	public function kontak()
	{
		$this->load->view('kontak');
	}

	public function error()
	{
		$this->load->view('user/add_user');
	}

	public function bebas_pustaka()
	{	
		$data['jenjang'] = $this->umum_model->tampilkan_data_kategori_desc('jenjang','jenjang');
		$data['fakultas'] = $this->umum_model->tampilkan_data_kategori('fakultas','fakultas');
		$data['prodi'] = $this->umum_model->tampilkan_data_kategori('prodi','prodi');
		$this->load->view('bebas_pustaka', $data);
	}

}
