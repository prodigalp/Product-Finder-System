<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	$a1 = $_GET['id'];
	
	$b1 = "SELECT * FROM tblhistory WHERE ctrlnum='$a1' ORDER BY dater DESC";
	$b2 = mysql_query($b1);
	$c0 = mysql_query($b1);
	
	#Use to display username
	$c1 = mysql_fetch_object($c0);
	$c2 = $c1->fname;
	$c3 = $c1->mname;
	$c4 = $c1->lname;
	$c5 = $c1->pichref;
?>

<html>
<head>
<title>Invidual Log</title>
<link rel="stylesheet" type="text/css" href="ornament/ornament_view_single_log.css" />
</head>
<body>
	<div id="wraper">
	<form method="POST" name="empView" id="empView">
	<div id="header">Individual Log</div>
	<div id="content">
	<table id="sider">
		<tr id="hed1">
			<td colspan="2"><?php echo $c2.' '.$c3.' '.$c4?></td>
		</tr>
		<tr id="hed2">
			<td width="50%">Date</td>
			<td width="50%">Time</td>
		</tr>
		<?php while($b3 = mysql_fetch_object($b2)) { ?>
		
		<tr>
			<td><?php echo $b3->dater; ?></td>
			<td><?php echo $b3->timer; ?></td>
		</tr>
		<?php } ?>
	</table>

	</table>
	<div id="imagery">
		<img src="<?php echo 'portrait/'. $c5?>">
		<table id="lower">
			<tr>
				<td>
				<a href="single_log.php" style="text-decoration:none">
					<input type="button" value="&laquo&nbsp;Back">
				</a><br>
				<a href="sindex.php" style="text-decoration:none">
					<input type="button" value="Home">
				</a>
				</td>
			</tr>
		</table>
		
	</div>
	<div id="reset"></div>
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