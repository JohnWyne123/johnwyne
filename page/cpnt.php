<?php
include('cdbPatient.php');

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM db_patient WHERE id=$id");
        $record = mysqli_fetch_array($rec);
        $name = $record['name'];
        $contact = $record['contact'];
        $barangay = $record['barangay'];
        $gender = $record['gender'];
        $age = $record['age'];
        $status = $record['status'];
        $room = $record['room'];
        $rec1 = mysqli_query($db, "SELECT * FROM db_room WHERE room='$room'");
        $record1 = mysqli_fetch_array($rec1);
        $room1 = $record1['room'];
        $fetch_occupied = $record1['occupied'];
        if($room==$room1){
            $temp_count = $fetch_occupied - 1;
            mysqli_query($db, "UPDATE db_room SET occupied=$temp_count WHERE room='$room'");
        }
        $id = $record['id'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PATIENT</title>
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
    .tabbor{
        border: solid 1px;
        padding: 10px;
        border-radius: 10px;
        background: white;
        margin-top: 30px;
        width: 100%;
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
 @media screen and (min-width: 600px) {
    .input-group{   
    margin: 0px 0px 10px 2rem;
    display: ;
}
    }
  }
}
    .input-group{
            
            margin: 0px 0px 10px 10rem;
        }
        .input-group input{ 
            padding: 7px 12px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid black;
        }
        .right-input{
            margin-left: 130px;
            font-weight: bold;
        }

    .btn{
        padding: 8px;
        margin-bottom: 8px;
        font-size: 18px;
        color: white;
        background: #5F9EA0;
        border: none; 
        border-radius: 5px;
        width: 6.7rem;
        margin-top: 10`px;

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
     .btn:hover{
        padding: 8px;
        margin-bottom: 8px;
        font-size: 18px;
        color: white;
        background: #5F9EA0;
        border: none; 
        border-radius: 5px;
        width: 6.7rem;

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
     #lng{
        width: 90px;
     }
     #collow{
        background-color: white;
        border: solid 1px;
        border-radius: 8px;
        padding: 5px;
        margin-top: 10px;
        margin-bottom: 10px;
     }
     .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
        margin-left: 10px !important;
     }
     .bt{
        margin-top: px;
        width: 1.3em;
        height: 1.3em;
        font-size: 20px !important;
     }.edt{
        padding: 5px 25px 5px 25px;
     }
     .colll{
        overflow: hidden;
     }
     .pp{

    margin-top: -30px;
    margin-bottom: 1rem;
    margin-left: 310px;
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

                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Patient"><a class="nav-link" href="#"><i class="fas fa-notes-medical me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Patient</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Room"><a class="nav-link" href="croom.php"><i class="fas fa-bed me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Room</span></a></li>
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
                        <h1>Patient</h1>
                        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search"></div><span class="counter pull-right"></span>
                        <div class="table-responsive table table-hover table-bordered results" id="tabmin">
                            <table class="table table-hover table-bordered sticky" id="myTable">

                                <thead class="bill-header cs">
                                    <tr>
                                        <th id="lng" class="col">Patient Name</th>
                                        <th id="lng" class="col">Contact No.</th>
                                        <th id="lng" class="col">Barangay</th>
                                        <th id="lng" class="col">Gender</th>
                                        <th id="lng" class="col">Age</th>
                                        <th id="lng" class="col">Status</th>
                                        <th id="lng" class="col">Room</th>
                                        <th id="lng" class="col">Date of Confine</th>
                                        <th id="lng" class="col">Date of Discharge</th>
                                        <th id="lng" class="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                    while ($row = mysqli_fetch_array($results)) : ?>
                                    <tr>
                                            <td id="lng" class="col"><?php echo strtoupper($row['name']); ?></td>
                                            <td id="lng" class="col"><?php echo $row['contact']; ?></td>
                                            <td id="lng" class="col"><?php echo strtoupper($row['barangay']); ?></td>    
                                            <td id="lng" class="col"><?php echo strtoupper($row['gender']); ?></td>
                                            <td id="lng" class="col"><?php echo $row['age']; ?></td>
                                            <td id="lng" class="col"><?php echo strtoupper($row['status']); ?></td>
                                            <td id="lng" class="col"><?php echo strtoupper($row['room']); ?></td>
                                            <td id="lng" id="lng" class="col"><?php echo strtoupper($row['dateofconfine']); ?></td>
                                            <td id="lng" class="col"><?php echo strtoupper($row['dateofdischarge']); ?></td>
                                            <td>
                                            <?php if ($row['status']=='Died') {?>
                                                <button type="button" class="edt" hidden><a href="cpnt.php?edit=<?php echo $row['id']; ?>" style="color:#000; text-decoration:none;">Edit</a></button>
                                             <?php }else{?><button type="button" class="edt"><a href="cpnt.php?edit=<?php echo $row['id']; ?>" style="color:#000; text-decoration:none;">Edit</a></button></td><?php } ?>
                                <?php endwhile;?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="collow"class="col">
                        <form action="cdbPatient.php" method="POST" >
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <table id='table' class="input">
                <tr class="input-group">
                <td><input type="text" name="name" id="name" placeholder="Patient Name" style="width: 300px" value="<?php echo $name; ?>" required>
                </td><td class="right-input">
                    
                <input type="number" maxlength="11" name ="contact" id="contact" placeholder="Contact No." style="width: 300px"  onkeyup="cont(this)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo $contact; ?>" required>
                <div class="pp">
                    <p id="res"> </p>
                </div>
                
                </td>
            </tr>
            <tr class="input-group">
                <td><select style="width: 300px; height: 35px; border-radius: 5px;" name="barangay" id="barangay" required>
                    <option value disabled selected>Barangay</option>
                        <?php
                         while($rows = mysqli_fetch_array($result)){?>
                            <option id="Barangay" name="Barangay"
                            <?php
                                    if ($barangay == $rows[1]) {
                                        echo "selected";
                                    }?>>
                                <?php echo $rows[1];?>
                                </option>
                        <?php }?>
                    </select>
                </td>
                <td class="right-input">Gender:</td>
                <td><input class="bt" type="radio" name="gender" id="male" value="Male"required
                    <?php
                    if ($gender == "Male") {
                        echo "checked";
                    }
                    ?>
                    ><span style="font-weight:bold; margin-right:9px;margin-left:5px;">Male</span>

                <input class="bt" type="radio" name="gender" id="female" value="Female"required
                <?php
                    if ($gender == "Female") {
                        echo "checked";
                    }
                    ?>
                ><span style="font-weight:bold; margin-right:9px;margin-left:5px;">Female</span>
                </td>
            </tr>
            <tr class="input-group">
                <td><div id="edad"></div><input type="number" maxlength="2" name="age" placeholder="Age" id="age" onkeyup="num(this)" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" style="width: 300px" value="<?php echo $age; ?>" required>
                </td>
                <td class="right-input">Status:
                    <select style="width: 115px; height: 35px; border-radius: 5px;" id="status" name="status" required>
                        <option name="Status" id="Status0" value=""
                         <?php
                            if ($status == '') {
                            echo "none";
                            }
                        ?>
                        >Symptoms</option>
                        <option name="Status" id="Status1" value="Asymptomatic"
                         <?php
                            if ($status == 'Asymptomatic') {
                            echo "selected";
                            }
                        ?>
                        >Asyptomatic</option>
                        <option name="Status" id="Status2" value="Symptomatic"
                         <?php
                            if ($status == 'Symptomatic') {
                            echo "selected";
                            }
                        ?>
                        >Symptomatic</option>
                        <option name="Status" id="Status3" value="Recovered"
                        <?php
                            if ($status == 'Recovered') {
                            echo "selected";
                            }
                        ?>
                        >Recovered</option>
                        <option name="Status" id="Status4" value="Died"
                        <?php
                            if ($status == 'Died') {
                            echo "selected";
                            }
                        ?>
                        >Died</option required>
                    </select>
                </td>
                <td class="Room"><span style="font-weight:bold">Room:</span>
                    <select style="width: 85px; height: 35px; border-radius: 5px;" name="room" id="Room" required>
                        <option name="room" id="Room" value=""
                         <?php
                            if ($status == '') {
                            echo "none";
                            }
                        ?>
                        >Room</option>
                        
                        <?php
                         while($Rows = mysqli_fetch_array($Result)){?>
                            <option id="room" name="Room"
                            <?php if ($room == $Rows[1]) {
                                        echo "selected";
                                    }
                                    else if ($Rows[2] >= $Rows[3]) {
                                            echo "disabled";
                                    }
                                ?>>
                                <?php echo $Rows[1];
                            }?>
                                </option>
                    </select>
                </td>
            </tr>
                </table>
            <div class="input-group">
                <?php if ($edit_state == true): ?>
                    <button type="submit" name="ptupdate" class="btn">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="ptback" class="btn">BACK</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" name="discharge" class="btn">DISCHARGE</button>
                                    <?php else: ?>
                    <button type="submit" name="ptsubmit" id="submit_data" class="btn">ADD</button>
                    <button type="reset"  name = 'reset' class='btn'style="margin-left: 10px;" onclick="reset();">RESET</button>
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
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/Dynamically-Add-Remove-Table-Row.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../assets/js/Scroll-To.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
     <script type="text/javascript">
                document.getElementById("res").style.color = "red";
                document.getElementById("edad").style.color = "red";
        function cont(elem){
            if (isNaN(elem.value)) {
                document.getElementById('res').innerText ="Please enter number.";
            }
            else if (elem.value.length > 11) {
                    document.getElementById('res').innerText = "Please enter 11 digits.";
            }
            else if (elem.value.length < 11) {
                    document.getElementById('res').innerText = "Please enter 11 digits.";

            }
            else{
                document.getElementById('res').innerText ="";
            }
        }
        function num(ages){
            if (isNaN(ages.value)) {
                document.getElementById('edad').innerText ="Please enter number.";
            }else{
                document.getElementById('edad').innerText ="";
            }
        }
    </script>
    <script type="text/javascript"></script>
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