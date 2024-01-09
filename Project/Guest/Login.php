<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');

if (isset($_POST['btnlogin'])) {
    $email = $_POST['txt_uname'];
    $password = $_POST['txt_password'];

    $selAdmin = "select * from tbl_admin where admin_email='$email' and admin_password='$password'";
    $resAdmin = $con->query($selAdmin);

    $selUser = "select * from tbl_user where user_email='$email' and user_password='$password'";
    $resUser = $con->query($selUser);

    $isBranchLogin = isset($_POST['branchLoginCheckbox']);

    if ($isBranchLogin) {
        $selBranch = "select * from tbl_branch where branch_email='$email' and branch_password='$password'";
        $resBranch = $con->query($selBranch);

        if ($resBranch->num_rows > 0) {
            $row = $resBranch->fetch_assoc();
            $_SESSION['bid'] = $row['branch_id'];
            $_SESSION['bname'] = $row['branch_name'];
            header("location: ../Branch/HomePage.php");
        } else {
            echo '<script>alert("Invalid Branch Credentials");</script>';
        }
    } else {
        if ($resAdmin->num_rows > 0) {
            $row = $resAdmin->fetch_assoc();
            $_SESSION['aid'] = $row['admin_id'];
            $_SESSION['aname'] = $row['admin_name'];
            header("location: ../Admin/Homepage.php");
        } else if ($resUser->num_rows > 0) {
            $row = $resUser->fetch_assoc();
            $_SESSION['uid'] = $row['user_id'];
            $_SESSION['uname'] = $row['user_name'];
            header("location: ../User/HomePage.php");
        } else {
            echo '<script>alert("Invalid Credentials");</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LaunHub::Guest::Login</title>
    <style>
        body {
            background-image: url("../Assets/Files/slider-bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }

        .custom-checkbox {
        display: inline-block;
        position: relative;
        padding-left: 30px; /* Adjust the padding as needed */
        cursor: pointer;
    }

    .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee; /* Background color of the checkbox */
        border: 1px solid #ccc; /* Border color of the checkbox */
        border-radius: 5px; /* Border radius to round the edges */
    }

    .custom-checkbox input:checked ~ .checkmark {
        background-color: #2196F3; /* Background color when checkbox is checked */
        border: 1px solid #2196F3; /* Border color when checkbox is checked */
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .custom-checkbox input:checked ~ .checkmark:after {
        display: block;
    }

    .custom-checkbox .checkmark:after {
        left: 9px;
        top: 5px;
        width: 6px;
        height: 12px;
        border: solid white;
        border-width: 0 3px 3px 0;
        transform: rotate(45deg);
    }
    </style>
</head>

<body>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
                                <!-- Add the video element with the video source -->
                                <div class="text-center">
                                    <h2 class="mt-1 mb-3 pb-1">Welcome LaunTech</h2>
                                    <!-- Add some space between the text and video -->
                                    <div class="mt-0">
                                        <video autoplay muted loop width="300" height="100">
                                            <source src="../Assets/Files/Logo/Laun.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                <section class="h-100 gradient-form">
                                    <form method="POST" action="login.php">

                                        <div class="custom-checkbox mb-4">
                                            <input class="form-check-input" type="checkbox" id="branchLoginCheckbox" name="branchLoginCheckbox">
                                            <label class="checkmark" for="branchLoginCheckbox"></label>
                                            <label class="form-check-label" for="branchLoginCheckbox">Sign in as a Branch?</label>
                                        </div>


                                        <div class="form-group">
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example11" class="form-control" name="txt_uname" placeholder="Enter your Email address" />
                                                <label class="form-label" for="form2Example11">Username</label>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" name="txt_password" placeholder="Enter your Password" />
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="btnlogin"  type="submit">Log in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="NewUser.php" class="btn btn-outline-danger">Create new</a>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company..</h4>
                                <p class="small mb-0">Our mission is to revolutionize the way laundry is managed. We strive to provide innovative, user-friendly, and cost-effective solutions that empower businesses and individuals to take control of their laundry processes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
<?php
include('Foot.php');
ob_flush();
?>

</html>