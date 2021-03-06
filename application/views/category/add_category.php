 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
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
              <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
              <div class="box-body">
  <?php if($this->session->flashdata('error')!=''){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; } ?>
 
  

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="subcategory_name" name="category_name" placeholder="category Name">
<?php if(form_error('category_name')!=''){ echo form_error('subcategory_name'); }?>
                  </div>
 
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Category Status</label>

                  <div class="col-sm-10">
                    <select class="form-control" id="category_status" name="category_status">
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