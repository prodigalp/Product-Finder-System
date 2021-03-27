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
			
			/* Data for tblagency */
			$adr = $_POST['txtAdr'];
			$dep = $_POST['txtDep'];
			$emp = $_POST['txtEmp'];
			$gdr = $_POST['txtGdr'];
			$dt1 = isset($_REQUEST["dater1"]) ? $_REQUEST["dater1"] : "";
			$cel = $_POST['txtCel'];
			$sta = $_POST['txtSta'];
			$dt2 = isset($_REQUEST["dater2"]) ? $_REQUEST["dater1"] : "";
			$dt3 = isset($_REQUEST["dater3"]) ? $_REQUEST["dater1"] : "";
			$fle = $_FILES["txtFle"]["name"];
			$sec = $_POST['txtSec'];
			
			$a1 = "SELECT * FROM tbluser WHERE fname='$fnm' && mname='$mnm' && lname='$lnm'";
			$a2 = mysql_query($a1);
			
			$b1 = "SELECT empnum FROM tblagency WHERE empnum='$emp'";
			$b2 = mysql_query($b1);
			
			$c1 = mysql_num_rows($a2);
			$c2 = mysql_num_rows($b2);
			
			if($c1>=1 || $c2>=1) {
				die("
				<script>
				alert('Either name or employee number already exists!');
				window.location='add_agency.php';
				</script>");
			}
			else {
				if((($_FILES["txtFle"]["type"] == "image/gif") ||
				    ($_FILES["txtFle"]["type"] == "image/jpg") ||
					($_FILES["txtFle"]["type"] == "image/jpeg") ||
					($_FILES["txtFle"]["type"] == "image/pjpg")) &&
					($_FILES["txtFle"]["size"] < 5000000 )) {
					
					if($_FILES["txtFle"]["error"] > 0) {
						die("
							<script>
							alert('Error opening picture');
							window.location='add_agency.php';
							</script>");
					}
					else {
						if(file_exists("portrait/". $_FILES["txtFle"]["name"])) {
							die("
							<script>
							alert('Picture already exists!');
							window.location='add_agency.php';
							</script>");
							}
						else {
							move_uploaded_file($_FILES["txtFle"]["tmp_name"],"portrait/". $_FILES["txtFle"]["name"]);
							
							$d1 = "INSERT INTO tbluser(username,password,fname,mname,lname,gtype,role,pichref) 
								   VALUES('$usr','$pwd','$fnm','$mnm','$lnm','$grp','$rol','$fle')";
							mysql_query($d1);
							
							$e1 = "SELECT id FROM tbluser ORDER BY id DESC LIMIT 1";
							$e2 = mysql_query($e1);
							$e3 = mysql_fetch_assoc($e2);
							$e4 = $e3['id'];
							
							$f1 = "INSERT INTO tblagency(address,depart,empnum,gender,bday,cellnum,status,dhired,eoc,pichref,section,ctrlnum)
								  VALUES('$adr','$dep','$emp','$gdr','$dt1','$cel','$sta','$dt2','$dt3','$fle','$sec','$e4')";
							mysql_query($f1); 
							
							echo("Filename: ". $_FILES["txtFle"]["name"]."<br>");
							echo("Type: ". $_FILES["txtFle"]["type"]."<br>");
							echo("Size: ". $_FILES["txtFle"]["size"]."<br>");
							echo("Temporary name: ". $_FILES["txtFle"]["tmp_name"]."<br>");
							echo("Save in: ". "portrait/". $_FILES["txtFle"]["name"]."<br>");
								 
							die("
							<script>
							alert('Image and Data successfully uploaded!');
							window.location='add_agency.php';
							</script>");
						}
						
					}
				}
				else {
					die("
					<script>
					alert('Invalid file format!');
					window.location='add_agency.php';
					</script>");
				}
			}
		}
	}
?>