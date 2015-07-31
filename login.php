<?php 
session_start();
include('dbconfig1.php');

if(isset($_POST['username'])){
  $sql =  "select * from user_details where loginname= '" . $_POST['username'] . "' and password = '" .$_POST['password'] . "'";
	  $login = mysql_query($sql);
	  $row = mysql_num_rows($login);
	   if($row > 0){
		 	$_SESSION['username'] = $_POST['username'];
		  	header("location: UpdateShare.php");
			exit;
	  	}else
			{
	  			header("location: index.php");
			exit;
	  }
	  	 
}
?>
<style>
h1 {color:grey;size:10px}
h3 {color:blue;size:10px}
</style>
<body font: "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif>
<h1 align="center" color="red">Library Management System</h1>



<table height="300" border="1" align="center">


  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/login.jpeg" width="152" height="137"></td>
    <td colspan="2">
<form name="frmlogin" method="POST" action="checklogin.php">
      <table align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" height="">
        <tr>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td height="49">Username</td>
          <td>:</td>
          <td><input name="username" type="text"  value="Username"id="username" onFocus="this.value=''" size="15"></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input name="password" type="password"  value="Password" onFocus="this.value=''" id="password" size="15" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Login" class="cssbutton" />
            <input type="reset" name="Reset" value="Reset"  /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  
  </table>
  </font>
</body>
