<?php
if ($this->session->userdata('logged')<>1) {
    redirect(site_url('auth'));
}

//header
$this->load->view('resource/header_admin');
$this->load->view('resource/sidepanel-header');
$this->load->view('resource/sidepanel-menu');

//body
$this->load->view($content);

//footer
$this->load->view('resource/copyright');
$this->load->view('resource/sidebar_setting');
$this->load->view('resource/footer_admin');
?>
