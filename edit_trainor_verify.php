<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$sid = $_POST['txtIds'];
			$usr = $_POST['txtUsr'];
			$fnm = $_POST['txtFnm'];
			$mnm = $_POST['txtMnm'];
			$lnm = $_POST['txtLnm'];
			$adr = $_POST['txtAdr'];
			$dep = $_POST['txtDep'];
			$gdr = $_POST['txtGdr'];
			$bdy = $_POST['txtBdy'];
			$cel = $_POST['txtCel'];
			$sta = $_POST['txtSta'];
			$dhr = $_POST['txtDhr'];
			$sec = $_POST['txtSec'];
			$fle = $_FILES["txtFle"]["name"];
			$grp = 'Trainor';
			
			$a1 = "SELECT pichref FROM tbluser WHERE pichref='$fle'";
			$a2 = mysql_query($a1);
			$a3 = mysql_num_rows($a2);
			
			if($a3>=1) {
				echo("<script type='text/javascript'>
				alert('Picture already exists!');
				window.location='edit_trainor.php?id1=$sid&id2=$grp';
				</script>");
			}
			else if($fle!=''){
				if((($_FILES["txtFle"]["type"] == "image/jpg" ) ||
					($_FILES["txtFle"]["type"] == "image/gif" ) ||
					($_FILES["txtFle"]["type"] == "image/jpeg") ||
					($_FILES["txtFle"]["type"] == "image/pjpg")) &&
					($_FILES["txtFle"]["size"] < 500000000 )) {
					
					if($_FILES["txtFle"]["error"] > 0 ) {
						echo("<script type='text/javascript'>
							alert('Error opening picture');
							window.location='edit_trainor.php?id1=$sid&id2=$grp';
							</script>");
					}
					else {
						if(file_exists("portrait/".$_FILES["txtFle"]["name"])) {
							echo("<script type='text/javascript'>
								alert('Picture already exists');
								window.location='edit_trainor.php?id1=$sid&id2=$grp';
							    </script>");
						}
						else {
							move_uploaded_file($_FILES["txtFle"]["tmp_name"], "portrait/". $_FILES["txtFle"]["name"]);
							
							// Data insertion section
							$b1 = "UPDATE tbluser SET username='$usr',fname='$fnm',mname='$mnm',lname='$lnm',pichref='$fle'	WHERE id='$sid'	";
							mysql_query($b1);
							
							$b2 = "UPDATE tbltray SET address='$adr',depart='$dep',gender='$gdr',bday='$bdy',cellnum='$cel',
									status='$sta',dhired='$dhr',pichref='$fle',section='$sec' WHERE ctrlnum='$sid'";
							mysql_query($b2);
							
							echo("Name: ".$_FILES["txtFle"]["name"]."<br>");
							echo("Type: ".$_FILES["txtFle"]["type"]."<br>");
							echo("Size: ".$_FILES["txtFle"]["size"]."<br>");
							echo("Location: " . "portrait/" . $_FILES["txtFle"]["name"]);
							echo("Tmp_Name: ".$_FILES["txtFle"]["tmp_name"]."<br>");
							
							echo("<script type='text/javascript'>
								alert('New picture and data successfully uploaded');
								window.location='edit_trainor.php?id1=$sid&id2=$grp';
								</script>");
						}
					}
				}
				else {
					echo("<script type='text/javascript'>
						alert('Invalid Picture format');
						window.location='edit_trainor.php?id1=$sid&id2=$grp';
						</script>");
				}
			}
			else if($a3==0) {
				// Data insertion section
				$b1 = "UPDATE tbluser SET username='$usr',fname='$fnm',mname='$mnm',lname='$lnm' WHERE id='$sid'";
				mysql_query($b1);
								
				$b2 = "UPDATE tbltray SET address='$adr',depart='$dep',gender='$gdr',bday='$bdy',cellnum='$cel',
				status='$sta',dhired='$dhr',section='$sec' WHERE ctrlnum='$sid'";
				mysql_query($b2);
				
				echo("<script type='text/javascript'>
				alert('Data successfully uploaded');
				window.location='edit_trainor.php?id1=$sid&id2=$grp';
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