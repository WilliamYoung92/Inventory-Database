<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Admin_home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Add Part</title>
<style type="text/css">
table1 {
	border: thin solid #002857;
}
.table2 {
	border: thin solid #002857;
}
</style>
<!-- InstanceEndEditable -->
<style type="text/css">
.left {
	text-align: left;
	color: #000;
	vertical-align: top;
}
.header {
	background-color: #002857;
	height: 70px;
	width: 700px;
}
.page {
	width: 100%;
	color: #FFFFFF;
	background-color: #002857;
	background-image: none;
	background-repeat: no-repeat;
}
.body {
}
.header2 {
	height: 85px;
	width: 720px;
	vertical-align: text-bottom;
	font-size: 16px;
}
.user {
	float: right;
	vertical-align: baseline;
	text-align: right;
}
.title {
	vertical-align: middle;
}
.logo {
	float: left;
	height: 110px;
	width: 144px;
	text-align: left;
	vertical-align: top;
	background-image: url(images/logo%20-%20Copy.png);
	background-repeat: no-repeat;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body class="left">
<span class="MenuBarHorizontal"></span>
<div class="header2">
  <div class="user"> Profile / Sign Out </div>
  <div class="title">
  <div>
    <div class="logo"></div>
  </div>
  FAU eLectronics Administration<br />
  </div>
<br />
  <ul id="MenuBar2" class="MenuBarHorizontal">
    <li class="MenuBarHorizontal"><a class="MenuBarItemSubmenu" href="#">Inventory Management</a>
      <ul>
        <li><a href="Edit_inventory.php">Edit Inventory</a></li>
        <li><a href="Add_Part6.php">Add Parts to Invenotry</a></li>
<li><a href="Kit_Creation6.php">Create Kit</a></li>
        <li><a href="#">Customer Item Requests</a></li>
        <li><a href="#">Item Information Update Request</a></li>
        <li><a href="#">Order Items from Vendor</a></li>
      </ul>
    </li>
    <li class="MenuBarHorizontal"><span class="MenuBarItemIE"><a href="#" class="MenuBarItemSubmenu">Reports</a>
        <ul>
          <li><a href="Inventory_Report.php">Inventory Reports</a></li>
          <li><a href="#">Vendor Reports</a></li>
          <li><a href="#">Client Reports</a></li>
          <li><a href="#">Staff Reports</a></li>
        </ul>
    </span></li>
<li class="MenuBarHorizontal"><a href="#" class="MenuBarItemSubmenu">Admin</a>
      <ul>
        <li><a href="#">Edit Staff</a></li>
        <li><a href="#">Edit Customer</a></li>
      </ul>
    </li>
  </ul>
  <p><br />
    <br />
  </p>
</div>
<!-- InstanceBeginEditable name="EditRegion2" -->
<div class="page">Admin &gt; Insert Part</div>
<!-- InstanceEndEditable -->
<p>&nbsp;</p>
<!-- InstanceBeginEditable name="EditRegion1" -->
<form action="Insert.php" method="post">
  <H1>Insert a part into the database:<br />
  </H1>
  <table width="350" border="0" class="table2">
    <tr>
	    <td>Part_number*</td>
	    <td><input type="text" name="Part_number" /></td>
      </tr>
	  <tr>
	    <td>Short_description</td>
	    <td><input type="text" name="Short_description" /></td>
      </tr>
	  <tr>
	    <td>Long_description</td>
	    <td><input type="text" name="Long_description" /></td>
      </tr>
	  <tr>
	    <td>Location_in_lab</td>
	    <td><input type="text" name="Location_in_lab" /></td>
      </tr>
	  <tr>
	    <td>Quantity*</td>
	    <td><input type="text" name="Quantity" /></td>
      </tr>
	  <tr>
	    <td>Purchase_or_rent*</td>
	    <td><input type="text" name="Purchase_or_rent" /></td>
      </tr>
	  <tr>
	    <td>Retail_price*</td>
	    <td><input type="text" name="Retail_price" /></td>
      </tr>
	  <tr>
	    <td>Retail_price promo</td>
	    <td><input type="text" name="Retail_price promo" /></td>
      </tr>
	  <tr>
	    <td>Retail_markup</td>
	    <td><input type="text" name="Retail_markup" /></td>
      </tr>
	  <tr>
	    <td>Jobber_price</td>
	    <td><input type="text" name="Jobber_price" /></td>
      </tr>
	  <tr>
	    <td>Jobber_markup</td>
	    <td><input type="text" name="Jobber_markup" /></td>
      </tr>
	  <tr>
	    <td>Bulk_price</td>
	    <td><input type="text" name="Bulk_price" /></td>
      </tr>
	  <tr>
	    <td>Bulk_markup</td>
	    <td><input type="text" name="Bulk_markup" /></td>
      </tr>
	  <tr>
	    <td>Cost_to_replace</td>
	    <td><input type="text" name="Cost_to_replace" /></td>
      </tr>
	  <tr>
	    <td>Cost_average</td>
	    <td><input type="text" name="Cost_average" /></td>
      </tr>
	  <tr>
	    <td>Category_code</td>
	    <td><input type="text" name="Category_code" /></td>
      </table>
	<p>
	  <input type="submit" value="Insert" />
	  <br/>
  </p>
</form>
<?php
$con = mysqli_connect("localhost", "CEN4010_S2018g03", "cen4010_s2018");
if(!$con)
{
	echo 'Not connected to server';
	}
if(!mysqli_select_db($con,'CEN4010_S2018g03'))
{
	echo 'Database not selected';
	}
	if(isset($_POST['submit'])){
	$Part_number = $_POST['perry_part_num'];
	$Short_description = $_POST['short_description'];
	$Long_description = $_POST['long_description'];
	$Location_in_lab = $_POST['location_in_lab'];
	$Quantity = $_POST['quantity'];
	$Purchase_or_rent = $_POST['purchase_or_rent'];
	$Retail_Price = $_POST['retail_price'];
	$Retail_price_promo = $_POST['retail_price_promo'];
	$Retail_markup = $_POST['retail_markup'];
	$Jobber_price = $_POST['jobber_price'];
	$Retail_markup = $_POST['retail_markup'];
	$Jobber_price = $_POST['jobber_price'];
	$Retail_markup = $_POST['retail_markup'];
	$Jobb_markup = $_POST['jobb_markup'];
	$Bulk_markup = $_POST['bulk_markup'];
	$Cost_to_replace = $_POST['cost_to_replace'];
	$Cost_average = $_POST['cos_avg'];
	$Category_code = $_POST['category_code'];
	
	$sql = "INSERT INTO Inventory (Part_number,Short_description,Long_description,Location_in_lab,Quantity,Purchase_or_rent,Retail_Price,Retail_price_promo,Retail_markup,Jobber_price,Retail_markup,Jobber_price,Retail_markup,Jobb_markup,Bulk_markup,Cost_to_replace,Cost_average,Category_code,Category_name)VALUES ('$perry_part_num','$short_description','$long_description','$location_in_lab','$quantity','$purchase_or_rent','$retail_price','$retail_price_promo','$retail_markup','$jobber_price','$jobber_markup','$bulk_price','$bulk_markup','$cost_to_replace','$cost_avg','$category_code','$category_name')";

	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
		}
		else
		{
		 'Part inserted into the database';
			
			
			header("refresh:10; url=http://lamp.cse.fau.edu/~CEN4010_S2018g03/FAUOWLS/Test2/Add_Part5.php");
		}
	}
?>
</div>


<!-- InstanceEndEditable -->
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>
