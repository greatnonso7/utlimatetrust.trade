<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <?php include('includes/ticker.php'); ?>

    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>Ultimate Trust Trade</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-contact">
            <!--id change-->


            <script language=javascript>
                function checkform() {
                    if (document.forgotform.email.value == '') {
                        alert("Please type your username or email!");
                        document.forgotform.email.focus();
                        return false;
                    }
                    return true;
                }
            </script>

            <h3>Forgot your password:</h3><br>





            <form method=post name=forgotform onsubmit="return checkform();"><input type="hidden" name="form_id" value="16237001467102"><input type="hidden" name="form_token" value="40484b3d13cb4158fdae6ac681788991">
                <input type=hidden name=a value="forgot_password">
                <input type=hidden name=action value="forgot_password">
                <table cellspacing=0 cellpadding=2 border=0>
                    <tr>
                        <td>Type your username or e-mail:</td>
                        <td><input type=text name='email' value="" class=inpts size=30></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type=submit value="Forgot" class=sbmt></td>
                    </tr>
                </table>
            </form><br><br>

        </div>
    </div>
    </div>






    <?php include('includes/footer.php'); ?>