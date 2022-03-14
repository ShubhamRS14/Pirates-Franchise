<?php 

session_start();

	include("connect.php");
	include("function.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password']; 
		echo "$username,$password";

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from jack where username = '$username' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					echo"$user_data";
					
					if($user_data['password'] === $password)
					{

						$_SESSION['username'] = $user_data['username'];
						header("Location: G1.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<html>
    <head>
        <title>Login-form</title>
		<header>
		<style>
		header{
   background-image: url(IMG1.jpg);
	background-size:cover;
	height: 100vh;
	background-position: center;	
	margin:auto;
	padding:auto;
	
}
			h1{
		color:orange;
		font-family: verdana;
		font-size: 300%;
	}
	label{
		color:yellow;
		font-family:consolas;
		font-size: 150%;
		border: 5px  ;
	}
	.btn{
		background-color: #f44336;
		color:indigo;
		font-family:algerian;
	font-size: 150%;
	cursor: pointer;
	}
	.password{
		color:red;
		border: 1px solid red;
		padding: 0px;
		margin: 0px;
	}
	a{
		color:blue;
		font-family: consolas;
		border: 5px;
	}
	.form-group{
		color:violet;
		font-family: serif;
		font-size: 100%;
		padding:1px;
		margin:1px;
		background: border-box;
		outline: none;
	}
		</style>
    </head>
    <body>

        <div class="input-group">
            <form method="POST"  class="input">
                <h1 class="login" align= "center">Login Form</h1><br><br>
                <label>Username:-</label>
                <input type="text" name="username" class="form-group" required><br><br>
                <label>Password:-</label>
                <input type="Password" name="password" class="form-group" required>
                <br><br>
                <input type="submit" name="login" value="Login" class="btn" ><br>
                <label>Don't have an account..?</label>
                <a href="register.php" class="text">Register here</a>
            </form>
        </div>  	       
    </body>
	</header>
</html>
