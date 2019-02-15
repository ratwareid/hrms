<?php

class Company_model extends CI_Model {

//  nama tabel dan primary key
    private $table = 'm_company';
    private $pk = 'company_id';

//    tampilkan semua data
//    public function getlist() {
//        $q = $this->db->order_by($this->pk);
//        $q = $this->db->get($this->table);
//        return $q;
//    }
    
    public function getlist_paging($limit, $start){
        $q = $this->db->get('m_company', $limit, $start);
        return $q;
    }
    

    public function getById($company_id) {
        $q = $this->db->where($this->pk,$company_id);
        $q = $this->db->get($this->table);
        return $q;
    }

    public function create($data) {
         $this->db->insert($this->table, $data);
    }

    public function edit($company_id,$data) {
        $this->db->where($this->pk, $company_id);
        $this->db->update($this->table, $data);
    }

    public function delete($company_id) {
        $this->db->where($this->pk, $company_id);
        $this->db->delete($this->table);
    }

}
