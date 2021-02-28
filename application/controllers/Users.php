<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect(site_url('auth'));
		}
		$this->load->helper('form');
		$this->load->model('m_users', 'mod');		
	}


	public function index()
	{
		$data['title']='Tabel Users';
		$data['result']=$this->mod->tampil_users()['result'];
		$data['total_data']=$this->mod->tampil_users()['total_data'];

		// print('<pre>'); print_r($data); exit();
		$this->parser->parse('users/users_data', $data);
	}

	public function add()
	{		
		$data['title']='Tambah Users';				
		$this->parser->parse('users/users_add', $data);
	}

	public function add_proses()
	{
		$data=[
			"username"	=> $this->input->post('username'),
			"nama_user"	=> $this->input->post('nama_user'),
			"password"	=> md5($this->input->post('password')),
			"email"	=> $this->input->post('email'),
			"telepon"	=> $this->input->post('telepon'),
			"hak_akses"	=> $this->input->post('hak_akses'),
			"status"	=> $this->input->post('status'),
		];		
		$this->mod->tambah_users($data);
		redirect(site_url('users'));
	}

	public function ubah($id)
	{
		$data['title']='Ubah Users';
		$data['result']=$this->mod->detail_users($id);
		$this->parser->parse('users/users_edit', $data);	}

	public function ubah_proses()
	{
		$data=[
			"username"	=> $this->input->post('username'),
			"nama_user"	=> $this->input->post('nama_user'),
			"password"	=> md5($this->input->post('password')),
			"email"	=> $this->input->post('email'),
			"telepon"	=> $this->input->post('telepon'),
			"hak_akses"	=> $this->input->post('hak_akses'),
			"status"	=> $this->input->post('status'),
		];	

		$this->mod->ubah_users($data);
		redirect(site_url('users'));
	}
	public function delete($id)
	{
		 $this->mod->delete($id);
		redirect(site_url('users'));
	}
	
}

/* End of file produk.php */
/* Location: ./application/controllers/produk.php */