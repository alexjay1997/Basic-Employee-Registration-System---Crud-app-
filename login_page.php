<?php
    $con=mysqli_connect("localhost","root","")or die("Not Connected");

    mysqli_select_db($con,'db_employee') or die ("Error");

    	if(isset($_POST['login'])){
     
    		session_start();
		
    		$username=$_POST['username'];
    		$password=$_POST['password'];
           $query= mysqli_query($con,"select * from tb_user where username='$username' && password='$password'");
    
         		if (mysqli_num_rows($query) == 0){
    			
						
    			header('location:login_page.php');

    		}
    		else{
    			$row=mysqli_fetch_array($query);
     
    			
    			$_SESSION['id']=$row['ID'];
    			header('location:addrecord_page.php');
    		}
    	}
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Employee</title>
  
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="page-container">
       
      
        <div class="hero-login">
            <div class="container">

                <div class="login-form">
                <h2>Employee Login Form</h2><br>
                <form method="post" action="login_page.php" >
             
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                        
                    <input type="submit" class="button" name="login" value="Login"><br><br>

                    <div class="cancel-btn"><a href="index.php"><< Back</a><div><br><br>
                

                </form>

        </div>
     
</body>
</html>