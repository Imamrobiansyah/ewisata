<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kota extends CI_Model
{

    public $table = 'kota';

    public function __construct()
    {
        parent::__construct();
    }

	function get_sub_kecamatan($kota_code){
		$query = $this->db->get_where('kecamatan', array('kota_code' => $kota_code));
		return $query;
	}

    public function tampil_kota()
    {
        $this->db->select(["kota_code","prov_code","kota"])
            ->from($this->table);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->result();
        $data['total_data'] = $this->db->count_all_results();
        return $data;
    }

    public function detail_kota($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("kota_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_kota($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('kota');
        $this->db->query($query);
    }

    public function ubah_kota($data)
    {
        $this->db->where("kota_code", $this->input->post('kota_code'));
        $query = $this->db->set($data)->get_compiled_update('kota');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('kota_code', $id);
        $this->db->delete('kota');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }

}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */
