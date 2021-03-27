<?php 
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$sid = $_GET['id1'];
	
	
	$a1 = "SELECT * FROM tblproduct WHERE id='$sid'";
	$a2 = mysql_query($a1);
	$a3 = mysql_fetch_object($a2);
	
?>
<html>
<head>
<title>Product Details</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_edit_trainor.css" />
<script type="text/javascript" src="impress/edt_prd_test_chk.js"></script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="edtPro" id="edtPro" enctype="multipart/form-data" action="edit_product_verify.php" onsubmit="return prd_chk();">
	<div id="header">Product Details</div>
	<div id="content">
	<table>
		<tr>
			<td>ID:&nbsp;</td>
			<td><input type="text" name="txtIds" id="txtIds" size="28" autocomplete="off" value="<?php echo $a3->id;?>" readonly
			onfocus="onC('Ids');" onblur="ofC('Ids');"></td>
		</tr>
		<tr>
			<td>Code:&nbsp;</td>
			<td><input type="text" name="txtCod" id="txtCod" size="28" autocomplete="off" value="<?php echo $a3->pcode;?>"
			onfocus="onC('Cod');" onblur="ofC('Cod');"></td>
		</tr>
		<tr>
			<td>Equipment #:&nbsp;</td>
			<td><input type="text" name="txtEqp" id="txtEqp" size="28" autocomplete="off" value="<?php echo $a3->equipnum;?>"
			onfocus="onC('Eqp');" onblur="ofC('Eqp');"></td>
		</tr>
		<tr>
			<td>Bush type:&nbsp;</td>
			<td><input type="text" name="txtBus" id="txtBus" size="28" autocomplete="off" value="<?php echo $a3->bushtype;?>"
			onfocus="onC('Bus');" onblur="ofC('Bus');"></td>
		</tr>
		<tr>
			<td>Weight:&nbsp;</td>
			<td><input type="text" name="txtWet" id="txtWet" size="28" autocomplete="off" value="<?php echo $a3->proweight;?>"
			onfocus="onC('Wet');" onblur="ofC('Wet');"></td>
		</tr>
		<tr>
			<td>Tolerance:&nbsp;</td>
			<td><input type="text" name="txtTol" id="txtTol" size="28" autocomplete="off" value="<?php echo $a3->tolerance;?>"
			onfocus="onC('Tol');" onblur="ofC('Tol');" ></td>
		</tr>
		<tr>
			<td>Cycletime:&nbsp;</td>
			<td><input type="text" name="txtCyc" id="txtCyc" size="28" autocomplete="off" value="<?php echo $a3->cycletime;?>"
			onfocus="onC('Cyc');" onblur="ofC('Cyc');"></td>
		</tr>
		<tr>
			<td>Work Center:&nbsp;</td>
			<td><input type="text" name="txtWrk" id="txtWrk" size="28" autocomplete="off" value="<?php echo $a3->wrkcntr;?>"
			onfocus="onC('Wrk');" onblur="ofC('Wrk');"></td>
		</tr>
		<tr>
			<td>Cavity:&nbsp;</td>
			<td><input type="text" name="txtCav" id="txtCav" size="28" autocomplete="off" value="<?php echo $a3->cavity;?>"
			onfocus="onC('Cav');" onblur="ofC('Cav');"></td>
		</tr>
		<tr>
			<td>Target #:&nbsp;</td>
			<td><input type="text" name="txtTar" id="txtTar" size="28" autocomplete="off" value="<?php echo $a3->target;?>"
			onfocus="onC('Tar');" onblur="ofC('Tar');"></td>
		</tr>
		<tr>
			<td>Type:&nbsp;</td>
			<td><input type="text" name="txtTyp" id="txtTyp" size="28" autocomplete="off" value="<?php echo $a3->ptype;?>" readonly
			onfocus="onC('Typ');" onblur="ofC('Typ');"></td>
		</tr>
		<tr>
			<td>Picture:&nbsp;</td>
			<td><input type="text" name="txtPic" id="txtPic" size="28" autocomplete="off" value="<?php echo "product/".$a3->pichref;?>" readonly
			onfocus="onC('Pic');" onblur="ofC('Pic');"></td>
		</tr>
		<tr>
			<td>New Picture:&nbsp;</td>
			<td><input type="file" name="txtFle" id="txtFle" size="20" onfocus="onC('Fle');" onblur="ofC('Fle');"></td>
		</tr>
		<tr>
			<td colspan="3" id="bots">
			<a href="productlist.php" style="text-decoration:none"><input type="button" value="&laquo&nbsp;Back"></a>
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