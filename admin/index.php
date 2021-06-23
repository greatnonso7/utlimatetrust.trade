<?php include('includes/head.php'); ?>
<?php include('function/adminfunction.php') ?>

<body>


	<?php //include('includes/loader.php'); 
	?>

	<div id="main-wrapper">
		<?php include('includes/header.php'); ?>


		<?php include('includes/sidebar.php'); ?>


		<div class="content-body">
			<!-- row -->
			<?php
			if (isset($_SESSION['admin'])) {
				include("function/connect.php");
				$getu = $conn->query("SELECT COUNT(*) FROM users")->fetchColumn();
				$getd = $conn->query("SELECT COUNT(*) FROM investments")->fetchColumn();
				$getw = $conn->query("SELECT COUNT(*) FROM withdrawals")->fetchColumn();
				$getT = $conn->query("SELECT COUNT(*) FROM transfers")->fetchColumn();

			?>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header d-sm-flex d-block pb-0 border-0">
									<div class="mr-auto pr-3 mb-sm-0 mb-3">
										<h4 class="text-black fs-20">Overall Statistics</h4>
									</div>
								</div>
								<div class="card-body pt-0 pb-0">
									<div style="margin-top: 50px; display: flex; flex-direction:row; justify-content: space-between">
										<div style="display: flex;flex-direction:column; align-items: center">
											<h6>Total Users</h6>
											<h1><?php echo $getu; ?></h1>
										</div>
										<div style="display: flex;flex-direction:column; align-items: center">
											<h6>Total Investments</h6>
											<h1><?php echo $getd; ?></h1>
										</div>
										<div style="display: flex;flex-direction:column; align-items: center">
											<h6>Referrals</h6>
											<h1><?php echo $getw; ?></h1>
										</div>
										<div style="display: flex;flex-direction:column; align-items: center">
											<h6>Total Transfers</h6>
											<h1><?php echo $getT; ?></h1>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header d-sm-flex d-block pb-0 border-0">
									<div class="mr-auto pr-3 mb-sm-0 mb-3">
										<h4 class="text-black fs-20">Balances Statistics</h4>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="widget-stat">
											<div class="card-body p-4">
												<div class="media ai-icon">
													<span class="mr-3 bgl-primary text-primary">
														<!-- <i class="ti-user"></i> -->
														<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
															<line x1="12" y1="1" x2="12" y2="23"></line>
															<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
														</svg>
													</span>
													<div class="media-body">
														<p class="mb-1">Deposits</p>
														<h4 class="mb-0">$3280</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="widget-stat">
											<div class="card-body p-4">
												<div class="media ai-icon">
													<span class="mr-3 bgl-warning text-warning">
														<svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
															<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
															<polyline points="14 2 14 8 20 8"></polyline>
															<line x1="16" y1="13" x2="8" y2="13"></line>
															<line x1="16" y1="17" x2="8" y2="17"></line>
															<polyline points="10 9 9 9 8 9"></polyline>
														</svg>
													</span>
													<div class="media-body">
														<p class="mb-1">Investments</p>
														<h4 class="mb-0">$2570</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="widget-stat">
											<div class="card-body p-4">
												<div class="media ai-icon">
													<span class="mr-3 bgl-success text-success">
														<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
															<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
															<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
															<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
														</svg>
													</span>
													<div class="media-body">
														<p class="mb-1">Withdrawals</p>
														<h4 class="mb-0">$364.50</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="widget-stat">
											<div class="card-body  p-4">
												<div class="media ai-icon">
													<span class="mr-3 bgl-danger text-danger">
														<svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
															<line x1="12" y1="1" x2="12" y2="23"></line>
															<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
														</svg>
													</span>
													<div class="media-body">
														<p class="mb-1">Transfers</p>
														<h4 class="mb-0">364.50K</h4>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Latest Users</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-responsive-md">
										<thead>
											<tr>
												<th>USER ID</th>
												<th>FULLNAME</th>
												<th>EMAIL</th>
												<th>USERNAME</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_SESSION['admin'])) {
												$call = getLatestMembers();
												if ($call[1] > 0) {;
													while ($data = mysqli_fetch_object($call[0])) {
											?>
														<tr>
															<td><?php echo $data->user_id; ?></td>
															<td><?php echo $data->firstname; ?> <?php echo $data->lastname; ?></td>
															<td><?php echo $data->email; ?></td>
															<td><?php echo $data->username; ?></td>
														</tr>
											<?php }
												}
											} ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Latest Investments</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-responsive-md">
										<thead>
											<tr>
												<th>INVEST ID</th>
												<th>EMAIL</th>
												<th>USERNAME</th>
												<th>PLAN</th>
												<th>AMOUNT</th>
												<th>PROFIT</th>
												<th>STATUS</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_SESSION['admin'])) {
												$call = getLatestInvestments();
												if ($call[1] >= 1) {;
													while ($data = mysqli_fetch_object($call[0])) {
											?>
														<tr>
															<td><?php echo $data->invest_id; ?></td>
															<td><?php echo $data->email; ?></td>
															<td><?php echo $data->username; ?></td>
															<td><?php echo ucwords($data->plan); ?></td>
															<td>$<?php echo $data->amount; ?></td>
															<td>$<?php echo $data->profit; ?></td>
															<td><?php
																	if ($data->status == 'pending') {
																		echo '<span class="badge badge-warning">' . ucwords($data->status) . '</span>';
																	} else if ($data->status == 'approved') {
																		echo '<span class="badge badge-success">' . ucwords($data->status) . '</span>';
																	} else if ($data->status == 'cashout') {
																		echo '<span class="badge badge-info">' . ucwords($data->status) . '</span>';
																	}
																	?></td>

														</tr>
											<?php }
												}
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Latest Deposits</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-responsive-md">
										<thead>
											<tr>
												<th>DEPOSIT ID</th>
												<th>EMAIL</th>
												<th>COIN VALUE</th>
												<th>COIN/METHOD</th>
												<th>AMOUNT</th>
												<th>STATUS</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_SESSION['admin'])) {
												$call = getLatestDeposits();
												if ($call[1] > 0) {;
													while ($data = mysqli_fetch_object($call[0])) {
											?>
														<tr>
															<td><?php echo $data->deposit_id; ?></td>
															<td><?php echo $data->email; ?></td>
															<td><?php echo $data->amount; ?></td>
															<td><?php echo $data->coin; ?></td>
															<td>$<?php echo $data->usd; ?></td>
															<td>
																<?php
																if ($data->status == 'pending') {
																	echo '<span class="badge badge-warning">' . ucwords($data->status) . '</span>';
																} else if ($data->status == 'approved') {
																	echo '<span class="badge badge-success">' . ucwords($data->status) . '</span>';
																}

																?>
															</td>
														</tr>
											<?php }
												}
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Latest Withdrawals</h4>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-responsive-md">
										<thead>
											<tr>
												<th>WITHDRAWAL ID</th>
												<th>EMAIL</th>
												<th>AMOUNT</th>
												<th>METHOD</th>
												<th>WALLET</th>
												<th>STATUS</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_SESSION['admin'])) {
												$call = getLatestWithdrawals();
												if ($call[1] > 0) {;
													while ($data = mysqli_fetch_object($call[0])) {
											?>
														<tr>
															<td><?php echo $data->wid; ?></td>
															<td><?php echo $data->email; ?></td>
															<td>$<?php echo $data->amount; ?></td>
															<td><?php echo $data->method; ?></td>
															<td><?php echo $data->user_account; ?></td>
															<td>
																<?php
																if ($data->status == 'pending') {
																	echo '<span class="badge badge-warning">' . ucwords($data->status) . '</span>';
																} else if ($data->status == 'approved') {
																	echo '<span class="badge badge-success">' . ucwords($data->status) . '</span>';
																}

																?>
															</td>
														</tr>
											<?php }
												}
											} ?>
										</tbody>
									</table>
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

					<!--**********************************
        Scripts
    ***********************************-->
					<!-- Required vendors -->
					<script src="vendor/global/global.min.js"></script>
					<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
					<script src="vendor/chart.js/Chart.bundle.min.js"></script>
					<script src="js/custom.min.js"></script>
					<script src="js/deznav-init.js"></script>
					<script src="vendor/owl-carousel/owl.carousel.js"></script>

					<!-- Chart piety plugin files -->
					<script src="vendor/peity/jquery.peity.min.js"></script>

					<!-- Apex Chart -->
					<script src="vendor/apexchart/apexchart.js"></script>

					<!-- Dashboard 1 -->
					<script src="js/dashboard/dashboard-1.js"></script>
					<script>
						function carouselReview() {
							/*  testimonial one function by = owl.carousel.js */
							jQuery('.testimonial-one').owlCarousel({
								loop: true,
								autoplay: true,
								margin: 30,
								nav: false,
								dots: false,
								left: true,
								navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
								responsive: {
									0: {
										items: 1
									},
									484: {
										items: 2
									},
									882: {
										items: 3
									},
									1200: {
										items: 2
									},

									1540: {
										items: 3
									},
									1740: {
										items: 4
									}
								}
							})
						}
						jQuery(window).on('load', function() {
							setTimeout(function() {
								carouselReview();
							}, 1000);
						});
					</script>
</body>

<!-- Mirrored from gymove.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jun 2021 10:58:55 GMT -->

</html>