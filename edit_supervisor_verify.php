<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");
	
	if(isset($_POST['btnUpd'])) {
		if("Update"==$_POST['btnUpd']) {
			$sid = $_POST['txtId'];
			$emp = $_POST['txtEmp'];
			$usr = $_POST['txtUsr'];
			$lnm = $_POST['txtLnm'];
			$mnm = $_POST['txtMnm'];
			$fnm = $_POST['txtFnm'];
			$hrf = $_POST['txtHrf'];
			$pic = $_FILES["txtFle"]["name"];
			$eml = $_POST['txtEml'];
			$sta = $_POST['txtSta'];
			$grp = 'Supervisor';
			
			$a1 = "SELECT pichref FROM tbluser WHERE pichref='$pic'";
			$a2 = mysql_query($a1);
			$a3 = mysql_num_rows($a2);
			
			if($a3>=1) {
				echo("<script type='text/javascript'>
					  alert('Picture already exists!');
					window.location='edit_supervisor.php?id1=$sid&id2=grp';
					  </script>
				");
			}	
			//------------->If picturebox is not BLANK
			else if($pic!='') {
				if((($_FILES["txtFle"]["type"]=="image/jpg") ||
					($_FILES["txtFle"]["type"]=="image/gif") ||
					($_FILES["txtFle"]["type"]=="image/jpeg") ||
					($_FILES["txtFle"]["type"]=="image/pjpg")) &&
					($_FILES["txtFle"]["size"] < 500000000 )) {
					
					if($_FILES["txtFle"]["error"] > 0 ) {
						echo("<script type='text/javascript'>
							  alert('Error loading picture!');
							  window.location='edit_supervisor.php?id1=$sid&id2=grp';
							  </script>
						");
					}
					else {
						if(file_exists("portrait/".$_FILES["txtFle"]["name"])) {
							echo("<script type='text/javascript'>
								  alert('Picture already exists');
								  window.location='edit_supervisor.php?id1=$sid&id2=grp';
								  </script>
							");
						}
						else {
							// Data insertion after evaluation
							move_uploaded_file($_FILES["txtFle"]["tmp_name"],"portrait/".$_FILES["txtFle"]["name"]);
							$b1 = "UPDATE tbluser SET username='$usr',fname='$fnm',mname='$mnm',lname='$lnm',pichref='$pic' WHERE id='$sid'";
							$b2 = mysql_query($b1);
							
							$c1 = "UPDATE tblsup SET email='$eml',status='$sta',pichref='$pic' WHERE ctrlnum='$sid'";
							$c2 = mysql_query($c1);
							
							echo("Name: ". $_FILES["txtFle"]["name"]."<br>");
							echo("Type: ". $_FILES["txtFle"]["type"]."<br>");
							echo("Size: ". $_FILES["txtFle"]["size"]."<br>");
							echo("Temp name: ". $_FILES["txtFle"]["tmp_name"]."<br>");
							echo("Location: ". "portrait/" . $_FILES["txtFle"]["name"]."<br>");
							
							echo("<script type='text/javascript'>
							 alert('File and picture successfully uploaded!');
							 window.location='edit_supervisor.php?id1=$sid&id2=grp';
							 </script>");
						}
					}
				}
				
				else {
					echo("<script type='text/javascript'>
					alert('Invalid picture format!');
					window.location='edit_supervisor.php';
					</script> ");
				}
			}
			//------------->If picturebox is BLANK
			else if($a3==0) {
				$b1 = "UPDATE tbluser SET username='$usr',fname='$fnm',mname='$mnm',lname='$lnm' WHERE id='$sid'";
				$b2 = mysql_query($b1);
							
				$c1 = "UPDATE tblsup SET email='$eml',status='$sta' WHERE ctrlnum='$sid'";
				$c2 = mysql_query($c1);
							
				echo("<script type='text/javascript'>
				 alert('File successfully uploaded!');
				 window.location='edit_supervisor.php?id1=$sid&id2=grp';
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