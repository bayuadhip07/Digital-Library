<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model(['umum_model']);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function jurnal()
	{
		$this->load->view('journal');
	}

	public function detail_jurnal()
	{
		$this->load->view('detail_jurnal');
	}

	public function buku()
	{
		$this->load->view('buku');
	}

	public function skripsi()
	{
		$this->load->view('skripsi');
	}

	public function kontak()
	{
		$this->load->view('kontak');
	}

	public function bebas_pustaka()
	{	
		$data['jenjang'] = $this->umum_model->tampilkan_data_kategori_desc('jenjang','jenjang');
		$data['fakultas'] = $this->umum_model->tampilkan_data_kategori('fakultas','fakultas');
		$data['prodi'] = $this->umum_model->tampilkan_data_kategori('prodi','prodi');
		$this->load->view('bebas_pustaka', $data);
	}

}
