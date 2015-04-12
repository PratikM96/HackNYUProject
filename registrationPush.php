<?php

$connect = mysqli_connect("localhost","root","","account credentials");

mysqli_query($connect,"INSERT INTO register (First_Name,Last_Name,User_Name,Password,Email) 
VALUES ('$_POST[first_name]', '$_POST[last_name]', '$_POST[username]', '$_POST[password]', '$_POST[email]')");

?>