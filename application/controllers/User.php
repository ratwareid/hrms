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
                'judul' => 'Halaman User',
                'content' => 'user/index',
                'rows' => $rows
            );
//		echo 'ini adalah controller user';

            $this->load->view('user',$data);
	}

        public function tambah() {
            $data = array(
                'title' => 'Ratwareid.com',
                'judul' => 'User / Tambah User',
                'pesan' => 'Silahkan masukkan username dan password untuk user baru',
                'action' => base_url().'user/aksitambah',
                'content' => 'user/user_form',
                'username' => '',
                'password' => '',
                'id' => '',
                'tombol' => 'Tambah'
            );

            $this->load->view('user',$data);
        }

        public function aksitambah() {

//            warning : aksi ini tanpa ada validasi form
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))
            );

            $this->load->model('user_model');
            $this->user_model->tambah($data);

            redirect(base_url().'user');
        }

        public function ubah($id) {

            $this->load->model('user_model');
            $row = $this->user_model->getById($id)->row();

            $data = array(
                'title' => 'Ratwareid.com',
                'judul' => 'User / Change Password',
                'pesan' => 'Silahkan input password baru lalu klik tombol ubah',
                'action' => base_url().'user/aksiubah',
                'content' => 'user/user_form',
                'username' => $row->username,
                'password' => '',
                'id' => $row->id,
                'tombol' => 'Ubah'
            );

            $this->load->view('user',$data);
        }

        public function aksiubah() {
//            warning : aksi ini tanpa ada validasi form
            $updatepassword = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password'))


            );

            $tidakupdatepassword = array(
                'username' => $this->input->post('username'),
            );

            $data = trim($this->input->post('password'))<>''?$updatepassword:$tidakupdatepassword;

            $this->load->model('user_model');
            $this->user_model->ubah($this->input->post('id'),$data);

            redirect(base_url().'user');
        }

        public function delete($id) {

            $this->load->model('user_model');
            $this->user_model->hapus($id);

            redirect(base_url().'user');
        }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
