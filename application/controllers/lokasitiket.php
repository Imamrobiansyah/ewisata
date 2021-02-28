<?php
defined('BASEPATH') || exit('No direct script access allowed');

class lokasitiket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            redirect(site_url('auth'));
        }
        $this->load->helper('form');
        $this->load->model('m_lokasitiket', 'mod');
    }


    public function index()
    {
        $data['title'] = 'Tabel lokasi tiket';
        $data['result'] = $this->mod->tampil_lokasitiket()['result'];
        $data['total_data'] = $this->mod->tampil_lokasitiket()['total_data'];

        $this->parser->parse('lokasitiket/lokasitiket_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah lokasitiket';
        $this->parser->parse('lokasitiket/lokasitiket_add', $data);
    }

    public function add_proses()
    {
        $data = [
            "lokasi_code"    => $this->input->post('lokasi_code'),
            "tiket_code"    => $this->input->post('tiket_code'),
            "harga"    => $this->input->post('harga')
        ];
        $this->mod->tambah_lokasitiket($data);
        redirect(site_url('lokasitiket'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah lokasitiket';
        $data['result'] = $this->mod->detail_lokasitiket($id);
        $this->parser->parse('lokasitiket/lokasitiket_edit', $data);
    }

    public function ubah_proses()
    {
        $data = [
            "lokasi_code"    => $this->input->post('lokasi_code'),
            "tiket_code"    => $this->input->post('tiket_code'),
            "harga"    => $this->input->post('harga')

        ];

        $this->mod->ubah_lokasitiket($data);
        redirect(site_url('lokasitiket'));
    }
    public function delete($id)
    {
        $this->mod->delete($id);
        redirect(site_url('lokasitiket'));
    }
}

/* End of file lokasitiket.php */
/* Location: ./application/controllers/lokasitiket.php */