<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require('calendar/tc_calendar.php');
?>

<html>
<head>
<title>New Operator</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_add_operator.css" />
<script language="javascript" src="calendar/calendar.js"></script>
<script language="javascript" src="impress/checker_optr.js"></script>
</head>
<body>
	<form method="POST" name="f1" id="f1" enctype="multipart/form-data" action="add_operator_verify.php" onsubmit="return checkOpe();">
	<div id="wraper">
	<div id="header">New Operator</div>
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
				<td>Address:&nbsp;</td>
				<td><input type="text" name="txtAdr" id="txtAdr" size="32" size="32" autocomplete="off" /
					 onfocus="colorON('Adr');" onblur="colorOFF('Adr');" /></td>
			</tr>
			
			<tr>
				<td>Mobile #:&nbsp;</td>
				<td><input type="text" name="txtMob" id="txtMob" size="32" autocomplete="off" 
					onfocus="colorON('Mob');" onblur="colorOFF('Mob');"/></td>
			</tr>
			<tr>
				<td>Picture:&nbsp;</td>
				<td><input type="file" name="picfile" id="picfile" size="28" /></td>
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
				<td>Section:&nbsp;</td>
				<td>
					<select name="txtSec" id="txtSec" size="1" onfocus="colorON('Sec')"; onblur="colorOFF('Sec');" >
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
					<select name="txtGdr" id="txtGdr" size="1" onfocus="colorON('Gdr')"; onblur="colorOFF('Gdr');" >
					<option>---</option>
					<option>Male</option>
					<option>Female</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Employee #:&nbsp;</td>
				<td><input type="text" name="txtNum" id="txtNum" size="10" autocomplete="off" 
					 onfocus="colorON('Num');" onblur="colorOFF('Num');" /></td>
			</tr>
			<tr>
				<td>Group:&nbsp;</td>
				<td><input type="text" name="txtGrp" id="txtGrp" size="10" value="Operator" readonly 
					onfocus="colorON('Grp');" onblur="colorOFF('Grp');" /></td>
			</tr>
			<tr>
				<td>Role:&nbsp;</td>
				<td><input type="text" name="txtRol" id="txtRol" size="10" value="2" readonly
					 onfocus="colorON('Rol');" onblur="colorOFF('Rol');"/></td>
			</tr>
			<tr>
				<td>Department:&nbsp;</td>
				<td><input type="text" name="txtDep" id="txtDep" size="10" value="Plastics" readonly 
					 onfocus="colorON('Dep');" onblur="colorOFF('Dep');" /></td>
			</tr>
			<tr id="bots">
				<td colspan="2">
				<a href="transact.php" style="text-decoration:none;">
				<input type="button" name="btnBck" id="btnBck" value="&laquo&nbsp;Back"></a>
				<input type="submit" name="btnSnd" id="btnSnd" value="Send">
				<input type="button" name="btnClr" id="btnClr" value="Clear" onclick="wiper();">
				</td>
			</tr>
		</table>
		<div id="footer">Programmer: Eyestrain</div>
	</div>
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