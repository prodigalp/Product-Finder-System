<?php
	require("config.php");

	
	if(isset($_POST['btnSnd'])) {
		if("Send"==$_POST['btnSnd']) {
			$pro = $_POST['txtPro'];
			$eqp = $_POST['txtEqp'];
			$bsh = $_POST['txtBsh'];
			$wey = $_POST['txtWey'];
			$tol = $_POST['txtTol'];
			$cyl = $_POST['txtCyl'];
			$fle = $_FILES["txtFle"]["name"];
			$wrk = $_POST['txtWrk'];
			$cav = $_POST['txtCav'];
			$tar = $_POST['txtTar'];
			$pts = $_POST['txtPts'];
			
			$a1 = "SELECT pcode FROM tblproduct WHERE pcode='$pro'";
			$a2 = mysql_query($a1);
			$b1 = mysql_num_rows($a2);
			
			if($b1>=1) {
				die("
					<script>
					alert('Product name already exists!');
					window.location='add_product.php';
					</script>"
				);
			}
			#If Picture box is not blank
			else if($fle!='') {
				if((($_FILES["txtFle"]["type"] == "image/gif") ||
					($_FILES["txtFle"]["type"] == "image/jpg") ||
					($_FILES["txtFle"]["type"] == "image/jpeg") ||
					($_FILES["txtFle"]["type"] == "image/pjpg")) &&
					($_FILES["txtFle"]["size"] < 99999990)) {
					
					if($_FILES["txtFle"]["error"] > 0) {
						die("
							<script>
							alert('Error loading picture!');
							window.location='add_product.php';
							</script>
						");
					}
					else {
						if(file_exists("product/". $_FILES["txtFle"]["name"])) {
							die("
								<script>
								alert('Picture already exists!');
								window.location='add_product.php';
								</script>
							");
						}
						else {
							move_uploaded_file($_FILES["txtFle"]["tmp_name"], "product/". $_FILES["txtFle"]["name"]);
							
							$c1 = "INSERT INTO tblproduct(pcode,equipnum,bushtype,proweight,tolerance,cycletime,pichref,wrkcntr,cavity,target,ptype)
									VALUES('$pro','$eqp','$bsh','$wey','$tol','$cyl','$fle','$wrk','$cav','$tar','$pts')";
							mysql_query($c1);
									
							echo("Filename: ". $_FILES["txtFle"]["name"]."<br>");
							echo("Size: ". $_FILES["txtFle"]["size"]."<br>");
							echo("Type: ". $_FILES["txtFle"]["type"]."<br>");
							echo("Temporary name: ". $_FILES["txtFle"]["name"]."<br>");
							echo("Save in: ". "product/" . $_FILES["txtFle"]["name"]."<br>");
							
							die("
								<script>
								alert('Picture and Data successfully uploaded!');
								window.location='add_product.php';
								</script>
							");
						}
					}
				}
				else {
					die("
						<script>
						alert('Invalid picture format!');
						window.location='add_product.php';
						</script>
					");
				}
			}
			#If Picture box is blank
			else if($b1==0) {
					$c1 = "INSERT INTO tblproduct(pcode,equipnum,bushtype,proweight,tolerance,cycletime,wrkcntr,cavity,target,ptype,pichref)
						   VALUES('$pro','$eqp','$bsh','$wey','$tol','$cyl','$wrk','$cav','$tar','$pts','---')";
					mysql_query($c1);
						
					die("<script>
						alert('Data successfully uploaded!');
						window.location='add_product.php';
						</script>");
			}
		}
	}
?>

