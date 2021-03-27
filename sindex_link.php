<?php
if($_SESSION['rol']=='9') {
	echo("
		<li>
			<a href='settings.php'>
			<img src='portrait/miner/miner (9).png'></a>
			<div id='liber'><a href='settings.php'>Settings</a></div>
		</li>");
	echo("
		<li>
			<a href='viewlog.php'>
			<img src='portrait/miner/miner (10).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='viewlog.php'>Viewlog</a></div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (11).png'>
			<div id='liber'>&nbsp;Group</div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (12).png'>
			<div id='liber'>&nbsp;&nbsp;Credits</div>
		</li>");
	echo("
		<li>
			<a href='password_change.php'>
			<img src='portrait/miner/miner (13).jpg'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='password_change.php'>Password</a></div>
		</li>");
	echo("
		<li>
			<a href='transact.php'>
			<img src='portrait/miner/miner (14).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='transact.php'>Transaction</a></div>
		</li>");
	echo("
		<li>
			<a href='logout.php'>
			<img src='portrait/miner/miner (16).png'></a>
			<div id='liber'>&nbsp;<a href='logout.php'>Logout</a></div>
		</li>");
}
	

if($_SESSION['rol']=='5') {
	echo("
		<li>
			<a href='settings.php'>
			<img src='portrait/miner/miner (9).png'></a>
			<div id='liber'><a href='settings.php'>Settings</a></div>
		</li>");	
	echo("
		<li>
			<a href='viewlog.php'>
			<img src='portrait/miner/miner (10).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='viewlog.php'>Viewlog</a></div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (11).png'>
			<div id='liber'>&nbsp;Group</div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (12).png'>
			<div id='liber'>&nbsp;&nbsp;Credits</div>
		</li>");
	echo("
		<li>
			<a href='password_change.php'>
			<img src='portrait/miner/miner (13).jpg'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='password_change.php'>Password</a></div>
		</li>");
	echo("
		<li>
			<a href='transact.php'>
			<img src='portrait/miner/miner (14).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='transact.php'>Transaction</a></div>
		</li>");
	echo("
		<li>
			<a href='logout.php'>
			<img src='portrait/miner/miner (16).png'></a>
			<div id='liber'>&nbsp;<a href='logout.php'>Logout</a></div>
		</li>");
}


if($_SESSION['rol']=='4') {
	echo("
		<li>
			<a href='settings.php'>
			<img src='portrait/miner/miner (9).png'></a>
			<div id='liber'><a href='settings.php'>Settings</a></div>
		</li>");	
	echo("
		<li>
			<a href='viewlog.php'>
			<img src='portrait/miner/miner (10).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='viewlog.php'>Viewlog</a></div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (11).png'>
			<div id='liber'>&nbsp;Group</div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (12).png'>
			<div id='liber'>&nbsp;&nbsp;Credits</div>
		</li>");
	echo("
		<li>
			<a href='password_change.php'>
			<img src='portrait/miner/miner (13).jpg'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='password_change.php'>Password</a></div>
		</li>");
	echo("
		<li>
			<a href='transact.php'>
			<img src='portrait/miner/miner (14).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='transact.php'>Transaction</a></div>
		</li>");
	echo("
		<li>
			<a href='logout.php'>
			<img src='portrait/miner/miner (16).png'></a>
			<div id='liber'>&nbsp;<a href='logout.php'>Logout</a></div>
		</li>");
}

if($_SESSION['rol']=='3') {
	echo("
		<li>
			<a href='viewlog.php'>
			<img src='portrait/miner/miner (10).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='viewlog.php'>Viewlog</a></div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (11).png'>
			<div id='liber'>&nbsp;Group</div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (12).png'>
			<div id='liber'>&nbsp;&nbsp;Credits</div>
		</li>");
	echo("
		<li>
			<a href='password_change.php'>
			<img src='portrait/miner/miner (13).jpg'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='password_change.php'>Password</a></div>
		</li>");
	echo("
		<li>
			<a href='logout.php'>
			<img src='portrait/miner/miner (16).png'></a>
			<div id='liber'>&nbsp;<a href='logout.php'>Logout</a></div>
		</li>");
}

if($_SESSION['rol']=='2' || $_SESSION['rol']=='1') {
	echo("
		<li>
			<a href='viewlog.php'>
			<img src='portrait/miner/miner (10).png'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='viewlog.php'>Viewlog</a></div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (11).png'>
			<div id='liber'>&nbsp;Group</div>
		</li>");
	echo("
		<li>
			<img src='portrait/miner/miner (12).png'>
			<div id='liber'>&nbsp;&nbsp;Credits</div>
		</li>");
	echo("
		<li>
			<a href='password_change.php'>
			<img src='portrait/miner/miner (13).jpg'></a>
			<div id='liber'>&nbsp;&nbsp;<a href='password_change.php'>Password</a></div>
		</li>");
	echo("
		<li>
			<a href='logout.php'>
			<img src='portrait/miner/miner (16).png'></a>
			<div id='liber'>&nbsp;<a href='logout.php'>Logout</a></div>
		</li>");
}
	
?>
