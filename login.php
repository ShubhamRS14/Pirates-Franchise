<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "test_db3"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Login Successfull!! <a href= 'gallery.html'>Click Here</a>";
} else {
  echo "Invalid Username or Password!! <a href='index2.html'>Register here</a>";
}

$conn->close();
?>


