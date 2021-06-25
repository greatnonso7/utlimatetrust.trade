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
                <h1>My Referrals</h1>
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
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Date Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $call = getMyReferrals();
                        if ($call[0] > 0) {;
                            while ($data = mysqli_fetch_object($call[1])) {
                        ?>
                                <tr>
                                    <td><?php echo $data->firstname; ?> <?php echo $data->lastname; ?></td>

                                    <td><?php echo $data->username; ?></td>
                                    <td><?php echo substr($data->created_on, 0, 10); ?></td>
                                </tr>
                        <?php }
                        } else {
                            echo '<tr><td colspan="8"><p style="text-align: center">You currently have no referral commission yet.</p></td></tr>';
                        } ?>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
    </div>






    <?php include('includes/footer.php'); ?>