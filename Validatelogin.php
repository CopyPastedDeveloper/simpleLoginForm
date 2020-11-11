<?php

include ("connectiondb.php");
/*header("location:home.php");*/
session_start();
if (isset($_POST['login'])) 
{
  $email_add = $_POST['email_add'];
  $password = $_POST['password'];
  $password = md5($_POST['password']);

  $query = mysql_query("SELECT * FROM tbl_user WHERE email_add = '$email_add' AND password = '$password' ");

   $count = mysql_num_rows($query);


	if ($count>=1) {
		/*$_SESSION['email_add'] = $email_add;*/
		header("location:home.php");
	}else{
		echo "<script>alert('Record Not found !!, Please do signup first')</script>";
		// header("location:UserRegistration.php");
	}
	
}

?>

