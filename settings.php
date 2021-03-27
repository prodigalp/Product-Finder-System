<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4') {
?>
<html>
<head>
<title>Settings</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_settings.css" />
</head>
<body>
	<div id="wraper">
	<div id="header">Settings</div>
	<div id="content">
	<ul id="dine">
		<?php require("settings_link.php"); ?>
	</ul>
	</div>
	
	<div id="reset"></div>
	<div id="footer">
		<a href="sindex.php" style="text-decoration:none;">
		&laquo;&nbsp;Back
		</a>
	</div>
	
	</div>
</body>
</html>
<?php
	}
else {
	header("location:login.php");
}
?>