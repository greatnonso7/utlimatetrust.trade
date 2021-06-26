<?php
session_start();
ob_start();

function register($a, $b, $c, $d, $e, $f, $g, $h)
{
  include 'db.php';
  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);
  $d = mysqli_real_escape_string($connection, $d);
  $e = mysqli_real_escape_string($connection, $e);

  $to      = $c;
  $subject = 'Welcome to Ultracoin Investment';
  $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:tahoma, verdana, segoe, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>New message</title> 
  
  <style type="text/css">
.rollover div {
	font-size:0;
}
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
[data-ogsb] .es-button {
	border-width:0!important;
	padding:10px 20px 10px 20px!important;
}
@media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { text-align:center } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important } h2 a { text-align:center } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:24px!important } h3 a { text-align:center } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; border-width:10px 0px 10px 0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
</style> 
 </head> 
 <body style="width:100%;font-family:tahoma, verdana, segoe, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0"> 
  <div class="es-wrapper-color" style="background-color:#E8E8E4"> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
     <tr style="border-collapse:collapse"> 
      <td valign="top" style="padding:0;Margin:0"> 
       <table cellpadding="0" cellspacing="0" class="es-header" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-top:10px;padding-left:15px;padding-right:15px;padding-bottom:20px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:570px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;font-size:0px"><img class="adapt-img" src="https://lcjobh.stripocdn.email/content/guids/CABINET_0ed47a65dea96dfed119fed1c502c70b/images/55461624735749472.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="570"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td class="es-adaptive" align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#fafcfb;width:600px" cellspacing="0" cellpadding="0" bgcolor="#fafcfb" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:10px;padding-right:10px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:580px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td style="padding:0;Margin:0;position:relative" align="center"><a target="_blank" href="https://viewstripo.email" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#02951E;font-size:14px"><img class="adapt-img" src="https://lcjobh.stripocdn.email/content/guids/bannerImgGuid/images/87071624735617300.png" alt title width="580" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="center" style="padding:0;Margin:0;padding-left:30px;padding-right:30px;padding-top:40px"><h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#666666">Dear ' . $a . ' ,</h3></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" esdev-links-color="#ffffff" align="center" style="Margin:0;padding-top:5px;padding-bottom:15px;padding-left:30px;padding-right:30px"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#50b948">Welcome to Ultimate Trust Trade Family</h2></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-left:30px;padding-right:30px;padding-bottom:40px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:540px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px">Thank you for choosing us among a wide range of financial companies. We appreciate your trust and support.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px">You have successfully registered and one step away from making a profitable investment. Without you we would not be there where we are now.<br><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px">On behalf of Ultimate Trust Trade Family, We are pleased to inform you that your account is ready.<br><br>PLEASE DO NOT MAKE PAYMENT THROUGH ANY PERSONAL ACCOUNT OR WALLET ADDRESSES provided by any individual (Managers Or Referrals)</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px"><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px">Payments will only be recognized by using the funding options available from the website alone. If you have any other issue, please send us an email. Our expert customer service, would be readily available to help you out.</p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td class="es-m-txt-c" align="center" style="padding:0;Margin:0;padding-top:20px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px">Sincerely,</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#999999;font-size:14px"><b>Management</b>.</p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table cellpadding="0" cellspacing="0" class="es-footer" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-footer-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:600px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;font-size:0"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                         <tr style="border-collapse:collapse"> 
                          <td style="padding:0;Margin:0;border-bottom:4px solid #cccccc;background:#FFFFFF none repeat scroll 0% 0%;height:1px;width:100%;margin:0px"></td> 
                         </tr> 
                       </table></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="padding:0;Margin:0;padding-top:30px;padding-left:30px;padding-right:30px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:540px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:10px;font-size:0px"><a target="_blank" href="https://viewstripo.email" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#989898;font-size:14px"><img class="adapt-img" src="https://lcjobh.stripocdn.email/content/guids/CABINET_0ed47a65dea96dfed119fed1c502c70b/images/55461624735749472.png" alt="Bookkeeping logo" title="Bookkeeping logo" width="115" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#989898;font-size:14px">This email was sent by Ultimate Trust Trade<br></p></td> 
                     </tr> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;padding-bottom:5px;padding-top:15px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#989898;font-size:14px">© Ultimate Trust Trade&nbsp;.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#989898;font-size:14px">27 Old Gloucester Street, London,&nbsp;</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:tahoma, verdana, segoe, sans-serif;line-height:21px;color:#989898;font-size:14px">WC1N 3AX, United Kingdom<br></p></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
         <tr style="border-collapse:collapse"> 
          <td align="center" style="padding:0;Margin:0"> 
           <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
             <tr style="border-collapse:collapse"> 
              <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                 <tr style="border-collapse:collapse"> 
                  <td valign="top" align="center" style="padding:0;Margin:0;width:560px"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
                     <tr style="border-collapse:collapse"> 
                      <td align="center" style="padding:0;Margin:0;display:none"></td> 
                     </tr> 
                   </table></td> 
                 </tr> 
               </table></td> 
             </tr> 
           </table></td> 
         </tr> 
       </table></td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>';



  $headers = 'From: support@ultimatetrust.trade' . "\n" .
    'Reply-To: support@ultimatetrust.trade' . "\n" .
    'Content-type: text/html; charset=iso-8859-1' . "\n" .
    "X-Mailer: PHP";
  // Check for double Occurrence of Both email or username 
  $checkemail = mysqli_query($connection, "SELECT email FROM users WHERE email = '$d'");
  $checkemail1 = mysqli_num_rows($checkemail);


  $checkuser = mysqli_query($connection, "SELECT username FROM users WHERE username = '$c'");
  $checkuser1 = mysqli_num_rows($checkuser);


  // Insert into the database Table
  $cd = rand(10, 100000000);
  if ($checkemail1 == 0 && $checkuser1 == 0) {
    $insertdata = mysqli_query($connection, "INSERT INTO users (`user_id`, `fullname`, `username`, `email`, `phone`, `password`, `bitcoin`, `ethereum`, `referral`) VALUES ('$cd', '$a', '$b','$c', '$d', '$e', '$f', '$g', '$h')") or die(mysqli_error($connection));
    if ($insertdata) {
      $_SESSION['success'] = "Your account has been created successfully";
      echo '<script type="text/javascript">toastr.success("Your account has been created successfully.")</script>';

      mail($to, $subject, $message, $headers);

      header('location: login.php');
      exit();
    }
  } elseif ($checkemail1 > 0) {
    $_SESSION['error'] = 'Email has already been used';
  } elseif ($checkuser1 > 0) {
    $_SESSION['error'] = 'Username has already been used';
  }
}

