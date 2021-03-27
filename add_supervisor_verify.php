<?php
	require("config.php");
	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			/* Data for tbluser */
			$usr = $_POST['txtUsr'];
			$pwd = md5($_POST['txtPwd']);
			$fnm = $_POST['txtFnm'];
			$mnm = $_POST['txtMnm'];
			$lnm = $_POST['txtLnm'];
			$grp = $_POST['txtGrp'];
			$rol = $_POST['txtRol'];
			
			/* Data for tblsup */
			$eml = $_POST['txtEml'];
			$emp = $_POST['txtEmp'];
			$sta = $_POST['txtSta'];
			$fle = $_FILES["txtFle"]["name"];
			
			
			$a1 = "SELECT * FROM tbluser WHERE fname='$fnm' && mname='$mnm' && lname='$lnm'";
			$a2 = mysql_query($a1);
			
			$b1 = "SELECT * FROM tblsup WHERE empnum='$emp'";
			$b2 = mysql_query($b1);
			
			/* Check for duplicate entry */
			$x1 = mysql_num_rows($a2);
			$x2 = mysql_num_rows($b2);
			if($x1>=1 || $x2>=1) {
				echo("
				<script>
				alert('Either name or employee number already exists!');
				window.location='add_supervisor.php';
				</script>
				");
			}
			else {
				if((($_FILES["txtFle"]["type"] == "image/gif") ||
				    ($_FILES["txtFle"]["type"] == "image/jpg") ||
					($_FILES["txtFle"]["type"] == "image/jpeg") ||
					($_FILES["txtFle"]["type"] == "image/pjpg")) &&
					($_FILES["txtFle"]["size"] < 5000000)) {
					
					if($_FILES["txtFle"]["error"] > 0) {
						die("
							<script>
							alert('Error loading picture!');
							window.location='add_supervisor.php';
							</script>
						");
					}
					else {
						if(file_exists("portrait/". $_FILES["txtFle"]["name"])) {
							die("
								<script>
								alert('Picture already exists!');
								window.location='add_supervisor.php';
								</script>
							");
						}
						else {
							move_uploaded_file($_FILES["txtFle"]["tmp_name"], "portrait/". $_FILES["txtFle"]["name"]);
							
							$q1 = "INSERT INTO tbluser(username,password,fname,mname,lname,gtype,role,pichref)
								   VALUES('$usr','$pwd','$fnm','$mnm','$lnm','$grp','$rol','$fle')";
							mysql_query($q1);
							
							$c1 = "SELECT id FROM tbluser ORDER BY id DESC LIMIT 1";
							$c2 = mysql_query($c1);
							$c3 = mysql_fetch_assoc($c2);
							$c4 = $c3['id'];
							
							$r1 = "INSERT INTO tblsup(empnum,email,status,ctrlnum,pichref) 
								   VALUES('$emp','$eml','$sta','$c4','$fle')";
							mysql_query($r1);
							
							echo("Filename: ". $_FILES["txtFle"]["name"]."<br>");
							echo("Size: ". $_FILES["txtFle"]["size"]."<br>");
							echo("Type: ". $_FILES["txtFle"]["type"]."<br>");
							echo("Temporary name: ". $_FILES["txtFle"]["tmp_name"]."<br>");
							echo("Stored in: ". "portrait/" . $_FILES["txtFle"]["name"]."<br>");
							
							die("
								<script>
								alert('Picture and Data successfully uploaded!');
								window.location='add_supervisor.php';
								</script>
							");
						}
					}
				}
				else {
					die("
						<script>
						alert('Invalid picture format');
						window.location='add_supervisor.php';
						</script>
					");
				}
			}
		}
	}
?>