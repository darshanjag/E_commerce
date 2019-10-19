<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['category'] = $this->Common_model->fetch_data('tbl_category');

		$data['product'] = $this->Common_model->fetch_data('tbl_product');

		$this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function sevices()
	{
		$this->load->view('sevices');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

}
