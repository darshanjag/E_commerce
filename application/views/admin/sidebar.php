 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="height: 100%;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/backend/dist/img/user-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Thanh Nguyen</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" >
       
        <li>
          <a href="<?php echo base_url("/category")?>">
            <span>Category</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('/subcategory')?>">
            <span>Subcategory</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('/product')?>">
            <span>Products</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
