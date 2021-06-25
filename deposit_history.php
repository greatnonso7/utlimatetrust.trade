<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <!--end menu-->


  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>Deposit History</h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>
      <div class="desh-right">


        <script language=javascript>
          function go(p) {
            document.opts.page.value = p;
            document.opts.submit();
          }
        </script>
        <table cellspacing=0 cellpadding=0 border=0 width=100%>
          <tr>

          </tr>
          <tr>
            <form method=post name=opts>
              <td>
                <br><img src=images/q.gif width=1 height=4><br>
          </tr>
        </table>
        </form>
        <br><br>

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
              echo '<tr><td colspan="8"><p class="text-center">You have no ongoing deposit</p></td></tr>';
            } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>






  <?php include('includes/footer.php'); ?>