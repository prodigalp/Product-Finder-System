<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require('calendar/tc_calendar.php');
?>

<html>
<head>
<title>New Reliever</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_add_operator.css" />
<script language="javascript" src="calendar/calendar.js"></script>
<script language="javascript" src="impress/checker_rel.js"></script>
</head>
<body>
	<form method="POST" name="f3" id="f3" enctype="multipart/form-data" action="add_reliever_verify.php" onsubmit="return check_rel();">
	<div id="wraper">
	<div id="header">New Reliever</div>
	<div id="content">
	<table>
		<tr>
			<td>First name:&nbsp;</td>
			<td><input type="text" name="txtFnm" id="txtFnm" size="32" autocomplete="off" 
				 onfocus="c_ON('Fnm');" onblur="c_OFF('Fnm');" /></td>
		</tr>
		<tr>
			<td>Middle name:&nbsp;</td>
			<td><input type="text" name="txtMnm" id="txtMnm" size="32" autocomplete="off"
				onfocus="c_ON('Mnm');" onblur="c_OFF('Mnm');" /></td>
		</tr>
		<tr>
			<td>Last name:&nbsp;</td>
			<td><input type="text" name="txtLnm" id="txtLnm" size="32" autocomplete="off"
				onfocus="c_ON('Lnm');" onblur="c_OFF('Lnm');" /></td>
		</tr>
		<tr>
			<td>Username:&nbsp;</td>
			<td><input type="text" name="txtUsr" id="txtUsr" size="32" autocomplete="off"
				onfocus="c_ON('Usr');" onblur="c_OFF('Usr');" /></td>
		</tr>
		<tr>
			<td>Password:&nbsp;</td>
			<td><input type="password" name="txtPwd" id="txtPwd" size="32" autocomplete="off"
				onfocus="c_ON('Pwd');" onblur="c_OFF('Pwd');" /></td>
		</tr>
		<tr>
			<td>Address:&nbsp;</td>
			<td><input type="text" name="txtAdr" id="txtAdr" size="32" autocomplete="off"
				onfocus="c_ON('Adr');" onblur="c_OFF('Adr');" /></td>
		</tr>
		<tr>
			<td>Contact:&nbsp;</td>
			<td><input type="text" name="txtCon" id="txtCon" size="32" autocomplete="off"
				onfocus="c_ON('Con');" onblur="c_OFF('Con');" /></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="file" name="txtFile" id="txtFile" size="27"
				onfocus="c_ON('File');" onblur="c_OFF('File');" /></td>
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
				<select name="txtSta" id="txtSta" size="1" onfocus="c_ON('Sta');" onblur="c_OFF('Sta');">
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
				<select name="txtSec" id="txtSec" size="1" onfocus="c_ON('Sec');" onblur="c_OFF('Sec');">
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
				<select name="txtGdr" id="txtGdr" size="1" onfocus="c_ON('Gdr');" onblur="c_OFF('Gdr');">
				<option>---</option>
				<option>Male</option>
				<option>Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Employee #:&nbsp;</td>
			<td><input type="text" name="txtEmp" id="txtEmp" size="10" autocomplete="off"
				onfocus="c_ON('Emp');" onblur="c_OFF('Emp');" /></td>
		</tr>
		<tr>
			<td>Group:&nbsp;</td>
			<td><input type="text" name="txtGrp" id="txtGrp" size="10" value="Reliever" readonly
				onfocus="c_ON('Grp');" onblur="c_OFF('Grp');" /></td>
		</tr>
		<tr>
			<td>Role:&nbsp;</td>
			<td><input type="text" name="txtRol" id="txtRol" size="10" value="3" readonly
				onfocus="c_ON('Rol');" onblur="c_OFF('Rol');" /></td>
		</tr>
		
		<tr>
			<td>Department:&nbsp;</td>
			<td><input type="text" name="txtDep" id="txtDep" size="10" value="Plastics" readonly
				onfocus="c_ON('Dep');" onblur="c_OFF('Dep');" /></td>
		</tr>
		<tr id="bots">
			<td colspan="3">
				<a href="transact.php" style="text-decoration:none;">
				<input type="button" value="&laquo;&nbsp;Back"></a>
				<input type="submit" name="btnSnd" id="btnSnd" value="Send">
				<input type="button" value="Reset" onclick="wiper();" >
			</td>
		</tr>
	</table>
	</div>
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