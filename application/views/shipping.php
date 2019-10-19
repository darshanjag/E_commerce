	
	<div class="container" style="position: relative; right: 20%;" >
	<div class="col-md-8 address_form_agile">
			
				<form action="<?= base_url()?>shipping/add_address" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">First Name: </label>
													<input class="billing-address-name form-control" type="text" name="firstname" placeholder="First name">
												</div>
												<div class="controls">
													<label class="control-label">Last Name: </label>
													<input class="billing-address-name form-control" type="text" name="lastname" placeholder="Last name">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Email</label>
														    <input class="form-control" name="email_id" type="email" placeholder="Email Address">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Pincode </label>
														 <input class="form-control" type="text" placeholder="Pincode" name="pincode"> 
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Address </label>
												 <input class="form-control" type="text" placeholder="Address" name="address">
												</div>
												<div class="controls">
													<label class="control-label">City </label>
												 <input class="form-control" type="text" placeholder="City" name="city">
												</div>
												<div class="controls">
													<label class="control-label">State</label>
												 <input class="form-control" type="text" placeholder="State" name="state">
												</div>
													
											</div>
											<button class="submit check_out">Delivery to this Address</button>
										</div>
									</section>
								</form>
							
					</div>

					</div>