<?php
session_start();
include 'dbh.php';


$sql_tour = "select * from tour_info";
$query=mysqli_query($sql_tour);

if(mysqli_num_rows($query)>0)
{
	$i=1;
	while($row=mysqli_fetch_object($query)){


mysqli_close($conn);





