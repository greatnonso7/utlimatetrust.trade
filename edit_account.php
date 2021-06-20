<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <!--end header-->

  <!--end menu-->
  <style>
    .widget_horizontal_container {
      width: 100%;
      height: 62px;
      background-color: #FFFFFF;
      overflow: hidden;
      box-sizing: border-box;
      border: 1px solid #56667F;
      border-radius: 4px;
      text-align: right;
      line-height: 14px;
      block-size: 62px;
      font-size: 12px;
      box-sizing: content-box;
      font-feature-settings: normal;
      text-size-adjust: 100%;
      box-shadow: inset 0 -20px 0 0 #56667F;
      padding: 1px;
      padding: 0px;
      margin: 0px;
    }

    .widget_horizontal_iframe_container {
      height: 42px;
      width: calc(100% - 1px);
    }

    .widget_horizontal_iframe {
      border: 0;
      margin: 0;
      padding: 0;
    }

    .widget_horizontal_powered {
      color: #FFFFFF;
      font-weight: 400;
      font-size: 11px;
      box-sizing: content-box;
      margin: 3px 6px 3px 0px;
      font-family: Verdana, Tahoma, Arial, sans-serif;
      float: right !important;
    }

    .widget_horizontal_powered_link {
      font-weight: 500;
      color: #FFFFFF !important;
      text-decoration: none;
      font-size: 11px;
      display: inline-block;
      margin-right: 5px;
    }
  </style>
  <div class="widget_horizontal_container">
    <div class="widget_horizontal_iframe_container"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=no" width="100%" height="100%" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" class="widget_horizontal_iframe"></iframe></div>
  </div>

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