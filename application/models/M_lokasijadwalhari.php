<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_lokasijadwalhari extends CI_Model
{

    public $table = 'lokasi_jawdal_hari';

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil_lokasijadwalhari()
    {
        $this->db->select(["id", "lokasi_code", "senin","selasa", "rabu", "kamis","jumat", "sabtu","minggu"])
            ->from($this->table);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->result();
        $data['total_data'] = $this->db->count_all_results();
        return $data;
    }


    public function detail_lokasijadwalhari($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("lokasi_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_lokasijadwalhari($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('lokasi_jawdal_hari');
        $this->db->query($query);
    }

    public function ubah_lokasijadwalhari($data)
    {
        $this->db->where("lokasi_code", $this->input->post('lokasi_code'));
        $query = $this->db->set($data)->get_compiled_update('lokasi_jawdal_hari');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('lokasi_code', $id);
        $this->db->delete('lokasi_jawdal_hari');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }
}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */
