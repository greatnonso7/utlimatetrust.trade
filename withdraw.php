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
            $amount = $method = $address = "";
            $errors = array('amount' => '', 'method' => '', 'address' => '');
            if (isset($_POST['withdraw'])) {
              $wallet = $data->wallet;
              $user = $data->username;
              $email = $data->email;
              $fullname = $data->firstname . ' ' . $data->lastname;
              $amount = $_POST['amount'];
              $method = $_POST['method'];
              $address = $_POST['address'];


              if (empty($amount)) {
                $errors['amount'] = "Amount to invest cannot be empty";
              }
              if ($amount >= $wallet) {
                $errors['amount'] = "Amount to withdraw cannot be greater than wallet balance";
              }
              if (empty($method)) {
                $errors['method'] = "Method of withdrawal cannot be empty";
              }
              if (empty($address)) {
                $errors['address'] = "Address to withdraw to cannot be empty";
              }
              $new_wallet = $wallet - intval($amount);
              if (!empty($amount) && !empty($method) && !empty($address) && ($amount < $wallet)) {

                $total_withdraw = $amount + $data->total_withdraw;
                $call1 = updateTotalWithdraw($total_withdraw);
                $call = requestWithdrawal($fullname, $email, $user, $amount, $method, $address, $new_wallet);
              }
            }
        ?>


            <div class="main-withdraw-box">
              <table cellspacing=0 cellpadding=2 border=0 class="tab">
                <tr>
                  <th>Account Balance:</th>
                  <th>$<b><?php echo $data->wallet; ?></b></th>
                </tr>
              </table>
            </div>

            <br><br>

            <?php
            if ($data->wallet === '0') {
              echo 'You have no funds to withdraw.';
            } else { ?>
              <div class="desh-right">
                <br>
                <form method=post>
                  <table cellspacing=0 cellpadding=2 border=0 class="blank">
                    <tr>
                      <td>Wallet Balance:</td>
                      <td><input type=text name="wallet" value='USD <?php echo $data->wallet; ?>' class=inpts size=30 disabled>
                    </tr>

                    <tr>
                      <td>Amount:</td>
                      <td>
                        <input type="number" name="amount" value="<?php echo $amount; ?>" class=inpts size=30>
                        <span style="color: red"><?php echo $errors['amount']; ?></span>

                      </td>
                    </tr>
                    <tr>
                      <td>Method of Payment:</td>
                      <td>
                        <select class="form-control" style="width:650px" name="method" id="formGroupDefaultSelect">
                          <option value="">SELECT PAYMENT METHOD</option>
                          <option value="bitcoin">BITCOIN</option>
                          <option value="ethereum">ETHEREUM</option>
                        </select>
                        <span style="color: red"><?php echo $errors['method']; ?></span>

                      </td>
                    </tr>

                    <tr>
                      <td>Wallet Address:</td>
                      <td>
                        <input type=text class=inpts size=30 name="address" value="<?php echo $address; ?>">
                        <span style="color: red"><?php echo $errors['address']; ?></span>

                      </td>

                    </tr>

                    <tr>
                      <td>&nbsp;</td>
                      <td><input type=submit value="WITHDRAW" name="withdraw" class=sbmt></td>
                    </tr>
                  </table>
                </form>


              </div>
            <?php  }
            ?>

      </div>
    </div>
  </div>



<?php }
        } ?>



<?php include('includes/footer.php'); ?>