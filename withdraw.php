<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <?php
  if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  }
  ?>

  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>Ask for withdrawal</h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>
      <div class="desh-right">

        <br>
        <?php
        $call = session();

        if ($call[1] > 0) {;

          while ($data = mysqli_fetch_object($call[0])) {
        ?>

            <form method=post>

              <div class="main-withdraw-box">
                <table cellspacing=0 cellpadding=2 border=0 class="tab">
                  <tr>
                    <th>Account Balance:</th>
                    <th>$<b><?php echo $data->wallet; ?></b></th>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td> <small>
                    </td>
                  </tr>
                  <tr>
                    <?php
                    $lastWithdraw = getLastWithdrawal();

                    ?>
                    <td>Pending Withdrawals: </td>
                    <td>$<b>
                        <?php if ($lastWithdraw === NULL) {
                          echo '0.00';
                        } else {
                          echo $lastWithdraw;
                        } ?>
                      </b></td>
                  </tr>

                  <tr>
                    <td>Your Bitcoin Account:</td>
                    <td><a href="edit_account.php">
                        <i>
                          <?php if ($data->bitcoin === "" || $data->bitcoin === NULL) {
                            echo 'not set';
                          } else {
                            echo $data->bitcoin;
                          }
                          ?>
                        </i></a></td>
                  </tr>
                  <tr>
                    <td>Your Ethereum Account:</td>
                    <td><a href="edit_account.php">
                        <i>
                          <?php if ($data->ethereum === "" || $data->ethereum === NULL) {
                            echo 'not set';
                          } else {
                            echo $data->ethereum;
                          }
                          ?></i></a></td>
                  </tr>
                </table>
              </div>

              <br><br>

              <?php
              if ($data->wallet === '0') {
                echo 'You have no funds to withdraw.';
              }
              ?>
            </form>

      </div>
    </div>
  </div>



<?php }
        } ?>



<?php include('includes/footer.php'); ?>