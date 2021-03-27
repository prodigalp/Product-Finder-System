<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$pro = $_POST['txtPro'];
			
			if($pro=='') {
				echo("
					<script type='text/javascript'>
					alert('Blank entry is not allowed');
					window.location='productlist.php';
					</script>");
			}
			else {
				$a1 = "SELECT * FROM tblproduct WHERE pcode like concat('$pro','%') ORDER BY pcode ASC";
				$a2 = mysql_query($a1);
				$a3 = mysql_num_rows($a2);
				
				if($a3>=1) { $b1 = mysql_query($a1); }
				else if($a3<=0) {
					echo("
						<script type='text/javascript'>
						alert('No match found!');
						window.location='productlist.php';
						</script>");
				}
				
			}
		}
	}
	else {
		$a1 = "SELECT * FROM tblproduct WHERE pcode='___'";
		$a2 = mysql_query($a1);
		$b1 = mysql_query($a1);
	}
?>
<html>
<head>
<title>Product Control</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_productlist.css" />
</head>
<body>
	<div id="wraper">
	<form method="POST" name="proFrm" id="proFrm">
	<h2>Product Control</h2>
	<div id="content">
	<table id="t1">
		<tr>
			<td>
				<input type="text" name="txtPro" id="txtPro" size="30" autocomplete="off" placeholder="Enter product code">&nbsp;
				<input type="submit" name="btnSnd" id="btnSnd" value="Send">
				<a href="settings.php" style="text-decoration:none;">
					<input type="button" value="Back">
				</a>
			</td>
		</tr>
	</table>
	
	<table id="t2">
		<tr>
			<th>#</th>
			<th>product code</th>
			<th>options</th>
		</tr>
		
		<?php
			$cntr=0;
			while($row=mysql_fetch_assoc($b1)) {
			$cntr++;
		?>
		<tr>
			<td width="5%"><?php echo $cntr;?></td>
			<td width="60%"><?php echo $row['pcode'];?></td>
			<td width="35%">
				<a href="edit_product.php?id1=<?php echo $row['id'];?>">[&nbsp;Edit&nbsp;]</a>
				<a href="delete_product.php?id=<?php echo $row['id'];?>">[&nbsp;Delete&nbsp;]</a>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	</div>
	
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