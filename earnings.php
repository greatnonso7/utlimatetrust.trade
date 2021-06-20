<?php include('includes/head.php'); ?>

<body>
  <?php include('includes/header.php'); ?>

  <div id="main-other">
    <div id="sub-other">
      <div class="other-head">
        <h1>Earning History</h1>
      </div>
    </div>
  </div>
  <div id="main-reg">
    <div id="sub-contact">
      <!--id change-->
      <?php include('includes/sidebar.php'); ?>
      <div class="desh-right">
        <table cellspacing=0 cellpadding=0 border=0 width=100%>
          <tr>

          </tr>
          <tr>
            <form method=post name=opts><input type="hidden" name="form_id" value="16241867139538"><input type="hidden" name="form_token" value="8b96377962cd8a644625f92503b868be">
              <input type=hidden name=a value=earnings>
              <input type=hidden name=page value=1>
              <td>
                <select name=type class=inpts onchange="document.opts.submit();">
                  <option value="">All transactions</option>
                  <option value="deposit">Deposit</option>
                  <option value="withdrawal">Withdrawal</option>
                  <option value="earning">Earning</option>
                  <option value="commissions">Referral commission</option>
                </select>
                <br><img src=images/q.gif width=1 height=4><br>
                <select name=ec class=inpts>
                  <option value=-1>All eCurrencies</option>
                  <option value=48>Bitcoin</option>
                  <option value=69>Ethereum</option>
                </select>
              </td>
              <td align=right>
                From: <select name=month_from class=inpts>
                  <option value=1>Jan
                  <option value=2>Feb
                  <option value=3>Mar
                  <option value=4>Apr
                  <option value=5>May
                  <option value=6 selected>Jun
                  <option value=7>Jul
                  <option value=8>Aug
                  <option value=9>Sep
                  <option value=10>Oct
                  <option value=11>Nov
                  <option value=12>Dec
                </select> &nbsp;
                <select name=day_from class=inpts>
                  <option value=1>1
                  <option value=2>2
                  <option value=3>3
                  <option value=4>4
                  <option value=5>5
                  <option value=6>6
                  <option value=7>7
                  <option value=8>8
                  <option value=9>9
                  <option value=10>10
                  <option value=11>11
                  <option value=12>12
                  <option value=13>13
                  <option value=14 selected>14
                  <option value=15>15
                  <option value=16>16
                  <option value=17>17
                  <option value=18>18
                  <option value=19>19
                  <option value=20>20
                  <option value=21>21
                  <option value=22>22
                  <option value=23>23
                  <option value=24>24
                  <option value=25>25
                  <option value=26>26
                  <option value=27>27
                  <option value=28>28
                  <option value=29>29
                  <option value=30>30
                  <option value=31>31
                </select> &nbsp;

                <select name=year_from class=inpts>
                  <option value=2020>2020
                  <option value=2021 selected>2021
                </select><br><img src=images/q.gif width=1 height=4><br>

                To: <select name=month_to class=inpts>
                  <option value=1>Jan
                  <option value=2>Feb
                  <option value=3>Mar
                  <option value=4>Apr
                  <option value=5>May
                  <option value=6 selected>Jun
                  <option value=7>Jul
                  <option value=8>Aug
                  <option value=9>Sep
                  <option value=10>Oct
                  <option value=11>Nov
                  <option value=12>Dec
                </select> &nbsp;
                <select name=day_to class=inpts>
                  <option value=1>1
                  <option value=2>2
                  <option value=3>3
                  <option value=4>4
                  <option value=5>5
                  <option value=6>6
                  <option value=7>7
                  <option value=8>8
                  <option value=9>9
                  <option value=10>10
                  <option value=11>11
                  <option value=12>12
                  <option value=13>13
                  <option value=14>14
                  <option value=15>15
                  <option value=16>16
                  <option value=17>17
                  <option value=18>18
                  <option value=19>19
                  <option value=20 selected>20
                  <option value=21>21
                  <option value=22>22
                  <option value=23>23
                  <option value=24>24
                  <option value=25>25
                  <option value=26>26
                  <option value=27>27
                  <option value=28>28
                  <option value=29>29
                  <option value=30>30
                  <option value=31>31
                </select> &nbsp;

                <select name=year_to class=inpts>
                  <option value=2020>2020
                  <option value=2021 selected>2021
                </select>

              </td>
              <td>
                &nbsp; <input type=submit value="Go" class=sbmt>
              </td>
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






  <div id="main-footer">
    <!--start footer-->
    <div id="sub-footer">
      <div class="payment">
        <ul>
          <li class="flipInY  wow animated" data-wow-duration="2s" data-wow-delay="0.4s"><img src="images/geo.png" style="    margin-top: 10px;"></li>
          <li class="flipInY  wow animated" data-wow-duration="2s" data-wow-delay="0.5s"><img src="images/ddos.png"></li>
          <li class="flipInY  wow animated" data-wow-duration="2s" data-wow-delay="0.6s"><img src="images/site.png"></li>
          <li class="flipInY  wow animated" data-wow-duration="2s" data-wow-delay="0.7s"><img src="images/avg.png" style="    margin-top: 11px;"></li>
          <li class="flipInY  wow animated" data-wow-duration="2s" data-wow-delay="0.7s"><img src="images/db.png" style="    margin-top: 11px;     width: 250px;"></li>
        </ul>


        <div class="fo-menu">
          <ul>




            <li><a href="?a=home">home .</a></li>
            <li><a href="?a=cust&page=aboutus">about us .</a></li>
            <li><a href="?a=news">Company News .</a></li>
            <li><a href="?a=faq">Frequently Asked Questions .</a></li>

            <li><a href="?a=rules">terms &amp; Condition .</a></li>
            <li><a href="?a=support">support Center</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <!--end footer-->
  <div id="main-finish">
    <div id="sub-finish">
      <div class="reserved">
        <p>Copyright © 2021 Fidelity Trade Ltd, All Rights Reserved</p>
      </div>
      <div class="down-right">
        <div class="accby">
          <img src="images/bit.png" />
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript">
    $(function() {
      $('#loginform').submit(function(e) {
        return false;
      });

      $('#modaltrigger').leanModal({
        top: 110,
        overlay: 0.45,
        closeButton: ".hidemodal"
      });
    });
  </script>



</body>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = '32cb33b0d3710453226f245e42dd6ea923e0d1d3';
  window.smartsupp || (function(d) {
    var s, c, o = smartsupp = function() {
      o._.push(arguments)
    };
    o._ = [];
    s = d.getElementsByTagName('script')[0];
    c = d.createElement('script');
    c.type = 'text/javascript';
    c.charset = 'utf-8';
    c.async = true;
    c.src = 'https://www.smartsuppchat.com/loader.js?';
    s.parentNode.insertBefore(c, s);
  })(document);
</script>

</html>