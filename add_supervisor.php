<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {

?>
<html>
<head>
<title>Add Supervisor</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_add_operator.css" />
<script language="javascript" src="impress/checker_sup.js"></script>
</head>
<body>
	<form method="POST" name="f2" id="f2" enctype="multipart/form-data" action="add_supervisor_verify.php" onsubmit="return checkSup();">
	<div id="wraper">
	<div id="header">New Supervisor</div>
	<div id="content">
	<table>
		<tr>
			<td>First name:&nbsp;</td>
			<td><input type="text" name="txtFnm" id="txtFnm" size="32" autocomplete="off" 
				 onfocus="colorON('Fnm');" onblur="colorOFF('Fnm');" /></td>
		</tr>
		<tr>
			<td>Middle name:&nbsp;</td>
			<td><input type="text" name="txtMnm" id="txtMnm" size="32" autocomplete="off"
				 onfocus="colorON('Mnm');" onblur="colorOFF('Mnm');" /></td>
		</tr>
		<tr>
			<td>Last name:&nbsp;</td>
			<td><input type="text" name="txtLnm" id="txtLnm" size="32" autocomplete="off"
				 onfocus="colorON('Lnm');" onblur="colorOFF('Lnm');" /></td>
		</tr>
		<tr>
			<td>Username:&nbsp;</td>
			<td><input type="text" name="txtUsr" id="txtUsr" size="32" autocomplete="off"
				 onfocus="colorON('Usr');" onblur="colorOFF('Usr');" /></td>
		</tr>
		<tr>
			<td>Password:&nbsp;</td>
			<td><input type="password" name="txtPwd" id="txtPwd" size="32" autocomplete="off"
				 onfocus="colorON('Pwd');" onblur="colorOFF('Pwd');" /></td>
		</tr>
		<tr>
			<td>Email:&nbsp;</td>
			<td><input type="text" name="txtEml" id="txtEml" size="32" autocomplete="off"
				 onfocus="colorON('Eml');" onblur="colorOFF('Eml');" /></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="27"
				 onfocus="colorON('Fle');" onblur="colorOFF('Fle');" /></td>
		</tr>
		<tr>
			<td>Employee #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="10" autocomplete="off"
				 onfocus="colorON('Emp');" onblur="colorOFF('Emp');" /></td>
		</tr>
		<tr>
			<td>Status:&nbsp;</td>
			<td>
				<select name="txtSta" id="txtSta" size="1" onfocus="colorON('Sta')"; onblur="colorOFF('Sta');" >
				<option>---</option>
				<option>Active</option>
				<option>In-Active</option>
				<option>Resign</option>
				<option>Suspended</option>
				<option>AWOL</option>
				<option>Sickleave</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Group type:&nbsp;</td>
			<td><input type="text" name="txtGrp" id="txtGrp" size="10" value="Supervisor" readonly
				 onfocus="colorON('Grp');" onblur="colorOFF('Grp');" /></td>
		</tr>
		<tr>
			<td>Role:&nbsp;</td>
			<td><input type="text" name="txtRol" id="txtRol" size="10" value="5" readonly
				 onfocus="colorON('Rol');" onblur="colorOFF('Rol');" /></td>
		</tr>
		<tr id="bots">
			<td colspan="2">
				<a href="transact.php" style="text-decoration:none">
				<input type="button" name="btnBck" id="btnBck" value="&laquo;&nbsp;Back"></a>
				<input type="submit" name="btnSnd" id="btnSnd" value="Send">
				<input type="button" name="btnClr" id="btnClr" value="Clear" onclick="wiper();">
			</td>
		</tr> 
	</table>
	</div>
	<div id="footer">Programmer: Eyestrain</div>
	</div>
	</form>
</body>
</html>
<?php
	}
else {
	header("location:login.php");
}
?>