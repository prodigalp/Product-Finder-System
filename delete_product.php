<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$sid = $_GET['id'];
	
	function msgLck() {
		echo("
			<script>
			alert('Record sucessfully deleted!');
			window.location='productlist.php';
			</script>");
	}
	
	function msgCan() {
		echo("
			<script>
			alert('Operation aborted!');
			window.location='productlist.php';
			</script>
		");
	}
	
	if(isset($_POST['btnYes'])) {
		if("Yes"==$_POST['btnYes']) {
			$a1 = "DELETE FROM tblproduct WHERE id='$sid'";
			mysql_query($a1);
			msgLck();
		}
	}
	
	if(isset($_POST['btnNo'])) {
		if("No"==$_POST['btnNo']) {
			msgCan();
		}
	}
?>

<html>
<head>
<title>Product Delete</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_delete_product.css" />
</head>
<body>
	<div id="wraper">
	<form method="POST">
	<div id="header"><h2>warning!!!</h2></div>
	<div id="content">
	<table>
		<tr>
			<td>Do you really want to delete this record?</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btnNo"  id="btnNo" value="No">
				<input type="submit" name="btnYes" id="btnYes" value="Yes">
			</td>
		</tr>
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