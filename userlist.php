<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	
	require("config.php");
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$emp = $_POST['txtUname'];
			$usr = $_POST['pckUsr'];
			
			$a1 = "SELECT * FROM tbluser WHERE username='$emp' && gtype='$usr'";
			$a2 = mysql_query($a1);
			$a3 = mysql_num_rows($a2);
			
			# If there is no matched
			if($a3<=0) {
				die("
					<script type='text/javascript'>
					alert('Either username or usergroup is not found in the database!');
					window.location='userlist.php';
					</script>
				");
			}
			# if there is a matched
			else {
				$b1 = "SELECT * FROM tbluser WHERE username='$emp' && gtype='$usr'";
				$b2 = mysql_query($b1);
				
				$c1 = "SELECT id FROM tbluser WHERE username='$emp' && gtype='$usr'";
				$c2 = mysql_query($c1);
				$c3 = mysql_fetch_array($c2);
				$c4 = $c3['id'];
				
				if($usr=='Agency') {
					$d1 = "SELECT * FROM tblagency WHERE ctrlnum='$c4'";
					$d2 = mysql_query($d1);
				}
				else if($usr=='Operator') {
					$d1 = "SELECT * FROM tbloptr WHERE ctrlnum='$c4'";
					$d2 = mysql_query($d1);
				}
				else if($usr=='Reliever') {
					$d1 = "SELECT * FROM tblrel WHERE ctrlnum='$c4'";
					$d2 = mysql_query($d1);
				}
				else if($usr=='Trainor') {
					$d1 = "SELECT * FROM tbltray WHERE ctrlnum='$c4'";
					$d2 = mysql_query($d1);
				}
				else if($usr=='Supervisor') {
					$d1 = "SELECT * FROM tblsup WHERE ctrlnum='$c4'";
					$d2 = mysql_query($d1);
				}
			}
		}
	}
	else {
		$a1 = "SELECT * FROM tbluser WHERE username='__' && gtype='__'";
		$a2 = mysql_query($a1);
		
		$b1 = "SELECT * FROM tbluser WHERE username='__' && gtype='__'";
		$b2 = mysql_query($b1);
		
		$d1 = "SELECT * FROM tblagency WHERE ctrlnum='__'";
		$d2 = mysql_query($d1);
		
		$d1 = "SELECT * FROM tbloptr WHERE ctrlnum='__'";
		$d2 = mysql_query($d1);
					
		$d1 = "SELECT * FROM tblrel WHERE ctrlnum='__'";
		$d2 = mysql_query($d1);
		
		$d1 = "SELECT * FROM tbltray WHERE ctrlnum='__'";
		$d2 = mysql_query($d1);
		
		$d1 = "SELECT * FROM tblsup WHERE ctrlnum='__'";
		$d2 = mysql_query($d1);
	}
?>

<html>
<head>
<title>User Control</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_userlist.css" />
<script type="text/javascript" src="impress/checker_list.js"></script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="usrCon" id="usrCon" onsubmit="return inspect();">
	<div id="header">User Control</div>
	<div id="content">
	<table id="upper">
		<tr>
			<td>User Group:&nbsp;</td>
			<td><select name="pckUsr" id="pckUsr" size="1">
				<option>---</option>
				<option>Agency</option>
				<option>Operator</option>
				<option>Reliever</option>
				<option>Trainor</option>
				<option>Supervisor</option>
				</select>
			</td>
			<td><input type="text" name="txtUname" id="txtUname" size="30" autocomplete="off" placeholder="Enter Username"></td>
			<td><input type="submit" name="btnSnd" id="btnSnd" value="Send"></td>
			<td><input type="button" name="btnRst" id="btnRst" value="Reset" onclick="wiper();">
		</tr>
	</table>
	
	<table id="lower">
		<tr	id="lhed">
			<td>#</td>
			<td>NAME</td>
			<td>EMP#</td>
			<td>OPTIONS</td>
		</tr>
		
		<?php 
		$cntr=0;
		while($row = mysql_fetch_assoc($b2)) {
		while($low = mysql_fetch_assoc($d2)) {
		$cntr++;
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td id="namer"><?php echo $row['fname'] .' '. $row['mname'].' '. $row['lname'];?></td>
			<td><?php echo $low['empnum'];?></td>
			<td id="zeal">
				<?php require("userlist_link.php");?>
			</td>
		</tr>
		
		<?php 
		}
		}
		?>
	</table>
	<?php echo ("<center>Total result found: $cntr </center>");?>	

	
	</div>
	
	<div id="reset"></div>
	<div id="footer">
	<a href="settings.php">
	&laquo&nbsp;Back
	</a></div>
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