function verify($code, $token, $email)
{
  include 'db.php';
  $code = mysqli_real_escape_string($connection, $code);

  $getinfo = mysqli_query($connection, "SELECT  email, emailVerifyToken, verifyCode  FROM users WHERE email = '$email' AND verifyCode = '$code' AND accountVerified = 0") or die(mysqli_error($connection));

  $getinfo1 = mysqli_num_rows($getinfo);

  if ($getinfo1 == 1) {
    $updateData = mysqli_query($connection, "UPDATE users SET accountVerified = 1 WHERE email = '$email' AND verifyCode = '$code' ") or die(mysqli_error($connection));

    if ($updateData) {
      $_SESSION['success'] = 'You have successfully updated user';
    } else {
      $_SESSION['error'] = 'User info  could not be updated';
    }
  }
}

function login($user, $pass)
{
  include 'db.php';
  $user = mysqli_real_escape_string($connection, $user);
  $pass = mysqli_real_escape_string($connection, $pass);




  $getinfo = mysqli_query($connection, "SELECT * FROM users WHERE email = '$user'") or die(mysqli_error($connection));

  $getinfo1 = mysqli_num_rows($getinfo);


  if ($getinfo1 == 1) {
    $getinf02 = mysqli_fetch_object($getinfo);


    if ($getinf02->password === $pass) {
      $_SESSION['user'] = $user;
      echo '<script>
            window.location.href = "dashboard.php"
          </script>';
    } else {
      $_SESSION['ERROR'] = 'Email or Password is not correct';
    }
  } else {
    $_SESSION['ERROR'] = 'Email or Password is not correct';
  }
}

