<?php
if ($this->session->userdata('logged')<>1) {
    redirect(site_url('auth'));
}
//header
$this->load->view('resource/ratwareid/v2/header_admin');
$this->load->view('resource/ratwareid/v2/sidepanel');

//body
//$this->load->view($content);
$this->load->view('resource/ratwareid/v2/example_admin');
//$this->load->view('resource/ratwareid/v2/example_main');
//$this->load->view('resource/ratwareid/v2/example_blank');

//footer
$this->load->view('resource/ratwareid/v2/copyright');
$this->load->view('resource/ratwareid/v2/sidebar_setting');
$this->load->view('resource/ratwareid/v2/footer_admin');
?>
