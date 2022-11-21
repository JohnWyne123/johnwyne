<?php
    include('cdbRoom.php');

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM db_room WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $room = $record['room'];
        $capacity = $record['capacity'];
        $occupied = $record['occupied'];
        $id = $record['id'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ROOM</title>
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
    tr:nth-child(odd) {
        background-color: #f2f2f2 !important;
        }
    .tabbor{
        border: solid 1px;
        padding: 10px;
        border-radius: 10px;
        background: white;
        margin-top: 30px;
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
    .roww{
        margin-left: 15px;
        margin-right: 15px;
    }
    form{
        width: 100%;
        text-align: left;
        padding: 20px;
    }

    .input-group{
     margin: 10px 0px 10px 0px; 
    }

    .input-group input{ 
        height: 35px;
        width: 100%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;
    }

    .btn{
        padding: 8px;
        font-size: 18px;
        color: white;
        background: #5F9EA0;
        border: none; 
        border-radius: 5px;
        width: 6rem;
        margin-top: 10px;

     }
     .btn:hover{
        padding: 8px;
        margin-bottom: 8px;
        font-size: 18px;
        color: white;
        background: #5F9EA0;
        border: none; 
        border-radius: 5px;
        width: 6rem;

     }
     .btn a{
        text-decoration: none;
     }
     .input-group .btn: hover{
        color: white !important;
        }
     body{
        background: rgb(28,168,170);
background: linear-gradient(180deg, rgba(28,168,170,1) 51%, rgba(253,45,112,0.8575805322128851) 97%);
     }
    .roomform{
        background-color: white;
        border: 1px solid;
        padding: 5px;
        border-radius: 8px;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .colll{
        overflow: hidden;
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
                               
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Barangay"><a class="nav-link" href="cbrgy.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Barangay</span></a></li>

                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Patient"><a class="nav-link" href="cpnt.php"><i class="fas fa-notes-medical me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Patient</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Room"><a class="nav-link" href="#"><i class="fas fa-bed me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Room</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Account"><a class="nav-link editbtn" href="caccount.php"><i class="fa fa-cog me-2 text-info" aria-hidden="true"></i><span class="d-inline-block d-sm-none d-md-inline-block">Manage Account</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Sign Out"><a class="nav-link" href="http://localhost/Covid Management System/index.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Sign Out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col colll">
                <div class="row roww">
                    <div class="col-md-12 search-table-col tabbor">
                        <h1>Room</h1>
                        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search"></div><span class="counter pull-right"></span>
                        <div class="table-responsive table table-hover table-bordered results" id="tabmin">
                            <table class="table table-hover table-bordered sticky" id="myTable">

                                <thead class="bill-header cs">
                                    <tr>
                                    <th class="col">ROOM</th>
                                    <th class="col">AVAILABLE/OCCUPIED</th>
                                    <th class="col">CAPACITY</th>
                                    <th class="col">ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($Result)){ ?>
                                        <tr>
                                            <td class="col"><?php echo strtoupper($row['room']); ?></td>
                                            <td class="col"><?php if ($row[2] >= $row[3]) {
                                                    echo "OCCUPIED";
                                                }else{
                                                    echo "AVAILABLE";
                                                }?></td>
                                                <td class="col"><?php echo $row['capacity']; ?></td>
                                            <td><button type="submit"><a href="croom.php?edit=<?php echo $row['id']; ?>" style="color:#000; text-decoration:none;">Edit</a></button></td>
                                           
                                        </tr>
                                        <script language="javascript">
                                            function deleteme(delid){
                                                if (confirm("Are you sure you want to delete this record?")) {
                                                    window.location.href='cdbRoom.php?delete=' +delid+'';
                                                    return true;
                                                }
                                            }
                                        </script>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col roomform">
                        <form action="cdbRoom.php" method="post">
            <div style="color:red;"><?php
                        if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET["error"]; ?></p>
                        <?php }?></div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="input-group">
                <input placeholder="Room" type="text" name="room" value="<?php echo $room;?>" required="required">
                <div id="res"></div>&nbsp;&nbsp;&nbsp;&nbsp;
                <div style="color:red;"><?php
                        if (isset($_GET['invalid'])) { ?>
                            <p class="invalid"><?php echo $_GET["invalid"]; ?></p>
                        <?php }?></div>
                <input placeholder="Capacity" type="number" maxlength="2" name="capacity" onkeyup="val(this)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $capacity;?>" required="required">
                <?php if ($edit_state == true): ?>
                    <div class="input-group">
                    <input placeholder="Status" type="text" name="occupied" value="<?php echo $occupied;?>">
                </div>
                    <button type="submit" name="update" class="btn">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn"><a href="croom.php" style="color:#fff;">BACK</a></button>
                <?php else: ?>
                    <button type="submit" name="submit" class="btn">ADD</button>
                <?php endif ?>  
            </div>
        </form>
                        <div class="row"></div>
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
                    <p class="text-end" style="margin-top:5%;margin-bottom:8%%;font-size:1em;">USER</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
                document.getElementById("res").style.color = "red";
        function val(elem){
            if (isNaN(elem.value)) {
                document.getElementById('res').innerText ="Please enter number.";
            }else if (elem.value.length > 3) {
                    document.getElementById('res').innerText = "Please enter only 3 digits.";
            }else{
                document.getElementById('res').innerText ="";
            }
        }
    </script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/Dynamically-Add-Remove-Table-Row.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/Scroll-To.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
    <script type="text/javascript">
    var searchBox_3 = document.getElementById("search");
searchBox_3.addEventListener("keyup",function(){
    var keyword = this.value;
    keyword = keyword.toUpperCase();
    var table_3 = document.getElementById("myTable");
    var all_tr = table_3.getElementsByTagName("tr");
    for(var i=0; i<all_tr.length; i++){
            var all_columns = all_tr[i].getElementsByTagName("td");
          for(j=0;j<all_columns.length; j++){
                if(all_columns[j]){
                    var column_value = all_columns[j].textContent || all_columns[j].innerText;
                    
                    column_value = column_value.toUpperCase();
                    if(column_value.indexOf(keyword) > -1){
                        all_tr[i].style.display = ""; // show
                        break;
                    }else{
                        all_tr[i].style.display = "none"; // hide
                    }
                }
            }
        }
});
</script>
</body>

</html>