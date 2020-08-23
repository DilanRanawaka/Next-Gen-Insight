<?php
$CheckIN = $_REQUEST['INdate'];
$CheckOUT = $_REQUEST['OUTdate'];
$CardType = $_REQUEST['cardtype'];
$RoomType = $_REQUEST['roomtype'];
$CardName = $_REQUEST['cardname'];
$NORooms=$_REQUEST['nroom'];
$CardNo=$_REQUEST['cardno'];
$NOAdults = $_REQUEST['nadults'];
$Code = $_REQUEST['pinnum'];
$Nochild = $_REQUEST['nchildren'];
$EXPdate = $_REQUEST['expdate'];


$link = mysqli_connect("localhost", "root", "","hotelweb");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into booking (CheckIN,CheckOut,RoomType,Num_of_rooms,Num_of_Adults,Num_of_Children,Card_Type,Card_Name,Card_no,Code,Expiration_Date)
 values ('$CheckIN','$CheckOUT','$RoomType','$NORooms','$NOAdults','$Nochild','$CardType','$CardName','$CardNo','$Code','$EXPdate')";
if(mysqli_query($link, $sql))
{
    echo "Records inserted successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>