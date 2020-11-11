<?php
session_start();

include ("connectiondb.php");
header("location:loginForm.php");

if (isset($_POST['signup']))
{

	$name = $_POST['name'];
	$email_add = $_POST['email_add'];
	$password = $_POST['password'];
	$password = md5($password);

$query = mysql_query("INSERT INTO tbl_user (id, name, email_add, password)VALUES('$id','$name', '$email_add','$password')");


if ($query) 
{
	echo "<script>alert('Registered Successfully !')</script>";
}
else
{
	echo "<script>alert('Unable to Registered !')</script>";
}

}


?>