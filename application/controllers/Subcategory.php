<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller {

public function index()
{
	$this->load->model('Common_model'); 
	$data['subcategory'] = $this->Common_model->fetch_data('tbl_subcategory');

	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('subcategory/view_subcategory',$data);
	$this->load->view('admin/footer');
}
public function add_subcategory()
{
	$this->form_validation->set_rules('subcategory_name','Subcategory Name','required');

	if($this->form_validation->run())
	{
		$dataArray = $this->input->post();
		$this->load->model('Common_model'); 
		$result = $this->Common_model->insert_data('tbl_subcategory',$dataArray);

		if($result==TRUE){
		$this->session->set_flashdata('success','records successfully inserted');
		redirect(base_url('subcategory'));
	}else{
	$this->session->set_flashdata('failed','error while inserting');
	redirect(base_url('subcategory/add_subcategory'));
	}
	}
	//fetch all category while add new subcategory
	$this->load->model('Common_model'); 
	$data['category'] = $this->Common_model->fetch_data('tbl_category');

	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('subcategory/add_subcategory',$data);
	$this->load->view('admin/footer');
}

public function delete_subcategory($id)
{
	$this->load->model('Common_model'); 
if($this->Common_model->delete_data('tbl_subcategory','subcategory_id',$id)){
$this->session->set_flashdata('success','Records Successfully Deleted.');
redirect(base_url('subcategory'));
}else{
$this->session->set_flashdata('error','Error while Delete.');
redirect(base_url('subcategory'));
}
}


public function edit_subcategory($id)
{
if($this->input->post()){
$dataArray = $this->input->post();

$this->load->model('Common_model'); 
$result = $this->Common_model->update_data('tbl_subcategory','subcategory_id',$id,$dataArray);

if($result){
$this->session->set_flashdata('success','records successfully updated');
redirect(base_url('subcategory'));
}else{
$this->session->set_flashdata('error','records failed to update');
redirect(base_url('subcategory/edit_subcategory'));
}
}
$this->load->model('Common_model'); 
$data['subcategory'] = $this->Common_model->fetch_data_where('tbl_subcategory','subcategory_id',$id);

$this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('subcategory/edit_subcategory',$data);
$this->load->view('admin/footer');
}
}