<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public $nisn;
    public $nama_siswa;
    public $jurusan;
    public $asal_sekolah;
    public $tanggal_lahir;
    public $kota_asal;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'numeric'],

            ['field' => 'nama_siswa',
            'label' => 'Nama_siswa',
            'rules' => 'required'],
            
            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],
            
            ['field' => 'asal_sekolah',
            'label' => 'Asal_sekolah',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal_lahir',
            'rules' => 'required'],

            ['field' => 'kota_asal',
            'label' => 'Kota_asal',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nisn" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nisn = $post["nisn"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jurusan = $post["jurusan"];
        $this->asal_sekolah = $post["asal_sekolah"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->kota_asal = $post["kota_asal"];
        $this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nisn = $post["id"];
        $this->nama_siswa = $post["nama_siswa"];
        $this->jurusan = $post["jurusan"];
        $this->asal_sekolah = $post["asal_sekolah"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->kota_asal = $post["kota_asal"];
        $this->alamat = $post["alamat"];
        $this->db->update($this->_table, $this, array('nisn' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nisn" => $id));
    }
}
