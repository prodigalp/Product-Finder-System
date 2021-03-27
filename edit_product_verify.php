<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$sid = $_POST['txtIds'];
			$cod = $_POST['txtCod'];
			$eqp = $_POST['txtEqp'];
			$bus = $_POST['txtBus'];
			$wet = $_POST['txtWet'];
			$tol = $_POST['txtTol'];
			$cyc = $_POST['txtCyc'];
			$wrk = $_POST['txtWrk'];
			$cav = $_POST['txtCav'];
			$tar = $_POST['txtTar'];
			$typ = $_POST['txtTyp'];
			$fle = $_FILES["txtFle"]["name"];
			
			
			$a1 = "SELECT pichref FROM tblproduct WHERE pichref='$fle'";
			$a2 = mysql_query($a1);
			$a3 = mysql_num_rows($a2);
			
			if($a3>=1) {
				echo("<script type='text/javascript'>
				alert('Picture already exists!');
				window.location='edit_product.php?id1=$sid';
				</script>");
			}
			#If picture box is not empty
			else if($fle!=''){
				if((($_FILES["txtFle"]["type"] == "image/jpg" ) ||
					($_FILES["txtFle"]["type"] == "image/gif" ) ||
					($_FILES["txtFle"]["type"] == "image/jpeg") ||
					($_FILES["txtFle"]["type"] == "image/pjpg")) &&
					($_FILES["txtFle"]["size"] < 500000000 )) {
					
					if($_FILES["txtFle"]["error"] > 0 ) {
						echo("<script type='text/javascript'>
							alert('Error opening picture');
							window.location='edit_product.php?id1=$sid';
							</script>");
					}
					else {
						if(file_exists("product/".$_FILES["txtFle"]["name"])) {
							echo("<script type='text/javascript'>
								alert('Picture already exists');
								window.location='edit_product.php?id1=$sid';
							    </script>");
						}
						else {
							move_uploaded_file($_FILES["txtFle"]["tmp_name"], "product/". $_FILES["txtFle"]["name"]);
							
							// Data insertion section
							$b1 = "UPDATE tblproduct SET 	
							 pcode='$cod',equipnum='$eqp',bushtype='$bus',proweight='$wet',tolerance='$tol',
							 cycletime='$cyc',pichref='$fle',wrkcntr='$wrk',cavity='$cav',
							 target='$tar', ptype='$typ'
							 WHERE id='$sid'";
							mysql_query($b1);
							
							echo("Name: ".$_FILES["txtFle"]["name"]."<br>");
							echo("Type: ".$_FILES["txtFle"]["type"]."<br>");
							echo("Size: ".$_FILES["txtFle"]["size"]."<br>");
							echo("Location: " . "product/" . $_FILES["txtFle"]["name"]);
							echo("Tmp_Name: ".$_FILES["txtFle"]["tmp_name"]."<br>");
							
							echo("<script type='text/javascript'>
								alert('New picture and data successfully uploaded');
								window.location='edit_product.php?id1=$sid';
								</script>");
						}
					}
				}
				else {
					echo("<script type='text/javascript'>
						alert('Invalid Picture format');
						window.location='edit_product.php?id1=$sid';
						</script>");
				}
			}
			else if($a3==0) {
				// Data insertion section
				$b1 = "UPDATE tblproduct SET 	
				pcode='$cod',equipnum='$eqp',bushtype='$bus',proweight='$wet',tolerance='$tol',
				cycletime='$cyc',wrkcntr='$wrk',cavity='$cav',
				target='$tar', ptype='$typ'
				WHERE id='$sid'";
				mysql_query($b1);

				echo("<script type='text/javascript'>
				alert('Data successfully uploaded');
				window.location='edit_product.php?id1=$sid';
				</script>");
			}
		}
	}	
?>

<?php
	}
else {
	header("location:login.php");
}
?>