<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __constructor()
	{
		parent::__constructor();
		$this->load->model('Common_model');
	}

public function index(){

	$data['product'] = $this->Common_model->fetch_data('tbl_product');


	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('product/view_product',$data);
	$this->load->view('admin/footer');
}
public function add_product()
{

				$config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                

	$this->form_validation->set_rules('product_name', 'product name', 'required');
	$this->form_validation->set_rules('quantity', 'quantity', 'required');
	$this->form_validation->set_rules('price', 'price', 'required');
	$this->form_validation->set_rules('discount', 'discount', 'required');
	$this->form_validation->set_rules('product', 'product', 'required');

		if($this->input->post()){

			if ( $this->upload->do_upload('image'))
                {
                	
                    $image = $this->upload->data()['file_name'];
                }
                else
                {
                	
                	$image = '';
                }

			$dataArray = $this->input->post();

			$dataArray += array('image' => $image);

			//print_r($dataArray);die;
			$this->load->model('Common_model');
			$data['product'] = $this->Common_model->insert_data('tbl_product',$dataArray);
			if($data==TRUE){
			$this->session->set_flashdata('success','Records Successfully inserted.');
			redirect(base_url('product'));
			}else{
			$this->session->set_flashdata('error','Error while Inserted.');
			redirect(base_url('product'));
			}
		}

	

	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('product/add_product');
	$this->load->view('admin/footer');

}

	public function delete_product($id)
	{	
			$this->load->model('Common_model'); 
			if($this->Common_model->delete_data('tbl_product','product_id',$id)){
			$this->session->set_flashdata('success','Records Successfully Deleted.');
			redirect(base_url('product'));
			}else{
			$this->session->set_flashdata('error','Error while Delete.');
			redirect(base_url('product'));

	}
	}

	public function edit_product($id){

		$config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

	
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
	{
		if($this->input->post()){

			
			if($this->upload->do_upload('image'))
                {	
                    $image = $this->upload->data()['file_name'];
                 
                }
                else
                {
                	$image = '';
                }

$dataArray = $this->input->post();
$dataArray += array('image' => $image);
$this->load->model('Common_model'); 
$result = $this->Common_model->update_data('tbl_product','product_id',$id, $dataArray);

if($result==TRUE){
$this->session->set_flashdata('success','Records Successfully updated.');
redirect(base_url('product'));
}else{
$this->session->set_flashdata('error','Error while update.');
redirect(base_url('product/add_product'));
}
}

$data['product'] = $this->Common_model->fetch_data_where('tbl_product','product_id',$id);

$this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('product/edit_product',$data);
$this->load->view('admin/footer');
	}
}
}