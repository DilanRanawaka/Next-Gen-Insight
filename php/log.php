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

.btnSubmit {
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

.btnSubmit:hover {background-color: #3e8e41}

.btnSubmit:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>


<body>
<form action="index.html"><input type="submit" class = btnSubmit value="Back to Home Page"/></form>
</body>
</html>
