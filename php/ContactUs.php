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

<body background="https://images.squarespace-cdn.com/content/v1/5d5b301d8c20010001f8932c/1566589751051-V153KAJN14GML99WSS05/ke17ZwdGBToddI8pDm48kCDnvzZDSTqrZYB0qToMReZ7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0psyQQR5KrxgIm8QcotvsYtvUHnJsni5ivcu2RP0UO8zWN1uCXtq4fHLhtl5lYmmpQ/Light+Theme+Website+Background.jpg?format=2500w">

<form action="index.html"><input type="submit" class = btnSubmit value="Back to Home Page"/></form>
</body>
</html>


