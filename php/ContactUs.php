<?php

$Name = $_REQUEST['name'];
$Email = $_REQUEST['email'];
$Message = $_REQUEST['message'];


$link = mysqli_connect("localhost", "root", "","hotelweb");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into Feedback (Name,Email,Message) values ('$Name','$Email','$Message')";
if(mysqli_query($link, $sql))
{
    echo "<h1 align=center>Your Message was sent successfully.</h1>";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
<html>
<head>
</head>
<body>
<form action="index.html"><input type="submit" value="Back to Home Page"/></form>
</body>
</html>