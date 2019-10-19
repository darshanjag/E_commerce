<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipping extends CI_Controller {


	public function index()
	{



		$this->load->view('header');
		$this->load->view('shipping');
		$this->load->view('footer');
		
	}

	public function add_address(){

		if( $this->input->post()){
		$dataArray =  $this->input->post();
		$result =  $this->Common_model->insert_data('tbl_shipping_detail',$dataArray);
		if($result){
			echo 'success';
		}else{
			echo 'failed';
		}
	}
	

	}

	

		
		}
	

	


