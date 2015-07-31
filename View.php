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
	$res= mysql_query($sql);
	$data = mysql_fetch_array($res); 
$id=$data['user_id'];
	//$sqlIP="SELECT * FROM  institutionsip WHERE LabID='".$data['LabID']."'"; 

		
			
			$sqlIP="SELECT * FROM share_accounts where Emp_id=2"; 
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
    	
  <a href="logout.php"><img src="./images/logout.png"  align="right" width="64" height="48" alt="Logout"></a><br>
<ul>
<li><a href='View.php'>View Details</a></li>
<li><a href='Add.php'>Add Details</a></li>
<li><a href='update.php'>Edit/Delete</a></li>
</ul>
</head>
<body class="thrColLiqHdr">

<div id="container">

  <div id="mainContent">

	<form name="addnewform" action="" method="post" onSubmit="return confirm('Are you sure this is correct?')";>
        
       <table>
        <table border="1"  align="center" cellpadding="1"  cellspacing="0" width="60%">
        <tr>
<td class="Header"><b>Publisher</b></td>
        <td class="Header"><b>Journal</b> </td>
        <td class="Header"><b> Author</b></td>


        </tr>
        <?php
$result2=mysql_query("select * from lib_details where user_id='".$id."' ");


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
			
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
      </tr>
</table>
</form>


  
 
  
  
  
    
   <!-- end #mainContent --></div>

</body>
</html>
