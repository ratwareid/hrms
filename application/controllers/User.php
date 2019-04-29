<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

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
				'menu' => 'user',
                'judul' => 'Halaman User',
                'content' => 'user/content',
                'rows' => $rows
            );
//		echo 'ini adalah controller user';

            $this->load->view('user',$data);
	}

        public function create() {
            $data = array(
                'title' => 'Ratwareid.com',
				'menu' => 'user',
                'heading' => 'User / Add New User',
                'action' => base_url().'user/docreate',
                'content' => 'user/form-input',
				'userid' => '',
                'username' => '',
				'fullname' => '',
				'email' => '',
                'password' => '',
				'error' => ''
            );

            $this->load->view('user',$data);
        }

        public function docreate() {

//            warning : aksi ini tanpa ada validasi form
            $data = array(
                'username' => $this->input->post('username'),
				'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );

            $this->load->model('user_model');
            $this->user_model->tambah($data);

            redirect(base_url().'user');
        }

        public function edit($userid) {

            $this->load->model('user_model');
            $row = $this->user_model->getById($userid)->row();

            $data = array(
                'title' => 'Ratwareid.com',
                'menu' => 'company',
                'heading' => 'Edit Company',
				'error' => '',
                'action' => base_url().'user/doedit',
                'content' => 'user/form-input',
                'username' => $row->username,
				'fullname' => $row->fullname,
				'email' => $row->email,
                'password' => '',
                'userid' => $row->userid,
            );

            $this->load->view('user',$data);
        }

        public function doedit() {
//            warning : aksi ini tanpa ada validasi form
            $updatepassword = array(
				'username' => $this->input->post('username'),
                'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );

            $tidakupdatepassword = array(
			'username' => $this->input->post('username'),
                'fullname' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
            );

            $data = trim($this->input->post('password'))<>''?$updatepassword:$tidakupdatepassword;

            $this->load->model('user_model');
            $this->user_model->ubah($this->input->post('userid'),$data);

            redirect(base_url().'user');
        }

        public function delete($userid) {

            $this->load->model('user_model');
            $this->user_model->hapus($userid);

            redirect(base_url().'user');
        }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
