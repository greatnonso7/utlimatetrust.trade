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
                                            <?php
                                            $call = totalDeposit(); ?>
                                            <p>Total Deposit <span> $<b><?php echo $call; ?></b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <p>Last Withdraw <span>$<b>N/A</b></span></p>
                                        </div>
                                        <div class="details-oneh">
                                            <?php
                                            $call = totalWithdraw(); ?>
                                            <p>Total Withdraw <span>$<b><?php echo $call; ?></b></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-buttons">
                                    <div class="md" style="padding: 10px">
                                        <a href="make-deposit.php" class="a-link">DEPOSIT FUNDS </a>
                                    </div>
                                    <div class="md" style="padding: 10px">
                                        <a href="deposit.php" class="a-link">INVEST FUNDS</a>
                                    </div>
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
                                <div class="mw" style="padding: 10px">
                                    <a href="withdraw.php" class="a-link">WITHDRAW FUNDS</a>
                                </div>
                            </div>
                        </div>
                        <div class="desheb" style="padding: 10px">
                            <div class="desh-balance">
                                <div class="balance-icon">
                                    <img src="images/wallet.png" width="60px">
                                </div>
                                <div class="balance-text">
                                    <div class="balance-amount">
                                        <p>$<b><?php echo $data->wallet; ?></b></p>
                                    </div>
                                    <div class="balance-tittle">
                                        <p>WALLET BALANCE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="desh-balance">
                                <div class="balance-icon">
                                    <img src="images/funds.png" width="60px">
                                </div>
                                <div class="balance-text">
                                    <div class="balance-amount">
                                        <?php
                                        $call = totalInvestments(); ?>
                                        <p>$<b><?php echo $call; ?></b></p>
                                    </div>
                                    <div class="balance-tittle">
                                        <p>TOTAL INVESTMENT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desheb" style="padding: 10px">
                            <div class="desh-balance">
                                <div class="balance-icon">
                                    <img src="images/withdraw.png" width="60px">
                                </div>
                                <div class="balance-text">
                                    <div class="balance-amount">
                                        <p>$<b><?php echo $data->total_withdraw; ?></b></p>
                                    </div>
                                    <div class="balance-tittle">
                                        <p>TOTAL WITHDRAWAL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="desh-earn">
                                <div class="balance-icon">
                                    <img src="images/collaboration.png" width="60px">
                                </div>
                                <div class="balance-text">
                                    <div class="balance-amount">
                                        <p>$<b><?php echo $data->ref_bonus; ?></b></p>
                                    </div>
                                    <div class="balance-tittle">
                                        <p>REFERRAL BONUS</p>
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