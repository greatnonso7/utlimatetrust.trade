<?php include('includes/head.php'); ?>
<style>
  input[type=number] {
    -moz-appearance: textfield;
  }

  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>

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
        <h1>DEPOSIT FUNDS USING <?php

                                if (($_GET['coin']) == 'btc') {
                                  echo 'BITCOIN';
                                } else if (($_GET['coin']) == 'eth') {
                                  echo 'ETHEREUM';
                                } else if (($_GET['coin']) == 'usdt') {
                                  echo 'TETHER (USDT)';
                                } else if (($_GET['coin']) == 'perfectMoney') {
                                  echo 'PERFECT MONEY';
                                }
                                ?> </h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>
      <?php
      if (isset($_SESSION['user']));
      $call = session();

      if ($call[1] > 0) {
        while ($data = mysqli_fetch_object($call[0])) {
          if ($_GET["coin"]) {
            $coin = trim($_GET["coin"]);

            if ($coin != "btc" && $coin != "eth") {
              header("location: 404.html");
            } else if ($coin == "btc" || $coin == "eth") {
              $coinName = "";

              switch ($coin) {
                case 'btc':
                  $coinName = "BTC";
                  $address = '1FQEwc5SCiT8qU7LJB6HPG2H15MEMYBcSD';
                  break;

                case 'eth':
                  $coinName = 'ETH';
                  $address = '0xE2e2FB0dd755BBE003FA9475E5e55DB379a716dF';
                  break;
              }
            }
          }
      ?>
          <div class="desh-right">
            <br>
            <form method=post action="deposit-funds.php">
              <table cellspacing=0 cellpadding=2 border=0 class="blank">
                <tr>
                  <td>AMOUNT IN USD:</td>
                  <td>
                    <input type="number" name="amount" value='<?php echo $amount; ?>' placeholder="Amount to Deposit in USD" class="input-amount" required>
                    <span style="color: red"><?php echo $errors['amount']; ?></span>
                  </td>
                  <input type="hidden" value="<?php echo $coinName; ?>" name="coin" />
                  <input type="hidden" value="<?php echo $address; ?>" name="address" />
                  <input type="hidden" value="<?php echo $description; ?>" name="description" />
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td><input type=submit name="deposit" value="DEPOSIT FUNDS" class="submit" style="margin-top: 20px"></td>
                </tr>
              </table>
            </form>


          </div>
    </div>
  </div>

<?php }
      } ?>

<?php include('includes/footer.php'); ?>