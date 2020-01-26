<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar extends CI_Controller 
{
    public function __construct()
    {
		parent::__construct();
        $this->load->model("gambar_model");
        $this->load->library('form_validation');
		if($this->session->userdata('adminlogin') == false){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$opendir = scandir(FCPATH .'upload/gambar/');
		$data['data_gambar'] = $opendir;
		$this->load->view("gambar/home",$data);
	}
	public function tambah(){		
        $gambar = $this->gambar_model;
        $validation = $this->form_validation;
        $validation->set_rules($gambar->rules());

        if ($validation->run()) {
            $gambar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

		$this->load->view("gambar/add");
	}
	// public function uploadGambar()
	// {
	// 	$files = $this->input->post('gambar');
	// 	$data["gambar"] = $files;
	// 	$apis = "apis";
	// 	$data["apis"] = $apis;
	// 	print_r($files);
	// 	$this->load->view("admin/gambar/home",$data);
	// }
}