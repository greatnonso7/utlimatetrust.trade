<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>
    <!--end menu-->
    <style>
        .widget_horizontal_container {
            width: 100%;
            height: 62px;
            background-color: #FFFFFF;
            overflow: hidden;
            box-sizing: border-box;
            border: 1px solid #56667F;
            border-radius: 4px;
            text-align: right;
            line-height: 14px;
            block-size: 62px;
            font-size: 12px;
            box-sizing: content-box;
            font-feature-settings: normal;
            text-size-adjust: 100%;
            box-shadow: inset 0 -20px 0 0 #56667F;
            padding: 1px;
            padding: 0px;
            margin: 0px;
        }

        .widget_horizontal_iframe_container {
            height: 42px;
            width: calc(100% - 1px);
        }

        .widget_horizontal_iframe {
            border: 0;
            margin: 0;
            padding: 0;
        }

        .widget_horizontal_powered {
            color: #FFFFFF;
            font-weight: 400;
            font-size: 11px;
            box-sizing: content-box;
            margin: 3px 6px 3px 0px;
            font-family: Verdana, Tahoma, Arial, sans-serif;
            float: right !important;
        }

        .widget_horizontal_powered_link {
            font-weight: 500;
            color: #FFFFFF !important;
            text-decoration: none;
            font-size: 11px;
            display: inline-block;
            margin-right: 5px;
        }
    </style>
    <div class="widget_horizontal_container">
        <div class="widget_horizontal_iframe_container"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=no" width="100%" height="100%" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" class="widget_horizontal_iframe"></iframe></div>
    </div>

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