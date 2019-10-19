 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Category</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Category</li>
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
              <h3 class="box-title">Category List</h3>
              <a href="<?= base_url('category/add_category'); ?>" class="btn btn-success pull-right">Add Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#ID</th>
                  <th>Category Name</th>
                  <th>Category Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
<?php $i=1; foreach($category as $value){ ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $value->category_name; ?></td>
                  <td><?php if($value->category_status==1){ echo 'Active'; }else{ echo 'Inactive'; }  ?></td>
                  <td><a href="<?= base_url('category/edit_category/'.$value->category_id); ?>">Edit</a> | <a href="<?= base_url('category/delete_category/'.$value->category_id); ?>">Delete</a></td>
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


