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
                <div class="fill img-responsive" style="background-image:url('images/Hyundai-i20 01.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/Hyundai-i20 02.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/Hyundai-i20 03.jpg');"></div>
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
						KEY FEATURES OF HYUNDAI ELITE I20 (9.2 Lakh)
					</h3>
					<!--Horizontal Tab-->
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 inline-block">
							<p class="car-detail">Get On Road Price</p>
							<p class="car-detail">Power</p>
							<p class="car-detail">Mileage</p>
							<p class="car-detail">Top speed</p>
							<p class="car-detail">Fuel type</p>
							<p class="car-detail">Torque</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 inline-block">
							<p class="car-detail">9.2 Lakh</p>
							<p class="car-detail">98.5 bhp</p>
							<p class="car-detail">18.6 kmpl</p>
							<p class="car-detail">180 Kmph</p>
							<p class="car-detail">Petrol</p>
							<p class="car-detail">132.3 Nm</p>
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
                        <div class="controls">
                            <label>City:</label>
                            <select name="city">
								<option>Delhi</option>
								<option>Noida</option>
								<option>Gurgaon</option>
								<option>Mumbai</option>
								<option>Banglore</option>
								<option>Chennai</option>
							</select>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
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
</body>

</html>
