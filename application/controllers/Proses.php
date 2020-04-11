<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model(['anggota_model']);
    }
    
    public function add_user()
    {
        $post = $this->input->post();
        if($this->anggota_model->cek_anggota_by_nim(strtolower($post['nim']))==0)
        {
            $username = $post['nim'];
            $password = $post['password'];
            $email    = $post['email'];
            $additional_data = array(
                'first_name'=>$post['nama'],
                'last_name'=>''
            );
            $group = array('2');
            $id_user = $this->ion_auth->register($username, $password, $email, $additional_data, $group);

            $data = [
                'id_user'=>$id_user,
                'nama'=>$post['nama'],
                'agama'=>$post['agama'],
                'jk'=>$post['jk'],
                'univ'=>$post['univ'],
                'fakultas'=>$post['fakultas'],
                'prodi'=>$post['prodi'],
                'nim'=>strtolower($post['nim']),
                'email'=>$post['email'],
                'no_hp'=>$post['no_hp'],
                'alamat'=>$post['alamat'],
                'status'=>'aktif'
            ];
            $this->anggota_model->add_anggota($data);
            redirect('auth/login');
        }
        else
        {
            // $this->session->set_flashdata('err','NIM yang anda gunakan sudah terdaftar');
            redirect('modul/add_user');
        }
    }
}
