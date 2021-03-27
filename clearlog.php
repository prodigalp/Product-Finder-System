<?php
	session_start();
	if($_SESSION['rol']=='9' || $_SESSION['rol']=='5') {
	require("config.php");

?>

<html>
<head>
<title>Clear Log</title>
<link rel="stylesheet" type="text/css" media="screen" href="ornament/ornament_clearlog.css" />
</head>
<body>
	<div id="wraper">
	<div id="header"><h2>Log Options</h2></div>
	<div id="content">
	<ul id="square">
		<li id="bound">
			<a href="single_log.php">
			<img onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
			     onmouseout ="this.style.opacity=0.6;thisfilters.alpha.opacity=60"
				 src="portrait/miner/ICN/transact (21).png">
				<div id="label">Single</a></div>
		</li>
		<li id="bound">
			<a href="group_log.php">
			<img onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
			     onmouseout ="this.style.opacity=0.6;thisfilters.alpha.opacity=60"
				 src="portrait/miner/ICN/transact (22).png">
			<div id="label">Group</a></div>
		</li>
	</ul>	
	</div>
	<div id="reset"></div>
	<div id="footer"><a href="settings.php" 
	style="text-decoration:none;
	color:#FFF;"
	>&laquo;&nbsp;Back</a></div>
	</div>
</body>
</html>
<?php
	}
else {
	header("location:login.php");
}
?>