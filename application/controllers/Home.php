<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		if($this->session->userdata('adminlogin') == false){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->load->view("home");
	}
}