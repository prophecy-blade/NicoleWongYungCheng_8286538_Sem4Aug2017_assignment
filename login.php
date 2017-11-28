<?php
session_start();
include 'dbh.php';

$login_email = $_POST ['login_email'];
$login_pwd = $_POST ['login_pwd'];

$sql_login = "select * from userdata where email='$login_email' and pwd='$login_pwd'";

$check_user= mysqli_query($conn, $sql_login);

if($row = mysqli_fetch_assoc($check_user)){
	$_SESSION['id']= $row['id'];
	$_SESSION['authenticated']=true;
	
	header("Location: Coldplay.php");
}else{
	echo "Your email or password is incorrect";	
}

mysqli_close($conn);





