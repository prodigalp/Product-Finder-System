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
			
			/* Data for tblrel */
			$adr = $_POST['txtAdr'];
			$dep = $_POST['txtDep'];
			$emp = $_POST['txtEmp'];
			$gdr = $_POST['txtGdr'];
			$dt1 = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$con = $_POST['txtCon'];
			$sta = $_POST['txtSta'];
			$dt2 = isset($_REQUEST["dater1"]) ? $_REQUEST["dater2"] : "";
			$fle = $_FILES["txtFile"]["name"];
			$sec = $_POST['txtSec'];
			
			$a1 = "SELECT * FROM tbluser WHERE fname='$fnm' && mname='$mnm' && lname='$lnm'";
			$a2 = mysql_query($a1);
			
			$b1 = "SELECT * FROM tblrel WHERE empnum='$emp'";
			$b2 = mysql_query($b1);
			
			$x1 = mysql_num_rows($a2);
			$x2 = mysql_num_rows($b2);
			
			if($x1>=1 || $x2>=1) {
				die("
					<script>
					alert('Either name or employee number already exists!');
					window.location='add_reliever.php';
					</script>");
			}
			else {
				/* Check for picture validity */
				if((($_FILES["txtFile"]["type"] == "image/gif") ||
				    ($_FILES["txtFile"]["type"] == "image/jpg") ||
					($_FILES["txtFile"]["type"] == "image/pjpg") ||
					($_FILES["txtFile"]["type"] == "image/jpeg")) &&
					($_FILES["txtFile"]["size"] < 5000000)) {
					
					if($_FILES["txtFile"]["error"] > 0 ) {
						die("
						<script>
						alert('Error loading image!');
						window.location='add_reliever.php';
						</script>");
					}
					else {
						if(file_exists("portrait/". $_FILES["txtFile"]["name"])) {
							die("
							<script>
							alert('Picture already exists!');
							window.location='add_reliever.php';
							</script>");
							}
						else {	
							move_uploaded_file($_FILES["txtFile"]["tmp_name"], "portrait/". $_FILES["txtFile"]["name"]);
							
							/* Data insertion for tbluser */
							$c1 = "INSERT INTO tbluser(username,password,fname,mname,lname,gtype,role,pichref) 
								   VALUES('$usr','$pwd','$fnm','$mnm','$lnm','$grp','$rol','$fle')";
							mysql_query($c1);
							
							/* Get the highest ID and copy it to tblrel */
							$d1 = "SELECT id FROM tbluser ORDER BY id DESC LIMIT 1";
							$d2 = mysql_query($d1);
							$d3 = mysql_fetch_assoc($d2);
							$d4 = $d3['id'];
							
							/* Data insertion for tblrel */
							$e1 = "INSERT INTO tblrel(address,depart,empnum,gender,bday,cellnum,status,dhired,pichref,section,ctrlnum)
									VALUES('$adr','$dep','$emp','$gdr','$dt1','$con','$sta','$dt2','$fle','$sec','$d4')";
							mysql_query($e1);
							
							echo("File: ". $_FILES["txtFile"]["name"]."<br>");
							echo("Size: ". $_FILES["txtFile"]["size"]."<br>");
							echo("Type: ". $_FILES["txtFile"]["type"]."<br>");
							echo("Temporary name: ". $_FILES["txtFile"]["tmp_name"]."<br>");
							echo("Save in: ". "portrait/". $_FILES["txtFile"]["name"]);
							
							die("
								<script>
								alert('Picture and Data successfully uploaded!');
								window.location='add_reliever.php';
								</script>
							");
						}
					}
				}
				else {
					die("
						<script>
						alert('Invalid file format!');
						window.location='add_reliever.php';
						</script>
					");
				}
			}
		}
	}
?>