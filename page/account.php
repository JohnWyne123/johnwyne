<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ACCOUNT</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Boostrap-Tabs.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-4---Tabs-with-Arrows.css">
    <link rel="stylesheet" href="../assets/css/Minimal-tabs-1.css">
    <link rel="stylesheet" href="../assets/css/Minimal-tabs.css">
    <link rel="stylesheet" href="../assets/css/simple-footer.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="../assets/css/tabs-Menu.css">
    <link rel="stylesheet" type="text/css" href="./css/csutom.css">
</head>
<style type="text/css">
    .table.sticky thead th {
        position: sticky !important;
        top: 0 !important;

    }
    .table.sticky thead th {
        width: 120%;
        content: '';
        height: 0.5px;
        position: absolute;
        bottom: 0;
        left: 0;
        background: skyblue;
    }
    tr th{
        font-size: 0.9rem !important;
    }
    /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
                -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
        input[type=number] {
                -moz-appearance: textfield;
    }
    .tabbor{
        border: solid 1px;
        padding: 10px;
        border-radius: 10px;
        background: white;
        margin-top: 30px;
        position: absolute;
        width: 70%;
    }
    .roww{
        background-color: white;
        padding: 10px;
        margin: 1rem auto ;
        border-radius: 8px;
        margin-top: 3.5rem;
    }
    form{
        width: 100%;
        text-align: left;
        padding: 20px;
    }

    .input-group{
            
            margin: 10px 0px 10px 40px;
        }
        .input-group input{ 
            padding: 7px 12px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid black;
        }
        .right-input{
            margin-left: 130px;
        }

    .btn{
        padding: 8px;
        margin-bottom: 8px;
        font-size: 18px;
        color: white;
        background: #5F9EA0;
        border: none; 
        border-radius: 5px;
        margin-top: 10`px;
        display: inline-flex;

     }
     .btn:hover{
        color: white;
     }
     .btn a{
        text-decoration: none;
        display: inline-block;
     }
     #accbtn1{
        margin-left: 4rem;
        width: 70% !important;
        height: 50%;
     }
     
     .input-group .btn: hover{
        color: white !important;
        }
     body{
        background: rgb(28,168,170);
background: linear-gradient(180deg, rgba(28,168,170,1) 51%, rgba(253,45,112,0.8575805322128851) 97%);
     }
     #lng{
        width: 90px;
     }
     #collow{
        position: relative;
        margin-top: 450px;
     }
     .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
        margin-left: 10px !important;
     }
     .bt{
        margin-top: px;
        width: 1.3em;
        height: 1.3em;
        font-size: 20px !important;
     }
     .error{
        color: red;
     }
     .success{
        color: green;
     }
     .form-group #eye{
        float: right;
        margin-top: -28px;
        margin-right: 10px
    }  
</style>

<body>
    <div class="container-fluid">
        <div class="row flex-column flex-sm-row wrapper min-vh-100">
            <div class="col-12 col-sm-1 col-md-2 flex-shrink-1 p-0 bg-dark">
                <nav class="navbar navbar-dark navbar-expand-sm bg-dark text-nowrap flex-row align-items-start flex-sm-column">
                    <div class="container flex-sm-column"><a class="navbar-brand" href="#"><i class="fa fa-stethoscope fa-2x text-warning"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav flex-column justify-content-between w-100">
                               <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Statistical Report"><a class="nav-link" href="stat.php"><i class="fa fa-bar-chart-o me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Statistical Report</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Barangay"><a class="nav-link" href="brgy.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Barangay</span></a></li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Patient"><a class="nav-link" href="pnt.php"><i class="fas fa-notes-medical me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Patient</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Room"><a class="nav-link" href="roomm.php"><i class="fas fa-bed me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Room</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Account"><a class="nav-link editbtn" href="#"><i class="fa fa-cog me-2 text-info" aria-hidden="true"></i><span class="d-inline-block d-sm-none d-md-inline-block">Manage Account</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Sign Out"><a class="nav-link" href="http://localhost/Covid Management System/index.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Sign Out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col">
                <div class="row roww">
                    <h1>Manage Accounts</h1>
                    <form action="dbaccount.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
                        <?php
                                    if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET["error"]; ?></p>
                                    <?php }?>
                                     <?php
                                    if (isset($_GET['success'])) { ?>
                                        <p class="success"><?php echo $_GET["success"]; ?></p>
                                    <?php }?>

                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="uname" id="uname" class="form-control"
                                placeholder="Enter Username" required>
                        </div>

                        <div class="form-group">
                            <label>Current Password:</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control"
                                placeholder="Enter Current Password" required>
                                <span><i class="fa fa-eye me-text-info" aria-hidden="true" id="eye" onclick="cpass()"></i></span>
                        </div>

                        <div class="form-group">
                            <label>New Password:</label>
                            <input type="password" name="npassword" id="npassword" class="form-control"
                                placeholder="Enter New Password" onkeyup="val(this)" required>
                                <i id="eye" class="fa fa-eye me-text-info" aria-hidden="true" id="eye1" onclick="npass()"></i>
                                <div id="res"></div>
                        </div>

                        <div class="form-group">
                            <label>Retype New Password:</label>
                            <input type="password" name="rnpassword" id="rnpassword" class="form-control"
                                placeholder="Enter Retype New Password" onkeyup="val1(this)" required>
                                <i id="eye" class="fa fa-eye" aria-hidden="true" id="eye2" onclick="rnpass()"></i>
                                <div id="res1"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="">
                            <button id="accbtn2" type="submit" name="updatedata" class="btn">Change Password</button>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <!-- <button id="accbtn2" type="submit" class="btn"><a href="admin.php" style="color:#fff; width: 10rem;">Create Admin Account</a></button> -->
                        <button id="accbtn2" type="submit" class="btn"><a href="user.php" style="color:#fff; width: 10rem;">Create Account</a>
                            </button>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-6 col-md-6">
                    <p class="text-start" style="margin-top:5%;margin-bottom:3%;">© 2122 Covid Facility Management System V 0.1</p>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <p class="text-end" style="margin-top:5%;margin-bottom:8%%;font-size:1em;">ADMIN</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/Dynamically-Add-Remove-Table-Row.js"></script>
    <script src="http://localhost/Covid Management System/script/jquery-1.11.1.min.js"></script>
    <script src="../assets/js/Scroll-To.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
    <script type="text/javascript"></script>
    <script type="text/javascript">
        var state = false;
        var state1 = false;
        var state2 = false;
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
        if (elem1.value.length < 8) {
                    document.getElementById('res1').innerText = "Password must be atleast 8 characters long.";
            }else{
                document.getElementById('res1').innerText ="";
            }
        }
        function cpass() {
            if (state) {
                document.getElementById("cpassword").setAttribute("type","password");
                document.getElementById("eye").style.color='7a797e';
                state = false;
            }else{
                 document.getElementById("cpassword").setAttribute("type","text");
                document.getElementById("eye").style.color='7a797e';
                state = true;
            }
        }
        function npass() {
            if (state1) {
                document.getElementById("npassword").setAttribute("type","password");
                document.getElementById("eye1").style.color='7a797e';
                state1 = false;
            }else{
                 document.getElementById("npassword").setAttribute("type","text");
                document.getElementById("eye1").style.color='7a797e';
                state1 = true;
            }
        }
        function rnpass() {
            if (state2) {
                document.getElementById("rnpassword").setAttribute("type","password");
                document.getElementById("eye2").style.color='7a797e';
                state2 = false;
            }else{
                 document.getElementById("rnpassword").setAttribute("type","text");
                document.getElementById("eye2").style.color='7a797e';
                state2 = true;
            }
        }
    </script>
    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');});
        });
    </script>
</body>

</html>
