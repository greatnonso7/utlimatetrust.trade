<?php include('includes/head.php'); ?>
<?php include("./function/adminfunction.php"); ?>
<?php

if (isset($_POST['update'])) {
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];
	$referral = $_POST['referral'];
	$wallet = $_POST['wallet'];
	$ref_bonus = $_POST['ref_bonus'];
	$total_invest = $_POST['total_invest'];
	$total_withdraw = $_POST['total_withdraw'];


	if (!empty($fullname) && !empty($username) && !empty($email)) {
		$call = setSingleUser($fullname, $email, $username, $phone, $referral, $country, $wallet, $ref_bonus, $total_invest, $total_withdraw);
	}
}
?>


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
						<li class="breadcrumb-item"><a href="withdrawals.php">All Ultimate Trust Trade Withdrawals</a></li>
						<li class="breadcrumb-item active"><a href="#">Single Ultimate Trust Trade Withdrawal</a></li>

					</ol>
				</div>
				<!-- row -->
				<div class="row">
					<?php if (isset($_GET['pid'])) {
						$call = getSingleUser();
						if ($call[1] >= 1) {;
							while ($data = mysqli_fetch_object($call[0])) {

					?>
								<div class="col-xl-4">
									<div class="card">
										<div class="card-body">
											<div class="profile-statistics mb-5">
												<div class="text-center">
													<h6 style="text-align:center">Ultimate Trust Investor</h6>
												</div>
												<!-- Modal -->
											</div>
											<div class="profile-blog mb-5">
												<h5 class="text-primary d-inline">Name: <?php echo $data->fullname; ?></h5>

												<h5 class="text-primary d-inline">Email: <?php echo $data->email; ?></h5>

												<h5 class="text-primary d-inline">username: <?php echo $data->username; ?></h5> <br>


												<h5 class="text-primary d-inline">Wallet Balance: $<?php echo $data->wallet; ?></h5>


											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-8">
									<div class="card">
										<?php
										if (isset($_SESSION['success'])) {
											echo '<div class="sufee-alert alert with-close alert-success alert-dismissible fade show" style="margin:10px>
                        <span class="badge badge-pill badge-success">Success</span>
                                You successfully updated user investment status.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
										}
										unset($_SESSION['success']);

										?>
										<div class="card-body">
											<div class="profile-tab">
												<div class="custom-tab-1">

													<div id="profile-settings" class="tab-pane">
														<div class="pt-3">
															<div class="settings-form">
																<h4 class="text-primary">Edit User Information</h4>
																<form method="post">
																	<div class="form-row">
																		<div class="form-group col-md-6 mt-5">
																			<label>Full Name</label>
																			<input type="text" class="form-control" id="exampleInputEmail111" name="fullname" value="<?php echo $data->fullname; ?>" placeholder="First name">
																		</div>
																		<div class="form-group col-md-6  mt-5">
																			<label>Email</label>
																			<input type="email" value="<?php echo $data->email; ?>" placeholder="Email" class="form-control" name="email">
																		</div>

																		<div class="form-group col-md-6">
																			<label>Phone Number</label>
																			<input type="tel" name="phone" value="<?php echo $data->phone ?>" placeholder="Phone " class="form-control">
																		</div>
																		<div class="form-group col-md-6">
																			<label>Username</label>
																			<input type="text" value="<?php echo $data->username; ?>" name="username" placeholder="Username" class="form-control">
																		</div>
																		<div class="form-group col-md-6">
																			<label>Referral</label>
																			<input type="text" name="referral" value="<?php echo $data->referral; ?>" placeholder="Referral" class="form-control">
																		</div>
																		<div class="form-group col-md-6">
																			<label>Country</label>
																			<input type="text" name="country" value="<?php echo $data->country; ?>" placeholder="Country" class="form-control">
																		</div>
																		<div class="form-group col-md-6">
																			<label>Wallet Balance</label>
																			<input type="text" name="wallet" value="<?php echo $data->wallet; ?>" placeholder="Email" class="form-control">
																		</div>

																		<div class="form-group col-md-6">
																			<label>Referral Bonus</label>
																			<input type="text" name="ref_bonus" value="<?php echo $data->ref_bonus; ?>" placeholder="Referral Bonus" class="form-control">
																		</div>
																		<div class="form-group col-md-6">
																			<label>Total Investment</label>
																			<input type="text" name="total_invest" value="<?php echo $data->total_invest; ?>" placeholder="Total Invest" class="form-control">
																		</div>
																		<div class="form-group col-md-6">
																			<label>Total Withdrawal</label>
																			<input type="text" name="total_withdraw" value="<?php echo $data->total_withdraw; ?>" placeholder="Total Withdrawal" class="form-control">
																		</div>
																	</div>

																	<button class="btn btn-primary btn-lg" name="update" type="submit">
																		<i class="fa fa-credit-card"></i>&nbsp;
																		Edit User Profile
																	</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- Modal -->
										</div>
							<?php
							}
						}
					} ?>
									</div>
								</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="copyright">
			<p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
		</div>
	</div>
	</div>

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