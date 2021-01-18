<?php
session_start();
 
	if(isset($_SESSION['id']) && $_SESSION['id'] == true) {
   
} else {
    header('location:login_page.php');
}
$emp_id=$_GET['id'];
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


$con =mysqli_connect("localhost","root","")or die("Not Connected");

mysqli_select_db($con,'db_employee') or die ("Error");



$query=mysqli_query($con,"Select * from tb_employee where ID='$emp_id'");

$row=mysqli_fetch_array($query);
   


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

                        </ul>
                    </nav>    
           

                <div class="main-content">
                        <div class="edit-form">
                            <h2 style="color:#253e66;font-family:calibri;">Edit Employee</h2><br>

                            <form method ="post" action="update_employee.php?id=<?php echo $emp_id; ?>">
                               
                                <label>Firstname</label><br>
                                <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $row['Firstname'];?>"><br><br>
                                <label>Lastname</label><br>
                                <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $row['Lastname'];?>"><br><br>
                                <label>Address</label><br>
                                <input type="text" name="address" placeholder="Address" value="<?php echo $row['Address'];?>"><br><br>
                                <label>Position</label><br>
                                <input type="text" name="position" placeholder="Position" value="<?php echo $row['Position'];?>"><br><br>
                                <label>Phone</label><br>
                                <input type="number" name="phone" placeholder="Phone" value="<?php echo $row['Phone'];?>"><br><br>
                                <input class="add-btn" type="submit" value="Update" name="update-employee">
                                </form>
                        </div>
                </div>
                     </div>
                </div>
</div>
</body>
</html>




