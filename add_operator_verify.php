<?php
	require('config.php');
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			/* Data for tbluser */
			$fnm = $_POST['txtFnm'];
			$mnm = $_POST['txtMnm'];
			$lnm = $_POST['txtLnm'];
			$usr = $_POST['txtUsr'];
			$pwd = md5($_POST['txtPwd']);
			$grp = $_POST['txtGrp'];
			$rol = $_POST['txtRol'];
			
			/* Data for tbloptr */
			$adr = $_POST['txtAdr'];
			$dep = $_POST['txtDep'];
			$emp = $_POST['txtNum'];
			$gdr = $_POST['txtGdr'];
			$dt1 = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$mob = $_POST['txtMob'];
			$sta = $_POST['txtSta'];	
			$dt2 = isset($_REQUEST["dater2"]) ? $_REQUEST["dater2"] : "";
			$pic = $_FILES["picfile"]["name"];
			$sec = $_POST['txtSec'];
			
			// Check for duplicate entry using employee number or employee name
			$q1 = "SELECT * FROM tbluser WHERE fname='$fnm' && mname='$mnm' && lname='$lnm'";
			$q2 = mysql_query($q1);
			
			$r1 = "SELECT * FROM tbloptr WHERE empnum='$emp'";
			$r2 = mysql_query($r1);
			
			$x1 = mysql_num_rows($q2);
			$x2 = mysql_num_rows($r2);
			
			if($x1>=1 || $x2>=1) {
				echo("
					<script type='text/javascript'>
					alert('Either name or employee number already exists');
					window.location='add_operator.php';
					</script>
					");
			}
			else {
			// Check picture validity before inserting of data to the database.
			if((($_FILES["picfile"]["type"] == "image/gif") ||
				     ($_FILES["picfile"]["type"] == "image/jpg") ||
					 ($_FILES["picfile"]["type"] == "image/jpeg") ||
					 ($_FILES["picfile"]["type"] == "image/pjpg")) &&
					 ($_FILES["picfile"]["size"] < 5000000)) {
					 
					 if($_FILES["picfile"]["error"] > 0) {
						die("
							<script>
							alert('Error loading picture!');
							window.location='add_operator.php';
							</script>");
					 }
					 else {
						if(file_exists("portrait/". $_FILES["picfile"]["name"])) {
							die("
								<script>
								alert('Picture already exists!');
								window.location='add_operator.php';
								</script>");
						}
						else {
							move_uploaded_file($_FILES["picfile"]["tmp_name"], "portrait/". $_FILES["picfile"]["name"]);
							
							/* Insert all information to the database after picture validation */
							$a1 = "INSERT INTO tbluser(username,password,fname,mname,lname,gtype,role,pichref) 
								   VALUES('$usr','$pwd','$fnm','$mnm','$lnm','$grp','$rol','$pic')";
							mysql_query($a1);
							
							/* Get id from tbluser and copy it to tbloptr */
							$b1 = "SELECT id from tbluser ORDER BY id DESC LIMIT 1";
							$bx = mysql_query($b1);
							$by = mysql_fetch_assoc($bx);
							$bz = $by['id'];
							
							/* Insert data to tbloptr */
							$c1 = "INSERT INTO tbloptr(address,depart,empnum,gender,bday,cellnum,status,dhired,pichref,section,ctrlnum)
								   VALUES('$adr','$dep','$emp','$gdr','$dt1','$mob','$sta','$dt2','$pic','$sec','$bz')";
							mysql_query($c1);
							
							/* Display picture information */
							echo("Filename: ". $_FILES["picfile"]["name"]."<br>");
							echo("Size: ". $_FILES["picfile"]["size"]."<br>");
							echo("Type: ". $_FILES["picfile"]["type"]."<br>");
							echo("Temporary name: ". $_FILES["picfile"]["tmp_name"]."<br>");
							echo("Save in: ". "portrait/". $_FILES["picfile"]["name"]."<br>");
							
							die("
								<script>
								alert('Picture and Data successfully uploaded');
								window.location='add_operator.php';
								</script>");
						}
						
					}
				}
			else {
				die("
					<script>
					alert('Invalid picture format');
					window.location='add_operator.php';
					</script>");
			}			
			
		}
	}
}
?>
