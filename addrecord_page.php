<?php
session_start();
 
	if(isset($_SESSION['id']) && $_SESSION['id'] == true) {
   
} else {
    header('location:login_page.php');
}

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_POST['add-employee'])){
$id=$_POST['id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$address=$_POST['address'];
$position=$_POST['position'];
$phone=$_POST['phone'];

$con =mysqli_connect("localhost","root","")or die("Not Connected");

mysqli_select_db($con,'db_employee') or die ("Error");

mysqli_query($con,"INSERT INTO tb_employee(ID,Firstname,Lastname,Address,Position,Phone) VALUES ('$id','$fname','$lname','$address','$position','$phone')")or die("Data Not Inserted");
echo"Data Inserted";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Employee </title>

    <link rel="stylesheet" href="css/addrecord.css">

</head>
<body>
<div class="page-container">
        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1 class="logo-name">Camille's Employee</h1>
                </div>
                <a href="logout.php" style="float:right;line-height:50px;padding-right:10px;color:white;font-family:calibri;">Logout</a>
            </div> 
</div>

            <div class="container">
                    <div class="nav">
                    <nav>
                        <ul>
                            <li><a href="addrecord_page.php">Add Employee</a></li>
                            <li><a href="editrecord_page.php">Edit Employee</a></li>
                            <li><a href="deleterecord_page.php">Delete Employee</a></li>
                            <li><a href="searchrecord_page.php">Search Employee</a></li>
                            <li><a href="viewrecord_page.php">View Employee</a></li>
                            <li><a href="Sort_byname_page.php">Sort_byname_page</a></li>

                        </ul>
                    </nav>    
           

                <div class="main-content">
                        <div class="add-form">
                            <h2 style="color:#3446aa;font-family:calibri;">Add Employee</h2><br>
                            <form method ="post" action="addrecord_page.php">
                                <label>Employee ID</label><br>
                                <input type="number" name="id" placeholder="Employee ID"><br><br>
                                <label>Firstname</label><br>
                                <input type="text" name="firstname" placeholder="Firstname"><br><br>
                                <label>Lastname</label><br>
                                <input type="text" name="lastname" placeholder="Lastname"><br><br>
                                <label>Address</label><br>
                                <input type="text" name="address" placeholder="Address"><br><br>
                                <label>Position</label><br>
                                <input type="text" name="position" placeholder="Position"><br><br>
                                <label>Phone</label><br>
                                <input type="number" name="phone" placeholder="Phone"><br><br>
                                <input class="add-btn"type="submit" value="Submit" name="add-employee">
                                </form>
                        </div>
                </div>
                     </div>
                </div>
</div>
</body>
</html>




