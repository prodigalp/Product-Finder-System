<?php
	session_start();
	require("config.php");
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$usr = $_POST['txtUsr'];
			$pwd = md5($_POST['txtPwd']);
			
			/* Check for duplicate entry */
			$a1 = "SELECT * FROM tblcurrent WHERE username='$usr' && password='$pwd'";
			$a2 = mysql_query($a1);
			$a3 = mysql_num_rows($a2);
			
			if($a3>=1) {
				die("
					<script>
					alert('WARNING: Account already in used!');
					window.location='login.php';
					</script>
				");
			}
			else {
				$b1 = "SELECT * FROM tbluser WHERE username='$usr' && password='$pwd'";
				$b2 = mysql_query($b1);
				$b3 = mysql_num_rows($b2);
				$b4 = mysql_query($b1);  /* Use for fetching data*/
				
				if($b3==1) {
					/* Assign fetched data to session variables */
					$row = mysql_fetch_assoc($b4);
					$_SESSION['ids'] = $row['id'];
					$_SESSION['usr'] = $row['username'];
					$_SESSION['pwd'] = $row['password'];
					$_SESSION['fnm'] = $row['fname'];
					$_SESSION['mnm'] = $row['mname'];
					$_SESSION['lnm'] = $row['lname'];
					$_SESSION['grp'] = $row['gtype'];
					$_SESSION['rol'] = $row['role'];
					$_SESSION['hrf'] = $row['pichref'];
					
					/* Inserting of data to tblcurrent; */
					$c1 = "INSERT INTO tblcurrent(fname,lname,mname,username,password,gtype,role,dater,timer,pichref,ctrlnum)
						   VALUES('$row[fname]','$row[lname]','$row[mname]','$row[username]','$row[password]',
						   '$row[gtype]','$row[role]',current_date(),current_time(),'$row[pichref]','$row[id]')";
					mysql_query($c1);
					
					
					/* Inserting of data to tblhistory */
					$c2 = "INSERT INTO tblhistory(fname,lname,mname,username,password,gtype,role,dater,timer,pichref,ctrlnum)
						   VALUES('$row[fname]','$row[lname]','$row[mname]','$row[username]','$row[password]',
						   '$row[gtype]','$row[role]',current_date(),current_time(),'$row[pichref]','$row[id]')";
					mysql_query($c2);
					
					header("location:sindex.php");
				}
				else {
					die("
						<script>
						alert('Invalid username or password!');
						window.location='login.php';
						</script>
					");
				}
			}
		}
	}
mysql_close($con);
?>


<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_login.css" />
<script type="text/javascript">
	function cON(x) {
		document.getElementById('txt'+x).style.backgroundColor = "#FFFF00";
	}
	
	function cOFF(x) {
		document.getElementById('txt'+x).style.backgroundColor = "#FFF";
	}
</script>
</head>
<body>
	<form method="POST" name="logIn" id="logIn">
	<div id="wraper">
		<div id="strap">	
		<div id="header">Login Authentication</div>
			<div id="content">
			<table>
				<tr>
					<td>Username:&nbsp;</td>
					<td><input type="text" name="txtUsr" id="txtUsr" size="35" autocomplete="off"
						 onfocus="cON('Usr');" onblur="cOFF('Usr');" /></td>
				</tr>
				<tr>
					<td>Password:&nbsp;</td>
					<td><input type="password" name="txtPwd" id="txtPwd" size="35" autocomplete="off"
						 onfocus="cON('Pwd');" onblur="cOFF('Pwd');" /></td>
				</tr>
				<tr>
					<td colspan="2" id="bots">
						<input type="submit" name="btnSnd" id="btnSnd" value="Send">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" name="btnRst" id="btnRst" value="Reset">
					</td>
				</tr>
			</table>
			</div>
		</div>
	</div>
	</form>
</body>
</html>