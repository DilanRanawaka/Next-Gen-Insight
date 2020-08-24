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
$Payment = 1000*$NORooms;



if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into booking (CheckIN,CheckOut,RoomType,Num_of_rooms,Num_of_Adults,Num_of_Children,Card_Type,Card_Name,Card_no,Code,Expiration_Date)
 values ('$CheckIN','$CheckOUT','$RoomType','$NORooms','$NOAdults','$Nochild','$CardType','$CardName','$CardNo','$Code','$EXPdate')";

 if(mysqli_query($link, $sql)){
    for($i=101;$i<10000;$i++){
        $count=$i;
    }
    }

if(mysqli_query($link, $sql))
{
    echo "<h1 align=center>Thank you for your Booking</h1><table align=center border=2>
    <tr><td colspan='2' align=center>Your Booking Details</td></tr>
    <tr><td>Invoice Number : </td><td>".$count."</td></tr>
    <tr><td>Name : </td><td>" .$CardName. "</td></tr>
    <tr><td>Date : </td><td>".$CheckIN."</td></tr>
    <tr><td>Payment : </td><td>".$Payment."</td></tr>
    <tr><td colspan='2' align=center>Enjoy your stay!</td></tr>
    </table>";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);

?>