function session()
{
  include('db.php');

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $email = $_SESSION['user'];


  $find = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 == 1) {
    return array($find, $find1);
  } else echo "Data not found";
}

function forgot($email)
{
  include 'db.php';
  $email = mysqli_real_escape_string($connection, $email);

  $key = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 40);

  $to      = $email;
  $subject = 'Forgot Password';
  $message = '<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
Forgot Password
</title>
</head>
<body>
<style>
</style>
<div style="width:80%;background:#eee;margin:0 auto;border:0;padding:15px;font-weight:300;">
<div style="margin:0;background:#111111;padding:15px;border:0;border-top-right-radius:30px;color:#fff;font-size:16px;text-align: center;text-transform: uppercase;font-weight: 800;">
<h2>Forgot Password</h2><br>
</div>
<div style="margin:0;background:#fff; padding:15px;border:0;border-bottom-left-radius:30px;color:#111;font-size:18px;">
Hello , you forgot your password, dont be hard on yourself because we all do.<br>

<p>On behalf of Ultracoin Investment, We are pleased to inform you that you can recover your account</p>
<p>Click on the link below and use code to retrieve your account password </p>

<a href="https://ultimatetrust.trade/reset.php?email=' . $email . '&token=' . $key . '">Reset Password</a>

<div style="border:0;padding:1px;height:2px;width:80%;background:#111111;margin:10px;"></div>

<div style="border:0;padding:1px;height:2px;width:60%;background:#111111;margin:10px;"></div>

<p align="right">
<br>
<small>Ultracoin Investment</small>
</p>
</div>
</div>
</body>
</html>';



  $headers = 'From: support@ultimatetrust.trade' . "\r\n" .
    'Reply-To: support@ultimatetrust.trade' . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  $checkemail = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
  $checkemail1 = mysqli_num_rows($checkemail);

  if ($checkemail1 == 1) {
    $insertdata = mysqli_query($connection, "INSERT INTO password_resets (`email`, `token`) VALUES ('$email', '$key')") or die(mysqli_error($connection));
    if ($insertdata) {
      $mail = mail($to, $subject, $message, $headers);

      if ($mail) {
        $_SESSION['MSG'] = "Recovery link has been sent to the provided email";
        echo '<script type="text/javascript">toastr.success("Recovery link has been sent to the provided email")</script>';
      }
    }
  } else {
    $_SESSION['error'] = 'Email not found';
  }
}

function resetpass($hashpass, $email, $token)
{
  include 'db.php';
  $hashpass = mysqli_real_escape_string($connection, $hashpass);

  $getinfo = mysqli_query($connection, "SELECT email, token FROM password_resets WHERE email = '$email' AND token = '$token'") or die(mysqli_error($connection));

  $getinfo1 = mysqli_num_rows($getinfo);

  if ($getinfo1 == 1) {
    $updateData = mysqli_query($connection, "UPDATE users SET password = '$hashpass' WHERE email = '$email'") or die(mysqli_error($connection));


    if ($updateData) {
      $_SESSION['success'] = 'You have successfully updated user';
    } else {
      $_SESSION['error'] = 'User info  could not be updated';
    }
  }
}


