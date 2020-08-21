<?php

$FirstName = $_REQUEST['Fname'];
$LastName = $_REQUEST['Lname'];
$Email = $_REQUEST['Email'];
$DOB = $_REQUEST['DOB'];
$Pass = $_REQUEST['Pass'];
$phone=$_REQUEST['Phone'];
$NIC=$_REQUEST['NIC'];
$passport = $_REQUEST['Pnum'];
$Country = $_REQUEST['CON'];


$link = mysqli_connect("localhost", "root", "","hotelweb");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "insert into registration (Fname,Lname,Email,Birth,Password,Contact,NIC,Passport,Country) values ($FirstName,$LastName,$Email,$DOB,$Pass,$phone,$NIC,$passport,$Country)";
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

