<?php 
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$sid = $_GET['id1'];
	$grp = $_GET['id2'];
	
	$a1 = "SELECT * FROM tbluser WHERE id='$sid'";
	$a2 = mysql_query($a1);
	$a3 = mysql_fetch_object($a2);
	
	$b1 = "SELECT * FROM tblagency WHERE ctrlnum='$sid'";
	$b2 = mysql_query($b1);
	$b3 = mysql_fetch_object($b2);
?>
<html>
<head>
<title>Agencies Profile</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_edit_trainor.css" />
<script type="text/javascript" src="impress/edt_agency_chk.js"></script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="edtAgcy" id="edtAgcy" enctype="multipart/form-data" action="edit_agency_verify.php" onsubmit="return rel_chk();">
	<div id="header">Agencies Profile</div>
	<div id="content">
	<table>
		<tr>
			<td>ID:&nbsp;</td>
			<td><input type="text" name="txtIds" id="txtIds" size="28" autocomplete="off" value="<?php echo $a3->id;?>" readonly
			onfocus="onC('Ids');" onblur="ofC('Ids');"></td>
		</tr>
		<tr>
			<td>EMP #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="28"  value="<?php echo $b3->empnum;?>" readonly
			onfocus="onC('Emp');" onblur="ofC('Emp');"></td>
		</tr>
		<tr>
			<td>Username:&nbsp;</td>
			<td><input type="text" name="txtUsr" id="txtUsr" size="28" autocomplete="off" value="<?php echo $a3->username;?>"
			onfocus="onC('Usr');" onblur="ofC('Usr');"></td>
		</tr>
		<tr>
			<td>First Name:&nbsp;</td>
			<td><input type="text" name="txtFnm" id="txtFnm" size="28" autocomplete="off" value="<?php echo $a3->fname;?>"
			onfocus="onC('Fnm');" onblur="ofC('Fnm');"></td>
		</tr>
		<tr>
			<td>Middle Name:&nbsp;</td>
			<td><input type="text" name="txtMnm" id="txtMnm" size="28" autocomplete="off" value="<?php echo $a3->mname;?>"
			onfocus="onC('Mnm');" onblur="ofC('Mnm');"></td>
		</tr>
		<tr>
			<td>Last Name:&nbsp;</td>
			<td><input type="text" name="txtLnm" id="txtLnm" size="28" autocomplete="off" value="<?php echo $a3->lname;?>"
			onfocus="onC('Lnm');" onblur="ofC('Lnm');"></td>
		</tr>
		<tr>
			<td>Group:&nbsp;</td>
			<td><input type="text" name="txtGrp" id="txtGrp" size="28" autocomplete="off" value="<?php echo $a3->gtype;?>"
			onfocus="onC('Grp');" onblur="ofC('Grp');" readonly></td>
		</tr>
		<tr>
			<td>Address:&nbsp;</td>
			<td><input type="text" name="txtAdr" id="txtAdr" size="28" autocomplete="off" value="<?php echo $b3->address;?>"
			onfocus="onC('Adr');" onblur="ofC('Adr');"></td>
		</tr>
		<tr>
			<td>Department:&nbsp;</td>
			<td><input type="text" name="txtDep" id="txtDep" size="28" autocomplete="off" value="<?php echo $b3->depart;?>"
			onfocus="onC('Dep');" onblur="ofC('Dep');" readonly></td>
		</tr>
		<tr>
			<td>Gender:&nbsp;</td>
			<td><input type="text" name="txtGdr" id="txtGdr" size="28" autocomplete="off" value="<?php echo $b3->gender;?>"
			onfocus="onC('Gdr');" onblur="ofC('Gdr');"></td>
		</tr>
		<tr>
			<td>Birthday:&nbsp;</td>
			<td><input type="text" name="txtBdy" id="txtBdy" size="28" autocomplete="off" value="<?php echo $b3->bday;?>"
			onfocus="onC('Bdy');" onblur="ofC('Bdy');"></td>
		</tr>
		<tr>
			<td>Cell #:&nbsp;</td>
			<td><input type="text" name="txtCel" id="txtCel" size="28" autocomplete="off" value="<?php echo $b3->cellnum;?>"
			onfocus="onC('Cel');" onblur="ofC('Cel');"></td>
		</tr>
		<tr>
			<td>Status:&nbsp;</td>
			<td><input type="text" name="txtSta" id="txtSta" size="28" autocomplete="off" value="<?php echo $b3->status;?>"
			onfocus="onC('Sta');" onblur="ofC('Sta');"></td>
		</tr>
		<tr>
			<td>Date Hired:&nbsp;</td>
			<td><input type="text" name="txtHrd" id="txtHrd" size="28" autocomplete="off" value="<?php echo $b3->dhired;?>"
			onfocus="onC('Hrd');" onblur="ofC('Hrd');"></td>
		</tr>
		<tr>
			<td>E.O.C Date:&nbsp;</td>
			<td><input type="text" name="txtEoc" id="txtEoc" size="28" autocomplete="off" value="<?php echo $b3->eoc;?>"
			onfocus="onC('Eoc');" onblur="ofC('Eoc');"></td>
		</tr>
		<tr>
			<td>Section:&nbsp;</td>
			<td><input type="text" name="txtSec" id="txtSec" size="28" autocomplete="off" value="<?php echo $b3->section;?>" readonly
			onfocus="onC('Sec');" onblur="ofC('Sec');"></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="text" name="txtPic" id="txtPic" size="28" autocomplete="off" value="<?php echo "portrait/".$a3->pichref;?>" readonly
			onfocus="onC('Pic');" onblur="ofC('Pic');"></td>
			
		</tr>
		<tr>
			<td>New Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="20" onfocus="onC('Fle');" onblur="ofC('Fle');"></td>
		</tr>
		<tr>
			<td colspan="3" id="bots">
			<a href="userlist.php" style="text-decoration:none"><input type="button" value="&laquo&nbsp;Back"></a>
			<input type="submit" name="btnUpd" id="btnUpd" value="Update">
			</td>
		</tr>
	</table>
	</div>
	<div id="footer">Programmer: Eyestrain</div>
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