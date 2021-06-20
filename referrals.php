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
                <h1>Your Referrals</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-contact">
            <!--id change-->
            <?php include('includes/sidebar.php'); ?>
            <div class="desh-right">
                <br>
                <br>
                <table width=300 cellspacing=1 cellpadding=1 class="tab">
                    <tr>
                        <td class=item>Referrals:</td>
                        <td class=item>0</td>
                    </tr>
                    <tr>
                        <td class=item>Active referrals:</td>
                        <td class=item>0</td>
                    </tr>
                    <tr>
                        <td class=item>Total referral commission:</td>
                        <td class=item>$0.00</td>
                    </tr>
                </table>
                <br>
            </div>
        </div>
    </div>






    <?php include('includes/footer.php'); ?>