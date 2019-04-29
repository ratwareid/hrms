<?php

class User_model extends CI_Model {

//    nama tabel dan primary key
    private $table = 'm_user';
    private $pk = 'userid';

//    tampilkan semua data
    public function tampilkanSemua() {
        $q = $this->db->order_by($this->pk);
        $q = $this->db->get($this->table);
        return $q;
    }

    public function getById($userid) {
        $q = $this->db->where($this->pk,$userid);
        $q = $this->db->get($this->table);
        return $q;
    }

    public function tambah($data) {
        $this->db->insert($this->table, $data);
    }

    public function ubah($userid,$data) {

        $this->db->where($this->pk, $userid);
        $this->db->update($this->table, $data);
    }

    public function hapus($userid) {
        $this->db->where($this->pk, $userid);
        $this->db->delete($this->table);
    }

}
