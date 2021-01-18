<?php
session_start();
 
	if(isset($_SESSION['id']) && $_SESSION['id'] == true) {
   
} else {
    header('location:login_page.php');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Employee</title>
   
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
                        <div class="tblview" >
                        <h2 style="color:white;margin:50px auto;text-align:center;">Edit Records</h2>
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
                                    <th>
                                       Edit
                                    </th>
                                   

                                </tr>
                               <?php 
                               $con =mysqli_connect("localhost","root","")or die("Not Connected");

                               mysqli_select_db($con,'db_employee') or die ("Error");
                               
                               $query="Select * from tb_employee";
                               $result=mysqli_query($con,$query);
                               
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
                                    <td><a href="Edit.php?id=<?php echo $row['ID'];?>" style="text-decoration:none;color:white;padding:7px;text-align:center;background:#48ae96;">Edit</a></td>
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




