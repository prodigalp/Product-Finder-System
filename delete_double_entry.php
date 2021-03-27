<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$id = $_GET['id'];
	# Checking if value is numeric
	if(!is_numeric($id)) {
		echo("
			<script type='text/javascript'>
			alert('Data is not a number!');
			window.location='double_entry.php';
			</script>
		");
	}
	if(isset($_POST['btnYes'])) {
		if("Yes"==$_POST['btnYes']) {
			$q1 = "DELETE FROM tblcurrent WHERE ctrlnum='$id'";
			mysql_query($q1);
			
			echo "<script type='text/javascript'>
				alert('Account Re-activated!');
				window.location='double_entry.php';
				</script>";
		}
	}
	if(isset($_POST['btnNo'])) {
		if("No"==$_POST['btnNo']) {
			echo "<script type='text/javascript'>
				alert('Operation cancelled!');
				window.location='double_entry.php';
				</script>";
		}
	}
		
?>
<html>
<head>
<title>Double Entry</title>
<link rel="stylesheet" type="text/css" href="ornament/ornament_pwd_confirm.css"></link>
</head>
<body>
	<form name="form1" id="form1" method="POST">
	<div id="wraper">
	<div id="header">Confirmation!!</div>
		<div id="content">
			<table>
				<tr>
					<td colspan="2">Unlock this account?</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="btnYes" id="btnYes" value="Yes">
						<input type="submit" name="btnNo" id="btnNo" value="No">
					</td>
				</tr>
			</table>
		</div>
	</div>
	</form>
</body>
</html>


<?php
	}
	else {
	header("location:index.php");
}
?>
	