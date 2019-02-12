<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
//            jika belum login redirect ke login
        if ($this->session->userdata('logged') <> 1) {
            redirect(site_url('auth'));
        }
    }


    public function index()
    {

        $this->load->model('admin_model');
        $rows = $this->admin_model->showall()->result();

        $data = array(
            'title' => 'Ratwareid.com',
            'judul' => 'Halaman Admin',
            'content' => 'admin/index',
            'rows' => $rows
        );

        $this->load->view('admin',$data);
    }
}