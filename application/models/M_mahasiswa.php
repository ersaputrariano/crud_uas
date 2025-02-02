<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    public function get_mahasiswa()
    {
        //select semua data mahasiswa
        $this->db->select('*');
        $this->db->from('tbmahasiswa');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }
    public function simpan_mahasiswa($data)
    {
        //insert data
        return $this->db->insert("tbmahasiswa", $data);
    }
    public function edit_mahasiswa($id)
    {
        //edity data
        $query = $this->db->where("id", $id)->get("tbmahasiswa");
        return $query->row();
    }
    public function update_mahasiswa($data, $id)
    {
        //update mahasiswa
        return $this->db->update("tbmahasiswa", $data, $id);
    }
    public function hapus_mahasiswa($id)
    {
    //hapus mahasiswa
    return $this->db->delete("tbmahasiswa", array('id' => $id));
    }
}
