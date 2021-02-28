<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Lokasijadwaljam extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            redirect(site_url('auth'));
        }
        $this->load->helper('form');
        $this->load->model('m_lokasijadwaljam', 'mod');
    }


    public function index()
    {
        $data['title'] = 'Tabel Lokasi Jadwal Jam';
        $data['result'] = $this->mod->tampil_lokasijadwaljam()['result'];
        $data['total_data'] = $this->mod->tampil_lokasijadwaljam()['total_data'];


        $this->parser->parse('lokasijadwaljam/lokasijadwaljam_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah lokasijadwalhari';
        $this->parser->parse('lokasijadwaljam/lokasijadwaljam_add', $data);
    }

    public function add_proses()
    {
        $data = [
            "id"    => $this->input->post('id'),
            "lokasi_code"    => $this->input->post('lokasi_code'),
            "senin"    => $this->input->post('senin'),
			"selasa"    => $this->input->post('selasa'),
            "rabu"    => $this->input->post('rabu'),
			"kamis"    => $this->input->post('kamis'),
            "jumat"    => $this->input->post('jumat'),
			"sabtu"    => $this->input->post('sabtu'),
			"minggu"    => $this->input->post('minggu')								
        ];
        $this->mod->tambah_lokasijadwaljam($data);
        redirect(site_url('lokasijadwaljam'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah lokasi Jadwal Jam';
        $data['result'] = $this->mod->detail_lokasijadwaljam($id);
        $this->parser->parse('lokasijadwaljam/lokasijadwaljam_edit', $data);
    }

    public function ubah_proses()
    {
        $data = [
            "id"    => $this->input->post('id'),
            "lokasi_code"    => $this->input->post('lokasi_code'),
            "senin"    => $this->input->post('senin'),
			"selasa"    => $this->input->post('selasa'),
            "rabu"    => $this->input->post('rabu'),
			"kamis"    => $this->input->post('kamis'),
            "jumat"    => $this->input->post('jumat'),
			"sabtu"    => $this->input->post('sabtu'),
			"minggu"    => $this->input->post('minggu')		
        ];

        $this->mod->ubah_lokasijadwaljam($data);
        redirect(site_url('lokasijadwaljam'));
    }
    public function delete($id)
    {
        $this->mod->delete($id);
        redirect(site_url('lokasijadwaljam'));
    }
}

/* End of file lokasijadwalhari.php */
/* Location: ./application/controllers/lokasijadwalhari.php */
