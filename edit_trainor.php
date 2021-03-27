<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$sid = $_GET['id1'];
	$grp = $_GET['id2'];
	
	# Fetching data of tbluser;
	$a1 = "SELECT * FROM tbluser WHERE id='$sid'";
	$a2 = mysql_query($a1);
	$a3 = mysql_fetch_object($a2);
	
	# Fetching data of tbltray;
	$b1 = "SELECT * FROM tbltray WHERE ctrlnum='$sid'";
	$b2 = mysql_query($b1);
	$b3 = mysql_fetch_object($b2);
?>
<html>
<head>
<title>Trainor's Profile</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_edit_trainor.css" />
<script type="text/javascript" src="impress/edt_try_check2.js"></script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="edttray" id="edttray" enctype="multipart/form-data" action="edit_trainor_verify.php" onsubmit="return try_chk();" >
	<div id="header">Trainor's profile</div>
	<div id="content">
	<table>
		<tr>
			<td>ID:&nbsp;</td>
			<td><input type="text" name="txtIds" id="txtIds" size="10" autocomplete="off" value="<?php echo $a3->id;?>" 
			readonly onfocus="colorOn('Ids');" onblur="colorOf('Ids');"></td>
		</tr>
			<tr>
			<td>EMP #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="10" autocomplete="off" value="<?php echo $b3->empnum;?>" 
			readonly onfocus="colorOn('Emp');" onblur="colorOf('Emp');"></td>
		</tr>
		<tr>
			<td>Username:&nbsp;</td>
			<td><input type="text" name="txtUsr" id="txtUsr" size="28" autocomplete="off" value="<?php echo $a3->username?>" 
			onfocus="colorOn('Usr');" onblur="colorOf('Usr');"></td>
		</tr>
		<tr>
			<td>First Name:&nbsp;</td>
			<td><input type="text" name="txtFnm" id="txtFnm" size="28" autocomplete="off" value="<?php echo $a3->fname;?>"
			onfocus="colorOn('Fnm');" onblur="colorOf('Fnm');"></td>
		</tr>
		<tr>
			<td>Middle Name:&nbsp;</td>
			<td><input type="text" name="txtMnm" id="txtMnm" size="28" autocomplete="off" value="<?php echo $a3->mname;?>"
			onfocus="colorOn('Mnm');" onblur="colorOf('Mnm');"></td>
		</tr>
		<tr>
			<td>Last Name:&nbsp;</td>
			<td><input type="text" name="txtLnm" id="txtLnm" size="28" autocomplete="off" value="<?php echo $a3->lname;?>"
			onfocus="colorOn('Lnm');" onblur="colorOf('Lnm');"></td>
		</tr>
		<tr>
			<td>Address:&nbsp;</td>
			<td><input type="text" name="txtAdr" id="txtAdr" size="28" autocomplete="off" value="<?php echo $b3->address;?>"
			onfocus="colorOn('Adr');" onblur="colorOf('Adr');"></td>
		</tr>
		<tr>
			<td>Department:&nbsp;</td>
			<td><input type="text" name="txtDep" id="txtDep" size="28" autocomplete="off" value="<?php echo $b3->depart;?>"
			onfocus="colorOn('Dep');" onblur="colorOf('Dep');"></td>
		</tr>
		<tr>
			<td>Gender:&nbsp;</td>
			<td><input type="text" name="txtGdr" id="txtGdr" size="28" autocomplete="off" value="<?php echo $b3->gender;?>"
			onfocus="colorOn('Gdr');" onblur="colorOf('Gdr');"></td>
		</tr>
		<tr>
			<td>Birthday:&nbsp;</td>
			<td><input type="text" name="txtBdy" id="txtBdy"  size="28" autocomplete="off" value="<?php echo $b3->bday;?>"
			onfocus="colorOn('Bdy');" onblur="colorOf('Bdy');"></td>
		</tr>
		<tr>
			<td>Cell #:&nbsp;</td>
			<td><input type="text" name="txtCel" id="txtCel" size="28" autocomplete="off" value="<?php echo $b3->cellnum;?>"
			onfocus="colorOn('Cel');" onblur="colorOf('Cel');"></td>
		</tr>
		<tr>
			<td>Status:&nbsp;</td>
			<td><input type="text" name="txtSta" id="txtSta" size="28" autocomplete="off" value="<?php echo $b3->status;?>"
			onfocus="colorOn('Sta');" onblur="colorOf('Sta');"></td>
		</tr>
		<tr>
			<td>Date hired:&nbsp;</td>
			<td><input type="text" name="txtDhr" id="txtDhr" size="28" autocomplete="off" value="<?php echo $b3->dhired;?>"
			onfocus="colorOn('Dhr');" onblur="colorOf('Dhr');"></td>
		</tr>
		<tr>
			<td>Section:&nbsp;</td>
			<td><input type="text" name="txtSec" id="txtSec" size="28" autocomplete="off" value="<?php echo $b3->section;?>"
			onfocus="colorOn('Sec');" onblur="colorOf('Sec');"></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="text" name="txtHrf" id="txtHrf" size="28" autocomplete="off" value="<?php echo "portrait/".$a3->pichref;?>" readonly
			onfocus="colorOn('Hrf');" onblur="colorOf('Hrf');"></td>	
		</tr>
		<tr>
			<td>New Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="21"
			onfocus="colorOn('Fle');" onblur="colorOf('Fle');"></td>
		</tr>
		<tr id="bots">
			<td colspan="2">
			<a href="userlist.php" style="text-decoration:none"><input type="button" value="&laquo;&nbsp;Back"></a>
			<input type="submit" name="btnUpd" id="btnUpd" value="Update">
			</td>
		</tr>
	</table>
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