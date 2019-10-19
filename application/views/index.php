<!-- banner -->
<div class="banner">
   <div class="w3l_banner_nav_left">
      <nav class="navbar nav_bottom">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
               <?php foreach($category as $value){ ?>
               <li class="dropdown mega-dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $value->category_name; ?><span class="caret"></span></a>				
                  <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                     <div class="w3ls_vegetables">
                        <ul>
                           <?php
                              $subcategory = $this->Common_model->fetch_data_where('tbl_subcategory','tbl_subcategory.category_id', $value->category_id);
                              if(count($subcategory)==''){ echo 'No subcategory Found';}else{
                              foreach($subcategory as $data){ ?>
                           <li><a href="vegetables.html"><?= $data->subcategory_name; ?></a></li>
                           <?php }  } ?>
                        </ul>
                     </div>
                  </div>
               </li>
               <?php } ?>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
   </div>
   <div class="w3l_banner_nav_right">
      <!-- flexSlider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
      <script defer src="js/jquery.flexslider.js"></script>
      <script type="text/javascript">
         $(window).load(function(){
           $('.flexslider').flexslider({
         	animation: "slide",
         	start: function(slider){
         	  $('body').removeClass('loading');
         	}
           });
         });
          
      </script>
      <!-- //flexSlider -->
   </div>
   <div class="agile_top_brands_grids">
         <?php foreach($product as $value) {?>
         <div class="col-md-3 top_brand_left">
            <div class="hover14 column">
               <div class="agile_top_brand_left_grid">
                  <div class="tag"><img src="<?= base_url(); ?>assets/frontend/images/tag.png" alt=" " class="img-responsive" /></div>
                  <div class="agile_top_brand_left_grid1">
                     <figure>
                        <div class="snipcart-item block" >
                           <div class="snipcart-thumb">
                              <a href="single.html"><img title=" " alt=" " src="<?= base_url('uploads/'.$value->image); ?>" /></a>		
                              <p><?= $value->product_name; ?></p>
                              <h4> <?= $discounted_price=$value->price-($value->price*$value->discount/100); ?> <span><?= $value->price; ?></span></h4>
                           </div>
                           <div class="snipcart-details top_brand_home_details">
                              <form action="<?= base_url()?>mycart/add_product?>" method="post" name="cart-form" id= "cart-form">
                                 <fieldset>
                                    <input type="hidden" name="product_id" value="<?= $value->product_id; ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <input type="hidden" name="price" value="<?= $discounted_price; ?>" />
                                    <input type="hidden" name="user_id" value="<?php if($this->session->userdata('login_user_data')!=''){ echo $this->session->userdata('login_user_data')[0]->user_id; }?>" />
                                    <input type="hidden" name="unique_id" value="<?= $this->session->userdata('unique_id'); ?>" />
                                    <input type="submit" onclick="clickMethod()"  value="Add to cart" class="button" />
                                 </fieldset>
                              </form>
                           </div>
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
         <div class="clearfix"> </div>
      </div>
   <div class="clearfix"></div>
</div>
<!-- banner -->
<!-- top-brands -->
<div class="top-brands">
   <div class="container">
      <h3>Hot Offers</h3>
     
   </div>
</div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
<!-- //fresh-vegetables -->
<script type="text/javascript"></script>