<?php


$con =mysqli_connect("localhost","root","")or die("Not Connected");

mysqli_select_db($con,'db_employee') or die ("Error");
$emp_id=$_GET['id'];
mysqli_query($con,"DELETE From tb_employee WHERE ID ='$emp_id'")
or die("Data Not Deleted");

header('location:deleterecord_page.php');
?>