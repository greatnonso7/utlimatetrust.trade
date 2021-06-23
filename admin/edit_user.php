<?php include('includes/head.php'); ?>

<body>

	<?php include('includes/loader.php'); ?>


	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<?php include('includes/header.php'); ?>


		<?php include('includes/sidebar.php'); ?>

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="users.php">All Ultimate Trust Trade Users</a></li>
						<li class="breadcrumb-item active"><a href="#">Single Ultimate Trust Trade User</a></li>

					</ol>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-xl-4">
						<div class="card">
							<div class="card-body">
								<div class="profile-statistics mb-5">
									<div class="text-center">
										<div class="row">
											<div class="col">
												<h3 class="m-b-0">150</h3><span>Follower</span>
											</div>
											<div class="col">
												<h3 class="m-b-0">140</h3><span>Place Stay</span>
											</div>
											<div class="col">
												<h3 class="m-b-0">45</h3><span>Reviews</span>
											</div>
										</div>
										<div class="mt-4">
											<a href="javascript:void()" class="btn btn-primary mb-1 mr-1">Follow</a>
											<a href="javascript:void()" class="btn btn-primary mb-1" data-toggle="modal" data-target="#sendMessageModal">Send Message</a>
										</div>
									</div>
									<!-- Modal -->
									<div class="modal fade" id="sendMessageModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Send Message</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form class="comment-form">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																	<label class="text-black font-w600">Name <span class="required">*</span></label>
																	<input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																	<label class="text-black font-w600">Email <span class="required">*</span></label>
																	<input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-group">
																	<label class="text-black font-w600">Comment</label>
																	<textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-group mb-0">
																	<input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="profile-blog mb-5">
									<h5 class="text-primary d-inline">Today Highlights</h5><a href="javascript:void()" class="pull-right f-s-16">More</a>
									<img src="images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
									<h4><a href="post-details.html" class="text-black">Darwin Creative Agency Theme</a></h4>
									<p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
								</div>
								<div class="profile-interest mb-5">
									<h5 class="text-primary d-inline">Interest</h5>
									<div class="row mt-4 sp4" id="lightgallery">
										<a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg" data-src="images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/profile/2.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/profile/3.jpg" data-exthumbimage="images/profile/3.jpg" data-src="images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/profile/3.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/profile/4.jpg" data-exthumbimage="images/profile/4.jpg" data-src="images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/profile/4.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/profile/3.jpg" data-exthumbimage="images/profile/3.jpg" data-src="images/profile/3.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/profile/3.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/profile/4.jpg" data-exthumbimage="images/profile/4.jpg" data-src="images/profile/4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/profile/4.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/profile/2.jpg" data-exthumbimage="images/profile/2.jpg" data-src="images/profile/2.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/profile/2.jpg" alt="" class="img-fluid">
										</a>
									</div>
								</div>
								<div class="profile-news">
									<h5 class="text-primary d-inline">Our Latest News</h5>
									<div class="media pt-3 pb-3">
										<img src="images/profile/5.jpg" alt="image" class="mr-3 rounded" width="75">
										<div class="media-body">
											<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
											<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
										</div>
									</div>
									<div class="media pt-3 pb-3">
										<img src="images/profile/6.jpg" alt="image" class="mr-3 rounded" width="75">
										<div class="media-body">
											<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
											<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
										</div>
									</div>
									<div class="media pt-3 pb-3">
										<img src="images/profile/7.jpg" alt="image" class="mr-3 rounded" width="75">
										<div class="media-body">
											<h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
											<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8">
						<div class="card">
							<div class="card-body">
								<div class="profile-tab">
									<div class="custom-tab-1">

										<div id="profile-settings" class="tab-pane">
											<div class="pt-3">
												<div class="settings-form">
													<h4 class="text-primary">Account Setting</h4>
													<form>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>Email</label>
																<input type="email" placeholder="Email" class="form-control">
															</div>
															<div class="form-group col-md-6">
																<label>Password</label>
																<input type="password" placeholder="Password" class="form-control">
															</div>
														</div>
														<div class="form-group">
															<label>Address</label>
															<input type="text" placeholder="1234 Main St" class="form-control">
														</div>
														<div class="form-group">
															<label>Address 2</label>
															<input type="text" placeholder="Apartment, studio, or floor" class="form-control">
														</div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>City</label>
																<input type="text" class="form-control">
															</div>
															<div class="form-group col-md-4">
																<label>State</label>
																<select class="form-control default-select" id="inputState">
																	<option selected="">Choose...</option>
																	<option>Option 1</option>
																	<option>Option 2</option>
																	<option>Option 3</option>
																</select>
															</div>
															<div class="form-group col-md-2">
																<label>Zip</label>
																<input type="text" class="form-control">
															</div>
														</div>
														<div class="form-group">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="gridCheck">
																<label class="custom-control-label" for="gridCheck"> Check me out</label>
															</div>
														</div>
														<button class="btn btn-primary" type="submit">Sign
															in</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="replyModal">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Post Reply</h5>
												<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
											</div>
											<div class="modal-body">
												<form>
													<textarea class="form-control" rows="4">Message</textarea>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Reply</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--**********************************
            Content body end
        ***********************************-->


	<!--**********************************
            Footer start
        ***********************************-->
	<div class="footer">
		<div class="copyright">
			<p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
		</div>
	</div>
	<!--**********************************
            Footer end
        ***********************************-->

	<!--**********************************
           Support ticket button start
        ***********************************-->

	<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--removeIf(production)-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script>
	<script>
		$('#lightgallery').lightGallery({
			thumbnail: true,
		});
	</script>






</body>


<!-- Mirrored from gymove.dexignzone.com/xhtml/app-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jun 2021 10:59:11 GMT -->

</html>