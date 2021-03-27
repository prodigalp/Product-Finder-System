<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
	   $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1') {
	   
	   require("config.php");
	   if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$usr = $_POST['txtUsr'];
			$pwd = md5($_POST['txtPwd']);
			$new = md5($_POST['txtNew']);
			$con = md5($_POST['txtCon']);
			
			$a1 = "SELECT * FROM tbluser WHERE username='$usr' && password='$pwd'";
			$a2 = mysql_query($a1);
			$a3 = mysql_num_rows($a2);
			
			if($a3>=1) {
				if($new==$con) {
					$b1 = "UPDATE tbluser SET password='$new' WHERE username='$usr' && password='$pwd'";
					mysql_query($b1);
					die("
						<script>
						alert('Password successfully changed!');
						window.location='sindex.php';
						</script>
					");
				}
				else {
					die("
						<script>
						alert('New and Confirm password is not equal');
						window.location='password_change.php';
						</script>
					");
				}
			}
			else {
				echo("
					<script>
					alert('Either username or password is invalid!');
					window.location='password_change.php';
					</script>
				");
			}
		}
	}

?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_password_change.css" />
<script language="javascript">
	function wiper(x) {
		document.getElementById(x+'Usr').value='';
		document.getElementById(x+'Pwd').value='';
		document.getElementById(x+'New').value='';
		document.getElementById(x+'Con').value='';
	}
	
	function cON(y) {
		document.getElementById('txt'+y).style.backgroundColor = "#FFFF00";
	}
	
	function cOF(z) {
		document.getElementById('txt'+z).style.backgroundColor = "#FFF";
	}

</script>
</head>
<body>
	<div id="wraper">
	<form method="POST" name="chgPwd" id="chgPwd">
	<div id="header">Change Password</div>
	<div id="content">
	<table id="righty">
		<tr rowspan="4">
			<td><img src="<?php echo 'portrait/'. $_SESSION['hrf'];?>"</td>
		</tr>
	</table>
	
	<table id="lefty">
		<tr>
			<td><input type="text" name="txtUsr" id="txtUsr" size="35" autocomplete="off" placeholder="Username"
				 onfocus="cON('Usr');" onblur="cOF('Usr');"></td>
		</tr>
		<tr>
			<td><input type="password" name="txtPwd" id="txtPwd" size="35" autocomplete="off" placeholder="Current Password"
				 onfocus="cON('Pwd');" onblur="cOF('Pwd');"></td>
		</tr>
		<tr>
			<td><input type="password" name="txtNew" id="txtNew" size="35" autocomplete="off" placeholder="New Password"
				 onfocus="cON('New');" onblur="cOF('New');"></td>
		</tr>
		<tr>
			<td><input type="password" name="txtCon" id="txtCon" size="35" autocomplete="off" placeholder="Confirm Password"
				 onfocus="cON('Con');" onblur="cOF('Con');"></td>
		</tr>
	</table>	
	</div>
	<div id="reset"></div>
	<table id="lower">
		<tr>
			<td>
				<a href="sindex.php" style="text-decoration:none">
				<input type="button" value="&laquo&nbsp;Back"></a>
				<input type="submit" name="btnSnd" id="btnSnd" value="Send">
				<input type="button" name="btnRst" id="btnRst" value="Reset" onclick="wiper('txt');">
			</td>
		</tr>
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