<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_lokasi extends CI_Model
{

    public $table = 'lokasi';

    public function __construct()
    {
        parent::__construct();
    }

	function provinsi()
    {
        $this->db->order_by('prov_code', 'ASC');
        return $this->db->from('provinsi')
          ->get()
          ->result();
    }

    function kota($idprov)
    {
        $this->db->where('prov_code', $idprov);
        $this->db->order_by('kota_code', 'ASC');
        return $this->db->from('kota')
            ->get()
            ->result();
    }
    function kecamatan($idkota)
    {
        $this->db->where('kota_code', $idkota);
        $this->db->order_by('kec_code', 'ASC');
        return $this->db->from('kecamatan')
            ->get()
            ->result();
    }
    function desa($idkec)
    {
        $this->db->where('kec_code', $idkec);
        $this->db->order_by('desa_code', 'ASC');
        return $this->db->from('desa')
            ->get()
            ->result();
    }



    public function tampil_lokasi()
    {
        	$this->db->select('id,lokasi_code, nama,kategori, alamat, provinsi,kota, kecamatan,desa, kode_pos, telepon,fax,email,status,deskripsi');
			$this->db->from('lokasi');
			$this->db->join('kategori','lkat_code = kat_code','left');
			$this->db->join('provinsi','lprov_code = prov_code','left');
			$this->db->join('kota','lkota_code = kota_code','left');	
			$this->db->join('kecamatan','lkec_code = kec_code','left');
			$this->db->join('desa','ldesa_code = desa_code','left');	
			$query = $this->db->get();
			
			return $query;


        // $query = $this->db->get_compiled_select();

        // $data['result'] = $this->db->query($query)->result();
        // $data['total_data'] = $this->db->count_all_results();
        // return $data;
    }

    public function detail_lokasi($id)
    {
        $this->db->select()
            ->from($this->table)
            ->where("lokasi_code", $id);
        $query = $this->db->get_compiled_select();

        $data['result'] = $this->db->query($query)->row();

        return $data;
    }

    public function tambah_lokasi($lokasi_code,$nama,$kategori,$alamat,$provinsi,$kota,$kecamatan,$desa,$kode_pos,$telepon,$fax,$email,$status,$deskripsi)
    {
		$data = array(
			//'id' => $id,
			'lokasi_code' => $lokasi_code,
			'nama' => $nama,
			'lkat_code' => $kategori,
			'alamat' => $alamat,
			'lprov_code' => $provinsi,
			'lkota_code' => $kota,
			'lkec_code' => $kecamatan,
			'ldesa_code' => $desa,
			'kode_pos' => $kode_pos,
			'telepon' => $telepon,
			'fax' => $fax,
			'email' => $email,
			'status' => $status,
			'deskripsi' => $deskripsi  
		);
		$this->db->insert('lokasi',$data);

        // $query = $this->db->set($data)->get_compiled_insert('lokasi');
        // $this->db->query($query);
    }

    public function ubah_lokasi($data)
    {
        $this->db->where("lokasi_code", $this->input->post('lokasi_code'));
        $query = $this->db->set($data)->get_compiled_update('lokasi');
        $this->db->query($query);
    }
    public function delete($id)
    {
        // Attempt to delete the row
        $this->db->where('lokasi_code', $id);
        $this->db->delete('lokasi');
        // Was the row deleted?
        if ($this->db->affected_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }


}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */
