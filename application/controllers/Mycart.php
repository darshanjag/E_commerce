<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycart extends CI_Controller {


	public function index()
	{

		$data['mycart'] = $this->Common_model->fetch_data_where('tbl_cart', 'unique_id', $this->session->userdata('unique_id'));

					$this->load->view('header',$data);
		$this->load->view('mycart1',$data);
		
	}
	public function add_product(){
		
			$unique_id = $this->session->userdata('unique_id');
			$dataArray = $this->input->post();
			$dataArray += array('unique_id'=>$unique_id);
		if( $this->Common_model->insert_data('tbl_cart',$dataArray)){
			$result = $this->Common_model->fetch_data_where('tbl_cart', 'unique_id', $unique_id);
	
$this->session->set_userdata('cart_count', count($result));
redirect(base_url('home'));
}else{
	echo 'failed';
}
		}


		public function delete_product($cart_id){
			if($this->Common_model->delete_data('tbl_cart','cart_id',$cart_id)){
				$this->session->set_flashdata('success','successfully deleted cart');
				redirect(base_url('mycart'));

			}else{
				$this->session->set_flashdata('error','failed in deleting cart');
				redirect(base_url('mycart'));
			}
		}

	// public function update_product(){
	// 	print_r('success');die;
	// }
	public function update_product($id)
	{
			if($this->Common_model->update_data('tbl_cart','cart_id',$id, array('tbl_cart.quantity'=>$this->input->post('quantity')))){
				$this->session->set_userdata('quantity',$this->input->post('quantity'));
				$this->session->set_flashdata('success', 'Quantity sucessfully updated');
				redirect(base_url('mycart'));
			}

	}

		
		}


	

	


