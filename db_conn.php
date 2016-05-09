<?php
	$conn = mysqli_connect("localhost","root","","balloon");
	if(!$conn)
	{
		die("Connection Error". mysqli_error());
	}
	
	$db = mysqli_select_db($conn, "balloon");
	
	if(!$db)
	{
		die("DB Connection Error". mysqli_error());
	}
?>