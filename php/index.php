<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelweb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$IN=$_REQUEST['CheckIN'];
            $OUT=$_REQUEST['CheckOUT'];

            $query="select * from booking where CheckIN='$IN' and CheckOUT='$OUT'";
    $rs=mysqli_query($conn,$query);
    $rowcount = mysqli_num_rows($rs);
	if($rowcount>1)
	{
		echo "<h1 align=center>Sorry! The hotel is not available at the moment</h1><form action=index.html><input type=submit value=BacktoHomePage></form>";
	}
	else
	{
		echo "<h1 align=center>Congratz! Pick out your stay now </h1><form action=Roompagehome.html><input type=submit value=ExploreAccomodations></form>";

	}

mysqli_close($conn);
?>
