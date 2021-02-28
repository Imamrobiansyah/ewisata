<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kecamatan extends CI_Model
{

    public $table = 'kecamatan';

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil_kecamatan()
    {
        $this->db->select(["kec_code", "kota_code", "kecamatan"])
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

    public function detail_kecamatan($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("kec_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_kecamatan($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('kecamatan');
        $this->db->query($query);
    }

    public function ubah_kecamatan($data)
    {
        $this->db->where("kec_code", $this->input->post('kota_code'));
        $query = $this->db->set($data)->get_compiled_update('kecamatan');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('kec_code', $id);
        $this->db->delete('kecamatan');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */