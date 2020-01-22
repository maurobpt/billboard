<?php

/*$record[0]["title"]="Test 1";
$record[1]["title"]="Test 2";
$record[2]["title"]="Test 3";

$record[0]["start_date"]="1333976400";
$record[1]["start_date"]="1333976401";
$record[2]["start_date"]="1333976402";

$record[0]["end_date"]="1333980000";
$record[1]["end_date"]="1333980001";
$record[2]["end_date"]="1333980002";

$record[0]["id"]="1";
$record[1]["id"]="2";
$record[2]["id"]="3";

for ($i=0; $i<3; $i++) {

    $event_array[] = array(
            'id' => $record[$i]['id'],
            'title' => $record[$i]['title'],
            'start' => $record[$i]['start_date'],
            'end' => $record[$i]['end_date'],
            'allDay' => false
    );


}*/

//echo json_encode($event_array);


//exit;
//echo "x";
error_reporting(1);
$con=mysql_connect("localhost","root","");

mysql_select_db("billboard",$con);

$sql = mysql_query("select v_id, video_name, v_time from video");
$video_info = array();

while ($row_video = mysql_fetch_assoc($sql)){
	$video_info[] = $row_video;
}
    //$pos=0;
foreach ($video_info as $video) {
	//echo "video_info total: ".count($video_info);
    /*echo "Id: {$video[v_id]}<br />"
       . "Name: {$video[video_name]}<br />"
       . "Time:". date('Y-m-d H:i:s', strtotime($video[v_time]))."<br /><br />";*/
	
	$event_array[] = array(
            //'id' => $video[v_id],
            'title' => $video[video_name],
            'start' => date('Y-m-d H:i:s', strtotime($video[v_time])),
            //'end' => strtotime('+1 minutes', $event_array['start']),
            'allDay' => false
    );
	
	//$pos++;
}

echo json_encode($event_array);

?>