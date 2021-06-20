<?php include('./function/function.php'); ?>
<div id="main-header">
  <!--start header-->
  <div id="sub-header">
    <?php
    if (isset($_SESSION['user'])) { ?>
      <div class="ls-left">
        <div class="lslogin">
          <a href="logout.php" class="a-link"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
        </div>
        <div class="lssignup">
          <a href="dashboard.php" class="a-link"><i class="fa fa-user" aria-hidden="true"></i> Dashboard</a>
        </div>
      </div>
    <?php } else { ?>
      <div class="ls-left">
        <div class="lslogin">
          <a href="login.php" class="a-link"><i class="fa fa-key" aria-hidden="true"></i> Log In</a>
        </div>
        <div class="lssignup">
          <a href="register.php" class="a-link"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
        </div>
      </div>
    <?php }
    ?>


    <div class="addby">
      <div class="phone">
        <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="date_time"></span></p>
      </div>
      <div class="phone">
        <p><i class="fa fa-phone-square" aria-hidden="true"></i> </p>
      </div>
      <div class="phone">
        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> support@ultimatetrust.trade</p>
      </div>
    </div>


    <center>
      <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <div class="banner-lang wow bounceIn">
          <div id="google_translate_element"></div>
          <script>
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({
                pageLanguage: 'en'
              }, 'google_translate_element');
            }
          </script>
          <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
      </div>
    </center>
  </div>

</div>
<!--end header-->
<div id="main-menu" class="container">
  <!--start menu-->

  <?php
  function PageName()
  {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
  }

  $current_page = PageName();

  ?>
  <div class="logo">
    <a href="index.php"><img src="images/logo.png" alt="logo" width="258" height="60"></a>
  </div>
  <div class="menu">
    <nav id="nav-1">

      <a class="link-1 <?php echo $current_page == 'index.php' ? 'hoveract' : NULL ?>" href="index.php">Home</a>
      <a class="link-1 <?php echo $current_page == 'about.php' ? 'hoveract' : NULL ?>" href="about.php">About Us</a>


      <a class="link-1 <?php echo $current_page == 'faq.php' ? 'hoveract' : NULL ?>" href="faq.php">F.a.q</a>
      <a class="link-1 <?php echo $current_page == 'rules.php' ? 'hoveract' : NULL ?>" href="rules.php">Terms & Conditions</a>

      <a class="link-1 <?php echo $current_page == 'support.php' ? 'hoveract' : NULL ?>" href="support.php">Support</a>
    </nav>
  </div>
</div>



<style>
  .widget_horizontal_container {
    width: 100%;
    height: 40px;
    background-color: #FFFFFF;
    overflow: hidden;
    box-sizing: border-box;
    border: 1px solid #56667F;
    border-radius: 4px;
    text-align: right;
    line-height: 14px;
    block-size: 40px;
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