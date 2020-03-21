<?php
include("connection.php");
$eno=$_GET['eno'];
$query="DELETE from cse2020 where enrollmentno='$eno'";
if(mysqli_query($conn,$query))
{echo "Data Deleted";}
else
{echo "Data not Deleted";}
?>