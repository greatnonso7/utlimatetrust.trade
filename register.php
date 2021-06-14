<?php include('includes/head.php'); ?>

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





            <script language=javascript>
                function checkform() {
                    if (document.regform.fullname.value == '') {
                        alert("Please enter your full name!");
                        document.regform.fullname.focus();
                        return false;
                    }


                    if (document.regform.username.value == '') {
                        alert("Please enter your username!");
                        document.regform.username.focus();
                        return false;
                    }
                    if (document.regform.password.value == '') {
                        alert("Please enter your password!");
                        document.regform.password.focus();
                        return false;
                    }
                    if (document.regform.password.value != document.regform.password2.value) {
                        alert("Please check your password!");
                        document.regform.password2.focus();
                        return false;
                    }


                    if (document.regform.email.value == '') {
                        alert("Please enter your e-mail address!");
                        document.regform.email.focus();
                        return false;
                    }
                    if (document.regform.email.value != document.regform.email1.value) {
                        alert("Please retupe your e-mail!");
                        document.regform.email.focus();
                        return false;
                    }
                    if (document.regform.agree.checked == false) {
                        alert("You have to agree with the Terms and Conditions!");
                        return false;
                    }
                    return true;
                }

                function IsNumeric(sText) {
                    var ValidChars = "0123456789";
                    var IsNumber = true;
                    var Char;
                    if (sText == '') return false;
                    for (i = 0; i < sText.length && IsNumber == true; i++) {
                        Char = sText.charAt(i);
                        if (ValidChars.indexOf(Char) == -1) {
                            IsNumber = false;
                        }
                    }
                    return IsNumber;
                }
            </script>





            <form method=post onsubmit="return checkform()" name="regform"><input type="hidden" name="form_id" value="16237002006427"><input type="hidden" name="form_token" value="2ed699906a36e1e101d64abadfffb800">
                <input type=hidden name=a value="signup">
                <input type=hidden name=action value="signup">

                <div class="reg-head">
                </div>
                <div class="reghead-text">
                    <h4>Account Information</h4>
                </div>
                <div class="all-information">
                    <div class="information-left">
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/ruser.png"> Full Name</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=fullname value="">
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/ruser.png"> Username</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=username value="">
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rmail.png"> Email Address</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=email value="">
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rmail.png"> Retype Email</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=email1 value="">
                            </div>
                        </div>
                    </div>
                    <div class="information-right">
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rpas.png">Define Password</p>
                            </div>
                            <div class="info-type">
                                <input type="password" name=password value="">
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rpas.png">Retype Password</p>
                            </div>
                            <div class="info-type">
                                <input type="password" name=password2 value="">
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rsecret.png">Secret Question</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=sq value="">
                            </div>
                        </div>
                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/rans.png">Secret Answer</p>
                            </div>
                            <div class="info-type">
                                <input type="text" name=sa value="">
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
                                <p><img src="images/bitb.png"> Bitcoin</p>
                            </div>
                            <div class="info-type">
                                <p><input type="text" name=pay_account[48] value=""></p>
                            </div>
                        </div>


                        <div class="info-one">
                            <div class="info-tittle">
                                <p><img src="images/bitb.png"> Ethereum</p>
                            </div>
                            <div class="info-type">
                                <p><input type="text" name=pay_account[69] value=""></p>
                            </div>
                        </div>

                    </div>
                    <div class="sign-box">
                        <div class="upline">
                            <div class="upline-text">
                                <p>Your Upline : N/A (n/a)</p>
                            </div>
                        </div>
                        <div class="check-text">
                            <div class="check-box">
                                <input type="checkbox" name=agree value=1>
                            </div>
                            <div class="agree">
                                <p>I Agree With <span><a target="_blank" href="?a=rules">Terms &amp; Conditions</a></span></p>
                            </div>
                        </div>
                        <div class="regnow">
                            <input type="submit" value="REGISTER NOW">
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
    </div>




    <?php include('includes/footer.php'); ?>