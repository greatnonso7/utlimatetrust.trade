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

        <form method=post><input type="hidden" name="form_id" value="16241866574460"><input type="hidden" name="form_token" value="e4357c105470b50d54f83257b0a62733">
          <input type=hidden name=a value=withdraw>
          <input type=hidden name=action value=preview>
          <div class="main-withdraw-box">
            <table cellspacing=0 cellpadding=2 border=0 class="tab">
              <tr>
                <th>Account Balance:</th>
                <th>$<b>0.00</b></th>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td> <small>
                </td>
              </tr>
              <tr>
                <td>Pending Withdrawals: </td>
                <td>$<b>0.00</b></td>
              </tr>

              <tr>
                <td>Your Bitcoin Account:</td>
                <td><a href="edit_account.php"><i>not set</i></a></td>
              </tr>
              <tr>
                <td>Your Ethereum Account:</td>
                <td><a href="edit_account.php"><i>not set</i></a></td>
              </tr>
            </table>
          </div>

          <br><br>
          You have no funds to withdraw.
        </form>

      </div>
    </div>
  </div>






  <?php include('includes/footer.php'); ?>