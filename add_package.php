<?php
	session_start();
	if($_SESSION['rol']=='9'  || $_SESSION['rol']=='5') {
?>
<html>
<head>
<title>New Packaging</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_add_operators.css" />
</head>
<body>
	<form method="POST" name="f7" id="f7" enctype="multipart/form-data" action="add_package_verify.php" onsubmit="return checkPack();">
	<div id="wraper">
	<div id="header">Product Packaging</div>
	<div id="content">
	<table>
		<tr>
			<td>Product code:&nbsp;</td>
			<td><input type="text" name="txtPro" id="txtPro" size="32" autocomplete="off"></td>
		</tr>
		<tr>
			<td>Number of Rows:&nbsp;</td>
			<td>
	</table>
	
	
	
	</div>
	</div>
	</form>
</body>
</html>

<?php
	}
else {
	header("location:login.php");
}
?>