<?php
require 'db.php';


if (

	var_dump($_POST['username'])
	var_dump($_POST['email'])
	var_dump($_POST['password']) 
	)
{

$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);



$sql = "INSERT INTO signup (username, email, password);
VALUES ('$username','$email','$password')";

$result = $conn->query($sql);

	if($result){

		    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>