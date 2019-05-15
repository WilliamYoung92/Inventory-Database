<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Admin_home.dwt" codeOutsideHTMLIsLocked="false" -->
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
<div class="page">Admin &gt;Kit Creation</div>
<!-- InstanceEndEditable -->
<p>&nbsp;</p>
<!-- InstanceBeginEditable name="EditRegion1" -->
<p>Enter the main part number for the kit.</p><br />
<form action="Insert_kit6.php" method="post">
<table width="200" border="1">
  <tr>
    <td>Main Part Number:</td>
  </tr>
  <tr>
    <td><input type="text" name="item" /></td>
  </tr>
</table>
<p>Now, enter each part number, along with the quantity to inlcude with the main part.<br />
</p>
<table width="200" border="1">
  <tr>
    <td>Part Number</td>
    <td>Quantity</td>
  </tr>
  <tr>
    <td><input type="text" name="input1"/></td>
    <td><input type="integer" name="quantity1" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input2"/></td>
    <td><input type="integer" name="quantity2" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input3" /></td>
    <td><input type="integer" name="quantity3"/></td>
  </tr>
  <tr>
    <td><input type="text" name="input4"/></td>
    <td><input type="integer" name="quantity4" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input5"/></td>
    <td><input type="integer" name="quantity5" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input6"/></td>
    <td><input type="integer" name="quantity6" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input7"/></td>
    <td><input type="integer" name="quantity7" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input8"/></td>
    <td><input type="integer" name="quantity8"/></td>
  </tr>
  <tr>
    <td><input type="text" name="input9" /></td>
    <td><input type="integer" name="quantity9" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input10"/></td>
    <td><input type="integer" name="quantity10" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input11"/></td>
    <td><input type="integer" name="quantity11" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input12"/></td>
    <td><input type="integer" name="quantity12" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input13"/></td>
    <td><input type="integer" name="quantity13" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input14"/></td>
    <td><input type="integer" name="quantity14" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input15"/></td>
    <td><input type="integer" name="quantity15" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input16"/></td>
    <td><input type="integer" name="quantity16" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input17"/></td>
    <td><input type="integer" name="quantity17" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input18"/></td>
    <td><input type="integer" name="quantity18" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input19"/></td>
    <td><input type="integer" name="quantity19" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input20"/></td>
    <td><input type="integer" name="quantity20" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input21"/></td>
    <td><input type="integer" name="quantity21" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input22"/></td>
    <td><input type="integer" name="quantity22" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input23"/></td>
    <td><input type="integer" name="quantity23" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input24"/></td>
    <td><input type="integer" name="quantity24" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input25"/></td>
    <td><input type="integer" name="quantity25" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input26"/></td>
    <td><input type="integer" name="quantity26" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input27"/></td>
    <td><input type="integer" name="quantity27" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input28"/></td>
    <td><input type="integer" name="quantity28" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input29"/></td>
    <td><input type="integer" name="quantity29" /></td>
  </tr>
  <tr>
    <td><input type="text" name="input30"/></td>
    <td><input type="integer" name="quantity30" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>
  <input type="submit" value="Create Kit" />
  <br />
  </form>
</p>
<!-- InstanceEndEditable -->
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<script type="text/javascript">
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>
