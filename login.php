<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <?php include('includes/ticker.php'); ?>

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




            <script language=javascript>
                function checkform() {
                    if (document.mainform.username.value == '') {
                        alert("Please type your username!");
                        document.mainform.username.focus();
                        return false;
                    }
                    if (document.mainform.password.value == '') {
                        alert("Please type your password!");
                        document.mainform.password.focus();
                        return false;
                    }
                    return true;
                }
            </script>




            <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16237000689138"><input type="hidden" name="form_token" value="aae3920a0d0f8060f55e0c5f8b631190">
                <input type=hidden name=a value='do_login'>
                <input type=hidden name=follow value=''>
                <input type=hidden name=follow_id value=''>


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
                            </div>
                        </div>
                    </div>




                </div>

                <div class="login-forgot">
                    <div class="loginnow">
                        <input type="submit" value="LOG IN NOW">
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