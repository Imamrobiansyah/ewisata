<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kategori extends CI_Model
{

    public $table = 'kategori';

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil_kategori()
    {
        $this->db->select(["kat_code", "kategori", "icon"])
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

    public function detail_kategori($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("kat_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_kategori($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('kategori');
        $this->db->query($query);
    }

    public function ubah_kategori($data)
    {
        $this->db->where("kat_code", $this->input->post('kat_code'));
        $query = $this->db->set($data)->get_compiled_update('kategori');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('kat_code', $id);
        $this->db->delete('kategori');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */