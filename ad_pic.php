<?php
include_once("current_sessions.php");
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="MB">
<title>
admin - pictures
</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">

<!-- datepicker 4 bootstrap CSS file -->	
<link rel='stylesheet' href='ext/datepicker4/css/bootstrap-datetimepicker-standalone.css' />
<!-- datepicker 4 bootstrap JavaScript Includes -->
<script src='ext/fullcalendar270/lib/jquery.min.js'></script>
<script src='ext/fullcalendar270/lib/moment.min.js'></script>
<script src='ext/datepicker4/js/bootstrap-datetimepicker.min.js'></script>

</head>
<body>
	<header>
	<h2>Billboard Backoffice</h2>
    </header>

    <nav id="menu">
    	<ul>
    		<li><a href="admin.php">Home</a></li>
    		<li><a href="ad_pic.php"><strong>Pictures</strong></a></li>
    		<li><a href="ad_video.php">Video</a></li>
    		<li><a href="logout.php">Logout</a></li>
    	</ul>
    </nav>
	
	<!-- begin of page content -->
		<!-- begin of page content -->
	<main style="height:300px">
		
		<form method="post" name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="upload_pic.php">
	<div style="position: relative;">
		<div class="container">
			<div class="row">
				<div class='col-sm-6'>
					<div class="form-group">
						<div class='input-group date' id='datetimepicker1'>
							<span>Date:</span><input type='text' name="date" id="date" class="form-control" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					$(function () {
						$('#datetimepicker1').datetimepicker();
					});
				</script>
			</div>
		</div>
	</div>
	

    	<input type="hidden" name="image_form_submit" value="1"/>
            <label>Choose Image: </label>
            <input type="file" name="images[]" id="images" multiple >
		<br />
		<input type="submit" name="submit" value="Submit" />

    </form>
	
	</main>
	<!-- end of page content -->
	
	<footer>
	<p>Projeto do Mestrado de Engenharia Informática - ISEP 2016 - Realizado por Mauro Brandão nº1140033</p>
    </footer>

</body>
</html>