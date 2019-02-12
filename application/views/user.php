<?php
if ($this->session->userdata('logged')<>1) {
    redirect(site_url('auth'));
}

$this->load->view('resource/ratwareid/v1/navbar');
$this->load->view('resource/ratwareid/v1/header');

$this->load->view('resource/ratwareid/v1/sidebarL');
$this->load->view($content);
$this->load->view('resource/ratwareid/v1/sidebarR');
$this->load->view('resource/ratwareid/v1/footer');
?>
