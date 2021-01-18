<?php
session_start();
 
	if(isset($_SESSION['id']) && $_SESSION['id'] == true) {
   
} else {
    header('location:login_page.php');
}
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

$con =mysqli_connect("localhost","root","")or die("Not Connected");

mysqli_select_db($con,'db_employee') or die ("Error");

if(isset($_POST['search-btn'])){
 $search=$_POST['search'];
$result= mysqli_query($con,"Select * from tb_employee WHERE ID ='$search'");

}
else{

    $result= mysqli_query($con,"Select * from tb_employee");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Employee | Add Employee</title>
   
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

                    <div class="search-form" style="width:450px;margin:50px auto;background:#2c3463;border-radius:4px;padding:40px;border-left:6px solid white;">
                    <h2 style="color:white;">Search By Employee ID</h2><br>
                    <form action="searchrecord_page.php" method="post" >
                        <input type="text" name="search" placeholder="Search by Employee ID" style="width:300px;padding:8px;">
                        <input type="submit" value="Search" name="search-btn" style="width:100px;padding:8px;background:#64a66b;color:white;border:none;cursor:pointer;">
                        
                    </form>
                    </div>
                        <div class="tblview" >
                            <table>
                                <tr>
                                    <th>
                                        Employee ID
                                    </th>
                                    <th>
                                        FirstName
                                    </th>
                                    <th>
                                        LastName
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                       Phone
                                    </th>
                                   

                                </tr>
                               <?php 
                             
                               
                               while($row=mysqli_fetch_array($result))
                               {
                                   ?>
                                <tr>
                                    <td><?php echo $row['ID'];?></td>
                                    <td><?php echo $row['Firstname'];?></td>
                                    <td><?php echo $row['Lastname'];?></td>
                                    <td><?php echo $row['Address'];?></td>
                                    <td><?php echo $row['Position'];?></td>
                                    <td><?php echo $row['Phone'];?></td>
                                </tr>
                                <?php
                               }
                                ?>
                            </table>
                        </div>
                </div>
                     </div>
                </div>
</div>
</body>
</html>




