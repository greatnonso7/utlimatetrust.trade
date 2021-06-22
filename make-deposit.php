<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <!--end menu-->
  <?php
  if (!isset($_SESSION['user'])) {
    header("Location: login.php");
  }
  ?>

  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>DEPOSIT FUNDS</h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>

      <div class="desh-right">
        <div class="desh-rightup">
          <div class="card-container">
            <div class="btc-card">
              <div class="details-down">
                <div class="details-oneh">
                  <p style="text-align: center">Deposit Using Bitcoin</p>
                </div>
                <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; margin-top: 15px">
                  <img src="images/bitcoin.png" width="120px" height="120px" />
                  <p style="padding-top: 10px; margin-bottom: 15px;">Pay Using Bitcoin</p>
                  <a href="pay.php?coin=btc">
                    <button class="btn-deposit" type="button">DEPOSIT WITH BITCOIN</button>
                  </a>
                </div>
              </div>
            </div>
            <div class="btc-card">
              <div class="details-down">
                <div class="details-oneh">
                  <p style="text-align: center">Deposit Using Ethereum</p>
                </div>
                <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; margin-top: 15px">
                  <img src="images/ethereum.png" width="120px" height="120px" />
                  <p style="padding-top: 10px; margin-bottom: 15px;">Pay Using Ethereum</p>
                  <a href="pay.php?coin=eth">
                    <button class="btn-deposit" type="button">DEPOSIT WITH ETHEREUM</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div style="margin-top:50px">
          <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
            <thead>
              <tr>
                <th>Coin</th>
                <th>Address</th>
                <th>Amount(crypto)</th>
                <th>Amount(USD)</th>
                <th>Status</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $call = getDeposits();

              if ($call[1] > 0) {;
                while ($data = mysqli_fetch_object($call[0])) {

              ?><tr>
                    <td><?php echo ucwords($data->coin); ?></td>
                    <td><?php echo $data->wallet_address; ?></td>
                    <td><?php echo ($data->amount); ?></td>
                    <td>USD <?php echo ($data->usd); ?></td>
                    <td>
                      <?php
                      if ($data->status === 'pending') {
                        echo '<span class="badge badge-warning">Pending</span>';
                      } else if ($data->status === 'approved') {
                        echo '<span class="badge badge-success">Approved</span>';
                      }
                      ?>
                    </td>
                    <td><?php echo substr($data->created_on, 0, 10); ?></td>
                  </tr>
              <?php }
              } else {
                echo '<tr><td colspan="8"><p style="text-align:center">You have no ongoing deposit</p></td></tr>';
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



  <?php include('includes/footer.php'); ?>