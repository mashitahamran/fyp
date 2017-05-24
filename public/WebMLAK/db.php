<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mlearninganimals";


$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error)
{
	die("connection failed: " .$conn->connect_error);

}

?>