<?php
session_start();
include ("dbh.php");

if(isset($_POST["btnContact"])){

	$c_name = $_POST ['c_name'];
	$c_email = $_POST ['c_email'];
	$c_comments = $_POST ['c_comments'];
	
	$sql_contact = "insert into contact (name, contact_email, contact_comment) 
	values ('$c_name', '$c_email', '$c_comments')";

	mysqli_query($conn, $sql_contact);

	mysqli_close($conn);
	
	header("Location: Coldplay.php");
}

?>