<html>
<head>
<title> </title>
</head>
<header>
<style>
*{
	margin:0px;
	padding:0px;
}
	

header{
   background-image: url(Logo1.jpg);
	background-size:cover;
	height: 100vh;
	background-position: center;	
	
}
	h1{
		color:gold;
		font-family: verdana;
		font-size: 300%;
	}
	label{
		color:silver;
		font-family:consolas;
		font-size: 150%;
		border: 5px solid powdergreen;
	}
	.btn{
		color:indigo;
		font-family:algerian;
	font-size: 150%;
	background: border:box;
	cursor:pointer;
	overflow: hidden;
  text-overflow: clip;
	}
	.password{
		color:red;
		border: 1px solid red;
		padding: 0px;
		margin: 0px;
	}
	a{
		color: white;
		font-family: castellar;
	}
	.form-group{
		color:yellow;
		font-family: Times new roman;
		font-size: 100%;
		padding:5px;
		margin:5px;
		background: border-box;
		outline: none;
	}
	.group{
		background: border-box;
	}
	
</style>

<form  class="group" action= "register.php" method= "POST">
<h1 align= "center"> Registeration Form </h1>
<label>Username:-</label>
                <input type="text" name="username" class="form-group" required><br><br>
                <label>Email:-</label>
                <input type="email" name="email" class="form-group" required><br><br>
                <label>Password:-</label>
                <input type="Password" name="password" class="form-group" required>
<br><br>
                <input type="submit" name="registration" class="btn" value="Register" ><br></br> <br> </br>
                <label>Already have an account..?</label>
                <a href="login.php" class="text">Login here</a>
            </form>

<?php 
session_start();
include ("connect.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
        $email= $_POST['email'];
		$password = $_POST['password'];


		if(!empty($username) && !empty($password) && !empty($email) && !is_numeric($username))
		{

			//save to database
			
			$query = "insert into jack (username,email,password) values ('$username','$email','$password')";

			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
	
?>
</header>
</html>

