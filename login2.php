<?php
$connect =mysqli_connect("localhost","root","","account credentials");
if (!$connect)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("account credentials", $connect);
$password = $_POST['password'];
$username = $_POST['username'];
$query2=mysql_query("SELECT * FROM users  WHERE  pass = '".md5('$password')."' AND user = '".mysql_real_escape_string($username)."'") or die (mysql_error());
if(mysql_num_rows($query2)==1) {
echo"Login succesful";
$_SESSION['name']=$name;
 header('location:index.html');
}
else {
echo "Username or password was not correct, please try again";
}
?>