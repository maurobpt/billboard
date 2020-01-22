<html>
<head>
<style type="text/css">
html,body{
    overflow:hidden;
    }
body {  
   background-color:#c3c3c3; 
}

video {  
   width:100%; 
   max-width:1080px; 
   height:auto; 
}

img {
    max-width: 100%;
    height: auto;
    width: auto\9; /* ie8 */
}

footer {
    border: none;
	text-align:center;
    padding: 7px;
    background: none;
    border-radius: 1em;
	width:97%;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1080px;
  position: relative;
  margin: auto;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
</head>
<body>
<?php

$url = "http://localhost/billboard/json-events.php";  //The url from where you are getting the contents
$response = (file_get_contents($url)); //Converting in json string
$decoded_array = json_decode($response, true);
$total = count($decoded_array);

date_default_timezone_set('Europe/London');

$curr_timestamp = date('Y-m-d H:i');
$time_constant=$curr_timestamp.':00';

$i = 0;
while ($i < $total) {
	if($decoded_array[$i]['start']==$time_constant){
		$content=$decoded_array[$i]['title'];
		// check if string ends with image extension
		if (preg_match('/(\.jpg|\.png|\.bmp)$/', $content)) {

			echo '<div class="slideshow-container">';
			
			$images = explode(';', $content);
			$value = '';
			
			foreach ($images as $img_path){
				 $value .= '<div class="mySlides fade"><img src="'. $img_path . '" style="width:100%" /></div>';
			}
			echo $value;
			
			echo '</div>';
			
			?>
			<script type="text/javascript">
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex> slides.length) {slideIndex = 1}
				slides[slideIndex-1].style.display = "block";
				setTimeout(showSlides, 4000); // Change image every 4 seconds
			}
			</script>
			<?php

		} else {
;
			echo'<video width="320" height="240" autoplay>
				  <source src="upload/'. $content . '" type="video/mp4">
				Your browser does not support the video tag.
			</video>';

		}
	}

	$i++;
}

?>
<footer>New ad in <span id="counter">60</span> second(s).</footer>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=1) {
        location.href = 'index.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
</body>
</html>