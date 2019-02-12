<?php
/**
 * Created by IntelliJ IDEA.
 * User: jerry
 * Date: 25/01/19
 * Time: 11:17
 */

class Admin_model extends CI_Model {

//    nama tabel dan primary key
    private $table = 'userdata';
    private $pk = 'id';

    public function showall() {
        $q = $this->db->order_by($this->pk);
        $q = $this->db->get($this->table);
        return $q;
    }

}
?>