<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4') {
?>

<html>
<head>
<title>Transactions</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_transact.css" />
</head>
<body>
	<div id="wraper">
	<div id="header">Transactions</div>
	<div id="content">
	<ul id="employ">
		<?php require("transact_link.php");?>
	</ul>
	<div id="reset"></div>
	</div>
	<div id="footer">
	<a href="sindex.php" style="color:#FFF;text-decoration:none;">&laquo;&nbsp;Back<a/></div>
	</div>
</body>
</html>
<?php
	}
else {
	header("location:login.php");
}
?>