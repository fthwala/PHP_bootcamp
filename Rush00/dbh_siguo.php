<?php
	$conn = mysqli_connect("localhost", "root", "thwalafelix1988", "shopsignin");
	
	if (!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
?>
