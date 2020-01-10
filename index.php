<?php

require_once "config/init.php";
require_once  "views/layouts/header.php";
?>

<section class="banner-area relative" id="home" style="min-height: 100vh;">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">the Royal Essence of Journey</h6>
							<h1 class="text-white text-uppercase">
								Relaxed Journey Ever				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
						</div>
						<div class="col-lg-5  col-md-6 header-right">

							<h4 class="text-white pb-30">Book Your Parking Today!</h4>
							<form class="form" role="form" autocomplete="off">
							    <div class="form-group">
							       	<div class="default-select" id="default-select"">
										<select>
											<option value="" disabled selected hidden>Select Your Location</option>
											<?php
                                               $value = new Place();
											   $statuses = $value->all();
                                               foreach ($statuses as $status) {
                                                   echo "<option value='$status[id]'>".$status["place_name"]."</option>";
                                                }
                                            ?>
										</select>					
									</div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select>
												<option value="" disabled selected hidden>Pickup</option>
												<option value="1">Pickup One</option>
												<option value="1">Pickup Two</option>
												<option value="1">Pickup Three</option>
												<option value="1">Pickup Four</option>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select>
												<option value="" disabled selected hidden>Drop off</option>
												<option value="1">Drop off One</option>
												<option value="1">Drop off Two</option>
												<option value="1">Drop off Three</option>
												<option value="1">Drop off Four</option>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>							    
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	


            
           <?php require_once  "views/layouts/footer.php";
           ?>
