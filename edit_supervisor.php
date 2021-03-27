<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$a1 = $_GET['id1'];
	$a2 = $_GET['id2'];
	
	// Fetching data of tbluser
	$b1 = "SELECT * FROM tbluser WHERE id='$a1'";
	$b2 = mysql_query($b1);
	$b3 = mysql_fetch_object($b2);
	
	// Fetching data of tblsup
	$c1 = "SELECT * FROM tblsup WHERE ctrlnum='$a1'";
	$c2 = mysql_query($c1);
	$c3 = mysql_fetch_object($c2);
?>

<html>
<head>
<title>Edit Supervisor</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_edit_supervisor.css" />
<script type="text/javascript" src="impress/edit_sup_check.js"></script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="edtSup" id="edtSup" enctype="multipart/form-data" action="edit_supervisor_verify.php" onsubmit="return supchk();">
	<div id="header">Edit Profile</div>
	<div id="content">
	<table>
		<tr>
			<td>ID:&nbsp;</td>
			<td><input type="text" name="txtId" id="txtId" size="10" value="<?php echo $b3->id?>" 
			     autocomplete="off" onfocus="onClr('Id');" onblur="ofClr('Id');" readonly></td>
		</tr>
		<tr>
			<td>EMP #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="10" value="<?php echo $c3->empnum;?>" 
				 autocomplete="off" onfocus="onClr('Emp');" onblur="ofClr('Emp');" readonly></td>
		</tr>
		<tr>
			<td>Username:&nbsp;</td>
			<td><input type="text" name="txtUsr" id="txtUsr" size="30" value="<?php echo $b3->username;?>" 
				 autocomplete="off" onfocus="onClr('Usr');" onblur="ofClr('Usr');"></td>
		</tr>
		<tr>
			<td>Last Name:&nbsp;</td>
			<td><input type="text" name="txtLnm" id="txtLnm" size="30" value="<?php echo $b3->lname;?>"
				 autocomplete="off" onfocus="onClr('Lnm');" onblur="ofClr('Lnm');" ></td>
		</tr>
		<tr>
			<td>Middle Name:&nbsp;</td>
			<td><input type="text" name="txtMnm" id="txtMnm" size="30" value="<?php echo $b3->mname;?>"
				 autocomplete="off" onfocus="onClr('Mnm');" onblur="ofClr('Mnm');" ></td>
		</tr>
		<tr>
			<td>First Name:&nbsp;</td>
			<td><input type="text" name="txtFnm" id="txtFnm" size="30" value="<?php echo $b3->fname;?>"
				 autocomplete="off" onfocus="onClr('Fnm');" onblur="ofClr('Fnm');" ></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="text" name="txtHrf" id="txtHrf" size="30" value="<?php echo "portrait/" . $b3->pichref;?>"
				 autocomplete="off" onfocus="onClr('Hrf');" onblur="ofClr('Hrf');" readonly></td>
		</tr>
		<tr>
			<td>New Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="17" autocomplete="off"
				 onfocus="onClr('Fle');" onblur="ofClr('Fle');" ></td>
		</tr>
		<tr>
			<td>Email:&nbsp;</td>
			<td><input type="text" name="txtEml" id="txtEml" size="30" value="<?php echo $c3->email;?>"
				  autocomplete="off" onfocus="onClr('Eml');" onblur="ofClr('Eml');" ></td>
		</tr>
		<tr>
			<td>Status:&nbsp;</td>
			<td><input type="text" name="txtSta" id="txtSta" size="30" value="<?php echo $c3->status;?>"
				 autocomplete="off" onfocus="onClr('Sta');" onblur="ofClr('Sta');" ></td>
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