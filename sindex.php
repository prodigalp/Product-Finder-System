<?php
session_start();
if($_SESSION['rol']=='9' || $_SESSION['rol']=='5' || $_SESSION['rol']=='4' ||
   $_SESSION['rol']=='3' || $_SESSION['rol']=='2' || $_SESSION['rol']=='1') {
?>

<html>
<head>
<title>Main menu</title>
</head>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_sindex.css" />
<script type="text/javascript" src="impress/index_clock.js"></script>
<body onload="mF()">
	<form method="POST" name="main" id="main" action="logout.php">
	<div id="wraper">
		<div id="header"><span class="hed">Eyestrain</span> Product Finder </div>
		
		<div id="content">
		<div id="col1">
			<div id="c1">
			Mode:&nbsp;<b><?php echo $_SESSION['grp'];?></b><br>
			Restriction level:&nbsp;<b><?php echo $_SESSION['rol'];?></b>
			</div>
			
			<div id="c2">
				<img src="<?php echo 'portrait/'. $_SESSION['hrf'];?>">
				<div id="liv"><?php echo $_SESSION['fnm'].' '. $_SESSION['lnm']; ?></div>
			</div>
			
			
			<div id="c3">
			<span id="placetime" style="text-align:left"></span>
			</div>
		</div>
		<div id="reset"></div>
		
		<div id="col2">
			<div id="d1">
				<div id="outside">
					<!--<img src="portrait/miner/miner (15).png" 
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=1"><br>
					<div id="label">&nbsp;Injection</div> -->
				</div>
				<div id="outside">
					<!--<img src="portrait/miner/miner (1).jpg"
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=1"><br>
					<div id="label">Sealing&nbsp;</div> -->
				</div>
				<div id="outside">
					<!--<img src="portrait/miner/miner (2).jpg"
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=1"><br>
					<div id="label">Punching</div> -->
				</div>
			</div>
			
			<div id="d2">
				<div id="lapside">
					<a href="product_search.php">
					<img src="portrait/miner/miner (4).jpg"
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.6" title="Click to search product"></a>
					<div id="lap"> </div>
				</div>
			</div>
			
			<div id="d3">
				<div id="outside">
					<!--<img src="portrait/miner/miner (5).jpg"
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=1"><br>
					<div id="label">Blending</div> -->
				</div>
				<div id="outside">
					<!--<img src="portrait/miner/miner (6).jpg"
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=1"><br>
					<div id="label">Pelletize&nbsp;</div> -->
				</div>
				<div id="outside">
					<!-- <img src="portrait/miner/miner (7).jpg"
					onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=1"><br>
					<div id="label">Grinding</div> -->
				</div>
			</div>
		</div>
		<div id="reset"></div>
		</div>
		
		<div id="col3">
			<div id="e1">
				<ul>
				<?php require("sindex_link.php"); ?>
				</ul>
			</div>
		</div>
		<div id="reset"></div>
		
		<div id="footer">Programmer: Eyestrain</div>
	</div>
	
	</form>
</body>
</html>

<?php
	}
else {
	header("location: login.php");
}
?>
