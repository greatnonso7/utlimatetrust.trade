<?php include("includes/head.php"); ?>

<body>
    <?php include("includes/header.php"); ?>

    <!--end menu-->

    <div id="main-slider">
        <!--start slider-->


        <div id="sub-slider">
            <div class="slid-text fadeInLeft animated wow">
                <h1>WE LISTEN, YOU PROSPER TODAY,<samp><br />TOMORROW,TOGETHER!</samp></h1>
            </div>
            <div class="tittle">
                <p style="color: white">Choose Your Plan & Make Your Deposit</p>
            </div>
            <div class="reg-login">
                <div class="reg-now flipInX  wow animated" data-wow-duration="2s">
                    <a href="register.php" class="a-link">Join Now</a>
                </div>
                <div class="log-now flipInX  wow animated" data-wow-duration="2s">
                    <a href="login.php" class="a-link">Log In Now</a>
                </div>
            </div>
        </div>
    </div>
    <!--end slider-->
    <!-- <div id="main-details">
        <div id="sub-details">
            <div class="view">
                <img src="images/cm.png" height="67">
            </div>
            <div class="view-text">
                <p>Cryptocurrency mining & investment company that has been legally registered in the United Kingdom.</p>
            </div>
            <div class="check flipInX animated wow">
                <a href="https://beta.companieshouse.gov.uk/company/10252728" target="_blank" class="a-link">CHECK Certificate</a>
            </div>
        </div>
    </div> -->
    <div id="main-plan">
        <!--start plan-->
        <div id="sub-plan">
            <div class="plan-up">
                <div class="plan-one fadeInDown animated wow" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="plan-text">
                        <div class="percent">
                            <p>7%</p>
                        </div>
                        <div class="daily">
                            <p style="font-size: 17px">BASIC</p>
                            <p>After 24 Hours</p>
                        </div>
                        <div class="plan-border">
                        </div>
                        <div class="da">
                            <p>Min $100 - Max $50,000</p>
                        </div>
                        <div class="return">
                            <p>Principal Include</p>
                        </div>
                    </div>
                </div>
                <div class="plan-two fadeInDown animated wow" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="plan-text">
                        <div class="percent">
                            <p>18%</p>
                        </div>
                        <div class="daily">
                            <p style="font-size: 17px">AMATEUR</p>
                            <p>After 48 Hours</p>
                        </div>
                        <div class="plan-border">
                        </div>
                        <div class="da">
                            <p>Min $200 - Max $50,000</p>
                        </div>
                        <div class="return">
                            <p>Principal Include</p>
                        </div>
                    </div>
                </div>
                <div class="plan-one fadeInDown animated wow" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="plan-text">
                        <div class="percent">
                            <p>28%</p>
                        </div>
                        <div class="daily">
                            <p style="font-size: 17px">PROFESSIONAL</p>

                            <p>After 3 Days</p>
                        </div>
                        <div class="plan-border">
                        </div>
                        <div class="da">
                            <p>Min $500 - Max $50,000</p>
                        </div>
                        <div class="return">
                            <p>Principal Include</p>
                        </div>
                    </div>
                </div>
                <div class="plan-two fadeInDown animated wow" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="plan-text">
                        <div class="percent-">
                            <p>40%</p>
                        </div>
                        <div class="daily">
                            <p style="font-size: 17px">SILVER</p>

                            <p>After 5 Days</p>
                        </div>
                        <div class="plan-border-">
                        </div>
                        <div class="da">
                            <p>Min $1,500 - Max $50,000</p>
                        </div>
                        <div class="return">
                            <p>Principal Include</p>
                        </div>
                    </div>
                </div>
                <div class="plan-one fadeInDown animated wow" data-wow-duration="2s" data-wow-delay="0.8s">
                    <div class="plan-text">
                        <div class="percent">
                            <p>55%</p>
                        </div>
                        <div class="daily">
                            <p style="font-size: 17px">GOLD</p>

                            <p>After 7 Days </p>
                        </div>
                        <div class="plan-border">
                        </div>
                        <div class="da">
                            <p>Min $5,000 - Max $50,000</p>
                        </div>
                        <div class="return">
                            <p>Principal Include</p>
                        </div>
                    </div>
                </div>
                <div class="plan-two fadeInDown animated wow" data-wow-duration="2s" data-wow-delay="1.0s">
                    <div class="plan-text">
                        <div class="percent-">
                            <p>70%</p>
                        </div>
                        <div class="daily">
                            <p style="font-size: 17px">ULTIMATE</p>

                            <p>After 7 Days</p>
                        </div>
                        <div class="plan-border-">
                        </div>
                        <div class="da">
                            <p>Min $10,000 - Max $Unlimited</p>
                        </div>
                        <div class="return">
                            <p>Principal Include</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dc">
                <div class="dm fadeInLeft animated wow" data-wow-duration="2s" data-wow-delay="0.4s">
                    <a href="login.php" class="a-link"><i class="fa fa-download" aria-hidden="true"></i> DEPOSIT NOW</a>
                </div>
            </div>

            <div id="loginmodal" style="display:none;">
                <div class="proftical">
                    <div class="about-head">
                        <h4 style="text-align:center;color:#01bc6a;">Profit Calculators</h4>
                    </div>
                    <div class="calcu-box">
                        <div class="calculator-box">
                            <div class="cal-head">
                                <p>Select Plan</p>
                            </div>
                            <div class="select">
                                <select id="calc_plan">
                                    <option value="1">2.1%
                                        Daily For 10 Days</option>
                                    <option value="2">3.4%
                                        Daily For 10 Days</option>
                                    <option value="3">5.3%
                                        Daily For 10 Days</option>
                                    <option value="4">8.2%
                                        Daily For 10 Days</option>
                                </select>
                            </div>
                            <div class="enter-amount">
                                <p>Enter amount</p>
                            </div>
                            <div class="amount-type">
                                <input id="inv_amount" type="text" name="text" value="1">
                            </div>
                            <div class="trf">
                                <div class="tr">
                                    <div class="tr-tittle">
                                        <p>Net Profit</p>
                                    </div>
                                    <div class="tr-amount">
                                        <p id="net_profit">$110.00</p>
                                    </div>
                                </div>
                                <div class="tr">
                                    <div class="tr-tittle">
                                        <p>Total Return</p>
                                    </div>
                                    <div style="background-color: #387d38;color: #fff;border-radius: 0px;" class="tr-amount">
                                        <p id="total_return">$210.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end plan-->

    <div id="main-about">
        <!--start about-->
        <div id="sub-about">
            <div class="main-about">
                <div class="about-left">
                    <div class="about-head">
                        <h4>CRYPTOCURRENCY CLOUD MINING !</h4>
                    </div>
                    <div class="about-text">
                        <p>Have you ever thought about financial freedom? Do you have a plan on how to get financial freedom? A lot of people out here are chasing financial freedom but for lack of information they don't know the steps to take. Finding yourself on this page is not coincidence, rather it is a signal that financial freedom is only steps away if you make the right choice, the right decision by joining cryptocurrency cloud mining today and mine your coins to financial freedom...
                        </p>
                    </div>
                    <div class="read-more">
                        <a href="?a=cust&page=aboutus">READ MORE</a>
                    </div>
                </div>
                <div class="about-right">
                </div>
            </div>
        </div>
    </div>
    <!--end about-->
    <div id="main-choose">
        <!--start choose-->
        <div id="sub-choose">
            <video width="580" height="380" controls>
                <source src="/bitcoin.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
            <div class="choose-right">
                <div class="choose-head">
                    <h4>Why Choose Us?</h4>
                </div>
                <div class="advantage-all">
                    <!--right advantage-->
                    <div class="advantage-one fadeInRight  wow animated" data-wow-duration="2s">
                        <div class="adva-icon-">
                            <img src="images/experience.png" width="65px">
                        </div>
                        <div class="advantage-text">
                            <div class="advantage-tittle-">
                                <p>Experienced Trading Team</p>
                            </div>
                            <div class="adva-text-">
                                <p>Ultimate Trust Trade is a team of professional in
                                    cryptocurrency mining. who know how cryptocurrency mining works.</p>
                            </div>
                        </div>
                    </div>
                    <div class="advantage-one fadeInRight  wow animated" data-wow-duration="2s">
                        <div class="adva-icon-">
                            <img src="images/server.png" width="65px">
                        </div>
                        <div class="advantage-text">
                            <div class="advantage-tittle-">
                                <p>Strong DDoS Protection</p>
                            </div>
                            <div class="adva-text-">
                                <p>Ultimate Trust Trade web servers protected by
                                    DDOS-Guard, It's one of the world's trusted DDoS Protection and mitigation provider. </p>
                            </div>
                        </div>
                    </div>
                    <div class="advantage-one fadeInRight  wow animated" data-wow-duration="2s">
                        <div class="adva-icon-">
                            <img src="images/transaction.png" width="65px">
                        </div>
                        <div class="advantage-text">
                            <div class="advantage-tittle-">
                                <p>Secure Transaction</p>
                            </div>
                            <div class="adva-text-">
                                <p>We are using EV
                                    SSL encryption and has a green address bar that confirms that your transaction is secure with us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="advantage-one fadeInRight  wow animated" data-wow-duration="2s">
                        <div class="adva-icon-">
                            <img src="images/24-hours.png" width="65px">
                        </div>
                        <div class="advantage-text">
                            <div class="advantage-tittle-">
                                <p>24/7 Friendly Support</p>
                            </div>
                            <div class="adva-text-">
                                <p>We understand how important having reliable support service is to you.
                                    Please don't hesitate to contact us !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end choose-->
    <div id="main-news">
        <!--start news-->
        <div id="sub-news">
            <div class="refer-left">
                <div class="refer-head">
                    <p>Our Referral Commission</p>
                </div>
                <div class="refer-text">

                    <p>
                        After registering on the website, each user receives a unique affiliate link in his personal account. You can use this link to register another investor as your referral. With our affiliate program, you can attract people to our website and earn up to 10% commission on 3 levels. </p>
                </div>
                <div class="refer-mid">
                    <div class="hand">
                        <img src="images/handshake.png" width="100px" />
                    </div>
                    <div class="level-one">
                        <div class="level-percent">
                            <p>5%</p>
                        </div>
                        <div class="level-tittle">
                            <p>Frist Level</p>
                        </div>
                    </div>
                    <div class="level-two">
                        <div class="level-percent">
                            <p>3%</p>
                        </div>
                        <div class="level-tittle-">
                            <p>Second Level</p>
                        </div>
                    </div>
                    <div class="level-one">
                        <div class="level-percent">
                            <p>2%</p>
                        </div>
                        <div class="level-tittle">
                            <p>Third Level</p>
                        </div>
                    </div>
                </div>
                <div class="level-text">
                    <p>If someone signed up using your link & has made a deposit of $500 in Ultimate Trust Trade. So, immediately your account will be credited with $25. Now, when that person invites someone & they deposit, say 500$, your account will be credited with $15. And that is not all! When your referral from 3rd level makes a deposit of 500$, your account will receive a reward of $10 !</p>
                </div>
            </div>
            <div class="state-right">
                <div class="state-one">
                    <span style="float:left;"><i class="fa fa-calendar" aria-hidden="true"></i> Running Days :</span>
                    <span style="float:right;">72</span>
                </div>
                <div class="state-one">
                    <span style="float:left;"><img src="images/tm.png" />Total Accounts :</span>
                    <span style="float:right;">136</span>
                </div>
                <div class="state-one">
                    <span style="float:left;"><img src="images/td.png" />Total Deposits :</span>
                    <span style="float:right;">475690$</span>
                </div>
                <div class="state-one">
                    <span style="float:left;"><img src="images/tw.png" />Total Withdrawal :</span>
                    <span style="float:right;">326020$</span>
                </div>
                <div class="state-one">
                    <span style="float:left;"><i class="fa fa-plane" aria-hidden="true"></i> Visitors Online :</span>
                    <span style="float:right;"> 6</span>
                </div>
                <div class="state-one">
                    <span style="float:left;"><img src="images/od.png" />Last Update :</span>
                    <span style="float:right;"> Jun 14, 2021</span>
                </div>
            </div>
        </div>
    </div>
    <!--end news-->


    <div id="invest-withdraw">
        <!--start news-->
        <div id="sub-invest-withdraw">


            <div class="invest-left">
                <div class="invest-head">
                    <h4>Latest investments</h4>
                </div>
                <div class="invest-tittle">
                    <div class="invest-time">
                        <p>N/A</p>
                    </div>
                    <div class="investor-name">
                        <p>No data found</p>
                    </div>
                    <div class="invest-amount">
                        <p>N/A</p>
                    </div>
                </div>
            </div>

            <div class="invest-left">
                <div class="invest-head">
                    <h4>Latest WITHDRAWALS</h4>
                </div>

                <div class="invest-tittle">
                    <div class="invest-time">
                        <p>N/A</p>
                    </div>
                    <div class="investor-name">
                        <p>N/A</p>
                    </div>
                    <div class="invest-amount">
                        <p>N/A</p>
                    </div>
                </div>

            </div>


            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

        </div>
    </div>

    <?php include("includes/footer.php"); ?>