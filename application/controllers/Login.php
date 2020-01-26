<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view("login");
    }
    public function getLogin()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->login_model->loginCheck($where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'namalengkap_admin' => $username,
				'adminlogin' => true
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url());
 
		}else{
			echo "Username dan password salah !";
		}
	} 
    public function logout()
    {
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}