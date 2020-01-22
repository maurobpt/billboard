<?php
echo "index";
$url = "http://localhost/billboard/json-events.php";  //The url from where you are getting the contents
$response = (file_get_contents($url)); //Converting in json string
$decoded_array = json_decode($response, true);
$total = count($decoded_array);
$curr_timestamp = date('Y-m-d H:i');
$time_constant=$curr_timestamp.':00';
//echo $total;
//echo "<pre>";
//print_r($decoded_array);

var_dump($decoded_array);

//print_r($decoded_array[1]['title']);

echo $time_constant;

$i = 0;
while ($i < $total) {
    echo $i++."<br>"; 
}

?>