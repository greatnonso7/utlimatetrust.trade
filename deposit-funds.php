<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <!--end menu-->
  <?php
  if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  }
  ?>
  <?php
  if (isset($_POST['deposit'])) {
    $coinname = $_POST['coin'];
    $amount = $_POST['amount'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    if ($coinname === 'BTC') {

      $url = 'https://blockchain.info/tobtc?currency=USD&value=' . $amount;
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HTTPGET, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response_json = curl_exec($ch);
      curl_close($ch);
      $response = json_decode($response_json, true);
    } else if ($coinname === 'ETH') {


      $url = 'https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=BTC,USD,EUR';
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HTTPGET, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $response_json = curl_exec($ch);
      curl_close($ch);
      $data = json_decode($response_json, true);

      $response = ($amount / $data['USD']);
    } else {
      $response = $amount;
    }
  }

  ?>

  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>DEPOSIT FUNDS WITH <?php echo $coinname; ?></h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>

      <div class="desh-right">
        <div class="payment-card">
          <div class="details-down">
            <div class="details-oneh">
              <p style="text-align: center">Deposit Using <?php echo $coinname; ?></p>
            </div>
            <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; margin-top: 15px">
              <p>Carefully scan or copy Ultimate Trust Trade wallet address.</p>
              <h1 style="color: #000">You're about to pay </h1>

              <?php if ($coinname === 'BTC') { ?>
                <h4 style="color: #000"><?php echo $response; ?> <?php echo strtolower($coinname); ?></h4>

              <?php } else if ($coinname === 'ETH') { ?>
                <h4 style="color: #000"><?php echo $response; ?> <?php echo strtolower($coinname); ?></h4>

              <?php } ?>
              <?php
              if ($coinname === 'BTC') { ?>
                <img src="btc.jpeg" style="width: 200px; height: 200px" />

              <?php } else if ($coinname === 'ETH') { ?>
                <img src="eth.jpeg" style="width: 200px; height: 200px" />
              <?php } ?>

              <p>Send To Address:</p>
              <?php
              if ($coinname === 'BTC') { ?>
                <p><?php echo $address; ?></p>

              <?php } else if ($coinname === 'ETH') { ?>
                <p><?php echo $address; ?></p>
              <?php  } ?>

              <?php
              if (isset($_POST['pay'])) {
                $coin = $_POST['coin'];
                $address = $_POST['address'];
                $amount = $_POST['amount'];
                $response = $_POST['response'];

                $call = deposit($coin, $address, $response, $amount);
              }
              ?>
              <form method="post">
                <input type="hidden" id="min_invest" name="coin" value="<?php echo $coinname; ?>" />
                <input type="hidden" id="max_invest" name="address" value="<?php echo $address; ?>" />
                <input type="hidden" id="profit" name="amount" value="<?php echo $amount; ?>" />
                <input type="hidden" name="response" value="<?php echo $response; ?>" />
                <div class="input-group text-center" style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-bottom: 10px">
                  <button type="submit" name="pay" class="btn-deposit">Made Payment Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <?php include('includes/footer.php'); ?>