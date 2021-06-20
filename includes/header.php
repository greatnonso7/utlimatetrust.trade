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