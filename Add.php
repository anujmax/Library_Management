<?php
include('dbconfig1.php');
include('dbconfig.php');
include("_REQUIRE/dbconfig.php");  // To connect database and tables
session_start();
	if (!isset($_SESSION['username'])) 
		{
			header("Location: login.php");
		}
	
		// show Records
	$user= $_SESSION['username'];
 	$sql= "select * from user_details where loginname='$user' "; // connect to login table
	
$rslt=mysql_query($sql);
$rslt1=mysql_fetch_array($rslt);
$id=$rslt1['user_id'];
$naam=$rslt1['user_name'];
	//$sqlIP="SELECT * FROM  institutionsip WHERE LabID='".$data['LabID']."'"; 

		
		
        if (isset($_POST['submit'])) {

			$pub =$_POST['Publisher']; 
			$jrnl   =$_POST['Journal']; 
$auth =$_POST['Author'];

			//$sql="select LabID from institutions where LabCode='".$_SESSION['username']."'";
			//$rs1=mysql_query($sql);
			
			if($sql = "insert into lib_details set user_name='".$naam."', user_id='".$id."', publisher='".$pub."',journal='".$jrnl."', author='".$auth."', Flag='Z'")
					{ 			$msg="<font face='Verdana' size='2' color=red>You have successfully updated your IP details.<br></font>";

					}
				else
					{
					$msg="<font face='Verdana' size='2' color=red>There is some problem in updating your IP. 
							Please contact site admin.<br></font>";
					}
$rs=mysql_query($sql); 
}
			
			$sqlIP="SELECT * FROM lib_details where user_id='".$id."'"; 
	// connect to institutions  IP detail table
	$resIP= mysql_query($sqlIP);
	//$dataIP=mysql_fetch_array($resIP);	
	$num_rows = mysql_num_rows($resIP);
	$sn=0;
	       
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NKRC | IP Details | Update IPs</title>
<LINK REL="SHORTCUT ICON" HREF="http://124.124.221.7/nkrc/images/niscair-logo.png">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="_REQUIRE/jquery.min.js"> </script>
<script type="text/javascript" src="_REQUIRE/ddaccordion.js"> </script>
<link href="_CSS/main.css" rel="stylesheet" type="text/css" />    <!--Right button publisher CSS file-->
<script language="javascript">
    	function addnew()
      	{ 
        	document.getElementById('showId').style.display ='inline';
        	document.getElementById('showhide').style.display ='none';
      	}
    	</script>
    	
  
</head>

<body class="thrColLiqHdr">
<a href="logout.php"><img src="./images/logout.png"  align="right" width="64" height="48" alt="Logout"></a><br>
<ul>
<li><a href='View.php'>View Details</a></li>
<li><a href='Add.php'>Add Details</a></li>
<li><a href='update.php'>Edit/Delete</a></li>
</ul>
<div id="container">

  <div id="mainContent">

	<form name="addnewform" action="Add.php" method="post" onSubmit="return confirm('Are you sure this is correct?')";>
        
       <table>
        <table border="1"  align="center" cellpadding="1"  cellspacing="0" width="60%">
        <tr>
<td class="Header"><b>Publisher</b></td>
        <td class="Header"><b>Journal</b> </td>
        <td class="Header"><b> Author</b></td>

        </tr>
        <?php

$result2=mysql_query("SELECT * FROM lib_details where user_id='".$id."'");


while($row2=mysql_fetch_array($result2))
{
$sn+=1;
$pub=$row2["publisher"];
$journal=$row2["journal"];
$author=$row2["author"];

?>
<tr>
<td style="width:60px"><?php echo $pub; ?> </td>
<td style="width:80px"><?php echo $journal; ?></td>

<td style="width:170px"><?php echo $author; ?></td>

</tr>
<?php
}?>
        </table>
        	
	
	
	
	<tr >
   	  <td>
			<div id="showId" style="display:none;">
				<table align="center">

					<tr>
						
						<td>Publisher</td><td><input type="text" name="Publisher" /></td>
					</tr>
					<tr>
						<td>Journal</td><td><input type="text" name="Journal" /></td>
					</tr>
					<tr>
						<td>Author</td><td><input type="text" name="Author" /></td>
					</tr>

						<td> </td>
							<td><input type="submit" name="submit" value="Save" /> </td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>
		<div id='showhide' align="center"> <p>
				<input type="button" onClick="javascript:addnew();" name="add new"  value="Add new IP"/ align="center">
			</div>	
		</td>
      </tr>
</table>
</form>


  
 
  
  
  
    
   <!-- end #mainContent --></div>

</body>
</html>
