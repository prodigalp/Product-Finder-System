<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$a1 = $_GET['id'];
	
	$b1 = "SELECT id,gtype,username FROM tbluser WHERE id='$a1'";
	$b2 = mysql_query($b1);
	$b3 = mysql_fetch_assoc($b2);
	$b4a = $b3['id'];
	$d2 = $b3['id'];
	$b4b = $b3['gtype'];
	$b4c = $b3['username'];
	
	// Fetching data of tbluser;
	$c1 = "SELECT * FROM tbluser WHERE id='$b4a'";
	$c2 = mysql_query($c1);
	$c3 = mysql_fetch_assoc($c2);
	
	$fnm = $c3['fname'];
	$lnm = $c3['lname'];
	$mnm = $c3['mname'];
	$pic = $c3['pichref'];
	$grp = $c3['gtype'];
	$rol = $c3['role'];
	$usr = $c3['username'];
	$b2 = $usr;
	
	if($b4b=='Agency') {
		$d1 = "SELECT * FROM tblagency WHERE ctrlnum='$b4a'";
		$d2 = mysql_query($d1);
		
		# Fetching data of tblagency;
		$d3 = mysql_fetch_assoc($d2);
		$adr = $d3['address'];
		$bdy = $d3['bday'];
		$cel = $d3['cellnum'];
		$dpt = $d3['depart'];
		$dhr = $d3['dhired'];
		$emp = $d3['empnum'];
		$gdr = $d3['gender'];
		$sec = $d3['section'];
		$sta = $d3['status'];
		$eoc = $d3['eoc'];
		$eml = '---';
	}
	else if($b4b=='Operator') {
		$d1 = "SELECT * FROM tbloptr WHERE ctrlnum='$b4a'";
		$d2 = mysql_query($d1);
		
		# Fetching data of tbloptr;
		$d3 = mysql_fetch_assoc($d2);
		$emp = $d3['empnum'];
		$sta = $d3['status'];
		$adr = $d3['address']; 
		$bdy = $d3['bday'];
		$cel = $d3['cellnum'];
		$dpt = $d3['depart'];
		$dhr = $d3['dhired'];
		$gdr = $d3['gender'];
		$sec = $d3['section'];
		$eoc = '---';
		$eml = '---';
	}
	else if($b4b=='Trainor') {
		$d1 = "SELECT * FROM tbltray WHERE ctrlnum='$b4a'"; 
		$d2 = mysql_query($d1);
		
		# Fetching data of tbltray;
		$d3 = mysql_fetch_assoc($d2);
		$emp = $d3['empnum'];
		$sta = $d3['status'];
		$adr = $d3['address']; 
		$bdy = $d3['bday'];
		$cel = $d3['cellnum'];
		$dpt = $d3['depart'];
		$dhr = $d3['dhired'];
		$gdr = $d3['gender'];
		$sec = $d3['section'];
		$eoc = '---';
		$eml = '---';
	}
	else if($b4b=='Reliever') {
		$d1 = "SELECT * FROM tblrel WHERE ctrlnum='$b4a'";
		$d2 = mysql_query($d1);
		
		# Fetching data of tblrel;
		$d3 = mysql_fetch_assoc($d2);
		$emp = $d3['empnum'];
		$sta = $d3['status'];
		$adr = $d3['address']; 
		$bdy = $d3['bday'];
		$cel = $d3['cellnum'];
		$dpt = $d3['depart'];
		$dhr = $d3['dhired'];
		$gdr = $d3['gender'];
		$sec = $d3['section'];
		$eoc = '---';
		$eml = '---';
	}
	else if($b4b=='Supervisor') {
		$d1 = "SELECT * FROM tblsup WHERE ctrlnum='$b4a'";
		$d2 = mysql_query($d1);
		
		# Fetching data of tblsup
		$d3 = mysql_fetch_assoc($d2);
		$eml = $d3['email'];
		$emp = $d3['empnum'];
		$sta = $d3['status'];
		$adr = '---';
		$bdy = '---';
		$cel = '---';
		$dpt = '---';
		$dhr = '---';
		$gdr = '---';
		$sec = '---';
		$eoc = '---';
	}
	
