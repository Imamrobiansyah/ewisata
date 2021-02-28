<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_users extends CI_Model
{

	public $table = 'users';

	public function __construct()
	{
		parent::__construct();
	}	

	public function tampil_users()
	{
		$this->db->select(["id_user", "username", "nama_user", "password", "email", "telepon", "foto", "hak_akses", "status"])
			->from($this->table);
		$query = $this->db->get_compiled_select();

		$data['result'] = $this->db->query($query)->result();
		$data['total_data'] = $this->db->count_all_results();
		return $data;
	}
	public function tampil_produk_pilhan()
	{
		$this->db->select(["id_produk", "nama"])
			->from($this->table);
		$query = $this->db->get_compiled_select();

		$data['result'] = $this->db->query($query)->result_array();
		$data['total_data'] = $this->db->count_all_results();
		return $data;
	}

	public function detail_users($id)
	{
		$this->db->select()
			->from($this->table)
			->where("id_user", $id);
		$query = $this->db->get_compiled_select();

		$data['result'] = $this->db->query($query)->row();

		return $data;
	}

	public function tambah_users($data)
	{
		$query = $this->db->set($data)->get_compiled_insert('users');
		$this->db->query($query);
	}

	public function ubah_users($data)
	{
		$this->db->where("username", $this->input->post('username'));
		$query = $this->db->set($data)->get_compiled_update('users');
		$this->db->query($query);
	}
	public function delete($id)
	{
		// Attempt to delete the row
		$this->db->where('id_user', $id);
		$this->db->delete('users');
		// Was the row deleted?
		if ($this->db->affected_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}
}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */