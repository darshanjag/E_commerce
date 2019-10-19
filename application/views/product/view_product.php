 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Products</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php if($this->session->flashdata('success')!=''){ echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'; } ?>
          <?php if($this->session->flashdata('error')!=''){ echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'; } ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product List</h3>
              <a href="<?= base_url('product/add_product'); ?>" class="btn btn-success pull-right">Add Product</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Category Name</th>
                  <th>Subcategory Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Product Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($product as $value){ ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $value->category_name; ?></td>
                  <td><?= $value->subcategory_name; ?></td>
                  <td><?= $value->product_name; ?></td>
                  <td><?= $value->quantity; ?></td>
                  <td><?= $value->price; ?></td>
                  <td><?= $value->discount; ?></td>
                  <td><?= $value->description; ?></td>
                  <td><img src="<?= base_url('uploads/'.$value->image); ?>" width="100px"></td>

                  <td><?php if($value->product_status==1){ echo 'Active'; }else{ echo 'Inactive'; }  ?></td>
                  <td><a href="<?= base_url('product/edit_product/'.$value->product_id); ?>">edit</a>| <a href="<?= base_url('product/delete_product/'.$value->product_id); ?>">Delete</a></td>
                </tr>
                <?php $i++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

