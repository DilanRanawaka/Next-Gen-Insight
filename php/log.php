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
<style>

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  align-items: center;
  }

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body background="https://images.squarespace-cdn.com/content/v1/5d5b301d8c20010001f8932c/1566589751051-V153KAJN14GML99WSS05/ke17ZwdGBToddI8pDm48kCDnvzZDSTqrZYB0qToMReZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0psyQQR5KrxgIm8QcotvsYtvUHnJsni5ivcu2RP0UO8zWN1uCXtq4fHLhtl5lYmmpQ/Light+Theme+Website+Background.jpg?format=2500w">



<button action="index.html"  class="button">Back to Home Page</button>

</body>
</html>

