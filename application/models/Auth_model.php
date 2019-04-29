<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

//    untuk mengcek jumlah username dan password yang sesuai
    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('m_user');
        return $query->num_rows();
    }

//    untuk mengambil data hasil login
    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('m_user')->row();
    }
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */
