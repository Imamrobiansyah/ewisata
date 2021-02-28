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
        $this->load->model('m_kecamatan', 'mod');
    }


    public function index()
    {
        $data['title'] = 'Tabel kecamatan';
        $data['result'] = $this->mod->tampil_kecamatan()['result'];
        $data['total_data'] = $this->mod->tampil_kecamatan()['total_data'];

        // print('<pre>'); print_r($data); exit();
        $this->parser->parse('kecamatan/kecamatan_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah kecamatan';
        $this->parser->parse('kecamatan/kecamatan_add', $data);
    }

    public function add_proses()
    {
        $data = [
            "kec_code"    => $this->input->post('kec_code'),
            "kota_code"    => $this->input->post('kota_code'),
            "kecamatan"    => $this->input->post('kecamatan')
        ];
        $this->mod->tambah_kecamatan($data);
        redirect(site_url('kecamatan'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah kecamatan';
        $data['result'] = $this->mod->detail_kecamatan($id);
        $this->parser->parse('kecamatan/kecamatan_edit', $data);
    }

    public function ubah_proses()
    {
        $data = [
            "kec_code"    => $this->input->post('kec_code'),
            "kota_code"    => $this->input->post('kota_code'),
            "kecamatan"    => $this->input->post('kecamatan')

        ];

        $this->mod->ubah_kecamatan($data);
        redirect(site_url('kecamatan'));
    }
    public function delete($id)
    {
        $this->mod->delete($id);
        redirect(site_url('kecamatan'));
    }
}

/* End of file kecamatan.php */
/* Location: ./application/controllers/kecamatan.php */