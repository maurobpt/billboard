<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="MB">
<title>
admin - videos
</title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<header>
	<h2>Billboard Backoffice</h2>
    </header>

    <nav id="menu">
    	<ul>
    		<li><a href="admin.php">Home</a></li>
    		<li><a href="ad_pic.php">Pictures</a></li>
    		<li><a href="ad_video.php"><strong>Video</strong></a></li>
    		<li><a href="#">Logout</a></li>
    	</ul>
    </nav>
	
	<!-- begin of page content -->
	<main>
	
	<?php

error_reporting(1);

$con=mysql_connect("localhost","root","");

mysql_select_db("billboard",$con);

extract($_POST);

$target_dir = "test_upload/";

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_POST["fileToUpload"]);

if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}

if($upd)
{
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$imageFileType = pathinfo($_POST["fileToUpload"],PATHINFO_EXTENSION);

echo "imageFileType: ".$imageFileType."<br>";

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
    echo "File Format Not Suppoted";
} 

else
{

//$video_path=$_FILES['fileToUpload']['name'];
$video_path=$_POST["fileToUpload"];

mysql_query("insert into video(video_name) values('$video_path')");

//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
$move_path = "/wamp/www/billboard/test_upload/".$video_path;
move_uploaded_file($video_path,$move_path);

echo "uploaded ";

}

}

//display all uploaded video

if($disp)

{

$query=mysql_query("select * from video");

	while($all_video=mysql_fetch_array($query))

	{
?>
	 
	 <video width="300" height="200" controls>
	<source src="test_upload/<?php echo $all_video['video_name']; ?>" type="video/mp4">
	</video> 
	
	<?php } } ?>
	
	
<form action="" method="post">

<table border="1">

<tr>

<Td>Upload  Video</td></tr>

<Tr><td><input type="file" name="fileToUpload"/></td></tr>

<tr><td>

<input type="submit" value="Upload Video" name="upd"/>

<input type="submit" value="Display Video" name="disp"/>

</td></tr>

</table>

</form>	
	
	</main>
	<!-- end of page content -->
	
	<footer>
	<p>Projeto do Mestrado de Engenharia Informática - ISEP 2016 - Realizado por Mauro Brandão nº1140033</p>
    </footer>

</body>
</html>