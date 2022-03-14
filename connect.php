<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "black_pearl";

$conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
     
     if(!$conn){
          die("Sorry we failed to connect:" . mysqli_connect_error());
     }
     else{
          echo"";
     }
?>
