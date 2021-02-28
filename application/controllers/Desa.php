<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Desa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            redirect(site_url('auth'));
        }
        $this->load->helper('form');
        $this->load->model('m_desa', 'mod');
    }


    public function index()
    {
        $data['title'] = 'Tabel Desa';
        $data['result'] = $this->mod->tampil_desa()['result'];
        $data['total_data'] = $this->mod->tampil_desa()['total_data'];

        $this->parser->parse('desa/desa_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah desa';
        $this->parser->parse('desa/desa_add', $data);
    }

    public function add_proses()
    {
        $data = [
            "desa_code"    => $this->input->post('desa_code'),
            "kec_code"    => $this->input->post('kec_code'),
            "desa"    => $this->input->post('desa')
        ];
        $this->mod->tambah_desa($data);
        redirect(site_url('desa'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah desa';
        $data['result'] = $this->mod->detail_desa($id);
        $this->parser->parse('desa/desa_edit', $data);
    }

    public function ubah_proses()
    {
        $data = [
            "desa_code"    => $this->input->post('desa_code'),
            "kec_code"    => $this->input->post('kec_code'),
            "desa"    => $this->input->post('desa')

        ];

        $this->mod->ubah_desa($data);
        redirect(site_url('desa'));
    }
    public function delete($id)
    {
        $this->mod->delete($id);
        redirect(site_url('desa'));
    }
}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */