<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_user')) {
            redirect(site_url('auth'));
        }
        $this->load->helper('form');
        $this->load->model('m_lokasi', 'mod');
        $this->load->model('m_kategori', 'kat');
        $this->load->model('m_provinsi', 'prov');

    }


    public function index()
    {
        //$data['title'] = 'Tabel Lokasi';
		$data['lok'] = $this->mod->tampil_lokasi()->result();
		$this->load->view('lokasi/lokasi_data',$data);
        // $data['result'] = $this->mod->tampil_lokasi()['result'];
        // $data['total_data'] = $this->mod->tampil_lokasi()['total_data'];


        //$this->parser->parse('lokasi/lokasi_data', $data);
    }

    public function add()
    {
        $data['title'] = 'Tambah lokasi';
        $data ['result'] = $this->kat->tampil_kategori()['result'];
        $data ['p'] = $this->prov->tampil_provinsi()['result'];
       // $data['result'] = $this->mod->tampil_lokasi();
		// $data['provinsi'] = $this->db->get('provinsi');
		$this->load->view('lokasi/lokasi_add', $data);
        //$this->parser->parse('lokasi/lokasi_add', $data);
    }

    public function add_proses()
    {
		//$id 	= $this->input->post('id',TRUE);
		$lokasi_code	= $this->input->post('lokasi_code',TRUE);
		$nama = $this->input->post('nama',TRUE);
		$idkategori 	= $this->input->post('kategori',TRUE);
		$alamat 	= $this->input->post('alamat',TRUE);
		$idprovinsi	= $this->input->post('provinsi',TRUE);
		$idkota = $this->input->post('kota',TRUE);
		$idkecamatan 	= $this->input->post('kecamatan',TRUE);
		$iddesa	= $this->input->post('desa',TRUE);
		$kode_pos	= $this->input->post('kode_pos',TRUE);
		$telepon = $this->input->post('telepon',TRUE);
		$fax 	= $this->input->post('fax',TRUE);
		$email	= $this->input->post('email',TRUE);
		$status = $this->input->post('status',TRUE);
		$deskripsi 	= $this->input->post('deskripsi',TRUE);
		$this->mod->tambah_lokasi($lokasi_code,$nama,$idkategori,$alamat,$idprovinsi,$idkota,$idkecamatan,$iddesa,$kode_pos,$telepon,$fax,$email,$status,$deskripsi);
		$this->session->set_flashdata('msg','<div class="alert alert-success">Product Saved</div>');
		redirect('lokasi');


        // $this->mod->tambah_lokasi($data);
        // redirect(site_url('lokasi'));

    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Lokasi';
        $data['result'] = $this->mod->detail_lokasi($id);
        // $this->parser->parse('lokasi/lokasi_edit', $data);
		$this->load->view('lokasi/lokasi_edit', $data);
    }

    public function ubah_proses()
    {
        $data = [
            //"id"    => $this->input->post('id'),
            "lokasi_code"    => $this->input->post('lokasi_code'),
            "nama"    => $this->input->post('nama'),
			"kat_code"    => $this->input->post('kategori'),
            "alamat"    => $this->input->post('alamat'),
			"prov_code"    => $this->input->post('provinsi'),
            "kota_code"    => $this->input->post('kota'),
			"kec_code"    => $this->input->post('kecamatan'),
			"desa_code"    => $this->input->post('desa'),
            "kode_pos"    => $this->input->post('kode_pos'),
			"telepon"    => $this->input->post('telepon'),
			"fax"    => $this->input->post('fax'),
            "email"    => $this->input->post('email'),
			"status"    => $this->input->post('status'),
			"deskripsi"    => $this->input->post('deskripsi')	
        ];

        $this->mod->ubah_lokasi($data);
        redirect(site_url('lokasi'));
    }
    public function delete($id)
    {
        $this->mod->delete($id);
        redirect(site_url('lokasi'));
    }


	function get_kota()
    {
        $idprov=$this->input->post('prov_code');
        $data=$this->mod->kota($idprov);
        echo json_encode($data);
    }

    function get_kec()
    {
        $idkota=$this->input->post('kota_code');
        $data=$this->mod->kecamatan($idkota);
        echo json_encode($data);
    }
	function get_desa()
    {
        $idkec=$this->input->post('kec_code');
        $data=$this->mod->desa($idkec);
        echo json_encode($data);
    }

}

/* End of file lokasi.php */
/* Location: ./application/controllers/lokasi.php */
