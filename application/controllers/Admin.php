<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model(['anggota_model','umum_model']);
    }
    
    public function index(){
        $this->load->view('admin/home');
	}
	
	public function anggota()
	{
		$data['anggota'] = $this->anggota_model->get_all();
		$this->load->view('admin/modul_anggota/anggota', $data);
	}

	public function tambah_anggota()
	{
		$data['jenkel'] = $this->umum_model->tampilkan_data_kategori('jenis_kelamin','jenis_kelamin');
		$data['univ'] = $this->umum_model->tampilkan_data_kategori('universitas','nama_univ');
		$data['agama'] = $this->umum_model->tampilkan_data_kategori('agama','agama');
		$data['fakultas'] = $this->umum_model->tampilkan_data_kategori('fakultas','fakultas');
		$data['prodi'] = $this->umum_model->tampilkan_data_kategori('prodi','prodi');
		$this->load->view('admin/modul_anggota/tambah_anggota', $data);
	}

	public function detail_anggota($id)
	{
		if($this->anggota_model->cek_anggota_by_id($id)==0)
		{
			redirect('admin/anggota');
		}
		$data['anggota'] = $this->anggota_model->get_anggota_by_id($id);	
		$this->load->view('admin/modul_anggota/detail_anggota', $data);
	}

	public function edit_anggota($id)
	{
		if($this->anggota_model->cek_anggota_by_id($id)==0)
		{
			redirect('admin/anggota');
		}
		$data['anggota'] = $this->anggota_model->get_anggota_by_id($id);
		$data['univ'] = $this->umum_model->get_univ();
		$data['agama'] = $this->umum_model->get_agama();
		$data['fakultas'] = $this->umum_model->get_fakultas();
		$data['prodi'] = $this->umum_model->get_prodi();
		$data['jenkel'] = $this->umum_model->get_jenkel();
		$this->load->view('admin/modul_anggota/edit_anggota', $data);
	}


}
