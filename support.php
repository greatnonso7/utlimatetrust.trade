<?php include('includes/head.php'); ?>

<body>
    <?php include('includes/header.php'); ?>

    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div id="main-reg">
        <div id="sub-contact">
            <!--id change-->



            <script language=javascript>
                function checkform() {
                    if (document.mainform.name.value == '') {
                        alert("Please type your full name!");
                        document.mainform.name.focus();
                        return false;
                    }
                    if (document.mainform.email.value == '') {
                        alert("Please enter your e-mail address!");
                        document.mainform.email.focus();
                        return false;
                    }
                    if (document.mainform.message.value == '') {
                        alert("Please type your message!");
                        document.mainform.message.focus();
                        return false;
                    }
                    return true;
                }
            </script>

            <form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16236999419957"><input type="hidden" name="form_token" value="cb064ae9639e76a971bea5367793ca15">
                <input type=hidden name=a value=support>
                <input type=hidden name=action value=send>


                <div class="contact-left">
                    <!--statrt contact left-->
                    <div class="contact-head">
                        <p>Our Contacts</p>
                    </div>
                    <div class="contact-map">
                        <iframe width="400" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=27%20Old%20Gloucester%20Street,%20London,%20United%20Kingdom,%20WC1N%203AX&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                    </div>
                    <div class="contact-add">
                        <div class="contact-loc">
                            <div class="con-icon">
                                <img src="images/loc.png">
                            </div>
                            <div class="loc-text">
                                <p>Ultimate Trust Trade<br><span>27 Old Gloucester Street, London,<br>WC1N 3AX, United Kingdom</span></p>
                            </div>
                        </div>
                        <div class="phonef-">
                            <p> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; Coming Soon!</p>
                        </div>
                        <div class="phonef-">
                            <p> <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; support@utlimatetrust.trade</p>
                        </div>
                    </div>
                </div>
                <!--end contact left-->
                <div class="contact-right">
                    <!--statrt contact right-->
                    <div class="contact-head">
                        <p>GETTING IN TOUCH WITH SUPPORT</p>
                    </div>


                    <div class="contact-form">
                        <div class="con-form">
                            <div class="info-one">
                                <div class="info-tittle-">
                                    <p><img src="images/ruser.png"> Full Name</p>
                                </div>

                                <div style="width: 371px;" class="info-type">
                                    <p><input type="text" name="name" value=""></p>
                                </div>
                            </div>
                            <div class="info-one">
                                <div class="info-tittle-">
                                    <p><img src="images/rmail.png">Email Address</p>
                                </div>

                                <div style="width: 371px;" class="info-type">
                                    <input type="text" name="email" value="">
                                </div>
                            </div>
                            <div class="text-area">
                                <textarea name=message placeholder="Message" style="width:95%;"></textarea>
                            </div>
                            <div class="send-now">
                                <input type="submit" value="SEND NOW">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end contact left-->

            </form>


        </div>
    </div>
    </div>





    <?php include('includes/footer.php'); ?>