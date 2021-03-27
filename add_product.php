<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
?>

<html>
<head>
<title>New Product</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_add_operator.css" />
<script type="text/javascript" src="impress/checker_pro2.js"></script>
</head>
<body>
	<form method="POST" name="f6" id="f6" enctype="multipart/form-data" action="add_product_verify.php" onsubmit="return checkPro();">
	<div id="wraper">
	<div id="header">New Product</div>
	<div id="content">
	<table>
		<tr>
			<td>Product code:&nbsp;</td>
			<td><input type="text" name="txtPro" id="txtPro" size="32" autocomplete="off"
				onfocus="cON('Pro');" onblur="cOFF('Pro');" /></td>
		</tr>
		<tr>
			<td>Equipment #:&nbsp;</td>
			<td><input type="text" name="txtEqp" id="txtEqp" size="32" autocomplete="off"
				onfocus="cON('Eqp');" onblur="cOFF('Eqp');" /></td>
		</tr>
		<tr>
			<td>Bushing type:&nbsp;</td>
			<td><input type="text" name="txtBsh" id="txtBsh" size="32" autocomplete="off"
				onfocus="cON('Bsh');" onblur="cOFF('Bsh');" /></td>
		</tr>
		<tr>
			<td>Tolerance:&nbsp;</td>
			<td><input type="text" name="txtTol" id="txtTol" size="32" autocomplete="off"
				onfocus="cON('Tol');" onblur="cOFF('Tol');" /></td>
		</tr>
		<tr>
			<td>Work center:&nbsp;</td>
			<td><input type="text" name="txtWrk" id="txtWrk" size="32" autocomplete="off"
				onfocus="cON('Wrk');" onblur="cOFF('Wrk');" /></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="27"
				onfocus="cON('Fle');" onblur="cOFF('Fle');" /></td>
		</tr>
		<tr>
			<td>Product weight:&nbsp;</td>
			<td><input type="text" name="txtWey" id="txtWey" size="20" autocomplete="off"
				onfocus="cON('Wey');" onblur="cOFF('Wey');" />&nbsp;&nbsp;<b>g / kg (s)</b></td>
		</tr>
		<tr>
			<td>Cycletime:&nbsp;</td>
			<td><input type="text" name="txtCyl" id="txtCyl" size="20" autocomplete="off"
				onfocus="cON('Cyl');" onblur="cOFF('Cyl');" />&nbsp;&nbsp;<b>sec (s)</b></td>
		</tr>
		<tr>
			<td>Cavity:&nbsp;</td>
			<td><input type="text" name="txtCav" id="txtCav" size="20" autocomplete="off"
				onfocus="cON('Cav');" onblur="cOFF('Cav');" />&nbsp;&nbsp;<b>pc (s)</b></td>
		</tr>
		<tr>
			<td>Target:&nbsp;</td>
			<td><input type="text" name="txtTar" id="txtTar" size="20" autocomplete="off"
				onfocus="cON('Tar');" onblur="cOFF('Tar');" />&nbsp;&nbsp;<b>pc (s)</b></td>
		</tr>
		<tr>
			<td>Product type:&nbsp;</td>
			<td>
				<select name="txtPts" id="txtPts" size="1" onclick="bump();">
				<option>---</option>
				<option>Container</option>
				<option>Cover</option>
				<option>Podvent</option>
				<option>Sealed</option>
				<option>Accesories</option>
				<option>Bushing</option>
				</select>
			</td>
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