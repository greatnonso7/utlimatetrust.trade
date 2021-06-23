<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jun 2021 10:59:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Fortra-Market - Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
    <link href="../../fonts.googleapis.com/css2160f.css?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>
<?php
include('function/adminfunction.php');

$username = "";

$errors = array('username' => '', 'password' => '');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];




    if (empty($username)) {
        $errors['username'] = 'Username cannot be empty';
    }
    if (empty($password)) {
        $errors['password'] = 'Password cannot be empty';
    }
    if ($username != "" && $password != "") {
        $call = login_admin($username, $password);
    }
}

?>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4 text-white">Login Admin Account</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>username</strong></label>
                                            <input name="username" type="text" class="form-control" value="<?php echo $username; ?>" placeholder="Enter your username">
                                            <span style="color:red"><?php echo $errors['username'] ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input name="password" type="password" class="form-control" value="Password">
                                            <span style="color:red"><?php echo $errors['password'] ?></span>

                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">


                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

</body>


<!-- Mirrored from gymove.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jun 2021 10:59:13 GMT -->

</html>