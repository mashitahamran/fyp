<?php
require 'db.php';



if (

	var_dump($_REQUEST['date']) &&
	var_dump($_REQUEST['staffid']) &&
	var_dump($_REQUEST['fullname']) &&
	var_dump($_REQUEST['nric']) &&
	var_dump($_REQUEST['birthday']) &&
	var_dump($_REQUEST['age']) &&
	var_dump($_REQUEST['gender']) &&
	var_dump($_REQUEST['address']) &&
	var_dump($_REQUEST['phoneNumber']) &&
	var_dump($_REQUEST['email']) &&
	var_dump($_REQUEST['username']) &&
	var_dump($_REQUEST['password']) &&
	var_dump($_REQUEST['confirmPassword'])
	)
{

$date = mysql_real_escape_string($_POST['date']);
$staffid = mysql_real_escape_string($_POST['staffid']);
$fullname = mysql_real_escape_string($_POST['fullname']);	
$nric = mysql_real_escape_string($_POST['nric']);
$birthday = mysql_real_escape_string($_POST['birthday']);
$age = mysql_real_escape_string($_POST['age']);
$gender = mysql_real_escape_string($_POST['gender']);
$address = mysql_real_escape_string($_POST['address']);
$phoneNumber = mysql_real_escape_string($_POST['phoneNumber']);
$email = mysql_real_escape_string($_POST['email']);
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$confirmPassword = mysql_real_escape_string($_POST['confirmPassword']);


$sql = "INSERT INTO staffregistration

(
	date,
	staffid,
	fullname,
	nric,
	birthday,
	age,
	gender,
	address,
	phoneNumber,
	email,
	username,
	password,
	confirmPassword,
)
VALUES
(
	'$date',
	'$staffid',
	'$fullname',
	'$nric',
	'$birthday',
	'$age',
	'$gender',
	'$address',
	'$phoneNumber',
	'$email',
	'$username',
	'$password',
	'$confirmPassword',

)";

$result = $conn->query($sql);

	if($result){

		    echo "New records created successfully";
		    header("Location:form_basic.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>



