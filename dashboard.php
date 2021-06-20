<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <!--end menu-->
    <?php
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }
    ?>

    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>Account Overview</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-contact">
            <!--id change-->
            <?php include('includes/sidebar.php'); ?>
            <?php
            $call = session();
            if ($call[1] > 0) {;

                while ($data = mysqli_fetch_object($call[0])) {
            ?>
                    <div class="desh-right">
                        <div class="desh-rightup">
                            <div class="rightup-left">
                                <div class="ah-head">
                                    <p>Account History</p>
                                </div>
                                <div class="ahbg">
                                    <div class="details-down">
                                        <div class="details-oneh">
                                            <p>Pending Withdraw <span>$<b>0.00</b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <p>Active Deposit <span>$<b>0.00</b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <p>Last Deposit <span>$<b>N/A</b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <p>Total Deposit <span> $<b>0.00</b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <p>Last Withdraw <span>$<b>N/A</b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <p>Total Withdraw <span>$<b>0.00</b></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="md">
                                    <a href="deposit.php" class="a-link">Make Deposit</a>
                                </div>
                            </div>
                            <div class="rightup-right">
                                <div class="ui-head">
                                    <p>User Information</p>
                                </div>


                                <div class="uibg">
                                    <div class="userup">
                                        <div class="duser">
                                            <img src="images/duser.png" height="133">
                                        </div>
                                        <div class="duser-text">
                                            <p>Welcome<br><span><?php echo $data->username; ?>!</span></p>
                                        </div>
                                    </div>
                                    <div class="desh-terms">
                                        <div class="terms-one-">
                                            <p>User Name : <span> <?php echo $data->username; ?></span></p>
                                        </div>
                                        <div class="terms-one-">
                                            <p>Registration Date : <span><?php echo substr($data->created_on, 0, 10); ?></span></p>
                                        </div>
                                        <div class="terms-one-">
                                            <p>Last Access : <span></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mw">
                                    <a href="withdraw.php" class="a-link">Withdraw Fund</a>
                                </div>
                            </div>
                        </div>
                        <div class="desheb">
                            <div class="desh-balance">
                                <div class="balance-icon">
                                    <img src="images/tb.png">
                                </div>
                                <div class="balance-text">
                                    <div class="balance-amount">
                                        <p>$<b>0.00</b></p>
                                    </div>
                                    <div class="balance-tittle">
                                        <p>Account Balance</p>
                                    </div>
                                </div>
                            </div>
                            <div class="desh-earn">
                                <div class="balance-icon">
                                    <img src="images/te.png">
                                </div>
                                <div class="balance-text">
                                    <div class="balance-amount">
                                        <p>$<b>0.00</b></p>
                                    </div>
                                    <div class="balance-tittle">
                                        <p>Earning Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-referbg">
                            <p>
                                Your Referral Link : https://utlimatetrust.trade/register.php?referral=<?php echo $data->username; ?>
                            </p>
                        </div>


                    </div>
        </div>
    </div>

<?php }
            } ?>

<?php include('includes/footer.php'); ?>