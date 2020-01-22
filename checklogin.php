<?php

#Include the connect.php file
include('connect.php');

// Table name
$tbl_name = "users"; 

// Connect to server and select databse.
$connect_u = mysqli_connect($hostname, $username, $password)
or die('Could not connect: ' . mysqli_error($connect_u));
$bool_u = mysqli_select_db($connect_u,$database);
if ($bool_u === False) {
   print "can't find $database";
}

// Define $myusername and $mypassword
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
$mypassword = hash('sha256', $mypassword);

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($connect_u,$myusername);
$mypassword = mysqli_real_escape_string($connect_u,$mypassword);

//mysql select query
$sql = "SELECT * FROM $tbl_name WHERE users_username='$myusername' and users_password='$mypassword' and users_active=1";
$result = mysqli_query($connect_u,$sql);

// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);
$myuser_id = 0;

while ($row = mysqli_fetch_array($result)) {
    $myuser_id = $row[0];
}
mysqli_close($connect_u);

// If result matched $myusername and $mypassword, table row must be 1 row
if ($count==1) {
    // Register $myusername, $mypassword and redirect to header location page
    session_start();
    $_SESSION['myusername'] = $_POST['myusername'];
    $_SESSION['mypassword'] = $_POST['mypassword'];
    $_SESSION['myuser_id'] = $myuser_id;
    header("Location:admin.php");
}
else {
    echo ('<script type="text/javascript">window.alert("Wrong Username or Password");window.location.href="main_login.php"</script>');
}
?>
