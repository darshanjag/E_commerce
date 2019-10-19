
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php if($this->session->flashdata('success')!=''){ echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'; } ?>
          <?php if($this->session->flashdata('error')!=''){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; } ?>
      <h1>
       Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body" >
  <?php if($this->session->flashdata('error')!=''){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; } ?>

              <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>

                  <div class="col-sm-10">
                        <select  class="form-control" value="<?= $product[0]->category_name; ?>">
                  
<option value="<?= $product[0]->category_id; ?>"><?= $product[0]->category_name; ?></option>

  </select>
                  </div>

 <?php if(form_error('status')!=''){ echo form_error('status'); }?>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Subcategory Name</label>

                  <div class="col-sm-10">
                   
                        <select  class="form-control" value="<?= $product[0]->subcategory_name; ?>">
                  
<option value="<?= $product[0]->subcategory_id; ?>"><?= $product[0]->subcategory_name; ?></option>

  </select>
                  </div>
                  </div>

 <?php if(form_error('subcategory_name')!=''){ echo form_error('subcategory_name'); }?>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="<?php echo $product[0]->product_name;?>" >
<?php if(form_error('product_name')!=''){ echo form_error('product_name'); }?>
                  </div>

                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="<?php echo $product[0]->quantity;?>">
<?php if(form_error('quantity')!=''){ echo form_error('quantity'); }?>
                  </div>

                </div>

                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $product[0]->price;?>">
<?php if(form_error('price')!=''){ echo form_error('price'); }?>
                  </div>

                </div>

<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Discount</label>

                  <div class="col-sm-1">
                    <select class="form-control" id="discount" name="discount" value="<?php echo $product[0]->discount;?>">
                      <?php  for ($i = 0; $i <= 10; $i++) {?>

                     <option value='<?=$i?>'><?=$i?></option>;
                   <?php }?>


</select>
                  </div>
 <?php if(form_error('status')!=''){ echo form_error('status'); }?>
                </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Description</label>

                  <div class="col-sm-10">
<input class="form-control" rows="1" id="description"  name="description" value="<?php echo $product[0]->description;?>"></input>
<?php if(form_error('subcategory_name')!=''){ echo form_error('subcategory_name'); }?>
                  </div>

                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">image</label>

                  <div class="col-sm-10">
                   <input type="file" class="form-control" id="image" name="image" placeholder="image">
                  </div>

                </div>




                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Product Status</label>

                  <div class="col-sm-10">
                    <select class="form-control" id="product_status" name="product_status" value="<?php echo $product[0]->product_status;?>">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
                  </div>
 <?php if(form_error('status')!=''){ echo form_error('status'); }?>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button  class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
