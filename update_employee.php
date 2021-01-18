<?php
$con =mysqli_connect("localhost","root","")or die("Not Connected");

mysqli_select_db($con,'db_employee') or die ("Error");

$emp_id=$_GET['id'];

if(isset($_POST['update-employee'])){
   
  
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $address=$_POST['address'];
    $position=$_POST['position'];
    $phone=$_POST['phone'];
    
    
    
    
    mysqli_query($con,"UPDATE tb_employee SET Firstname='$fname',Lastname='$lname',Address='$address',Position='$position',Phone='$phone' WHERE ID ='$emp_id'")
    or die("Data Not Updated");

    header('location:Editrecord_page.php');
    
    }
?>