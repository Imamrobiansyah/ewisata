<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_provinsi extends CI_Model
{

    public $table = 'provinsi';

    public function __construct()
    {
        parent::__construct();
    }

	// function get_sub_lokasi($prov_code){
	// 	$query = $this->db->get_where('kota', array('prov_code' => $prov_code));
	// 	return $query->result_array();
	// }




    public function tampil_provinsi()
    {
        $this->db->select(["prov_code","provinsi"])
            ->from($this->table);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->result();
        $data['total_data'] = $this->db->count_all_results();
        return $data;
    }
 

    public function detail_provinsi($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("prov_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_provinsi($data)
    {
        $query = $this->db->set($data)->get_compiled_insert('provinsi');
        $this->db->query($query);
    }

    public function ubah_provinsi($data)
    {
        $this->db->where("prov_code", $this->input->post('prov_code'));
        $query = $this->db->set($data)->get_compiled_update('provinsi');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('prov_code', $id);
        $this->db->delete('provinsi');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }


}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */
