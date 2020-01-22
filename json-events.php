<?php

error_reporting(1);
$con=mysql_connect("localhost","root","");

mysql_select_db("billboard",$con);

//video
$sql = mysql_query("select v_id, video_name, v_time from video");
$video_info = array();

while ($row_video = mysql_fetch_assoc($sql)){
	$video_info[] = $row_video;
}

foreach ($video_info as $video) {
	
	$event_array[] = array(
            'title' => $video[video_name],
            'start' => date('Y-m-d H:i:s', strtotime($video[v_time])),
            'allDay' => false
    );

}

//pictures
$sql1 = mysql_query("select p_id, p_images, p_time from pictures");
$pictures_info = array();

while ($row_pictures = mysql_fetch_assoc($sql1)){
	$pictures_info[] = $row_pictures;
}

foreach ($pictures_info as $pictures) {
	
	$event_array[] = array(
            'title' => $pictures[p_images],
            'start' => date('Y-m-d H:i:s', strtotime($pictures[p_time])),
            'allDay' => false
    );

}

echo json_encode($event_array);

?>