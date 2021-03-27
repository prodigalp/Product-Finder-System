<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
	   $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1') {
	   
	   require("config.php");
	   $usr = $_SESSION['usr'];
	   $fnm = $_SESSION['fnm'];
	   
	   $a1 = "SELECT * FROM tblhistory WHERE username='$usr' && fname='$fnm' ORDER BY timer DESC";
	   $a2 = mysql_query($a1);  
?>
<html>
<head>
<title>View Previous Log</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_viewlog.css" />
<script language="javascript">
	function verify() {
		var ans = confirm("Do you really want to delete this record?");
		if(ans==true) {
			alert("Press OK for verification");
			return true;
		}
		
		if(ans==false) {
			alert("Operation cancelled!");
			return false;
		}
	}
</script>

</head>
<body>
	<div id="wraper">
	<form method="POST" name="formView" id="formView" onsubmit="return verify()">
	<div id="header">History logged</div>
	<div id="content">
	<table>
		<tr id="hed1">
			<td width="3%">#</td>
			<td width="35%">Fullname</td>
			<td width="15%">Username</td>
			<td width="15%">Date</td>
			<td width="12%">Time</td>
			<td width="3%">Role</td>
		</tr>
		
		<?php
			$cntr=0;
			while($row=mysql_fetch_assoc($a2)) {
			$cntr++;
		?>
			<tr id="hed2">
				<td><?php echo $cntr;?></td>
				<td><?php echo $row['fname'].' '. $row['mname'].' '. $row['lname']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['dater']; ?></td>
				<td><?php echo $row['timer']; ?></td>
				<td><?php echo $row['role']; ?></td>
			</tr>
		<?php
			}
		?>
	</table>
	Total entry found:&nbsp;<?php echo $cntr;?>
	<table id="t2">
		<tr>
		<td>
			<a href="sindex.php" style="text-decoration:none;">
				<input type="button" value="&laquo;&nbsp;Back">
			</a>
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