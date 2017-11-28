<?php
session_start();
include ("dbh.php");

if(isset($_POST["signUpBtn"])){

	$signup_email = $_POST ['signup_email'];
	$signup_pwd = $_POST ['signup_pwd'];
	
	$sql_signup = "insert into userdata (email, pwd) 
	values ('$signup_email', '$signup_pwd')";

	mysqli_query($conn, $sql_signup);

	mysqli_close($conn);
	
	$_SESSION['signupSuccess'] = true;

	header("Location: Coldplay.php");

}

?>