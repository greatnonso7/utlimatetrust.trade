<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <?php
  if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  }
  ?>
  <!--end header-->

  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>Edit Account</h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>
      <?php
      $call = session();
      if ($call[1] > 0) {;

        while ($data = mysqli_fetch_object($call[0])) {
      ?>
          <div class="desh-right">
            <br>
            <form method=post>
              <table cellspacing=0 cellpadding=2 border=0 class="blank">
                <tr>
                  <td>Account Name:</td>
                  <td><?php echo $data->username; ?></td>
                </tr>
                <tr>
                  <td>Registration date:</td>
                  <td><?php echo $data->created_on; ?></td>
                </tr>
                <tr>
                  <td>Your Full Name:</td>
                  <td><input type=text name=fullname value='<?php echo $data->fullname; ?>' class=inpts size=30>
                </tr>

                <tr>
                  <td>New Password:</td>
                  <td><input type=password name=password value="" class=inpts size=30></td>
                </tr>
                <tr>
                  <td>Retype Password:</td>
                  <td><input type=password name=password2 value="" class=inpts size=30></td>
                </tr>
                <tr>
                  <td>Your Bitcoin acc no:</td>
                  <td><input type=text class=inpts size=30 name="pay_account[48]" value="<?php echo $data->bitcoin; ?>"></td>
                </tr>
                <tr>
                  <td>Your Ethereum acc no:</td>
                  <td><input type=text class=inpts size=30 name="pay_account[69]" value="<?php echo $data->ethereum; ?>"></td>
                </tr>
                <tr>
                  <td>Your E-mail address:</td>
                  <td><input type=text name=email value='<?php echo $data->email; ?>' class=inpts size=30></td>
                </tr>


                <tr>
                  <td>&nbsp;</td>
                  <td><input type=submit value="Change Account data" class=sbmt></td>
                </tr>
              </table>
            </form>


          </div>
    </div>
  </div>

<?php }
      } ?>

<?php include('includes/footer.php'); ?>