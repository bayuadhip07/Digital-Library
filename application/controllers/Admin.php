<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model(['anggota_model','umum_model','jurnal_model','ebook_model']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		if(!$this->ion_auth->logged_in()){
			redirect('auth/login/');
		}
		$g = array(1);
		if(!$this->ion_auth->in_group($g)){
			redirect('user');
		}
    }
    
	public function index()
	{
        $this->load->view('admin/home');
	}

	public function error()
	{
		$this->load->view('user/404');
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

	public function universitas()
	{
		$data['univ'] = $this->umum_model->get_univ();
		$this->load->view('admin/master_data/universitas/universitas', $data);
	}

	public function edit_univ($id)
	{
		$data['univ'] = $this->umum_model->get_univ_by_id($id);
		$this->load->view('admin/master_data/universitas/edit_univ', $data);
	}

	public function tambah_univ()
	{
		$this->load->view('admin/master_data/universitas/tambah_univ');
	}

	public function fakultas()
	{
		$data['fakultas'] = $this->umum_model->get_fakultas();
		$this->load->view('admin/master_data/fakultas/fakultas', $data);
	}

	public function tambah_fakultas()
	{
		$this->load->view('admin/master_data/fakultas/tambah_fakultas');
	}

	public function edit_fakultas($id)
	{
		$data['fakultas'] = $this->umum_model->get_fakultas_by_id($id);
		$this->load->view('admin/master_data/fakultas/edit_fakultas', $data);
	}

	public function prodi()
	{
		$data['prodi'] = $this->umum_model->get_prodi();
		$this->load->view('admin/master_data/prodi/prodi', $data);
	}

	public function tambah_prodi()
	{
		$this->load->view('admin/master_data/prodi/tambah_prodi');
	}

	public function edit_prodi($id)
	{
		$data['prodi'] = $this->umum_model->get_prodi_by_id($id);
		$this->load->view('admin/master_data/prodi/edit_prodi', $data);
	}

	public function agama()
	{
		$data['agama'] = $this->umum_model->get_agama();
		$this->load->view('admin/master_data/agama/agama', $data);
	}

	public function tambah_agama()
	{
		$this->load->view('admin/master_data/agama/tambah_agama');
	}

	public function edit_agama($id)
	{
		$data['agama'] = $this->umum_model->get_agama_by_id($id);
		$this->load->view('admin/master_data/agama/edit_agama', $data);
	}

	public function dokumen()
	{
		$data['dokumen'] = $this->umum_model->get_dokumen();
		$this->load->view('admin/master_data/dokumen/dokumen', $data);
	}

	public function tambah_dokumen()
	{
		$this->load->view('admin/master_data/dokumen/tambah_dokumen');
	}

	public function edit_dokumen($id)
	{
		$data['dokumen'] = $this->umum_model->get_dokumen_by_id($id);
		$this->load->view('admin/master_data/dokumen/edit_dokumen', $data);
	}

	// bagian journal_admin
	public function journal_admin()
	{
		$data['jurnal'] =$this->jurnal_model->getAll();
		$this->load->view('admin/modul_journal/journal_admin.php', $data);
	}

	public function edit_journal($id_jurnal)
	{
		$data['jurnal'] = $this->jurnal_model->get_jurnal_by_id($id_jurnal);
		if($this->jurnal_model->cek_jurnal_by_id($id_jurnal)==0)
		{
			redirect('admin/modul_journal/journal_admin.php');
		}
		$this->load->view('admin/modul_journal/edit_journal.php', $data);
	}

	public function tambah_journal()
	{
		$this->load->view('admin/modul_journal/tambah_journal.php');
	}

	public function detail_journal($id_jurnal)
	{
		$data['jurnal'] = $this->jurnal_model->get_jurnal_by_id($id_jurnal);
		if($this->jurnal_model->cek_jurnal_by_id($id_jurnal)==0)
		{
			redirect('admin/modul_journal/journal_admin.php');
		}
		$this->load->view('admin/modul_journal/detail_journal.php', $data);
	}

//tutup function journal

// bagian ebook_admin
public function ebook_admin()
{
	$data['ebook'] =$this->ebook_model->getAll();
	$this->load->view('admin/modul_ebook/ebook_admin.php', $data);
}

public function edit_ebook($id_buku)
{
	$data['ebook'] = $this->ebook_model->get_ebook_by_id($id_buku);
	if($this->ebook_model->cek_ebook_by_id($id_buku)==0)
	{
		redirect('admin/modul_ebook/ebook_admin.php');
	}
	$this->load->view('admin/modul_ebook/edit_ebook.php', $data);
}

public function tambah_ebook()
{
	$this->load->view('admin/modul_ebook/tambah_ebook.php');
}

public function detail_ebook($id_buku)
{
	$data['ebook'] = $this->ebook_model->get_ebook_by_id($id_buku);
	if($this->ebook_model->cek_ebook_by_id($id_buku)==0)
	{
		redirect('admin/modul_ebook/ebook_admin.php');
	}
	$this->load->view('admin/modul_ebook/detail_ebook.php', $data);
}

//tutup function ebook

}
