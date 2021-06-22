<?php
session_start();
ob_start();

function register($a, $b, $c, $d, $e, $f)
{
  include 'db.php';
  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);
  $d = mysqli_real_escape_string($connection, $d);
  $e = mysqli_real_escape_string($connection, $e);

  $to      = $d;
  $subject = 'Welcome to Ultracoin Investment';
  $message = '<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
Welcome To Ultracoin Investment
</title>
</head>
<body>
<style>
</style>
<div style="width:80%;background:#eee;margin:0 auto;border:0;padding:15px;font-weight:300;">
<div style="margin:0;background:#111111;padding:15px;border:0;border-top-right-radius:30px;color:#fff;font-size:16px;text-align: center;text-transform: uppercase;font-weight: 800;">
<h2>Welcome To Ultracoin Investment</h2><br>
</div>
<div style="margin:0;background:#fff; padding:15px;border:0;border-bottom-left-radius:30px;color:#111;font-size:18px;">
Welcome , You have successfully registered and one step away from
making a profitable investment<br>
You can now login and choose from our available investment package
to make an investment.

<p>On behalf of Ultracoin Investment Group, We are pleased to inform you that your account is ready</p>
<p>
    PLEASE DO NOT MAKE PAYMENT THROUGH ANY PERSONAL ACCOUNT OR WALLET ADDRESSES provided by any 
    individual (Managers Or Referrals)
</p>
<p>
    Payments will only be recognized by using the funding options available from the website alone.
    If you have any other issue, please send us an email. Our expert customer service, would be readily
    available to help you out.
</p>
<div style="border:0;padding:1px;height:2px;width:80%;background:#111111;margin:10px;"></div>

<div style="border:0;padding:1px;height:2px;width:60%;background:#111111;margin:10px;"></div>

<p align="right">
<br>
<small>Management</small>
</p>
</div>
</div>
</body>
</html>';



  $headers = 'From: support@ultracoininvestment.com' . "\n" .
    'Reply-To: support@ultracoininvestment.com' . "\n" .
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
  include 'includes/db.php';
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




  $getinfo = mysqli_query($connection, "SELECT * FROM users WHERE username = '$user'") or die(mysqli_error($connection));

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


  $find = mysqli_query($connection, "SELECT * FROM users WHERE username = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 == 1) {
    return array($find, $find1);
  } else echo "Data not found";
}

function forgot($email)
{
  include 'includes/db.php';
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

<a href="https://ultracoininvestment.com/reset.php?email=' . $email . '&token=' . $key . '">Reset Password</a>

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



  $headers = 'From: support@ultracoininvestment.com' . "\r\n" .
    'Reply-To: support@ultracoininvestment.com' . "\r\n" .
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
  include 'includes/db.php';
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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
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

  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);
  $d = mysqli_real_escape_string($connection, $d);
  $e = mysqli_real_escape_string($connection, $e);
  $f = mysqli_real_escape_string($connection, $f);
  $g = mysqli_real_escape_string($connection, $g);
  $date = date("d-m-Y H:i:s");

  $status = 'pending';
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
    header('location: investments.php');
    exit();
  }
}


function countInvestments()
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return  $find1;
  }
}

function countWithdrawal()
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM withdrawals WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return  $find1;
  }
}





function getReferralInvestmentDetails()
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM crypto_wallets WHERE email = '$email'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}


function userInvestments()
{
  include('db.php');

  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE username = 'Princy'  ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
    return;
  };
}

function updateUserInfo($country, $state, $address, $phone)
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
    header('location: withdrawals.php');
    exit();
  }
}

function showWithdrawals()
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "UPDATE users SET wallet = '$a' WHERE email = '$email'") or die(mysqli_error($connection));
}

function updateTotalInvest($a)
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "UPDATE users SET total_invest = '$a' WHERE email = '$email'") or die(mysqli_error($connection));
}

function updateTotalWithdraw($a)
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $email = $_SESSION['user'];
  $find = mysqli_query($connection, "UPDATE users SET total_withdraw = '$a' WHERE email = '$email'") or die(mysqli_error($connection));
}


function removeCashout($a)
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $email = $_SESSION['user'];
  $status = 'cashout';
  $find = mysqli_query($connection, "UPDATE investments SET status='$status' WHERE invest_id = '$a' AND email='$email'") or die(mysqli_error($connection));
}

function getReferrals()
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $email = $_SESSION['user'];
  $deposit_id = rand(100000, 10000000);
  $status = 'pending';

  $insertdata = mysqli_query($connection, "INSERT INTO deposits (deposit_id, coin, wallet_address, amount, usd, email,status) VALUES ('$deposit_id', '$coinname', '$address', '$response', '$amount', '$email','$status')") or die(mysqli_error($connection));

  if ($insertdata) {
    header("Location: index.php");
  }
}

function getDeposits()
{
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);

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
  $servername = "localhost";
  $username = "root";
  $password = "12345678";
  $dbname = "ultracoin";

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $email = $_SESSION['user'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE email = '$email' AND invest_id='$a' ") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);

  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}
