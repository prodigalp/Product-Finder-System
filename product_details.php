<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
	   $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1' ) {
	   
	   require("config.php");
	   
	   $lid = $_GET['d'];
	   if(!is_numeric($lid)) {
			die("
			<script>
			alert('Data is not a number');
			window.location='sindex.php';
			</script>");
		}
		
		#Checking for picture entry
		$b1 = "SELECT pichref FROM tblproduct WHERE pichref='---' && id='$lid'";
		$b2 = mysql_query($b1);
		$b3 = mysql_num_rows($b2);
		
		#If picture is blank, perform this option
		if($b3>=1) {
			$a1 = "SELECT * FROM tblproduct WHERE id='$lid'";
			$a2 = mysql_query($a1);
			$row = mysql_fetch_object($a2);
			#Assigned picture to variable
			$pic = "nopik.jpg";
		}
		#If picture is not blank, perform this option
		else if($b3==0) {
			$a1 = "SELECT * FROM tblproduct WHERE id='$lid'";
			$a2 = mysql_query($a1);
			$row = mysql_fetch_object($a2);
			#Assigned picture to variable
			$pic = $row->pichref;
		}
?>
<html>
<head>
<title>Product Details</title>
<!--Use for lightbox effects-->
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" />

<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_product_details.css" />
</head>
<body>
	<form method="POST" name="frmDtls" id="frmDtls">
	<div id="wraper">
	<div id="header">Product Details</div>
	<div id="content">
		<div id="pbord">
			<a href="<?php echo 'product/'. $pic ?>" rel="lightbox" title="<?php echo $pic ?>">
				<img src="<?php echo 'product/'. $pic?>" alt="NO PICTURE DETECTED">
			</a>
		</div>
		<table id="tb2">
			<tr>
				<td><a href="product_search.php" style="text-decoration:none;"><input type="button" value="&laquo;&nbsp;Back"></a></td>
			</tr>
			<tr>
				<td><a href="sindex.php" style="text-decoration:none;"><input type="button" value="Home"></a></td>
			</tr>
		</table>
	</div>
	
	<div id="C1">
		<table>
			<tr>
				<td>Product code:&nbsp;</td>
				<td id="bets"><input type="text" name="txtPcd" id="txtPcd" size="30" value="<?php echo $row->pcode?>" readonly></td>
			</tr>
			<tr>
				<td>Cycletime:&nbsp;</td>
				<td id="bets"><input type="text" name="txtCyl" id="txtCyl" size="30" value="<?php echo $row->cycletime?> secs." readonly></td>
			</tr>
			<tr>
				<td>Weight:&nbsp;</td>
				<td id="bets"><input type="text" name="txtWey" id="txtWey" size="30" value="<?php echo $row->proweight?> g/kgs." readonly></td>
			</tr>
			<tr>
				<td>Tolerance:&nbsp;</td>
				<td id="bets"><input type="text" name="txtTol" id="txtTol" size="30" value="<?php echo $row->tolerance ?>" readonly></td>
			</tr>
			<tr>
				<td>Target:&nbsp;</td>
				<td id="bets"><input type="text" name="txtTol" id="txtTol" size="30" value="<?php echo $row->target?> pcs." readonly></td>
			</tr>
			<tr>
				<td>Cavity:&nbsp;</td>
				<td id="bets"><input type="text" name="txtCav" id="txtCav" size="30" value="<?php echo $row->cavity?> pc" readonly></td>
			</tr>
			<tr>
				<td>Bush type:&nbsp;</td>
				<td id="bets"><input type="text" name="txtBsh" id="txtBsh" size="30" value="<?php echo $row->bushtype ?>" readonly></td>
			</tr>
			<tr>
				<td>Work center:&nbsp;</td>
				<td id="bets"><input type="text" name="txtWrk" id="txtWrk" size="30" value="<?php echo $row->wrkcntr?>" readonly></td>
			</tr>
			<tr>
				<td>Product type:&nbsp;</td>
				<td id="bets"><input type="text" name="txtPyp" id="txtPyp" size="30" value="<?php echo $row->ptype?>" readonly></td>
			</tr>
			<tr>
				<td>Equipment #:&nbsp;</td>
				<td id="bets"><input type="text" name="txtEqp" id="txtEqp" size="30" value="<?php echo $row->equipnum ?>" readonly></td>
			</tr>
			<tr>
				<td>ID:&nbsp;</td>
				<td id="bets"><input type="text" name="txtId" id="txtId" size="30" value="<?php echo $row->id?>" readonly></td>
			</tr>			
			<tr>
				<td>Packaging:&nbsp;</td>
				<td id="bets"><input type="text" name="txtPak" id="txtPak" size="30" value="disabled" disabled></td>
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
	header("location: login.php");
}