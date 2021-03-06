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
                <div class="fill img-responsive" style="background-image:url('images/New-Jaguar-XF-01.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/New-Jaguar-XF-02.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/New-Jaguar-XF-03.jpg');"></div>
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
						KEY FEATURES OF JAGUAR XF 2.2 LITRE EXECUTIVE (DIESEL)
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
							<p class="car-detail">Rs 48 L</p>
							<p class="car-detail">12.63 kmpl / 16.36 kmpl</p>
							<p class="car-detail">Diesel</p>
							<p class="car-detail">2179 cc</p>
							<p class="car-detail">187.7 bhp@3500rmp</p>
							<p class="car-detail">450Nm@2000rpm</p>
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
