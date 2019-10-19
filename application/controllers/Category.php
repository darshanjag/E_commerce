<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

public function index()
{
$this->load->model('Common_model'); 
$data['category'] = $this->Common_model->fetch_data('tbl_category');

$this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('category/view_category',$data);
$this->load->view('admin/footer');
}

public function add_category()
{
$this->form_validation->set_rules('category_name', 'Category Name', 'required');

if($this->form_validation->run()){

$dataArray = $this->input->post();

$this->load->model('Common_model'); 
$result = $this->Common_model->insert_data('tbl_category',$dataArray);

if($result==TRUE){
$this->session->set_flashdata('success','Records Successfully inserted.');
redirect(base_url('category'));
}else{
$this->session->set_flashdata('error','Error while Inserted.');
redirect(base_url('category/add_category'));
}
}

$this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('category/add_category');
$this->load->view('admin/footer');
}
public function edit_category($id)
{

if($this->input->post()){

$dataArray = $this->input->post();
$this->load->model('Common_model'); 
$result = $this->Common_model->update_data('tbl_category','category_id',$id, $dataArray);

if($result==TRUE){
$this->session->set_flashdata('success','Records Successfully updated.');
redirect(base_url('category'));
}else{
$this->session->set_flashdata('error','Error while update.');
redirect(base_url('category/add_category'));
}
}
$this->load->model('Common_model'); 
$data['category'] = $this->Common_model->fetch_data_where('tbl_category','category_id',$id);

$this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('category/edit_category',$data);
$this->load->view('admin/footer');
}

public function delete_category($id)
{
$this->load->model('Common_model');	
if($this->Common_model->delete_data('tbl_category','category_id',$id)){
$this->session->set_flashdata('success','Records Successfully Deleted.');
redirect(base_url('category'));
}else{
$this->session->set_flashdata('error','Error while Delete.');
redirect(base_url('category'));
}
}

}

