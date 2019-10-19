<?php
class Common_model extends CI_Model{

	function __constructor()
	{
		parent::__constructor();

	}

function check_login($dataArray){

return $this->db->get_where('tbl_users',$dataArray)->result();

}

//insert Data
	function Insert_data($table, $dataArray)
	{
		return $this->db->insert($table,$dataArray);
	}

//fetch all table records
function fetch_data($table){

	if($table=='tbl_product')
	{
			$this->db->select('*');
			$this->db->join('tbl_subcategory','tbl_subcategory.subcategory_id=tbl_product.subcategory_id');
				$this->db->join('tbl_category','tbl_category.category_id=tbl_product.category_id');
	}
	if($table=='tbl_subcategory')
	{
		$this->db->select('tbl_category.category_name,tbl_subcategory.*');
		$this->db->join('tbl_category', 'tbl_category.category_id = tbl_subcategory.category_id');
	}
	return $this->db->get($table)->result();

}


//fetch all table records
function fetch_data_where($table, $col_id, $col_value){

	if($table=='tbl_cart'){
		$this->db->select('tbl_product.product_name');
		$this->db->select('tbl_product.image');
		$this->db->select('tbl_cart.*');
	

		$this->db->join('tbl_product','tbl_product.product_id=tbl_cart.product_id');
	}

		if($table=='tbl_product')
	{
			$this->db->select('*');
			$this->db->join('tbl_subcategory','tbl_subcategory.subcategory_id=tbl_product.subcategory_id');
				$this->db->join('tbl_category','tbl_category.category_id=tbl_product.category_id');

	}

if($table=='tbl_subcategory'){
$this->db->select('tbl_category.category_name,tbl_subcategory.*');
$this->db->join('tbl_category', 'tbl_category.category_id=tbl_subcategory.category_id');
}

return $this->db->where($col_id, $col_value)->get($table)->result();

}

//update Data where unique id
function update_data($table, $col_id, $col_value, $dataArray){

return $this->db->where($col_id, $col_value)->update($table,$dataArray);

}

//delete data where uniq id
function delete_data($table, $col_id, $col_value){

return $this->db->where($col_id, $col_value)->delete($table);

}



}

?>
