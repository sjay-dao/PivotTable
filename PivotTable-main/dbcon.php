<?php
    set_time_limit(0);	
	date_default_timezone_set("Asia/Manila");
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	
	$connection = mysqli_connect("localhost", "root", "", "convenience_store_schema");
	if(mysqli_connect_errno())
	 { die("Could not connect: " . mysqli_connect_error()); }

     
?>