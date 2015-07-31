<?php
session_start();
include('dbconfig1.php');
ob_start();

// Define $myusername and $mypassword
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection 
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

echo $username;
echo $password ;

$sql="SELECT * FROM user_details WHERE loginname='$username' and password='$password' ";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
	{
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		//session_register("username");
		$_SESSION['username']=$username;
		//session_register("password");
if($_SESSION['username']=='admin'){
		header("location:../society/Options.php");}
else{
header("location:../library/View.php");}
	}
	else 
		{
			echo "Wrong Username or Password";
			header("Location:../society/loginerr.php");
		}

ob_end_flush();

?>
