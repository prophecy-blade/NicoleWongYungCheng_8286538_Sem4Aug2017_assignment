<?php
session_start();
include ("dbh.php");

if(isset($_POST["bookingBtn"])){

	$ticket_no = $_POST ['ticket_no'];
	$bk_email = $_POST ['bk_email'];
	
	$sql_booking = "insert into ticket_purchase (ticket, bk_email) 
	values ('$ticket_no', '$bk_email')";

	mysqli_query($conn, $sql_booking);

	mysqli_close($conn);
	
	$_SESSION['signupSuccess'] = true;
	header("Location: Coldplay.php");
}

?>