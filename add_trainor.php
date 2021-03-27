<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require('calendar/tc_calendar.php');
?>

<html>
<head>
<title>New Trainor</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_add_operator.css" />
<script language="javascript" src="calendar/calendar.js"></script>
<script language="javascript" src="impress/checker_tray.js"></script>
</head>
<body>
	<form method="POST" name="f5" id="f5" enctype="multipart/form-data" action="add_trainor_verify.php" onsubmit="return checkTray();">
	<div id="wraper">
	<div id="header">New Trainor</div>
	<div id="content">
	<table>
		<tr>
			<td>First name:&nbsp;</td>
			<td><input type="text" name="txtFnm" id="txtFnm" size="32" autocomplete="off"
				onfocus="cON('Fnm');" onblur="cOFF('Fnm');" /></td>
		</tr>
		<tr>
			<td>Middle name:&nbsp;</td>
			<td><input type="text" name="txtMnm" id="txtMnm" size="32" autocomplete="off"
				onfocus="cON('Mnm');" onblur="cOFF('Mnm');" /></td>
		</tr>
		<tr>
			<td>Last name:&nbsp;</td>
			<td><input type="text" name="txtLnm" id="txtLnm" size="32" autocomplete="off"
				onfocus="cON('Lnm');" onblur="cOFF('Lnm');" /></td>
		</tr>
		<tr>
			<td>Username:&nbsp;</td>
			<td><input type="text" name="txtUsr" id="txtUsr" size="32" autocomplete="off"
				onfocus="cON('Usr');" onblur="cOFF('Usr');" /></td>
		</tr>
		<tr>
			<td>Password:&nbsp;</td>
			<td><input type="password" name="txtPwd" id="txtPwd" size="32" autocomplete="off"
				onfocus="cON('Pwd');" onblur="cOFF('Pwd');" /></td>
		</tr>
		<tr>
			<td>Address:&nbsp;</td>
			<td><input type="text" name="txtAdr" id="txtAdr" size="32" autocomplete="off"
				onfocus="cON('Adr');" onblur="cOFF('Adr');" /></td>
		</tr>
		<tr>
			<td>Cellphone #:&nbsp;</td>
			<td><input type="text" name="txtCel" id="txtCel" size="32" autocomplete="off"
				onfocus="cON('Cel');" onblur="cOFF('Cel');" /></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="27"
				onfocus="cON('Fle');" onblur="cOFF('Fle');" /></td>
		</tr>
		<tr>
			<td>Birthday:&nbsp;</td>
			<td><?php
				  $myCalendar = new tc_calendar("dater1",true,false);
				  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
				  $myCalendar->setPath("calendar/");
				  $myCalendar->setYearInterval(1932, date("Y"));
				  //$myCalendar->dateAllow("2008-05-13", date("Y-m-d"));
				  $myCalendar->setAlignment("right", "bottom");
				  $myCalendar->writeScript();
				?>
			</td>
		</tr>
		<tr>
			<td>Date hired:&nbsp;</td>
			<td><?php
				  $myCalendar = new tc_calendar("dater2",true,false);
				  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
				  $myCalendar->setPath("calendar/");
				  $myCalendar->setYearInterval(1932, date("Y"));
				  //$myCalendar->dateAllow("2008-05-13", date("Y-m-d"));
				  $myCalendar->setAlignment("right", "bottom");
				  $myCalendar->writeScript();
				?>
			</td>
		</tr>
		<tr>
			<td>Status:&nbsp;</td>
			<td>
				<select name="txtSta" id="txtSta" size="1" onfocus="cON('Sta');" onblur="cOFF('Sta');">
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
			<td>Section:&nbsp;</td>
			<td>
				<select name="txtSec" id="txtSec" size="1" onfocus="cON('Sec');" onblur="cOFF('Sec');">
				<option>---</option>
				<option>Injection</option>
				<option>Sealing</option>
				<option>Pelletizing</option>
				<option>Grinding</option>
				<option>Blending</option>
				<option>Di-Electric</option>
				<option>Moldtech</option>
				<option>Punching</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Gender:&nbsp;</td>
			<td>
				<select name="txtGdr" id="txtGdr" size="1" onfocus="cON('Gdr');" onblur="cOFF('Gdr');">
				<option>---</option>
				<option>Male</option>
				<option>Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Employee #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="10" autocomplete="off"
				onfocus="cON('Emp');" onblur="cOFF('Emp');" /></td>
		</tr>
		<tr>
			<td>Group:&nbsp;</td>
			<td><input type="text" name="txtGrp" id="txtGrp" size="10" value="Trainor" readonly
				onfocus="cON('Grp');" onblur="cOFF('Grp');" /></td>
		</tr>
		<tr>
			<td>Role:&nbsp;</td>
			<td><input type="text" name="txtRol" id="txtRol" size="10" value="4" readonly
				onfocus="cON('Rol');" onblur="cOFF('Rol');" /></td>
		</tr>
		<tr>
			<td>Department:&nbsp;</td>
			<td><input type="text" name="txtDep" id="txtDep" size="10" value="Plastics" readonly
				onfocus="cON('Dep');" onblur="cOFF('Dep');" /></td>
		</tr>
		<tr>	
			<td id="bots" colspan="3">
				<a href="transact.php" style="text-decoration:none;">
				<input type="button" value="&laquo;&nbsp;Back"></a>
				<input type="submit" name="btnSnd" id="btnSnd" value="Send">
				<input type="button" value="Reset" onclick="wiper();">
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