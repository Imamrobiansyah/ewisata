<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_lokasitiket extends CI_Model
{

    public $table = 'lokasi_tiket';

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil_lokasitiket()
    {
        $this->db->select(["lokasi_code", "tiket_code", "harga"])
            ->from($this->table);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->result();
        $data['total_data'] = $this->db->count_all_results();
        return $data;
    }
    // public function tampil_produk_pilhan()
    // {
    // 	$this->db->select(["id_produk", "nama"])
    // 		->from($this->table);
    // 	$query = $this->db->get_compiled_select();

    // 	$data['result'] = $this->db->query($query)->result_array();
    // 	$data['total_data'] = $this->db->count_all_results();
    // 	return $data;
    // }

    public function detail_lokasitiket($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("lokasi_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_lokasitiket($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('lokasi_tiket');
        $this->db->query($query);
    }

    public function ubah_lokasitiket($data)
    {
        $this->db->where("lokasi_code", $this->input->post('lokasi_code'));
        $query = $this->db->set($data)->get_compiled_update('lokasi_tiket');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('lokasi_code', $id);
        $this->db->delete('lokasi_tiket');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */