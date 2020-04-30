<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model(['umum_model','anggota_model', 'jurnal_model' , 'ebook_model', 'skripsi_model', 'lainnya_model']);
	}
	
	public function index()
	{
		$this->load->view('index');
	}

	public function jurnal()
	{
		$data['jurnal'] = $this->jurnal_model->getAll();
		$this->load->view('jurnal/jurnal', $data);
	}

	public function detail_jurnal($id)
	{
		if($this->jurnal_model->cek_jurnal_by_id($id)==0)
		{
			redirect('jurnal');
		}
		$data['jurnal'] = $this->jurnal_model->get_jurnal_by_id($id);
		$this->load->view('jurnal/detail_jurnal', $data);
	}


	public function buku()
	{
		$data['ebook'] = $this->ebook_model->getAll();
		$this->load->view('ebook/buku', $data);
	}

	public function detail_ebook($id)
	{
		if($this->ebook_model->cek_ebook_by_id($id)==0)
		{
			redirect('ebook/detail_ebook');
		}
		$data['ebook']= $this->ebook_model->get_ebook_by_id($id);
		$this->load->view('ebook/detail_ebook', $data);
	}

	public function skripsi()
	{		
		$data['skripsi'] = $this->skripsi_model->getAll();
		$this->load->view('skripsi/skripsi', $data);
	}

	public function detail_skripsi($id)
	{
		if($this->skripsi_model->cek_skripsi_by_id($id)==0)
		{
			redirect('skripsi/detail_skripsi');
		}
		$data['skripsi']= $this->skripsi_model->get_skripsi_by_id($id);
		$this->load->view('skripsi/detail_skripsi', $data);
	}

	public function lainnya()
	{
		$data['lainnya'] = $this->lainnya_model->getAll();
		$this->load->view('lainnya/lainnya', $data);
	}

	public function detail_lainnya($id)
	{
		if($this->lainnya_model->cek_lainnya_by_id($id)==0)
		{
			redirect('lainnya/detail_lainnya');
		}
		$data['lainnya']= $this->lainnya_model->get_lainnya_by_id($id);
		$this->load->view('lainnya/detail_lainnya', $data);
	}

	public function kontak()
	{
		$this->load->view('kontak');
	}

	public function add_anggota()
	{
		$data['jenkel'] = $this->umum_model->tampilkan_data_kategori('jenis_kelamin','jenis_kelamin');
		$data['univ'] = $this->umum_model->tampilkan_data_kategori('universitas','nama_univ');
		$data['agama'] = $this->umum_model->tampilkan_data_kategori('agama','agama');
		$data['fakultas'] = $this->umum_model->tampilkan_data_kategori('fakultas','fakultas');
		$data['prodi'] = $this->umum_model->tampilkan_data_kategori('prodi','prodi');
		$this->load->view('user/add_user', $data);
	}
}
