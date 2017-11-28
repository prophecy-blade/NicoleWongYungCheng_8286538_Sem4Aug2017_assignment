<?php

$conn = mysqli_connect("localhost", "root", "", "coldplay");

if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>