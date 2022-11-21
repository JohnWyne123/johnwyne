<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style type="text/css">
    .border-0{
        margin-top: 50px;
    }

    body{
        background-image: linear-gradient(#42C2FF, #FC4F4F) !important;
        overflow: hidden;
    }
    #bgl{
        background-image: url(th.JPG);
        width: 49%;
        height: ;
    }
    .btn:hover{
        color: white;
    }
    .coll{
        margin-bottom: 7rem;
    }
</style>
<body>
    <div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 coll">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">COVID-19 Facility Management Information System</h3>
                                </div>

                                <h6 class="h5 mb-0">Welcome!</h6>
                                <p class="text-muted mt-2 mb-5">Enter your ID or Username and Password to Login.</p>

                                <form action="dbIndex.php" method="post">
                                    <?php
                                    if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET["error"]; ?></p>
                                    <?php }?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username or ID number:</label>
                                        <input type="Username" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Username or ID number" required="required">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password"  required="required">
                                        <!-- <a href="http://localhost/test/page/user.php">sign up as client</a> -->
                                    </div>
                                    <button type="submit" class="btn btn-theme">Login</button>
                                </form>
                            </div>
                        </div>

                        <div id="bgl" class="col-lg-6 d-none d-lg-inline-block">
                            
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>