function transfer($user, $amount)
{
  include('db.php');
  $user = mysqli_real_escape_string($connection, $user);
  $amount = mysqli_real_escape_string($connection, $amount);

  $status = 'pending';
  $transfer_id = rand(10000, 100000);
  $email = $_SESSION['user'];

  $checkusername = mysqli_query($connection, "SELECT * FROM users WHERE username ='$user'") or die(mysqli_error($connection));
  $checkusernameRow = mysqli_num_rows($checkusername);

  $getSenderDetails = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($connection));
  $getSender = mysqli_fetch_object($getSenderDetails);

  $senderUsername = $getSender->username;

  if ($checkusernameRow === 1) {
    $data = mysqli_fetch_object($checkusername);
    $newAmount = $data->wallet + $amount;
    $receiverEmail = $data->email;

    $senderAmount = $getSender->wallet - $amount;

    $updateSenderInfo =
      mysqli_query($connection, "UPDATE users SET wallet = '$senderAmount' WHERE email = '$email'") or die(mysqli_error($connection));

    $updateUserInfo = mysqli_query($connection, "UPDATE users SET wallet = '$newAmount' WHERE username = '$user'") or die(mysqli_error($connection));
    if ($updateUserInfo && $updateSenderInfo) {
      $_SESSION['success'] = "Transfer successful";

      $insertdata = mysqli_query($connection, "INSERT INTO transfers (`transfer_id`, `sender_email`, `sender_username`, `receiver_email`, `receiver_username`, `amount`, `status`) VALUES ('$transfer_id', '$email', '$senderUsername', '$receiverEmail', '$user', '$amount', '$status')") or die(mysqli_error($connection));
    }
  } else {
    $_SESSION['error'] = 'Account does not exist';
  }
}


function invest($a, $b, $c, $d, $e, $f, $g)
{

  include('db.php');
  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);
  $d = mysqli_real_escape_string($connection, $d);
  $e = mysqli_real_escape_string($connection, $e);
  $f = mysqli_real_escape_string($connection, $f);
  $g = mysqli_real_escape_string($connection, $g);
  $date = date("d-m-Y H:i:s");

  $status = 'approved';
  $invest_id = uniqid();
  $email = $_SESSION['user'];

  $checkFirstInvestment = mysqli_query($connection, "SELECT * FROM investments WHERE email = '$email'") or die(mysqli_error($connection));

  $checkRows = mysqli_num_rows($checkFirstInvestment);

  if ($checkRows === 0) {
    $getReferral = mysqli_query($connection, "SELECT referral from users WHERE email = '$email'") or die(mysqli_error($connection));
    $getReferralDetails = mysqli_fetch_object($getReferral);
    $referralEmail = $getReferralDetails->referral;

    $ref_bonus = 5 * (int)$e / 100;

    $getReferralInfo = mysqli_query($connection, "SELECT * from users WHERE email ='$referralEmail'") or die(mysqli_error($connection));

    $refInfo = mysqli_fetch_object($getReferralInfo);
    $total_ref_bonus = $ref_bonus + $refInfo->ref_bonus;

    $addRefBonus = mysqli_query($connection, "UPDATE users SET ref_bonus = '$total_ref_bonus' WHERE email = '$referralEmail'") or die(mysqli_error($connection));

    if ($addRefBonus) {
      $insertReferredDetails = mysqli_query($connection, "INSERT INTO referral_details  (`ref_email`, `referred_name`, `investment_amount`, `ref_bonus`) VALUES ('$referralEmail', '$a', '$e','$ref_bonus')") or die(mysqli_error($connection));
    }
  }

  $sql = mysqli_query($connection, "INSERT INTO investments(fullname,email,username, plan, amount,profit, mature, invest_id, status, created_on)VALUES ('$a', '$b', '$c', '$d', '$e', '$f','$g', '$invest_id', '$status', '$date')") or die(mysqli_error($connection));

  if ($sql) {
    $_SESSION['MSG'] = "Your Investment was successful";
    header('location: deposit_history.php');
    exit();
  }
}


function countInvestments()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return  $find1;
  }
}

function countWithdrawal()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM withdrawals WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return  $find1;
  }
}





