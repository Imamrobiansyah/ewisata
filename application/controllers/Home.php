<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {




	public function index()
	{
		$data ['result'] 	= $this->M_lokasi_foto->getAll();
		$this->load->view('_partials/home_header');
		$this->load->view('home/home_data', $data);
		$this->load->view('_partials/home_footer');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
