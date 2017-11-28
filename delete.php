<?php
session_start();
include ("dbh.php");

if(isset($_REQUEST["tid"])){
	
	$tid_delete = $_REQUEST['tid'];
	
	$sql_delete = "delete from ticket_purchase where tid='$tid_delete'";

	mysqli_query($conn, $sql_delete);

	mysqli_close($conn);
	
	header("Location: Coldplay.php");
}

?>