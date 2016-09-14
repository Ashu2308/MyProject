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
                <div class="fill img-responsive" style="background-image:url('images/banner/banner1.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/banner/banner2.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url('images/banner/banner3.jpg');"></div>
            </div>
			<div class="item">
                <div class="fill img-responsive" style="background-image:url('images/banner/banner4.jpg');"></div>
            </div>
        </div>
		<div class="col-lg-11 col-md-11 col-sm-11">
			<div class="test-drive">
				<select name="car" style="border: none">
					<option>Maruti</option>
					<option>Hyundai</option>
				</select>
			</div>
			<div class="test-drive" style="margin-left:230px;">
				<select name="Model" style=" border: none; width:100px">
					<option>Swift</option>
				</select>
			</div>
			<div class="test-drive" style="margin-left:430px">
				<a href="Swift.php">Go</a>	
			</div>
				<div class="pull-right test-drive">
					<div id="drive">Book Test Drive<b class="caret"></b></div>			
					<div class="test-drive-form" style="display:none">
						<form  action="#" method="post">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="City">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Mobile">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Message">
							</div>
							
							<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12  form-group">
								<div class="col-lg-12 col-md-12 col-sm-12  form-group">
								<button type="submit" class="btn-primary btn-info btn-lg login-button space" value="SUBMIT">SUBMIT</button>
								
								</div>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div

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
		<h2 class="page-header">Popular Cars</h2>
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner popular" role="listbox">
      <div class="item active">
        <div class="col-md-4 col-sm-4">
                <div class="panel panel-default text-center">
                    <img src="images/audi-a4.jpg" class="img-responsive spacing" />
                    <div class="panel-body">
                        <h4>Audi A4</h4>
						<h4>40.8 Lacs</h4>
						<p>Expected Launch </p>
						<p>30 September 2016</p>
                        <a href="audi-a4.php" class="btn btn-primary">Get Seller Detail</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4 col-sm-4">
                <div class="panel panel-default text-center">
                    <img src="images/jaguar-xf.jpg" class="img-responsive spacing" />
                    <div class="panel-body">
                        <h4>Jaguar new XF</h4>
						<h4>48 Lacs</h4>
						<p>Expected Launch </p>
						<p>30 September 2016</p>
                        <a href="Jaguar-New-XF.php" class="btn btn-primary">Get Seller Detail</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4 col-sm-4">
                <div class="panel panel-default text-center">
                    <img src="images/jeep.jpg" class="img-responsive spacing" />
                    <div class="panel-body">
                        <h4>Jeep Wrangler</h4>
						<h4>28 Lacs</h4>
						<p>Expected Launch </p>
						<p>30 September 2016</p>
                        <a href="Jeep-Wrangler.php" class="btn btn-primary">Get Seller Detail</a>
                    </div>
                </div>
            </div>
      </div>

      <div class="item">
        <div class="col-md-4 col-sm-4">
                <div class="panel panel-default text-center">
                    <img src="images/jeep-grand.jpg" class="img-responsive spacing" />
                    <div class="panel-body">
                        <h4>Jeep-Grand-Cherokee</h4>
						<h4>93.65 Lacs</h4>
						<p>Expected Launch </p>
						<p>30 September 2016</p>
                        <a href="Jeep-Grand-Cherokee.php" class="btn btn-primary">Get Seller Detail</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4 col-sm-4">
                <div class="panel panel-default text-center">
                    <img src="images/tata-haxe.jpg" class="img-responsive spacing" />
                    <div class="panel-body">
                        <h4>Tata Hexa</h4>
						<h4>13 Lacs</h4>
						<p>Expected Launch </p>
						<p>30 September 2016</p>
                        <a href="Tata-Hexa.php" class="btn btn-primary">Get Seller Detail</a>
                    </div>
                </div>
            </div>
			<div class="col-md-4 col-sm-4">
                <div class="panel panel-default text-center">
                    <img src="images/volkswagen.jpg" class="img-responsive spacing" />
                    <div class="panel-body">
                        <h4>Volkswagen Ameo</h4>
						<h4>6.30 Lacs</h4>
						<p>Expected Launch </p>
						<p>30 September 2016</p>
                        <a href="Volkswagen-Ameo.php" class="btn btn-primary">Get Seller Detail</a>
                    </div>
                </div>
            </div>
      </div>
    
      

      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<div class="row">
			<div class="container" style="background:url('images/front2.jpg') center no-repeat; height:1220px; width:100%">
				<div class="container">
					<div class="social-icon">
						<ul class="nav navbar-nav footer-menu">
						<li class="dropdown">
							<a href="#" ><img src="images/twitter.png" alt/></a>
						</li>
						<li class="dropdown">
							<a href="#" ><img src="images/youtube.png" alt/></a>
						</li>
						<li class="dropdown">
							<a href="#" ><img src="images/facebook.png" alt/></a>
						</li>
						<li class="dropdown">
							<a href="#" ><img src="images/linkedin.png" alt/></a>
						</li>
					</ul>
					</div>
				</div>
			</div>
        </div>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	$(document).ready(function(){
		$("#drive").click(function(){
			$(".test-drive-form").toggle("slow");
		});
	});
    </script>
</body>
</html>
