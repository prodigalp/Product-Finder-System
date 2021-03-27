<?php
session_start();
if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
   $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1' ) {
	
require("config.php");
	
$a1 = $_SESSION['fnm'];
$a2 = $_SESSION['pwd'];
$a3 = $_SESSION['ids'];
	
$x1 = "DELETE FROM tblcurrent WHERE fname='$a1' && password='$a2' && ctrlnum='$a3'";
mysql_query($x1);
	
unset($_SESSION['usr']);
unset($_SESSION['pwd']);
unset($_SESSION['fnm']);
unset($_SESSION['mnm']);
unset($_SESSION['lnm']);
unset($_SESSION['grp']);
unset($_SESSION['rol']);
unset($_SESSION['hrf']);
?>

<html>
<head>
<title>User Logout</title>
</head>
<body>

<?php echo "<b>". $a1. "</b>" ?>&nbsp;&nbsp;logout successfully<br>
<label><a href="login.php">Log-in Again</a></label></br>
</body>
</html>

<?php 
	}
else {
	header("location: login.php");
}
?>