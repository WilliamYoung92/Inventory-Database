<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="adminportal/Templates/Admin_home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
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
        <li><a href="Edit_Inventory.php">Edit Inventory</a></li>
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
<div class="page">Admin &gt; Home</div>
<!-- InstanceEndEditable -->
<p>&nbsp;</p>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="body"><?php
//Connection for database
$con = mysqli_connect("localhost", "CEN4010_S2018g03", "cen4010_s2018","CEN4010_S2018g03");//Connection to datatbase
//Select Database
$sql = "SELECT * FROM Inventory";
$result = $con->query($sql);
?>
<!doctype html>
<html>
<body>
<h1 align="center">Edit Invenotry</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>perry_part_num</th>
<th>short_description</th>
<th>long_description</th>
<th>location_in_lab</th>
<th>quantity</th>
<th>purchase_or_rent</th>
<th>retail_price</th>
<th>retail_price_promo</th>
<th>retail_markup</th>
<th>jobber_price</th>
<th>jobber_markup</th>
<th>bulk_price</th>
<th>bulk_markup</th>
<th>cost_to_replace</th>
<th>cost_average</th>
<th>category_code</th>
</tr>


<?php
//Fetch Data form database
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
 <td><?php echo $row['perry_part_num']; ?></td>
 <td><?php echo $row['short_description']; ?></td>
 <td><?php echo $row['long_description']; ?></td>
 <td><?php echo $row['location_in_lab']; ?></td>
 <td><?php echo $row['quantity']; ?></td>
 <td><?php echo $row['purchase_or_rent']; ?></td>
 <td><?php echo $row['retail_price']; ?></td>
  <td><?php echo $row['retail_price_promo']; ?></td>
 <td><?php echo $row['retail_markup']; ?></td>
 <td><?php echo $row['jobber_price']; ?></td>
 <td><?php echo $row['jobber_markup']; ?></td>
 <td><?php echo $row['bulk_price']; ?></td>
 <td><?php echo $row['bulk_markup']; ?></td>
 <td><?php echo $row['cost_to_replace']; ?></td><br>
 <td><?php echo $row['cost_avg']; ?></td>
 <td><?php echo $row['category_code']; ?></td>
 <!--Edit option -->
 <td><a href="Edit.php?edit_id=<?php echo $row['perry_part_num']; ?>" alt="edit" >Edit</a></td>
 </tr>
 
 <?php
 }
}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html></div>
<!-- InstanceEndEditable -->
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>
