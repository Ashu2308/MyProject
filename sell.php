<?php
include("header.php");
?>
    <!-- Page Content -->
    <div class="container">
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
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
                            <label>Car Brand Name:</label>
                            <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your Car Brand Name.">
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Model:</label>
                            <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your car model.">
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Manufacture Year:</label>
                            <input type="text" class="form-control" id="email" required data-validation-required-message="Please enter your car manufacturing year.">
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Image:</label>
                            <input type="file" class="form-control" id="email" required data-validation-required-message="Please enter your car manufacturing year.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
