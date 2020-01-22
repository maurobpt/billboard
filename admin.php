<?php
include_once("current_sessions.php");
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="MB">
<title>
admin
</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">

<!-- clock CSS file -->
<link href="css/clock.css" rel="stylesheet" />

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<!-- clock JavaScript Includes -->
		<!--script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script-->
		<!--script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script-->
		<!--script src="js/clock.js"></script-->
		
<!-- calendar CSS file -->	
<link rel='stylesheet' href='ext/fullcalendar270/fullcalendar.css' />
<!-- clock JavaScript Includes -->
<script src='ext/fullcalendar270/lib/jquery.min.js'></script>
<script src='ext/fullcalendar270/lib/moment.min.js'></script>
<script src='ext/fullcalendar270/fullcalendar.js'></script>

<!-- clock JavaScript Includes -->
<script src="js/clock.js"></script>

<!--  admin JavaScript Includes -->
<script src='js/admin.js'></script>
</head>
<body>
	<header>
	<h2>Billboard Backoffice</h2>
    </header>

    <nav id="menu">
    	<ul>
    		<li><a href="admin.php"><strong>Home</strong></a></li>
    		<li><a href="ad_pic.php">Pictures</a></li>
    		<li><a href="ad_video.php">Video</a></li>
    		<li><a href="logout.php">Logout</a></li>
    	</ul>
    </nav>
	
	<!-- begin of page content -->
	<main>
	
	<div id="clock_container">
	
		<div id="clock" class="light">
			<div class="display">
				<div class="weekdays"></div>
				<div class="ampm"></div>
				<div class="alarm"></div>
				<div class="digits"></div>
			</div>
		</div>
	
	</div>
	
	<div id="calendar_container">
		<div id='calendar'></div>
	</div>
	
	</main>
	<!-- end of page content -->
	
	<footer>
	<p>Projeto do Mestrado de Engenharia Informática - ISEP 2016 - Realizado por Mauro Brandão nº1140033</p>
    </footer>

</body>
</html>