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
        <h1>Your deposits</h1>
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
        $call = totalInvestments(); ?>


        <b>Total: $<?php echo $call; ?></b><br><br>

        <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
          <thead>
            <tr>
              <th>Package</th>
              <th>Capital</th>
              <th>Earning</th>
              <th>Duration</th>
              <th>Remaining</th>
              <th>Date Invested</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php
          if (isset($_SESSION['user']));

          $call = userInvestments();
          $userInfo = session();

          if ($call[1] > 0) {;

            while ($data = mysqli_fetch_object($call[0])) {
              if ($data->status === 'approved') {

                $today_date = date("d-m-Y H:i:s");
                $new_date = (strtotime($today_date) - strtotime($data->created_on)) / 86400;
                $mature_days = round($data->mature);
                $daysInvested = abs($mature_days - $new_date); ?>

                <tr>
                  <td>
                    <?php echo ucwords($data->plan); ?>
                  </td>
                  <td>
                    $<?php echo $data->amount; ?>
                  </td>
                  <td>
                    $<?php echo $data->profit; ?>
                  </td>
                  <td>
                    <?php echo $mature_days . ' Days'; ?>
                  </td>
                  <td><?php
                      if (round(($data->mature) - $new_date) <= 0) {
                        echo '0';
                      } else {
                        echo round(($data->mature) - $new_date);
                      }
                      ?> Days</td>
                  <td><?php echo substr($data->created_on, 0, 10); ?></td>
                  <td>
                    <?php
                    if ($new_date >= $mature_days) {
                    ?>
                      <form method="post" action="" id="myForm">
                        <input type="hidden" value="<?php echo $data->invest_id; ?>" name="invest_id" />
                        <input type="hidden" value="<?php echo $data->profit; ?>" name="profit" />
                        <button type="submit" name="cashout" class="a-link">
                          CASHOUT
                        </button>
                      </form>

                    <?php } else {
                      echo "not mature";
                    }
                    ?>
                  </td>
                </tr>

          <?php }
            }
          } else {
            echo '<tr><td colspan="8"><p class="text-align: center">You currently have no approved investment</p></p></tr>';
          }
          ?>
          <?php
          if ($userInfo[1] === 1) {
            while ($userdata = mysqli_fetch_object($userInfo[0])) {
              if (isset($_POST['cashout']) && isset($_POST['profit'])) {
                $wallet = $userdata->wallet;
                $profit = trim($_POST['profit']);
                $invest_id = trim($_POST['invest_id']);
                $totalamount = $wallet + $profit;
                $call = updateWallet($totalamount);
                $call1 = removeCashout($invest_id);
                echo "<script>
                  function redirect() {
                    window.location.href = 'dashboard.php';
                }
                setInterval(redirect, 500)
                </script>";
              }
            }
          }
          ?>
        </table>
      </div>
    </div>
  </div>




  <?php include('includes/footer.php'); ?>