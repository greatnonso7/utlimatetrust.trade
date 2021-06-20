<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>
  <!--end menu-->


  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>Withdrawal History</h1>
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
                <p>Withdrawal History</p>
                <br><img src=images/q.gif width=1 height=4><br>
          </tr>
        </table>
        </form>
        <br><br>

        <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
          <tr>
            <th class=inheader><b>Type</b></th>
            <th class=inheader width=200><b>Amount</b></th>
            <th class=inheader width=170><b>Date</b></th>
          </tr>
          <tr>
            <td colspan=3 align=center>No transactions found</td>
          </tr>
          <tr>
            <td colspan=3>&nbsp;</td>

          <tr>
            <td colspan=2>Total:</td>
            <td align=right><b>$ 0.00</b></td>
          </tr>
        </table>
      </div>
    </div>
  </div>






  <?php include('includes/footer.php'); ?>