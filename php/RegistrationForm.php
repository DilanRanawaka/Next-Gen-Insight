<?php

$FirstName = $_REQUEST['Fname'];
$LastName = $_REQUEST['Lname'];
$Email = $_REQUEST['Email'];
$DOB = $_REQUEST['DOB'];
$Pass = $_REQUEST['Pass'];
$phone=$_REQUEST['Phone'];
$passpost = $_REQUEST['Pnum'];
$Country = $_REQUEST['CON'];





?>
<table border= "5px solid black">
    <tr>
        <td>First Name : </td>
        <td><?php echo $FirstName?></td>
</tr>
        <tr>
        <td>Last Name : </td>
        <td><?php echo $LastName?></td>
</tr>
<tr>
        <td>Date of Birth: </td>
        <td><?php echo $DOB?></td>
</tr>
<tr>
        <td>Passport Number : </td>
        <td><?php echo $passport?></td>
</tr>
<tr>
        <td>Country : </td>
        <td><?php echo $Country?></td>
</tr>
<tr>
        <td>Email: </td>
        <td><?php echo $Email?></td>
</tr>
<tr>
        <td>Contact Number : </td>
        <td><?php echo $phone ?></td>
</tr>
<tr>
        <td>Password : </td>
        <td><?php echo $Pass?></td>
</tr>




