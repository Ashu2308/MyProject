<?php
include("header.php");
?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill img-responsive" style="background-image:url('images/audi--01.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/audi--02.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/audi--03.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Share -->
        <div class="row">
            <div class="col-lg-12">
				<div class="col-lg-8 col-md-8 col-sm-8 inline-block">
					<h3 class="car-title">
						KEY FEATURES OF AUDI A4 35 TDI PREMIUM (DIESEL
					</h3>
					<!--Horizontal Tab-->
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 inline-block">
							<p class="car-detail">Ex- Showroom Price</p>
							<p class="car-detail">City/Highway Fuel Economy</p>
							<p class="car-detail">Fuel Type</p>
							<p class="car-detail">Engine Displacement</p>
							<p class="car-detail">Maximum Power</p>
							<p class="car-detail">Maximum Torque</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 inline-block">
							<p class="car-detail">Rs. 40.8 Lacs</p>
							<p class="car-detail">13.28 KMPL/17.11 KMPL</p>
							<p class="car-detail">Diesel</p>
							<p class="car-detail">1968 cc</p>
							<p class="car-detail">178.33bhp@4200rpm</p>
							<p class="car-detail">380Nm@1750-2500rpm</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 car-contact">
					<h3 class="car-title">
						Book Your Test Drive
					</h3>
					<form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="">
                            <label>City:</label>
                            <select name="city">
								<option>Delhi</option>
								<option>Noida</option>
								<option>Gurgaon</option>
								</select>
                        </div>
                    </div>
					
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        
                    <!-- For success/fail messages -->
					
                    
                </form>
				</div>
			</div>			
        </div>
        <!-- /.row Share -->
	</div>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	<!-- Script for Tab---->
<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
