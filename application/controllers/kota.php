<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kecamatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            redirect(site_url('auth'));
        }
        $this->load->helper('form');
        $this->load->model('m_kota', 'mod');
    }


    public function index()
    {
        $data['title'] = 'Tabel kota';
        $data['result'] = $this->mod->tampil_kota()['result'];
        $data['total_data'] = $this->mod->tampil_kota()['total_data'];

        // print('<pre>'); print_r($data); exit();
        $this->parser->parse('kota/kota_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah kota';
        $this->parser->parse('kota/kota_add', $data);
    }

    public function add_proses()
    {
        $data = [
            "kota_code"    => $this->input->post('kota_code'),
            "prov_code"    => $this->input->post('prov_code'),
            "kota"    => $this->input->post('kota')
        ];
        $this->mod->tambah_kota($data);
        redirect(site_url('kota'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah kota';
        $data['result'] = $this->mod->detail_kota($id);
        $this->parser->parse('kota/kota_edit', $data);
    }

    public function ubah_proses()
    {
        $data = [
            "kota_code"    => $this->input->post('kota_code'),
            "prov_code"    => $this->input->post('prov_code'),
            "kota"    => $this->input->post('kota')

        ];

        $this->mod->ubah_kota($data);
        redirect(site_url('kota'));
    }
    public function delete($id)
    {
        $this->mod->delete($id);
        redirect(site_url('kota'));
    }
}

/* End of file kota.php */
/* Location: ./application/controllers/kota.php */