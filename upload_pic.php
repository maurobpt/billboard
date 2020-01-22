<?php
include_once("current_sessions.php");
//check if the form submit is valid to send to server folder
if($_POST['image_form_submit'] == 1)
{
	$images_arr = array();
	foreach($_FILES['images']['name'] as $key=>$val){
		$image_name = $_FILES['images']['name'][$key];
		$tmp_name 	= $_FILES['images']['tmp_name'][$key];
		$size 		= $_FILES['images']['size'][$key];
		$type 		= $_FILES['images']['type'][$key];
		$error 		= $_FILES['images']['error'][$key];
				
		$target_dir = "upload/";
		$target_file = $target_dir.$_FILES['images']['name'][$key];
		
		if(move_uploaded_file($_FILES['images']['tmp_name'][$key],$target_file)){
			$images_arr[] = $target_file;
		}else if (file_exists("upload/" . $_FILES["images"]["name"]))
		{
		  echo $_FILES["images"]["name"] . " already exists. ";
		}
		

	}
	
	//save to database
	error_reporting(1);

	$con=mysql_connect("localhost","root","");

	mysql_select_db("billboard",$con);

	$pics_path= implode(";", $images_arr);
	
	$date_time=htmlspecialchars($_POST["date"]);
	
	date_default_timezone_set('Europe/London');
	
	$curr_timestamp = date('Y-m-d H:i');

	mysql_query("insert into pictures(p_images,p_time,timestamp) values('$pics_path','$date_time','$curr_timestamp')");
	echo "Pictures: ".$pics_path;
	echo "<br /> Saved on pictures table.";

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