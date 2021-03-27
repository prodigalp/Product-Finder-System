<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
       $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1') {
	
	require("config.php");
	$prod = $_GET['q'];
	
	$qstring = "SELECT * FROM tblproduct WHERE pcode like concat('$prod','%') ORDER BY pcode LIMIT 100";
	mysql_query($qstring);
	
	$result = mysql_query($qstring);
		// If there is an error, display this.
		if(!$result){
			die(mysql_error());
		}
?>
<html>
<head>
<title>Display</title>
</head>
<body>
	<form>
	<table  style="text-align:center;
				   font-size:16px;
				   text-transform:capitalize;
				   font-family:monospace;
				   margin-top:10px;
				   border-radius:10px;
				   box-shadow:0 0 .3em rgba(0,0,0,1);
				   padding:5px;">
				   
			<tr style="color:#000;background:#00FF00;">
				<td	style="text-decoration:blink;
					text-transform:uppercase;
					font-weight:bold;">
				found result:</td>
			</tr>
		<?php
			$cntr=0;
			while($row=mysql_fetch_array($result)) {
			$cntr++;
		?>
		<tr id="r<?php echo $cntr;?>" onmouseover="cON(<?php echo $cntr;?>);" onmouseout="cOFF(<?php echo $cntr;?>);">
			<td id="c<?php echo $cntr;?>" >
				<a href="product_details.php?d=<?php echo $row['id'];?>" style="text-decoration:none;">
					<?php echo $row['pcode'];?>
				</a>
			</td>
		</tr>
		<?php
		}
		?>
		<center>Total entry found:&nbsp;<?php echo $cntr;?></center>
	</table>
	
	</form>
</body>
</html>
<?php
	}
else {
	header("location:login.php");
}
?>