<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <?php
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }
    ?>

    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>Advanced login security settings</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-contact">
            <!--id change-->
            <?php include('includes/sidebar.php'); ?>
            <div class="desh-right">

                <br>

                <form method=post><input type="hidden" name="form_id" value="16237010044586"><input type="hidden" name="form_token" value="0d12a54a6c92a0b0bff6072a5b0cd94d">
                    <input type=hidden name=a value="security">
                    <input type=hidden name=action value="save">
                    <h3 style="color:#000;">Detect IP Address Change Sensitivity</h3><br>
                    <input type=radio name=ip value=disabled checked> Disabled<br><br>
                    <input type=radio name=ip value=medium> Medium<br><br>
                    <input type=radio name=ip value=high> High<br><br><br>

                    <h3 style="color:#000;">Detect Browser Change</h3><br><br>
                    <input type=radio name=browser value=disabled checked> Disabled<br><br>
                    <input type=radio name=browser value=enabled> Enabled<br><br>
                    <input style="width:30%;" type=submit value="Set" class=sbmt>
                </form>



            </div>
        </div>
    </div>






    <?php include('includes/footer.php'); ?>