?>

<html>
<head>
<title>Profiler</title>
<link rel="stylesheet" type="text/css" href="ornament/ornament_userlist_view.css" />
</head>
<body>
	<div id="wraper">
	<form method="POST" name="empView" id="empView">
	<div id="header">Personal Profile</div>
	<div id="content">
	<table id="sider">
		<tr>
			<td>Emp #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="30" value="<?php echo $emp;?>" readonly></td>
		</tr>
		<tr>
			<td>Name:&nbsp;</td>
			<td><input type="text" name="txtFul" id="txtFul" size="30" value="<?php echo $fnm .' '. $mnm .' ' .$lnm?>" readonly></td>
		</tr>
		<tr>
			<td>Address:&nbsp;</td>
			<td><input type="text" name="txtAdr" id="txtAdr" size="30" value="<?php echo $adr ;?>" readonly></td>
		</tr>
		<tr>
			<td>Birthday:&nbsp;</td>
			<td><input type="text" name="txtBdy" id="txtBdy" size="30" value="<?php echo $bdy;?>" readonly></td>
		</tr>
		<tr>
			<td>Gender:&nbsp;</td>
			<td><input type="text" name="txtGdr" id="txtGdr" size="30" value="<?php echo $gdr;?>" readonly></td>
		</tr>		
		<tr>
			<td>Cell #:&nbsp;</td>
			<td><input type="text" name="txtCel" id="txtCel" size="30" value="<?php echo $cel;?>" readonly></td>
		</tr>
		<tr>
			<td>Department:&nbsp;</td>
			<td><input type="text" name="txtDpt" id="txtDpt" size="30" value="<?php echo $dpt;?>" readonly></td>
		</tr>		
		<tr>
			<td>Section:&nbsp;</td>
			<td><input type="text" name="txtSec" id="txtSec" size="30" value="<?php echo $sec;?>" readonly></td>
		</tr>		
		<tr>
			<td>Date hired:&nbsp;</td>
			<td><input type="text" name="txtDhr" id="txtDhr" size="30" value="<?php echo $dhr;?>" readonly></td>
		</tr>		
		<tr>
			<td>Group:&nbsp;</td>
			<td><input type="text" name="txtGrp" id="txtGrp" size="30" value="<?php echo $grp?>" readonly></td>
		</tr>
		<tr>
			<td>Role:&nbsp;</td>
			<td><input type="text" name="txtRol" id="txtRol" size="30" value="<?php echo $rol;?>" readonly></td>
		</tr>
		<tr>
			<td>Status:&nbsp;</td>
			<td><input type="text" name="txtSta" id="txtSta" size="30" value="<?php echo $sta;?>" readonly></td>
		</tr>		
		<tr>
			<td>Email:&nbsp;</td>
			<td><input type="text" name="txtEml" id="txtEml" size="30" value="<?php echo $eml;?>" readonly></td>
		</tr>
		<tr>
			<td>E.O.C:&nbsp;</td>
			<td><input type="text" name="txtEoc" id="txtEoc" size="30" value="<?php echo $eoc;?>" readonly></td>
		</tr>
		</table>
	<div id="imagery">
		<img src="<?php echo 'portrait/'. $pic?>">
		<table id="lower">
			<tr>
				<td>
				<a href="userlist.php" style="text-decoration:none">
					<input type="button" value="&laquo&nbsp;Back">
				</a><br>
				<a href="sindex.php" style="text-decoration:none">
					<input type="button" value="Home">
				</a>
				</td>
			</tr>
		</table>
		
	</div>
	<div id="reset"></div>
	</div>
	</form>
	<div id="footer">Programmer: Eyestrain</div>
	</div>
</body>
</html>

<?php 
	}
else {
	header("location:login.php");
}
?>