function getReferralInvestmentDetails()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM referral_details WHERE ref_email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getCurrentUserTransfers()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM transfers WHERE sender_email = '$email' || receiver_email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function addWallet($coinhost, $wallet, $coin)
{
  include('db.php');

  $email = $_SESSION['user'];

  $runQuery = mysqli_query($connection, "INSERT INTO crypto_wallets (`coin_host`, `wallet`, `coin`, `email`) VALUES ('$coinhost', '$wallet', '$coin', '$email')") or die(mysqli_error($connection));

  if ($runQuery) {
    $_SESSION['success'] = 'Successfully Added crypto wallet';
  } else {
    $_SESSION['error'] = 'Could not add wallet';
  }
}

function addBank($bankname, $accountnumber, $accountname)
{
  include('db.php');

  $email = $_SESSION['user'];

  $runQuery = mysqli_query($connection, "INSERT INTO banks (`bank_name`, `account_number`, `account_name`, `email`) VALUES ('$bankname', '$accountnumber', '$accountname', '$email')") or die(mysqli_error($connection));

  if ($runQuery) {
    $_SESSION['success'] = 'Successfully Added Bank';
  } else {
    $_SESSION['error'] = 'Could not add bank';
  }
}


function getCurrentUserBanks()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM banks WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getCurrentUserWallets()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM crypto_wallets WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function totalInvestments()
{
  include('db.php');

  $email = $_SESSION['user'];


  $getAllDeposits = mysqli_query($connection, "SELECT SUM(amount) as sum FROM investments WHERE email = '$email'") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}

function totalDeposit()
{
  include('db.php');

  $email = $_SESSION['user'];


  $getAllDeposits = mysqli_query($connection, "SELECT SUM(usd) as sum FROM deposits WHERE email = '$email'") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}

function totalWithdraw()
{
  include('db.php');

  $email = $_SESSION['user'];


  $getAllDeposits = mysqli_query($connection, "SELECT SUM(amount) as sum FROM withdrawals WHERE email = '$email'") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}


function userInvestments()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE email = '$email'  ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
    return;
  };
}

function updateUserInfo($country, $state, $address, $phone)
{
  include('db.php');
  $email = $_SESSION['user'];


  $country = mysqli_real_escape_string($connection, $country);
  $state = mysqli_real_escape_string($connection, $state);
  $address = mysqli_real_escape_string($connection, $address);
  $phone = mysqli_real_escape_string($connection, $phone);
  $isVerified = 1;


  $update = mysqli_query($connection, "SELECT email FROM users WHERE email ='$email'") or die(mysqli_error($connection));
  $update1 = mysqli_num_rows($update);

  if ($update1 == 1) {
    $updateData = mysqli_query($connection, "UPDATE users SET country = '$country', state = '$state', address = '$address',phone = '$phone', isVerified='$isVerified' WHERE email = '$email' ") or die(mysqli_error($connection));

    if ($updateData) {
      $_SESSION['success'] = 'You have successfully update your account';
    }
  } else echo "Database column empty";
}

function updateWalletInfo($a)
{
  include 'db.php';
  $email = $_SESSION['user'];

  $a = mysqli_real_escape_string($connection, $a);
  $update = mysqli_query($connection, "SELECT email FROM users WHERE email ='$email'") or die(mysqli_error($connection));
  $update1 = mysqli_num_rows($update);


  if ($update1 == 1) {
    $updateData = mysqli_query($connection, "UPDATE users SET bitcoin = '$a' WHERE email = '$email' ") or die(mysqli_error($connection));

    if ($updateData) {
      $_SESSION['success'] = 'Wallet Address updated successfully';
    }
  }
}

function getLastWithdrawal()
{
  include('db.php');

  $username = $_SESSION['user'];

  $query = mysqli_query($connection, "SELECT amount from withdrawals WHERE status='pending' AND username = '$username' ORDER BY id DESC LIMIT 1") or die(mysqli_error($connection));

  $find1 = mysqli_fetch_object($query);

  $amount = $find1->amount;

  if ($find1 > 0) {
    return $amount;
  } else {
    return NULL;
  };
}

