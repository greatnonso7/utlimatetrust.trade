<?php
session_start();

function login_admin($user, $pass)
{
  include('db.php');

  $user = mysqli_real_escape_string($connection, $user);
  $pass = mysqli_real_escape_string($connection, $pass);


  $getinfo = mysqli_query($connection, "SELECT username, password FROM `moderators` WHERE username = '$user'") or die(mysqli_error($connection));

  $getinfo1 = mysqli_num_rows($getinfo);



  if ($getinfo1 > 0) {
    $getinf02 = mysqli_fetch_object($getinfo);
    if ($getinf02->password === $pass) {
      $_SESSION['admin'] = $user;
      header('location: index.php');
    } else {
      header('location: login.php');
    }
  }
}

function showNoMembers()
{
  include 'includes/db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT COUNT(*) FROM users") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getLatestMembers()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC LIMIT 5") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function addNewWallet($coin, $wallet, $image, $temp)
{
  include 'includes/db.php';
  $user = $_SESSION['admin'];

  $coin = mysqli_real_escape_string($connection, $coin);
  $wallet = mysqli_real_escape_string($connection, $wallet);

  $target = "barcode/" . basename($image);
  $wallet_id = rand(10000000, 100000000);

  $addWallet = mysqli_query($connection, "INSERT INTO admin_wallets (`wallet_id`, `crypto_coin`, `wallet_address`, `bar_code`) VALUES ('$wallet_id','$coin', '$wallet', '$image' )") or die(mysqli_error($connection));

  if (move_uploaded_file($temp, $target)) {
    $_SESSION['success'] = 'Wallet details uploaded successfully';
  } else {
    $_SESSION['error'] = "Could not upload successfully";
  }
}

function getAdminWallets()
{
  include 'includes/db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM admin_wallets") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}



function getLatestInvestments()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM investments ORDER BY id DESC LIMIT 5") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getLatestDeposits()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM deposits ORDER BY id DESC LIMIT 5") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getLatestWithdrawals()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM withdrawals ORDER BY id DESC LIMIT 5") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function showMembers()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}


function showNoInvestments()
{
  include 'includes/db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT COUNT(*) FROM investments") or die(mysqli_error($connection));

  $find1 = mysqli_fetch_object($find);

  return $find1;

  // if ($find1 > 0) {
  //     return array($find, $find1);
  // } else { };
}

function showInvestments()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM investments ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function showDeposits()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM deposits ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function showTransfers()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM transfers ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getSingleInvestment()
{
  include 'db.php';

  $pid = $_GET['pid'];

  $find = mysqli_query($connection, "SELECT * FROM investments WHERE invest_id='$pid'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 ==  1) {
    return array($find, $find1);
  } else {
  };
}

function getSingleDeposit()
{
  include 'db.php';

  $pid = $_GET['pid'];

  $find = mysqli_query($connection, "SELECT * FROM deposits WHERE deposit_id='$pid'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 ==  1) {
    return array($find, $find1);
  } else {
  };
}

function getSingleUser()
{
  include 'includes/db.php';

  $pid = $_GET['pid'];

  $find = mysqli_query($connection, "SELECT * FROM users WHERE user_id='$pid'") or die(mysqli_error($connection));

  var_dump($pid);

  $find1 = mysqli_num_rows($find);


  if ($find1 ==  1) {
    return array($find, $find1);
  } else {
  };
}

function setSingleUser($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l)
{
  include 'includes/db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);
  $d = mysqli_real_escape_string($connection, $d);
  $e = mysqli_real_escape_string($connection, $e);
  $f = mysqli_real_escape_string($connection, $f);
  $g = mysqli_real_escape_string($connection, $g);
  $h = mysqli_real_escape_string($connection, $h);
  $i = mysqli_real_escape_string($connection, $i);
  $j = mysqli_real_escape_string($connection, $j);
  $k = mysqli_real_escape_string($connection, $k);
  $l = mysqli_real_escape_string($connection, $l);

  $find = mysqli_query($connection, "UPDATE users SET firstname = '$a', lastname = '$b', username = '$c', email = '$d', phone = '$e', referral = '$f', country = '$g', state = '$h', address = '$i', wallet = '$j', total_invest = '$k', total_withdraw = '$l' WHERE user_id = '$pid'") or die(mysqli_error($connection));


  if ($find) {
    $_SESSION['success'] = 'You have successfully updated user';
  } else {
    $_SESSION['error'] = 'User info  could not be updated';
  }
}

function deleteSingleUser($a)
{
  include 'includes/db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);

  $find = mysqli_query($connection, "DELETE FROM users WHERE user_id = '$pid'") or die(mysqli_error($connection));


  if ($find) {
    $_SESSION['success'] = 'You have successfully deleted user withdrawal status';
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}


function setSingleInvestment($a)
{
  include 'db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);

  $find = mysqli_query($connection, "UPDATE investments SET status = '$a' WHERE invest_id = '$pid'") or die(mysqli_error($connection));


  if ($find) {
    $_SESSION['success'] = 'You have successfully updated user investment status';
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}

function setSingleDeposit($a, $b, $c, $d)
{
  include 'db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);
  $b = mysqli_real_escape_string($connection, $b);
  $c = mysqli_real_escape_string($connection, $c);

  $getUser = mysqli_query($connection, "SELECT * FROM users WHERE email ='$b'") or die(mysqli_error($connection));
  $getUserDetail = mysqli_fetch_object($getUser);

  $newAmount = $getUserDetail->wallet + $c;

  $updateWallet = mysqli_query($connection, "UPDATE users SET wallet = '$newAmount' WHERE email ='$b'") or die(mysqli_error($connection));

  if ($updateWallet) {
    $updateWallet = mysqli_query($connection, "UPDATE deposits SET status = '$a' WHERE deposit_id ='$d'") or die(mysqli_error($connection));
  }


  if ($updateWallet) {
    $_SESSION['success'] = 'You have successfully updated user deposit';
    header('location: deposits.php');
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}

function showWithdrawals()
{
  include 'db.php';

  $user = $_SESSION['admin'];

  $find = mysqli_query($connection, "SELECT * FROM withdrawals ORDER BY id DESC") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);


  if ($find1 > 0) {
    return array($find, $find1);
  } else {
  };
}

function getSingleWithdrawal()
{
  include 'db.php';

  $pid = $_GET['pid'];

  $find = mysqli_query($connection, "SELECT * FROM withdrawals WHERE wid='$pid'") or die(mysqli_error($connection));

  $find1 = mysqli_num_rows($find);



  if ($find1 ==  1) {
    return array($find, $find1);
  } else {
  };
}

function totalDeposit()
{
  include('db.php');

  $getAllDeposits = mysqli_query($connection, "SELECT SUM(usd) as sum FROM deposits") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}

function totalInvestment()
{
  include('db.php');

  $getAllDeposits = mysqli_query($connection, "SELECT SUM(amount) as sum FROM investments") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}

function totalTransfers()
{
  include('db.php');

  $getAllDeposits = mysqli_query($connection, "SELECT SUM(amount) as sum FROM transfers") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}

function totalWithdrawal()
{
  include('db.php');

  $getAllDeposits = mysqli_query($connection, "SELECT SUM(amount) as sum FROM withdrawals") or die(mysqli_error($connection));

  $val = mysqli_fetch_array($getAllDeposits);

  $tech_total = $val['sum'];

  if ($tech_total === NULL) {
    return 0;
  } else {
    return $tech_total;
  }
}

function setSingleWithdrawal($a, $b, $c, $d, $e, $f)
{
  include 'db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);

  $find = mysqli_query($connection, "UPDATE withdrawals SET status = '$a' WHERE wid = '$pid'") or die(mysqli_error($connection));

  $to = $e;
  $subject = 'Withdrawal Approval';


  $message = '<!DOCTYPE html>
<html>
<head>
<title>
YOUR WITHDRAWAL HAS BEEN APPROVED 
</title>
</head>
<body>
<style>
</style>
<div style="width:80%;background:#eee;margin:0 auto;border:0;padding:15px;font-weight:300;">
<div style="margin:0;background:royalblue;padding:15px;border:0;border-top-right-radius:30px;color:#fff;font-size:16px;text-align: center;text-transform: uppercase;font-weight: 800;">
</div>
<div style="margin:0;background:#fff; padding:15px;border:0;border-bottom-left-radius:30px;color:#111;font-size:18px;font-weight:bold">
<p>Hello ' . $d . ',</p>
<p>$' . $c . ' has been successfully sent to your ' . $f . ' account</p>
<p>' . ucwords($f) . ' Account: ' . $b . ' </p>
<p>Status: Paid</p>
<p>Amount: $' . $c . '</p>
<p>
    Do not forget to refer your friends and earn %5 of their deposits forever.
</p>
<p>
    To invite them simply copy the referral link on your dashboard and send to them. Once they register using the link you will get %5 of any amount they deposit to your wallet.
</p>
<p>
    We rejoice with you on your withdrawal, and we would love to keep doing business with you
</p>


<div style="border:0;padding:1px;height:2px;width:80%;background:royalblue;margin:10px;"></div>

<div style="border:0;padding:1px;height:2px;width:60%;background:royalblue;margin:10px;"></div>

<p align="right">
Regards
<br>
<b>Admininstration</b>
<br>
<small>cryptoex.ltd</small>
</p>
</div>
</div>
</body>
</html>';

  $headers  =   'From: support@cryptoex.ltd' . "\r\n" .
    'Reply-To: support@cryptoex.ltd' . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();;

  mail($to, $subject, $message, $headers);


  if ($find) {
    $_SESSION['success'] = 'You have successfully updated user withdrawal status';
    echo '<script>
            window.location.href = "withdrawals.php"
          </script>';
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}

function deleteSingleWithdrawal($a)
{
  include 'includes/db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);

  $find = mysqli_query($connection, "DELETE FROM withdrawals WHERE wid = '$pid'") or die(mysqli_error($connection));


  if ($find) {
    $_SESSION['success'] = 'You have successfully deleted user withdrawal status';
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}

function deleteSingleTransfer($a)
{
  include 'includes/db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);

  $find = mysqli_query($connection, "DELETE FROM transfers WHERE transfer_id = '$pid'") or die(mysqli_error($connection));

  if ($find) {
    $_SESSION['success'] = 'You have successfully deleted user transfer';
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}


function deleteSingleInvestment($a)
{
  include 'includes/db.php';
  $pid = $_GET['pid'];
  $a = mysqli_real_escape_string($connection, $a);

  $find = mysqli_query($connection, "DELETE FROM investments WHERE invest_id = '$pid'") or die(mysqli_error($connection));


  if ($find) {
    $_SESSION['success'] = 'You have successfully deleted user withdrawal status';
  } else {
    $_SESSION['error'] = 'User investment status could not be updated';
  }
}
