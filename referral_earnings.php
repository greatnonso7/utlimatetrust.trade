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
                <h1>My Referral Commissions</h1>
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
                <table cellspacing=1 cellpadding=2 border=0 width=100% class="tab">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['user']));
                        $call = getReferralInvestmentDetails();

                        if ($call[1] > 0) {;
                            while ($data = mysqli_fetch_object($call[0])) {
                        ?>
                                <tr>
                                    <td><?php echo $data->created_on; ?></td>
                                    <td><?php echo ucwords($data->referred_name); ?></td>
                                    <td>USD <?php echo $data->ref_bonus; ?></td>

                                </tr>
                        <?php

                            }
                        } else {
                            echo '<tr><td colspan="7"><p style="text-align: center">You currently have no referral earnings</p></td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>






    <?php include('includes/footer.php'); ?>