<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

        function __construct()
        {
            parent::__construct();
//            jika belum login redirect ke login
            if ($this->session->userdata('logged')<>1) {
                redirect(site_url('auth'));
            }
        }

        public function index()
      	{
                  $this->load->model('user_model');

                  $rows = $this->user_model->tampilkanSemua()->result();

                  $data = array(
                      'title' => 'Ratwareid.com',
                      'menu' => 'dashboard',
                      'judul' => 'Halaman Home',
                      'content' => 'home/content',
                      'rows' => $rows
                  );
      //		echo 'ini adalah controller user';

                  $this->load->view('home',$data);
      	}
}
