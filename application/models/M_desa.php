<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_desa extends CI_Model
{

    public $table = 'desa';

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil_desa()
    {
        $this->db->select(["desa_code", "kec_code", "desa"])
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

    public function detail_desa($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("desa_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_desa($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('desa');
        $this->db->query($query);
    }

    public function ubah_desa($data)
    {
        $this->db->where("desa_code", $this->input->post('desa_code'));
        $query = $this->db->set($data)->get_compiled_update('desa');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('desa_code', $id);
        $this->db->delete('desa');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */