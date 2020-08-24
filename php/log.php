<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelweb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$email=$_REQUEST['email'];
            $pass=$_REQUEST['pw'];
            $query="select * from registration where Email='$email' and Password='$pass'";
    $rs=mysqli_query($conn,$query);
    $rowcount = mysqli_num_rows($rs);
	if($rowcount == 1)
	{
		echo "<h1 align=center>HEllo There WelCome to Sea Side Park HoteLS</h1>";
	}
	else
	{
		echo "<h1 align=center>Sorry! you are not a registered user. Please sign in</h1><br>";
	}

mysqli_close($conn);
?>

<html>
<head>
</head>
<body>
<button href="index.html">Back to Home Page</button>
</body>
</html>