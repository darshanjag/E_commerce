<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$loginArray = array('email' => $this->input->post('email'),'password'=>md5($this->input->post('password')) );
		
	
	$result = $this->Common_model->check_login($loginArray);

		if($result){
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/dashboard');
	$this->load->view('admin/footer');
		}else{
			$this->load->view('admin/login');
		}

	}


	
	}


