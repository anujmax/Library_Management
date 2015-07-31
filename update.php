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
 if (isset($_POST['eid']))
      {
     // if there is an id sent through POST and it isn't null/empty, use that
     $eid = $_POST['eid'];

     $SQL = "SELECT * FROM lib_details WHERE EID = '$eid' ";

     $result = mysql_query($SQL);

     $row1 = mysql_fetch_array($result);
  }
  else
  {
    // otherwise use id sent through GET links
    $eid = $_GET['eid'];

   $SQL = "SELECT * FROM lib_details WHERE EID = '$eid' ";

   $result = mysql_query($SQL);

   $row1 = mysql_fetch_array($result);
  }               
if(isset($_POST['submit1']))
   {
   

      
	
       $SQL = "UPDATE lib_details SET publisher = '".$_POST[id1]."',journal = '".$_POST[id2]."',author = '".$_POST[id3]."' WHERE EID = '$eid' ";
       $result = mysql_query($SQL) or die("Could not update database" . mysql_error());
          echo "<meta http-equiv = 'refresh' content = '0 ; url = update.php'>";
   }
if(isset ($_POST['name']))
{
$name = $_POST['name'];

if(mysql_query("INSERT INTO persons VALUES(' ' , '$name') "))

     echo "Successful Insertion!";

else

     echo "Please try again!";
}

$result = mysql_query("SELECT * FROM lib_details where user_id='".$id."'");     

?>

<html>

<head>

    <style type = "text/css">

    li { list-style-type: none;  display: inline;   padding: 10px;  text-align: center;}

    </style>                    

<script language="javascript">
    	function editnew()
      	{ 
        	document.getElementById('showId').style.display ='inline';
        	
      	}
    	</script>
</head>

    <body>

    
<a href="logout.php"><img src="./images/logout.png"  align="right" width="64" height="48" alt="Logout"></a><br>
<ul>
<li><a href='View.php'>View Details</a></li>
<li><a href='Add.php'>Add Details</a></li>
<li><a href='update.php'>Edit/Delete</a></li>
</ul>


    <table border = "1"   width = "100%"   cellpadding = "5"   cellspacing = "2">

    <tr>
    <td><strong></strong></td>
    <td class="Header"><b>Publisher</b></td>
        <td class="Header"><b>Journal</b> </td>
        <td class="Header"><b> Author</b></td>
<td><strong>Edit</strong></td>
    <td><strong>Delete</strong></td>
    </tr>

    <?php while ($row = mysql_fetch_array($result)) { ?>

    <tr>
    <td><input type="radio"   Name="id"   value="<?php echo $row['EID']; ?>" ></td>
    <td><?php echo $row['publisher']; ?></td>
    <td><?php echo $row['journal']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td> <form name = "edit_form"   method = "POST"   action = "update.php?eid=<?php echo $row['EID']; ?>" >

    <input type = "submit"  name = "editRecord" value = "Edit" />

    </form> 
</td>
    <td> <form name = "delete_form"   method = "POST"   action = "update.php?eid1=<?php echo $row['EID']; ?>" >

    <input type = "submit"  name = "deleteRecord" value = "Delete" />

    </form> 
</td>
    </tr>
    <?php } ?>




                </table>                

    <?php

            while($row = mysql_fetch_array($result))
        echo "<li>$row[id]</li> . <li>$row[name]</li> <li> <a href = 'edit.php?edit=$row[id]'>edit</a> </li> <li> <a href = 'delete.php?del=$row[id]'>delete</a></li> <br>";
        ?>

<?php
if (isset($_GET['eid']))
     
  {
    // otherwise use id sent through GET links
    $eid = $_GET['eid'];

   $SQL = "SELECT * FROM lib_details WHERE EID = '$eid' ";

   $result1 = mysql_query($SQL);

   $row1 = mysql_fetch_array($result1);?>
<form action = " "  method = "POST">
				Publisher: <input type = "text"    name = "id1" value = "<?php echo $row1['publisher'] ?>"/><br><br>
Journal: <input type = "text"    name = "id2" value = "<?php echo $row1['journal'] ?>"/><br><br>
Author: <input type = "text"    name = "id3" value = "<?php echo $row1['author'] ?>"/><br><br>


       <input type = "submit"  name="submit1" value = "Update"></form>
  <?php }               


if (isset($_GET['eid1']))
     
  {
    // otherwise use id sent through GET links
    $eid = $_GET['eid1'];

   $SQL = "Delete FROM lib_details WHERE EID = '$eid' ";

   $result1 = mysql_query($SQL);
echo "<meta http-equiv = 'refresh' content = '0 ; url = update.php'>";
   
   }       
?>

				

    </body>

     </html>
