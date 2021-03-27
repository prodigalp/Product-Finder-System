<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']==5) {
	require("config.php");
	
	$sid = $_GET['id'];
	$grp = $_GET['id2'];
	
	function mainDel($x) {	
		$a1 = "DELETE FROM tbluser WHERE id='$x'";
		mysql_query($a1);
	}
			
	function mesLuck() {
		echo("
		<script type='text/javascript'>
		alert('Record successfully deleted!');
		window.location='userlist.php';
		</script> ");
	}
			
	function mesFail() {
		echo("
		<script type='text/javascript'>
		alert('Operation cancelled!');
		window.location='userlist.php';
		</script>
		");
	}
	
	if(isset($_POST['btnYes'])) {
		if("Yes"==$_POST['btnYes']) {
			if($grp=='Supervisor') {
				mainDel($sid);
				$a2 = "DELETE FROM tblsup WHERE ctrlnum='$sid'";
				mysql_query($a2);
				mesLuck();
			}
			else if($grp=='Trainor') {
				mainDel($sid);
				$a2 = "DELETE FROM tbltray WHERE ctrlnum='$sid'";
				mysql_query($a2);
				mesLuck();
			}
			else if($grp=='Reliever') {
				mainDel($sid);
				$a2 = "DELETE FROM tblrel WHERE ctrlnum='$sid'";
				mysql_query($a2);
				mesLuck();
			}
			else if($grp=='Operator') {
				mainDel($sid);
				$a2 = "DELETE FROM tbloptr WHERE ctrlnum='$sid'";
				mysql_query($a2);
				mesLuck();
			}
			else if($grp=='Agency') {
				mainDel($sid);
				$a2 = "DELETE FROM tblagency WHERE ctrlnum='$sid'" ;
				mysql_query($a2);
				mesLuck();
			}
			else mesFail(); 
		}	
	}
	
	if(isset($_POST['btnNo'])) {
		if("No"==$_POST['btnNo'])  
			mesFail(); 
	}
?>

<html>
<head>
<title>Account deletion</title>
<script type="text/javascript" scr="impress/del_confirm.js"></script>
<link rel="stylesheet" type="text/css" href="ornament/ornament_userlist_delete.css" />
</head>
<body>
	<div id="wraper">
	<form method="POST" name="frmDel" id="frmDel" onsubmit="mesCon();">
	<div id="header">WARNING!</div>
	<div id="content">
	<table>
		<tr>
			<td colspan="2">Do you really want to delete this record?</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btnNo"  id="btnNo" value="No">
				<input type="submit" name="btnYes" id="btnYes" value="Yes">
			</td>
		</tr>
	</table>
	</div>
	</form>
	</div>
</body>
</html>

<?php
	}
else {
	header("location:login.php");
}
?>