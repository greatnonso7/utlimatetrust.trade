<?php include('includes/head.php'); ?>

<?php
include('function/function.php');

$fullname = $username = $email = $cemail = $phone = $country = $password =  $cpassword = "";
$errors = array('fullname' => '', 'username' => '', 'email' => '', 'cemail' => '', 'phone' => '', 'country' => '', 'password' => '', 'cpassword' => '');
if (isset($_GET['referral'])) {
    $referral = $_GET['referral'];
} else {
    $referral = null;
}

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $cemail = $_POST['cemail'];
    $phone = $_POST['phone'];
    $referral = $referral;
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $bitcoin = $_POST['bitcoin'];
    $ethereum = $_POST['ethereum'];


    if (empty($fullname)) {
        $errors['fullname'] = 'Full Name cannot be empty';
    }

    if (empty($username)) {
        $errors['username'] = 'Username cannot be empty';
    }
    if (empty($email)) {
        $errors['email'] = 'Email cannot be empty';
    }
    if (empty($cemail)) {
        $errors['cemail'] = 'Confirm email cannot be empty';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email must be a valid email';
    }
    if (empty($password)) {
        $errors['password'] = 'Password cannot be empty';
    }
    if (empty($phone)) {
        $errors['phone'] = 'Phone cannot be empty';
    }
    if (empty($country)) {
        $errors['country'] = 'Country cannot be empty';
    }
    if (strlen($password) < 6) {
        $errors['password'] = 'Password must be longer than 6 Characters';
    }
    if (empty($cpassword)) {
        $errors['cpassword'] = 'Confirm password cannot be empty';
    }

    if ($password !== $cpassword) {
        $errors['password'] = 'Password must be the same with confirm password';
    }

    if ($fullname != "" && $username != "" && $email != "" && $password != "" && $cpassword != "") {
        $call = register($fullname, $username, $email, $phone, md5($password), $bitcoin, $ethereum, $referral);
    }
} ?>

<body>
    <?php include('includes/header.php'); ?>
    <?php include('includes/ticker.php'); ?>

    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>Create An Account</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-reg">
            <form method=post>
                <div class="reg-head">
                </div>
                <div class="reghead-text">
                    <h4>Account Information</h4>
                </div>
                <div class="all-information">
                    <div class="information-left">
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/user.png" width="25px"> Full Name</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name="fullname" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['fullname']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/user.png" width="25px"> Username</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name="username" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['username']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/email.png" width="25px"> Email Address</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name="email" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['email']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/email.png" width="25px"> Retype Email</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name="cemail" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['cemail']; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="information-right">
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/mobile-phone.png" width="25px">Mobile Phone</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name="phone" value="<?php echo $phone; ?>">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['phone']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/global.png" width="25px">Country</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name="country" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['country']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/padlock.png" width="25px">Define Password</p>
                            </div>
                            <div class="info-type">
                                <input type="password" name="password" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['password']; ?>
                                </span>
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/padlock.png" width="25px">Retype Password</p>
                            </div>
                            <div class="info-type">
                                <input type="password" name="cpassword" value="">
                                <span style="color: red" class="text-center">
                                    <?php echo $errors['cpassword']; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register-down">
                    <div class="reg-head">
                    </div>
                    <div class="reghead-text">
                        <h4>Payment Method</h4>
                    </div>
                    <div class="paybox">

                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/bitcoin.png" width="25px"> Bitcoin</p>
                            </div>
                            <div class="info-type">
                                <p><input type="text" name='bitcoin' value="<?php echo $bitcoin; ?>"></p>
                            </div>
                        </div>


                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/ethereum.png" width="25px"> Ethereum</p>
                            </div>
                            <div class="info-type">
                                <p><input type="text" name='ethereum' value="<?php echo $ethereum; ?>"></p>
                            </div>
                        </div>

                    </div>
                    <div class="sign-box">
                        <div class="upline">
                            <div class="upline-text">
                                <p>Your Upline :
                                    <?php if ($referral === NULL) {
                                        echo 'N/A (n/a)';
                                    } else {
                                        echo $referral;
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="check-text">
                            <div class="check-box">
                                <input type="checkbox" name=agree value=1>
                            </div>
                            <div class="agree">
                                <p>I Agree With <span><a target="_blank" href="rules.php">Terms &amp; Conditions</a></span></p>
                            </div>
                        </div>
                        <div class="regnow">
                            <input type="submit" name="register" value="REGISTER NOW">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>




    <?php include('includes/footer.php'); ?>