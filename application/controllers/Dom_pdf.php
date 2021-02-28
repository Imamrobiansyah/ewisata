<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dom_pdf extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->database();    
        $this->load->helper(array('url','form'));
    }
    public function download($id){

    $data['la'] = $this->db->get_where('lokasi',array('kat_code'=>$id))->result();

    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'portrait');
    $this->pdf->load_view('pdf/laporan_pdf', $data);
}
}