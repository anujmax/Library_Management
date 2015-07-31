<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="_REQUIRE/jquery.min.js"> </script>
	<script type="text/javascript" src="_REQUIRE/ddaccordion.js"> </script>
    <link href="_CSS/cssbuttons.css" rel="stylesheet" type="text/css" />    <!--Right button publisher CSS file-->
    <link href="_CSS/sample.css" rel="stylesheet" type="text/css" />		<!--Right button publisher CSS file-->
    
<style type="text/css"> 
<!-- 
body  {
	background: #666666;
	margin: 0; /* it's good practice to zero the margin and padding of the body element to account for differing browser defaults */
	padding: 0;
	text-align: center; /* this centers the container in IE 5* browsers. The text is then set to the left aligned default in the #container selector */
	color: #000000;
	font-size: 100%;
}
.thrColLiqHdr #container {
	width: 80%;  /* this will create a container 80% of the browser width */
	background: #FFFFFF;
	margin: 0 auto; /* the auto margins (in conjunction with a width) center the page */
	border: 1px solid #000000;
	text-align: justify;
} 
.thrColLiqHdr #header { 
	background: #DDDDDD; 
	padding: 0 0px;
	/* this padding matches the left alignment of the elements in the divs that appear beneath it. If an image is used in the #header instead of text, you may want to remove the padding. */
} 
.thrColLiqHdr #header h1 {
	margin: 0; /* zeroing the margin of the last element in the #header div will avoid margin collapse - an unexplainable space between divs. If the div has a border around it, this is not necessary as that also avoids the margin collapse */
	padding: 10px 0; /* using padding instead of margin will allow you to keep the element away from the edges of the div */
}

/* Tips for sidebars:
1. Since we are working in percentages, it's best not to use side padding on the sidebars. It will be added to the width for standards compliant browsers creating an unknown actual width. 
2. Space between the side of the div and the elements within it can be created by placing a left and right margin on those elements as seen in the ".thrColLiqHdr #sidebar1 p" rule.
3. Since Explorer calculates widths after the parent element is rendered, you may occasionally run into unexplained bugs with percentage-based columns. If you need more predictable results, you may choose to change to pixel sized columns.
*/
.thrColLiqHdr #sidebar1 {
	float: left; /* this element must precede in the source order any element you would like it be positioned next to */
	width: 22%; /* since this element is floated, a width must be given */
	background: #EBEBEB; /* top and bottom padding create visual space within this div  */
	margin-top: 0px;
	padding-top: 0px;
	padding-right: 0;
	padding-bottom: 0px;
	padding-left: 0;
}
.thrColLiqHdr #sidebar2 {
	float: right; /* this element must precede in the source order any element you would like it be positioned next to */
	width: 160px; /* since this element is floated, a width must be given */
	background: #EBEBEB; /* the background color will be displayed for the length of the content in the column, but no further */
	padding: 0px 0; /* top and bottom padding create visual space within this div */
}
.thrColLiqHdr #sidebar1 p, .thrColLiqHdr #sidebar1 h3, .thrColLiqHdr #sidebar2 p, .thrColLiqHdr #sidebar2 h3 {
	margin-left: 0px; /* the left and right margin should be given to every element that will be placed in the side columns */
	margin-right: 0px;
	
}

/* Tips for mainContent:
1. the space between the mainContent and sidebars is created with the left and right margins on the mainContent div.
2. to avoid float drop at a supported minimum 800 x 600 resolution, elements within the mainContent div should be 300px or smaller (this includes images).
3. in the Internet Explorer Conditional Comment below, the zoom property is used to give the mainContent "hasLayout." This avoids several IE-specific bugs.
*/
.thrColLiqHdr #mainContent { 
    
	overflow:auto;
	height:850px;
	margin: 0 23% 0 23.5%; /* the right and left margins on this div element creates the two outer columns on the sides of the page. No matter how much content the sidebar divs contain, the column space will remain. You can remove this margin if you want the #mainContent div's text to fill the sidebar spaces when the content in each sidebar ends. */
}

.thrColLiqHdr #footer { 
	padding: 0 10px; /* this padding matches the left alignment of the elements in the divs that appear above it. */
	background:#DDDDDD;
} 
.thrColLiqHdr #footer p {
	margin: 0; /* zeroing the margins of the first element in the footer will avoid the possibility of margin collapse - a space between divs */
	padding: 10px 0; /* padding on this element will create space, just as the the margin would have, without the margin collapse issue */
}

/* Miscellaneous classes for reuse */
.fltrt { /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class should be placed on a div or break element and should be the final element before the close of a container that should fully contain its child floats */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
--> 
</style><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.thrColLiqHdr #sidebar2, .thrColLiqHdr #sidebar1 { padding-top: 30px; }
.thrColLiqHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]--></head>

<body class="thrColLiqHdr">

<div id="container">


  <table height="300" border="1" align="center">

  <tr>
    <td height="51" colspan="4" align="center" background="images/header.png"><font color=	"#ffffff" face="Verdana, Geneva, sans-serif">Labs! Administration Login</font></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center" valign="middle"><img src="images/login_lock.jpg" width="152" height="137"></td>
    <td colspan="2"><form name="frmlogin" method="post" action="checklogin.php">
      <table align="center" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" height="">
        <tr>
          <td colspan="4"><font color="#CC0000">Wrong Username or Password</font></td>
        </tr>
        <tr>
          <td height="49">Username</td>
          <td>:</td>
          <td><input name="username" type="text"  value="UserName"id="username" onFocus="this.value=''" size="15"></td>
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
          <td><input type="submit" name="Submit" value="Login" />
            <input type="reset" name="Reset" value="Reset"  /></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
  
  </table>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    <p> <?php include('footer.php') ; ?></p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
