<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

        function __construct()
        {
            parent::__construct();
//            jika belum login redirect ke login
            if ($this->session->userdata('logged')<>1) {
                redirect(site_url('auth'));
            }
            //load libary pagination
            $this->load->library('pagination');
            $this->load->model('company_model');
        }

        public function index()
      	{
        
        $config['base_url'] = site_url('company/index'); //site url
        $config['total_rows'] = $this->db->count_all('m_company'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->company_model->getlist_paging($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        $data['content'] = 'company/content';
        $data['menu'] = 'company';
 
        //load view mahasiswa view
        $this->load->view('company',$data);
                
      	}
    
        public function create() {
            $data = array(
                'title' => 'Ratwareid.com',
                'menu' => 'company',
                'heading' => 'Company / Add New Company',
                'error' => '',
                'action' => base_url().'company/docreate',
                'content' => 'company/form-input',
                'company_id' => '',
                'company_name' => '',
                'company_address' => '',
                'company_phone' => '',
                'button' => 'Create'
            );

            $this->load->view('company',$data);
        }
    
        public function docreate() {
            $data = array(
                'company_name' => $this->input->post('company_name'),
                'company_address' => $this->input->post('company_address'),
                'company_phone' => $this->input->post('company_phone')
            );
            
            if ($data['company_name'] != null && $data['company_address'] != null){
                $this->load->model('company_model');
                $this->company_model->create($data);
                redirect(base_url().'company');
            }else{
                $data = array(
                'error' => 'Please fill all empty field',
                'action' => base_url().'company/docreate',
                'content' => 'company/form-input',
                'company_name' => '',
                'company_address' => '',
                'company_phone' => '',
                'button' => 'Create'
                );
                $this->load->view('company',$data);
            }
        }
    
        public function edit($company_id) {

            $this->load->model('user_model');
            $row = $this->company_model->getById($company_id)->row();

            $data = array(
                'title' => 'Ratwareid.com',
                'menu' => 'company',
                'heading' => 'Edit Company',
                'error' => '',
                'action' => base_url().'company/doedit',
                'content' => 'company/form-input',
                'company_id' => $row->company_id,
                'company_name' => $row->company_name,
                'company_address' => $row->company_address,
                'company_phone' => $row->company_phone,
                'button' => 'Change Data'
            );

            $this->load->view('company',$data);
        }

        public function doedit() {
//            
            $data = array(
                'company_name' => $this->input->post('company_name'),
                'company_address' => $this->input->post('company_address'),
                'company_phone' => $this->input->post('company_phone')
            );
            $this->load->model('company_model');
            $this->company_model->edit($this->input->post('company_id'),$data);
            redirect(base_url().'company');
        }

        public function delete($company_id) {

            $this->load->model('company_model');
            $this->company_model->delete($company_id);

            redirect(base_url().'company');
        }
    
}
