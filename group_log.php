<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$a1 = "SELECT * FROM tblhistory WHERE username!='eyestrain' ORDER BY fname,gtype ASC";
	$a2 = mysql_query($a1);
	
	if(isset($_POST['btnClr'])) {
		if("ClearAll"==$_POST['btnClr']) {
			echo("
				<script>
				alert('All record successfully removed!');
				</script>
			");
			$a1 = "DELETE FROM tblhistory WHERE username!='eyestrain'";
			$a2 = mysql_query($a1);
		}
	}
	$a1 = "SELECT * FROM tblhistory WHERE username!='eyestrain' ORDER BY fname,gtype ASC";
	$a2 = mysql_query($a1);
?>

<html>
<head>
<title>Group Log</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_group_log.css" />
<script type="text/javascript">
	function chkClr() {
		var x = confirm("Remove all this record?");
		if(x==true) {
			alert("Press OK for verification");
			return true;
		}
		else if(x==false) {
			alert("Operation cancelled");
			return false;
		}
	}
</script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="frmLog" id="frmLog" onsubmit="return chkClr();">
	<div id="header"><h2>History Log</h2></div>
	<div id="content">
	<table id="tbl1">
		<tr id="hed1">
			<td width="3%">#</td>
			<td width="40%">Fullname</td>
			<td width="20%">Date</td>
			<td width="20%">Time</td>
			<td width="15%">Group</td>
			<td width="3%">Role</td>
		</tr>
	
		<?php 
			$cntr=0;
			while($row=mysql_fetch_assoc($a2)) { 
			$cntr++;
		?>
		<tr id="linear">
			<td><?php echo $cntr;?></td>
			<td><?php echo $row['fname'].' '. $row['mname'].' '.$row['lname'];?></td>
			<td><?php echo $row['dater'];?></td>
			<td><?php echo $row['timer'];?></td>
			<td><?php echo $row['gtype'];?></td>
			<td><?php echo $row['role'];?></td>
		</tr>
		<?php } ?>
	</table>
	<table id="tbl2">
		<tr id="lowline">
			<td colspan="6" id="low">
			<input type="submit" name="btnClr" id="btnClr"  value="ClearAll">&nbsp;&nbsp;&nbsp;
			<a href="clearlog.php" style="text-decoration:none">
			<input type="button" value="&laquo;&nbsp;Back"></a>
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