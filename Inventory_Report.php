<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Admin_home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Inventory Report</title>
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
<div class="page">Admin &gt; Inventory Report</div>
<!-- InstanceEndEditable -->
<p>&nbsp;</p>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="body">          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Perry Part #</th>
                  <th>Short Description</th>
                  <th>Long Description</th>
                  <th>Location In Lab</th>
                  <th>Quantity</th>
                  <th>Purchase Or Rent</th>
                  <th>Retail Price</th>
                  <th>Retail Price Promo</th>
                  <th>Retail Markup</th>
                  <th>Jobber Price</th>
                  <th>Jobber Markup</th>
                  <th>Bulk Price</th>
                  <th>Bulk Markup</th>
                  <th>Cost To Replace</th>
                  <th>Cost Average</th>
                  <th>Edit/Delete</th>
                </tr>
              </thead>
              <tbody>
            
<?php
//connect to db
$mysqli = NEW MySQLi("localhost", "CEN4010_S2018g03", "cen4010_s2018", "CEN4010_S2018g03");
$resultSet = $mysqli->query("SELECT * FROM Inventory");
while($row = mysqli_fetch_array($resultSet)){
    echo "<tr>";
    echo "<td>" . $row['perry_part_num'] . "</td>";
    echo "<td>" . $row['short_description'] . "</td>";
    echo "<td>" . $row['long_description'] . "</td>";
    echo "<td>" . $row['location_in_lab'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['purchase_or_rent'] . "</td>";
    echo "<td>" . $row['retail_price'] . "</td>";
    echo "<td>" . $row['retail_price_promo'] . "</td>";
    echo "<td>" . $row['retail_markup'] . "</td>";
    echo "<td>" . $row['jobber_price'] . "</td>";
    echo "<td>" . $row['jobber_markup'] . "</td>";
    echo "<td>" . $row['bulk_price'] . "</td>";
    echo "<td>" . $row['bulk_markup'] . "</td>";
    echo "<td>" . $row['cost_to_replace'] . "</td>";
    echo "<td>" . $row['cost_avg'] . "</td>";
    echo "<td>" . "<button type='button'>Edit</button>" . "<button type='button'>Delete</button>" . "</td>";
    echo "</tr>";
}
?>    
            </tbody>
            </table></div>
<!-- InstanceEndEditable -->
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>
