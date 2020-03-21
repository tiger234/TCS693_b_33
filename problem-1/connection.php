<?php 
 //conn variable is for establishing connection with the database 
 $conn = mysqli_connect("localhost", "root", "", "cse2020");
 if (!$conn) {
     echo("Connection not establisted. Please check your database.");
 }
?>