function requestWithdrawal($a, $b, $c, $d, $e, $f, $g)
{
  include('db.php');

  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);
  $d = mysqli_real_escape_string($connection, $d);
  $e = mysqli_real_escape_string($connection, $e);
  $f = mysqli_real_escape_string($connection, $f);
  $g = mysqli_real_escape_string($connection, $g);

  $email = $_SESSION['user'];
  $status = 'pending';
  $wid = uniqid();

  $sql = mysqli_query($connection, "INSERT INTO withdrawals(fullname,email, username, amount,method,user_account, status, wid)VALUES ('$a', '$b', '$c', '$d','$e', '$f', '$status', '$wid')") or die(mysqli_error($connection));

  $findUser = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($connection));

  $userCount = mysqli_num_rows($findUser);


  if ($userCount === 1) {
    mysqli_query($connection, "UPDATE users SET wallet = '$g' WHERE email = '$email'") or die(mysqli_error($connection));
    header('location: dashboard.php');
    exit();
  }
}

function getMyReferrals()
{
  include('db.php');
  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  $getUserDetails = mysqli_fetch_object($find);
  $username = $getUserDetails->username;


  $getReferral = mysqli_query($connection, "SELECT * FROM users WHERE referral = '$username'") or die(mysqli_error($connection));
  $getCount = mysqli_num_rows($getReferral);


  if ($getCount > 0) {
    return [$getCount, $getReferral];
  }
}

function showWithdrawals()
{
  include('db.php');
  $email = $_SESSION['user'];

  $sql = mysqli_query($connection, "SELECT * FROM withdrawals WHERE email = '$email' ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($sql);

  if ($find1 > 0) {
    return array($sql, $find1);
  } else {
  };
}

function changePassword($oldPassword, $newPassword)
{
  include('db.php');
  $email = $_SESSION['user'];

  $getUsers = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($connection));
  $getUserDetails = mysqli_fetch_object($getUsers);

  $changeUserPassword = mysqli_query($connection, "UPDATE users SET password ='$newPassword' WHERE email = '$email'") or die(mysqli_error($connection));

  if ($changeUserPassword) {
    $_SESSION['success'] = 'User password changed successfully';
  } else {
    $_SESSION['error'] = 'Could not change password';
  }
}

function updateWallet($a)
{
  include('db.php');
  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "UPDATE users SET wallet = '$a' WHERE email = '$email'") or die(mysqli_error($connection));
}

function updateTotalInvest($a)
{
  include('db.php');
  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "UPDATE users SET total_invest = '$a' WHERE email = '$email'") or die(mysqli_error($connection));
}

function updateTotalWithdraw($a)
{
  include('db.php');
  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "UPDATE users SET total_withdraw = '$a' WHERE email = '$email'") or die(mysqli_error($connection));
}


function removeCashout($a)
{
  include('db.php');

  $email = $_SESSION['user'];
  $status = 'cashout';
  $find = mysqli_query($connection, "UPDATE investments SET status='$status' WHERE invest_id = '$a' AND email='$email'") or die(mysqli_error($connection));
}

function getReferrals()
{
  include('db.php');
  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  $getUserDetails = mysqli_fetch_object($find);
  $username = $getUserDetails->username;

  $getReferral = mysqli_query($connection, "SELECT * FROM users WHERE referral = '$username'") or die(mysqli_error($connection));
  $getCount = mysqli_num_rows($getReferral);

  if ($find1 > 0) {
    return $getCount;
  }
}

function deposit($coinname, $address, $response, $amount)
{
  include('db.php');

  $email = $_SESSION['user'];
  $deposit_id = rand(100000, 10000000);
  $status = 'pending';

  $insertdata = mysqli_query($connection, "INSERT INTO deposits (deposit_id, coin, wallet_address, amount, usd, email,status) VALUES ('$deposit_id', '$coinname', '$address', '$response', '$amount', '$email','$status')") or die(mysqli_error($connection));

  if ($insertdata) {
    header("Location: dashboard.php");
  }
}

function getDeposits()
{
  include('db.php');

  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "SELECT * FROM deposits WHERE email = '$email' ") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function userSingleInvestments($a)
{
  include('db.php');
  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE email = '$email' AND invest_id='$a' ") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}
