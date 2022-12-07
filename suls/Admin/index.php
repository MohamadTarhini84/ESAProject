<?php  require('../config/constants.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.5">
</head>
<body>
	
	<img class="wave" src="img/wave-01.jpg">
	<h1>
			<?php

				if(isset($_SESSION['no-login-message'])){
					echo $_SESSION['no-login-message'];
					unset($_SESSION['no-login-message']);
					echo "<br><br>";
				}
				if(isset($_SESSION['user'])){
					header('location:'.SITEURL.'admin/dashboard.php');
				}
			?>
			</h1>
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		
		<div class="login-content">
			<form action="" method="post">

				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" class="input" >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" >
            	   </div>
            	</div>
            	
            	<input type="submit" name="submit" class="btn" value="Login" >
				
            </form>
			
        </div>
		<?php
  //check if the submit button is clicked
 // echo '<h1> Empty </h1>';
 
if(isset($_POST['submit'])){

	if(empty($_POST['username'])||empty($_POST['password'])){
		echo '<h1> Empty </h1>';
	}

	else{
				
		$username=$_POST['username'];
		$password=$_POST['password'];		

		//sql to check if the username and password exist or not
		$sql="SELECT * FROM admin WHERE username='$username' AND pass='$password'";
		//execute the query
		$res=mysqli_query($conn,$sql);
		
		//check if user exists or not
		 $count = mysqli_num_rows($res);
				
		if($count==1){
			$row = mysqli_fetch_assoc($res);
		//user available
			$_SESSION['login']="<div >Login Successful.</div>";
			$_SESSION['user']=$username;//check if the user is logged in or not and logout will unset it
			$usertype=$row['type'];
			$_SESSION['userType']=$usertype;
			//redirect to home page
			echo "<h1>sucess</h1>";
			header('location:'.SITEURL.'admin/dashboard.php');
			//header('location:http://localhost:80/suls/admin/dashboard.php');
		}
		else{
		//user not available and login fail
			$_SESSION['login']="<div> Username OR Password did not match </div>";
			echo "<h1>failed</h1>";
			header('location:http://localhost:80/suls/');
		}
	}
}
  
?>
    </div>
	

    <script src="javascript/scripts.js"></script>
	
</body>
</html>



<?php
  //check if the submit button is clicked
 // echo '<h1> Empty </h1>';
 /*
if(isset($_POST['submit'])){

	if(empty($_POST['username'])||empty($_POST['password'])){
		echo '<h1> Empty </h1>';
	}
	else{
		echo $username=$_POST['username'];
		echo  $password=$_POST['password'];
		echo '<h1>'.$username.'</h1>';
		echo $password;
		//sql to check if the username and password exist or not
		echo $sql="SELECT * FROM admin WHERE username='$username' AND pass='$password'";
		//execute the query
		echo $res=mysqli_query($conn,$sql);

		//check if user exists or not
		echo  $count = mysqli_num_rows($res);
		
		if($count==1){
		//user available
		$_SESSION['login']="<div >Login Successful.</div>";
		$_SESSION['user']=$username;//check if the user is logged in or not and logout will unset it
		//redirect to home page
		echo "<h1>sucess</h1>";
		//header('location:'.SITEURL.'admin/dashboard.php');
		header('location:http://localhost:80/suls/admin/dashboard.php');
		}
		else{
		//user not available and login fail
		$_SESSION['login']="<div> Username OR Password did not match </div>";
		echo "<h1>failed</h1>";
		header('location:http://localhost:80/suls/');
		}
	}
}*/
  
?>
