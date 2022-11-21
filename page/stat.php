<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>STATISTICAL REPORT</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Boostrap-Tabs.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-4---Table-Fixed-Header.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-4---Tabs-with-Arrows.css">
    <link rel="stylesheet" href="../assets/css/Minimal-tabs-1.css">
    <link rel="stylesheet" href="../assets/css/Minimal-tabs.css">
    <link rel="stylesheet" href="../assets/css/simple-footer.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    
</head>
<style type="text/css">
    /*PIE CHART CSS*/
    .chart-container{
        width: 70%;
        margin: auto;
        min-width: 30%;
    }
    /*TABLE BODY CSS*/
    tbody{
        margin: auto;
    }
    /*TABLE CSS*/
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    /*TABLE HEADER AND TABLE DATA CSS*/
    th, td {
        text-align: left;
        padding: 10px;
    }
    /*TABLE COLOR(EVEN)*/
    tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    #mun, #logomun, #hide, #id, #time{
        visibility: hidden;
    }
    canvas#pie_chart{
        margin-top: -150px;
    }
    canvas#Room{
        margin-top: -170px;
    }
    canvas#barangay{
        margin-top: -170px;
    }


    /*PRINT A SPECIFIC PAGE*/
    @media print{
    body *{
        visibility: hidden;
    }
    #hide-print{
        visibility: hidden;
    }
    .chartjs-render-monitor{
        visibility: hidden !important;
    }
    #hide{
        visibility: visible;
        margin-top: 40px;
        margin-left: -150px;
        font-weight: 700;
    }
    #logomun img{
        width: 140%;
        margin-left: -215px;

    }


    .print-container, .print-container *{
        visibility: visible;
    }
    .card-body{
        margin-top: 100px;
    }

    #myTable{
        border: 2px solid;
        margin-top: -150px ;
        margin-left: -190px;
        width: 45rem;
        font-size: 20px;
    }
    #time{
        margin-left: -200px;
        margin-top: 10px;
    }
    ul li a span{
        font-size: 30px !important;
    }


}
    h2, h3{
        text-align: center;
    }

</style>

