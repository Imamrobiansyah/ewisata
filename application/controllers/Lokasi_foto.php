<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Lokasi_foto extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            redirect(site_url('auth'));
        }
        $this->load->helper('form');
		$this->load->model('m_lokasi_foto');
		$this->load->library('form_validation');

    }


    public function index()
    {
		$data["result"] = $this->m_lokasi_foto->getAll();
        $this->load->view("lokasi_foto/lokasi_foto_data", $data);

    }
    public function add()
    {
        $result = $this->m_lokasi_foto;
        $validation = $this->form_validation;
        $validation->set_rules($result->rules());

        if ($validation->run()) {
            $result->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("lokasi_foto/lokasi_foto_add");

        // $data['title'] = 'Tambah lokasi_foto';
        // $this->parser->parse('lokasi_foto/lokasi_foto_add', $data);
    }
	public function edit($id = null)
    {
        if (!isset($id)) redirect('lokasi_foto');
       
        $result = $this->m_lokasi_foto;
        $validation = $this->form_validation;
        $validation->set_rules($result->rules());

        if ($validation->run()) {
            $result->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["result"] = $result->getById($id);
        if (!$data["result"]) show_404();
        
        $this->load->view("lokasi_foto/lokasi_foto_edit", $data);
    }


    public function delete($id=null)
    {
		
        if (!isset($id)) show_404();
        
        if ($this->m_lokasi_foto->delete($id)) {
            redirect(site_url('lokasi_foto'));
        }
		
	}


}


/* End of file lokasi_foto.php */
/* Location: ./application/controllers/lokasi_foto.php */
