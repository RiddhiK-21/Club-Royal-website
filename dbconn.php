<?php
$conn = mysqli_connect('localhost:8111','root','');
 if(!$conn)
 {
     die("Database Connection Failed".mysqli_error($conn));
 }
 $select_db = mysqli_select_db($conn,'cms');
 if(!$select_db)
 {
     die("Database Selection Failed".mysqli_error($conn));
 }
?>