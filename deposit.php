<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <?php
  if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  }
  ?>
  <!--end menu-->

  <?php
  if (isset($_SESSION['user']));
  $call = session();
  if ($call[1] > 0) {

    while ($data = mysqli_fetch_object($call[0])) {


      $errors = array('investment' => '');


      if (isset($_POST['invest'])) {
        $invest = $_POST['investment'];
        $amount = $_POST['amount'];
        $email = $data->email;
        $fullname = $data->fullname;
        $username = $data->username;
        $wallet = $data->wallet;

        $newWallet = $wallet - $amount;

        switch ($invest) {
          case 'basic':
            $min_invest = 100;
            $max_invest = 50000;
            $profit = 0.07;
            $mature = 1;
            break;

          case 'amateur':
            $min_invest = 200;
            $max_invest = 50000;
            $profit = 0.18;
            $mature = 2;
            break;

          case "professional":
            $min_invest = 500;
            $max_invest = 50000;
            $profit = 0.28;
            $mature = 3;

            break;

          case "silver":
            $min_invest = 1500;
            $max_invest = 50000;
            $profit = 0.40;
            $mature = 5;

            break;

          case "gold":
            $min_invest = 5000;
            $max_invest = 50000;
            $profit = 0.55;
            $mature = 7;

            break;

          case "ultimate":
            $min_invest = 10000;
            $max_invest = 1000000;
            $profit = 0.70;
            $mature = 7;

            break;
        }
        $profit1 = ($profit * $amount) + $amount;


        if (!$invest) {
          $errors['investment'] = "Plan is not selected";
        }

        if ($invest && empty($amount)) {

          $errors['investment'] = 'Amount to invest is empty';
        }
        if ($invest && $amount < $min_invest) {
          $errors['investment'] = 'Amount is lesser than minimum invest';
        }
        if ($invest && $amount > $max_invest) {
          $errors['investment'] = 'Amount is greater than maximum invest';
        }

        if ($amount > $wallet) {
          $errors['amount'] = "Amount is greater than wallet value";
        }


        $call2 = updateWallet($newWallet);
        $call3 = updateTotalInvest($amount);
        $call = invest($fullname, $email, $username, $invest, $amount, $profit1, $mature);
      }

  ?>


      <div id="main-other">
        <div id="sub-other">
          <div class="other-head">
            <h1>Make Deposit</h1>
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
            if (!empty($errors)) {
              echo $errors['investment'];
            }

            ?>
            <form method=post>

              <input type=hidden name=a value=deposit>
              Select a plan:<br>

              <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                  <td colspan=5>
                    <input type=radio name="investment" value='basic'>
                    <b>Basic Plan</b>
                  </td>
                </tr>
                <tr>
                  <th class=inheader>Plan</th>
                  <th class=inheader>Spent Amount ($)</th>
                  <th class=inheader>Investment Duration</th>
                  <th class=inheader>
                    <nobr> Profit (%)</nobr>
                  </th>
                  <th class=inheader>Referral Bonus (%)</th>
                </tr>
                <tr>
                  <td class=item>Basic Plan</td>
                  <td class=item align=right>$100 - $50,000</td>
                  <td class=item align=right>24 Hours</td>
                  <td class=item align=right>7</td>
                  <td class=item align=right>10</td>
                </tr>
              </table><br><br>
              <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                  <td colspan=5>
                    <input type=radio name="investment" value='amateur'>
                    <b>Amateur Plan</b>
                  </td>
                </tr>
                <tr>
                  <th class=inheader>Plan</th>
                  <th class=inheader>Spent Amount ($)</th>
                  <th class=inheader>Investment Duration</th>
                  <th class=inheader>
                    <nobr> Profit (%)</nobr>
                  </th>
                  <th class=inheader>Referral Bonus (%)</th>
                </tr>
                <tr>
                  <td class=item>Amateur Plan</td>
                  <td class=item align=right>$200 - $50,000</td>
                  <td class=item align=right>48 Hours</td>
                  <td class=item align=right>18</td>
                  <td class=item align=right>10</td>


                </tr>
              </table><br><br>
              <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                  <td colspan=5>
                    <input type=radio name="investment" value='professional'>
                    <b>Professional Plan</b>
                  </td>
                </tr>
                <tr>
                  <th class=inheader>Plan</th>
                  <th class=inheader>Spent Amount ($)</th>
                  <th class=inheader>Investment Duration</th>
                  <th class=inheader>
                    <nobr> Profit (%)</nobr>
                  </th>
                  <th class=inheader>Referral Bonus (%)</th>
                </tr>
                <tr>
                  <td class=item>Professional Plan</td>
                  <td class=item align=right>$500 - $50,000</td>
                  <td class=item align=right>3 Days</td>
                  <td class=item align=right>28</td>
                  <td class=item align=right>10</td>


                </tr>
              </table><br><br>
              <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                  <td colspan=5>
                    <input type=radio name="investment" value='silver'>
                    <b>Silver Plan</b>
                  </td>
                </tr>
                <tr>
                  <th class=inheader>Plan</th>
                  <th class=inheader>Spent Amount ($)</th>
                  <th class=inheader>Investment Duration</th>
                  <th class=inheader>
                    <nobr> Profit (%)</nobr>
                  </th>
                  <th class=inheader>Referral Bonus (%)</th>
                </tr>
                <tr>
                  <td class=item>Silver Plan</td>
                  <td class=item align=right>$1,500 - $50,000</td>
                  <td class=item align=right>5 Days</td>
                  <td class=item align=right>40</td>
                  <td class=item align=right>10</td>


                </tr>
              </table><br><br>
              <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                  <td colspan=5>
                    <input type=radio name="investment" value='gold'>
                    <b>Gold Plan</b>
                  </td>
                </tr>
                <tr>
                  <th class=inheader>Plan</th>
                  <th class=inheader>Spent Amount ($)</th>
                  <th class=inheader>Investment Duration</th>
                  <th class=inheader>
                    <nobr> Profit (%)</nobr>
                  </th>
                  <th class=inheader>Referral Bonus (%)</th>
                </tr>
                <tr>
                  <td class=item>Gold Plan</td>
                  <td class=item align=right>$5,000 - $50,000</td>
                  <td class=item align=right>7 Days</td>
                  <td class=item align=right>55</td>
                  <td class=item align=right>10</td>


                </tr>
              </table><br><br>
              <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                <tr>
                  <td colspan=5>
                    <input type=radio name="investment" value='ultimate'>
                    <b>Ultimate Plan</b>
                  </td>
                </tr>
                <tr>
                  <th class=inheader>Plan</th>
                  <th class=inheader>Spent Amount ($)</th>
                  <th class=inheader>Investment Duration</th>
                  <th class=inheader>
                    <nobr> Profit (%)</nobr>
                  </th>
                  <th class=inheader>Referral Bonus (%)</th>
                </tr>
                <tr>
                  <td class=item>Ultimate Plan</td>
                  <td class=item align=right>$10,000 - Unlimited</td>
                  <td class=item align=right>7 Days</td>
                  <td class=item align=right>70</td>
                  <td class=item align=right>10</td>


                </tr>
              </table><br><br>
              <?php
              $call = session();
              if ($call[1] > 0) {;

                while ($data = mysqli_fetch_object($call[0])) {
              ?>
                  <table cellspacing=0 cellpadding=2 border=0 class="tab">
                    <tr>
                      <td>Your Wallet balance ($):</td>
                      <td align=right>$<?php echo $data->wallet; ?></td>
                    </tr>
                <?php }
              } ?>
                <tr>
                  <td>&nbsp;</td>
                  <td align=right>
                    <small>
                    </small>
                  </td>
                </tr>
                <tr>
                  <td>Amount to Spend ($):</td>
                  <td align=right>
                    <input type=text name="amount" value='<?php echo $amount; ?>' class=inpts size=15 style="text-align:right;">
                  </td>
                </tr>
                <tr id="coumpond_block" style="display:none">
                  <td>Compounding(%):</td>
                  <td align=right>
                    <select name="compound" class=inpts id="compound_percents"></select>
                  </td>
                </tr>
                <tr>
                  <td colspan=2>
                    <input type="submit" name="invest" value="Invest Funds" class=sbmt>
                  </td>
                </tr>
                  </table>
            </form>
          </div>
        </div>
      </div>
  <?php }
  } ?>
  <?php include('includes/footer.php'); ?>