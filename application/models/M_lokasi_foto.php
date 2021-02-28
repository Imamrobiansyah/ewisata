<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_lokasi_foto extends CI_Model
{
	private $_table = "lokasi_foto";

    // public $id;
    public $lokasi_code;
    public $foto = "default.jpg";
    public $status;

    public function rules()
    {
        return [
            ['field' => 'lokasi_code',
            'label' => 'Kode Lokasi',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["lokasi_code" => $id])->row();
    }

    public function save()
    {
		$post = $this->input->post();
		// $this->id = uniqid();
        $this->lokasi_code = $post["lokasi_code"];
		$this->foto = $this->_uploadImage();
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // $this->id =  $post["id"];
        $this->lokasi_code = $post["lokasi_code"];
		
		if (!empty($_FILES["foto"]["name"])) {
			$this->foto = $this->_uploadImage();
		} else {
			$this->foto = $post["foto"];
		}

        $this->status = $post["status"];
        $this->db->update($this->_table, $this, array('lokasi_code' => $post['lokasi_code']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("lokasi_code" => $id));
	}
	private function _uploadImage()
{
    $config['upload_path']          = './upload/lokasi/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->lokasi_code;
    $config['overwrite']			= true;
    $config['max_size']             = 6024; // 6MB
    // $config['max_width']            = 1024;
	// $config['max_height']           = 768;
	
//The upload path does not appear to be valid”. Codeigniter file upload
    // $this->load->library('upload', $config);
	$this->upload->initialize($config);
    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
	}
	//cek error
    print_r($this->upload->display_errors());
    // return "default.jpg";
}
private function _deleteImage($id)
{
	$result = $this->getById($id);
	if ($result->foto != "default.jpg") {
		$filename = explode(".", $result->foto)[0];
		return array_map('unlink', glob(FCPATH."upload/lokasi/$filename.*"));
	}
}

}

/* End of file m_produk.php */
/* Location: ./application/models/m_produk.php */
