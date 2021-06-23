<?php include('includes/head.php'); ?>
<?php include("./function/adminfunction.php"); ?>


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
            $call = getSingleWithdrawal();
            if ($call[1] >= 1) {;
              while ($data = mysqli_fetch_object($call[0])) {
                if (isset($_POST['update'])) {
                  $status = $_POST['new_status'];
                  $address = $data->user_account;
                  $amount = $data->amount;
                  $username = $data->username;
                  $email = $data->email;
                  $method = $data->method;
                  if (!empty($status)) {
                    $call = setSingleWithdrawal($status, $address, $amount, $username, $email, $method);
                  }
                }
          ?>
                <div class="col-xl-2"></div>
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
                                <h4 class="text-primary">Approve User Withdrawal</h4>
                                <form method="post">
                                  <div class="form-row">
                                    <div class="form-group col-md-12 mt-5">
                                      <label>Current Withdrawal Status</label>
                                      <input type="text" name="status" value="<?php echo $data->status; ?>" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-md-12">
                                      <label>Amount Withdrawn</label>
                                      <input type="text" value="$<?php echo $data->amount; ?>" placeholder="Amount Withdrawn" class="form-control">
                                    </div>

                                    <div class="form-group col-md-12">
                                      <label>Withdrawal Status</label>
                                      <select name="new_status" class="form-control" id="new_status">
                                        <option value="pending">PENDING</option>
                                        <option value="approved">APPROVED</option>
                                      </select>
                                    </div>
                                  </div>

                                  <button class="btn btn-primary btn-lg" name="update" type="submit">
                                    <i class="fa fa-credit-card"></i>&nbsp;
                                    Approve Withdrawal
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