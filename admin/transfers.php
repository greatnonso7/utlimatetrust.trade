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

      <div class="container-fluid">
        <div class="page-titles">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">All Fortra-Market Transfers</a></li>
          </ol>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">All Fortra-Market Transfers</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive-md">
                  <thead>
                    <tr>
                      <th>TRANSFER ID</th>
                      <th>SENDER EMAIL</th>
                      <th>SENDER USERNAME</th>
                      <th>RECEIVER EMAIL</th>
                      <th>RECEIVER USERNAME</th>
                      <th>AMOUNT </th>
                      <th>ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (isset($_SESSION['admin'])) {
                      $call = showTransfers();
                      if ($call[1] > 0) {;
                        while ($data = mysqli_fetch_object($call[0])) {
                    ?>
                          <tr>
                            <td><?php echo $data->transfer_id; ?></td>
                            <td><?php echo $data->sender_email; ?></td>
                            <td><?php echo $data->sender_username; ?></td>
                            <td><?php echo $data->receiver_email; ?></td>
                            <td><?php echo $data->receiver_username; ?></td>
                            <td>$<?php echo $data->amount; ?></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-warning light sharp" data-toggle="dropdown">
                                  <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24" />
                                      <circle fill="#000000" cx="5" cy="12" r="2" />
                                      <circle fill="#000000" cx="12" cy="12" r="2" />
                                      <circle fill="#000000" cx="19" cy="12" r="2" />
                                    </g>
                                  </svg>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="edit_withdrawal.php?pid=<?php echo $data->wid; ?>">Edit</a>
                                  <a class="dropdown-item" href="delete_withdrawal.php?pid=<?php echo $data->wid; ?>">Delete</a>
                                </div>
                              </div>
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
          <div class="footer">
            <div class="copyright">
              <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
          </div>
        </div>

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