<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$sid = $_GET['id'];
	
	$a1 = "SELECT * FROM tbluser WHERE id='$sid'";
	$a2 = mysql_query($a1);
	$a3 = mysql_fetch_assoc($a2);
	$a4 = $a3['gtype']; 
	
	
	# Edit supervisor profile
	if($a4=='Supervisor') {
		header("location:edit_supervisor.php?id1=$sid&id2=$a4");
	}
	# Edit Trainor's profile 
	else if($a4=='Trainor') {
		header("location:edit_trainor.php?id1=$sid&id2=$a4");
	}
	# Edit Reliever's profile
	else if($a4=='Reliever') {
		header("location:edit_reliever.php?id1=$sid&id2=$a4");
	}
	else if($a4=='Operator') {
		header("location:edit_operator.php?id1=$sid&id2=$a4");
	}
	else if($a4=='Agency') {
		header("location:edit_agency.php?id1=$sid&id2=$a4");
	}
	else {
		header("location:userlist.php");
	}
?>

<html>
<head>
<title>Edit User Profile</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_userlist_edit.css" />
</head>
<body>
	<div id="wraper">
	<div id="header">Edit Profile</div>
	<div id="content">
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