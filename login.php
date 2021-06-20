<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <?php
    $username = "";

    $errors = array('username' => '', 'password' => '');


    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashpass = md5($password);

        if (empty($username)) {
            $errors['username'] = 'Username cannot be empty';
        }
        if (empty($password)) {
            $errors['password'] = 'Password cannot be empty';
        }
        if ($username != "" && $hashpass != "") {
            $call = login($username, $hashpass);
        }
    }

    ?>

    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>Member Log In</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-reg">
            <!--id change-->
            <?php if (isset($_SESSION['ERROR'])) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> ' . $_SESSION['ERROR'] . '
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }

            unset($_SESSION['ERROR']);
            ?>
            <form method=post>
                <div class="reg-head">
                </div>
                <div class="reghead-text">
                    <h4>User Log In</h4>
                </div>
                <div class="all-information">
                    <div style="width: 54%;    padding-left: 27%;" class="information-left">
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/ruser.png">Your Username</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=username value=''>
                                <span style="color: red"><?php echo $errors['username']; ?></span>

                            </div>
                        </div>
                    </div>
                    <div style="width: 54%;float:left;margin-top: 19px;padding-left: 27%;" class="information-right">
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rpas.png">Your Password</p>
                            </div>
                            <div class="info-type">
                                <input type="password" name=password value=''>
                                <span style="color: red"><?php echo $errors['password']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login-forgot">
                    <div class="loginnow">
                        <input type="submit" name="login" value="LOG IN NOW">
                    </div>
                    <div class="forgot">
                        <a href="forgot.php">You Forgot Password ? <span>Click Here</span></a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>

    <?php include('includes/footer.php'); ?>