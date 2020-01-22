<?php
//phpinfo();
//echo "ok";
?>
<html>
<head>
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
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
		<script src="js/clock.js"></script>
		
</head>
<body>
    <nav id="menu">
    	<ul>
    		<li><a href="#">Home</a></li>
    		<li><a href="#">Pictures</a></li>
    		<li><a href="#">Video</a></li>
    		<li><a href="#">Logout</a></li>
    	</ul>
    </nav>

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
	

</body>
</html>