<?php
include_once("current_sessions.php");
//check if the file has errors
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
//check if the file already exists
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  

	//save to database
	error_reporting(1);

	$con=mysql_connect("localhost","root","");

	mysql_select_db("billboard",$con);

	$video_path=$_FILES["file"]["name"];
	
	$date_time=htmlspecialchars($_POST["date"]);
	
	date_default_timezone_set('Europe/London');
	
	$curr_timestamp = date('Y-m-d H:i');

	mysql_query("insert into video(video_name,v_time,timestamp) values('$video_path','$date_time','$curr_timestamp')");
	echo "<br /> Saved on video table.";
	  
      }
    }

?>
<p>You will be redirected in <span id="counter">10</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=1) {
        location.href = 'admin.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>