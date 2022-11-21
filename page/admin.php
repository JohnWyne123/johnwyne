<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="http://localhost/Covid Management System/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Covid Management System/assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="http://localhost/Covid Management System/assets/css/styles.css">
</head>
<style type="text/css">
    .border-0{
        margin-top: 50px;
    }

    body{
        background-image: linear-gradient(#42C2FF, #FC4F4F) !important;
    }
    #bgl{
        background-image: url(http://localhost/Covid Management System/th.JPG);
        width: 49%;
        height: ;
    }
</style>
<body>
    <div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <form action="dbadmin.php" method="post">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Sign up</h3>
                                <p class="text-muted mt-2 mb-5">fill up the following as admin.</p>
                                    <?php
                                    if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET["error"]; ?></p>
                                    <?php }?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="Username" name="newuname" class="form-control" id="exampleInputEmail1"required="required">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="newpass" class="form-control" id="exampleInputPassword1" required="required" onkeyup="val(this)">
                                        <div id="res"></div>
                                        <label for="exampleInputPassword1">Retype Password</label>
                                        <input type="password" name="new1pass" class="form-control" id="exampleInputPassword1" required="required" onkeyup="val1(this)">
                                        <input type="text" name="user" class="form-control" id="exampleInputPassword2" value="admin" hidden><div id="res1"></div>
                                    </div>
                                </div>
                                    <button type="submit" name="create" class="btn btn-theme">LOGIN</button>
                                    <button type="submit" class="btn btn-theme"><a href="account.php" style="color:#fff; text-decoration:none;" >BACK</a></button>
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
</div>
    <script type="text/javascript">
                document.getElementById("res").style.color = "red";
                document.getElementById("res1").style.color = "red";
        function val(elem){
        if (elem.value.length < 8) {
                    document.getElementById('res').innerText = "Password must be atleast 8 characters long.";
            }else{
                document.getElementById('res').innerText ="";
            }
        }
        function val1(elem1){
        if (elem1.value.length < 5) {
                    document.getElementById('res1').innerText = "Password must be atleast 8 s long.";
            }else{
                document.getElementById('res1').innerText ="";
            }
        }
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>