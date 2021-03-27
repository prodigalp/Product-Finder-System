<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
?>

<html>
<head>
<title>Single Logfile</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_pwd_reset.css" />
</head>
<body>
	<div id="wraper">
	<form method="POST" name="frmRst" id="frmRst" onsubmit="return verifyPass();">
	<div id="header"><h2>Single Logfile</h2></div>
	<div id="content">
	<table id="t1">
		<tr>
			<td>
			<input type="text" name="txtUsr" id="txtUsr" size="30" autocomplete="off" placeholder="Enter Username">&nbsp;
			<input type="submit" name="btnSrh" id="btnSrh" value="Search">&nbsp;
			<a href="clearlog.php" style="text-decoration:none">
			<input type="button" value="&laquo;&nbsp;Back"></a></td>
		</tr>
	</table>
	</div>
		<?php
			if(isset($_POST['btnSrh'])) {
				if("Search"==$_POST['btnSrh']) {
					$usr = $_POST['txtUsr'];
			
					$a1 = "SELECT * FROM tblhistory WHERE username!='eyestrain' && username LIKE concat('$usr','%') GROUP BY fname ORDER BY fname ASC ";
					$a2 = mysql_query($a1);
					
						echo "
							<style type='text/css'>
								#T2 {
									width:85%;
									border: 1px SOLID #000;
									margin:auto;
								}
								th,td {	text-align:center; }
								th { 
									color:#FFF;
									background:#306EFF;
									text-transform:uppercase;
									border:1px SOLID #000;
									font-family:serif;
								}
								#T2 td {
									background:#FAF8CC;
									border:1px SOLID #000;
									font-family:serif;
									font-size:1em;
									
								}
								a:link, a:visited {
									color:#000;
									text-decoration:none;
									font-weight:bold;
								}
								a:hover {
									background:#000;
									color:#00FF00;
									text-transform:uppercase;
									border-radius:5px;
								}
								a:active {
									background:#00FF00;
									color:#000;
								}
							</style>
							
							<table id='T2'>
							  <tr>
							  <th width='60%'>Fullname</th>
							  <th width='40%'>Option</th>
							  </tr>";
						
						while($row = mysql_fetch_assoc($a2)) {
						echo "<tr>";
						echo "<td>".$row['fname'].' '.$row['mname'].' '.$row['lname']."</td>";
						echo 
							"<td>".
								'<a href=view_single_log.php?id='.$row['ctrlnum'].'>[ View ]</a>'.'&nbsp;&nbsp;'.
								'<a href=clear_confirm.php?id='.$row['ctrlnum'].'>[ Clear ]</a>'
							."</td>";
						echo "</tr>";
						}
							  
						echo "</table>";	
				}
			}
			else {
				$a1 = "SELECT * FROM tbluser WHERE username='____'";
				$a2 = mysql_query($a1);
			}
		?>

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