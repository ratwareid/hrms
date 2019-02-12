<?php

class User_model extends CI_Model {

//    nama tabel dan primary key
    private $table = 'userdata';
    private $pk = 'id';

//    tampilkan semua data
    public function tampilkanSemua() {
        $q = $this->db->order_by($this->pk);
        $q = $this->db->get($this->table);
        return $q;
    }

    public function getById($id) {
        $q = $this->db->where($this->pk,$id);
        $q = $this->db->get($this->table);
        return $q;
    }

    public function tambah($data) {
        $this->db->insert($this->table, $data);
    }

    public function ubah($id,$data) {

        $this->db->where($this->pk, $id);
        $this->db->update($this->table, $data);
    }

    public function hapus($id) {
        $this->db->where($this->pk, $id);
        $this->db->delete($this->table);
    }

}
