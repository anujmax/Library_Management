<?php
// database connection 
	$host="localhost"; // Host name
	$dbuser="root"; // Mysql username
	$dbpassword="shilpi"; // Mysql password
	$db_name="library"; // Database name
	$tbl_user="user_details"; // Login Table
	$tbl_lab="lib_details"; // Institutions details table
	//$tbl_ip="institutionsip"; // Institutions  IP Detalsdetails table
	
	//$tbl_state="state";   // State Details

// Connect to server and select databse.
	mysql_connect("$host", "$dbuser", "$dbpassword")or die("cannot connect to DataBase server");
	mysql_select_db("$db_name")or die("cannot select DataBase");
	

?>