<body>
    <div class="container-fluid">
        <div class="row flex-column flex-sm-row wrapper min-vh-100">
            <div class="col-12 col-sm-1 col-md-2 flex-shrink-1 p-0 bg-dark">
                <nav class="navbar navbar-dark navbar-expand-sm bg-dark text-nowrap flex-row align-items-start flex-sm-column">

                    <div class="container flex-sm-column"><a class="navbar-brand" href="account.php"><i class="fa fa-stethoscope fa-2x text-warning"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav flex-column justify-content-between w-100">
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Statistical Report"><a class="nav-link" href="#"><i class="fa fa-bar-chart-o me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Statistical Report</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Barangay"><a class="nav-link" href="brgy.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Barangay</span></a></li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Patient"><a class="nav-link" href="pnt.php"><i class="fas fa-notes-medical me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Patient</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Room"><a class="nav-link" href="roomm.php"><i class="fas fa-bed me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Room</span></a></li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Account"><a class="nav-link" href="account.php"><i class="fa fa-cog me-2 text-info" aria-hidden="true"></i><span class="d-inline-block d-sm-none d-md-inline-block">Manage Account</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Sign Out"><a class="nav-link" href="http://localhost/Covid Management System/index.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Sign Out</span></a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col">
                <div id="minimal-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Cases of Covid Virus </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Room Reports </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Cases Per Barangay </a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div class="col-md-12">
                    <div class="card md-4">
                        <div class="card-header">CASES OF COVID VIRUS</div>
                        <div class="card-body print-container">
                            <button onclick="window.print()" id="hide-print">Save as PDF</button>
                            <div class="chart-container pie-chart">
                                <table id="myTable" class="col-xs-7">
                                    
                                        <div id="logomun">
                                        
                                        <img src="../print/header.png">
                                    
                                        
                                        
                                        </div>
                                    

                                    
                                     
                                <h4 id="hide">CASES OF COVID 19</h4>        
                                        <thead>
                                            
                                            <tr>
                                                <th class="col">CASES OF COVID 19</th>
                                                <th class="col">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <canvas id="pie_chart"></canvas>
                                        <tbody id="tablebody">

                                            <?php include ('TotalOfStatistical.php');?>
                                            <tr>
                                                <?php while ($row = mysqli_fetch_array($result_status)) {?>
                                                <td class="col"><?php echo strtoupper($row["status"]);?></td>
                                                <td class="col"><?php echo $row["COUNT(*)"];?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <div id="time"><p id="current_date"></p></div>

                            </div>
                        </div>
                    </div>
                </div>
                            
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header ">REPORT IN ROOM</div>
                        <div class="card-body print-container">
                            <button onclick="window.print()" id="hide-print">Save as PDF</button>
                            <div class="chart-container pie-chart">
                                <table id="myTable" class="col-xs-7">
                                
                                    <div id="logomun">
                                        <img src="../print/header.png">
                                        
                                    </div> 
                                <h4 id="hide">Room Reports</h4>   

                                        <thead>
                                            
                                            <tr>
                                                <th class="col">ROOM OCCUPIED</th>
                                                <th class="col">OCCUPIED</th>
                                                <th class="col">AVAILABLE</th>
                                                <th class="col">CAPACITY</th>
                                            </tr>
                                        </thead>
                                        <canvas id="Room"></canvas>
                                        <tbody>
                                            <?php include ('Room.php');
                                            include ('TotalOfStatistical.php');?>
                                            <tr>
                                                <?php include ('Room.php');
                                                while ($row = mysqli_fetch_array($Result)){ ?>
                                                <td class="col"><?php echo strtoupper($row['room']); ?></td>
                                            <td class="col"><?php echo $row['occupied']?></td>
                                            <td class="col"><?php 
                                            if ($row[2]=="Disinfectant") {
                                                echo '0';
                                            }else{
                                            echo $row[3]-$row[2];}?></td>
                                                <td class="col"><?php echo $row['capacity']; ?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <div id="time"><p id="date"></p></div>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                            
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">CASES OF BARANGAY</div>
                        <div class="card-body print-container">
                            <button onclick="window.print()" id="hide-print">Save as PDF</button>
                            <div class="chart-container pie-chart">
                                <table id="myTable" class="col-xs-7"> 
                                
                                    <div id="logomun">
                                        <img src="../print/header.png">
                                        
                                    </div> 
                                <h4 id="hide">CASES Per Barangay</h4>         
                                        <thead>
                                            <tr>
                                                <th class="col">LIST OF BARANGAY</th>
                                                <th class="col">DIED</th>
                                                <th class="col">RECOVERED</th>
                                                <th class="col">ASYMPTOMATIC</th>
                                                <th class="col">SYMPTOMATIC</th>
                                                <th class="col">TOTAL CASES</th>
                                            </tr>
                                        </thead>
                                        <canvas id="barangay"></canvas>
                                        <tbody>
                                            <?php include ('TotalOfStatistical.php');?>
                                            <tr>
                                                <?php while ($row = mysqli_fetch_array($total)) {?>
                                                <td class="col"><?php echo strtoupper($row["barangay"]);?></td>
                                                <td class="col"><?php echo strtoupper($row["DiedCount"]);?></td>
                                                <td class="col"><?php echo strtoupper($row["RecoveredCount"]);?></td>
                                                <td class="col"><?php echo strtoupper($row["AsymptomaticCount"]);?></td>
                                                <td class="col"><?php echo strtoupper($row["SymptomaticCount"]);?></td>
                                                <td class="col"><?php echo strtoupper($row["total"]);?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                    <div id="time"><p id="dt"></p></div>
                            </div>
                        </div>
                    </div>
                </div>
                            
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
    <script>
    document.getElementById("current_date").innerHTML = Date();
    </script>
    <script>
    document.getElementById("date").innerHTML = Date();
    </script>
    <script>
    document.getElementById("dt").innerHTML = Date();
    </script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/Dynamically-Add-Remove-Table-Row.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="../assets/js/Table-With-Search.js"></script>

</body>
<script src="../script/jquery-3.6.0.min.js"></script>
        <script src="../script/Chart.bundle.min.js"></script>
        <script src="../script/SR.js"></script>
        <script src="../script/SRR.js"></script>
        <script src="../script/SRB.js"></script>

</html>