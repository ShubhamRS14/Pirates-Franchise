<?php

function check_login($conn)
{

	if(isset($_SESSION['username']))
	{

		$id = $_SESSION['username'];
		$query = "select * from jack where username = '$username' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: G1.php");
	die;

}

?>