<div id="login" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Used cars in All India </h4>
				</div>
				<div class="modal-body">
					<form id="mail-info" action="#" method="post">
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<input type="text" class="form-control" placeholder="Name">
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 form-group">
							<input type="text" class="form-control" placeholder="Email">
						</div>
						
						<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12  form-group">
							<div class="col-lg-12 col-md-12 col-sm-12  form-group">
							<button type="submit" class="col-lg-3 col-md-3 col-sm-12 btn-primary btn-info btn-lg login-button space" value="SUBMIT">SUBMIT</button>
							
							</div>
						</div>
						</div>
					</form>
				</div>
				<!--<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>-->
			</div>
		</div>
	</div>
	<!-- Login Popup End -->
    <!-- Register Popup Start -->
	<div id="register" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				
				<div class="modal-body">
					<div class="custom-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Create Your Free Account </h4>
					</div>
					<form id="login" action="#" method="post">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Email Address">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<select class="form-control">
                                    <option value="">Select</option>
								</select>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Location">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Company">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Password">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" class="form-control" placeholder="Confirm Password">
							</div>
						</div>
						<div class="row col-lg-12 col-md-12 col-sm-12">
							<p> Chose one or more focus group of Interest</p>
							<div class="row col-lg-6 col-md-6 col-sm-12">
								<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
									<div class="checkbox checkbox-primary">
										<input id="checkbox2" class="styled" type="checkbox" checked>
										<label for="checkbox2">
											Business Intelligence BI
										</label>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
									<div class="checkbox checkbox-primary">
										<input id="CRM" type="checkbox" class="styled" value=""><label for="CRM">Customer Relation CRM</label>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
									<div class="checkbox checkbox-primary">
										<input id="FIN" type="checkbox" class="styled" value=""><label for="FIN">Finance FIN</label>
									</div>
								</div>
							</div>
							
							<div class="row col-lg-6 col-md-6 col-sm-12 checkbox-space-left checkbox-space-top-mobile">
								<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
									<div class="checkbox checkbox-primary">
										<input id="HR" type="checkbox" class="styled" value=""><label for="HR">Human Resource HR</label>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
									<div class="checkbox checkbox-primary">
										<input id="Tech" type="checkbox" class="styled" value=""><label for="Tech">Technology Tech</label>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
									<div class="checkbox checkbox-primary">
										<input id="PROCU" type="checkbox" class="styled" value=""><label for="PROCU">Procurement PROCU</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row col-lg-12 col-md-12 col-sm-12 checkbox-space-top">
							<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
								<div class="checkbox checkbox-primary">
									<input id="MSM" type="checkbox" class="styled" value=""><label for="MSM">Maintenance, Service & Manufacturing MSM</label>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 checkbox form-group">
								<div class="checkbox checkbox-primary">
									<input id="GRC" type="checkbox" class="styled" value=""><label for="GRC">Governance Risk & Compliance GRC</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<button type="submit" class="col-lg-3 col-md-3 col-sm-12 btn btn-info btn-lg login-button space" value="Register">Register</button>
								<div class="col-lg-8 col-md-8 col-sm-8 btn btn-info btn-lg reg-button" >Don't have an account ? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal">Sign In!</a></div>
							</div>
						</div>
					</form>
				</div>
				<!--<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>-->
			</div>
		</div>
	</div>
	<!-- Register Popup End -->
