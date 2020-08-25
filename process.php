<?php

// Get values from form
$username = $_POST['user'];
$password = $_POST['pass'];

// To prevent mysql injection
$username = mysqli_real_escape_string(stripcslashes($username));
$password = mysqli_real_escape_string(stripcslashes($password));

// Connect to the server and select db
mysql_connect("localhost", "root", "1234");
mysql_select_db("login");

// Query the database for user
$result = mysql_query("select * from users where login
                      = `$username` and password = `$password`") or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if($row['login'] == $username && row['password'] == $password){
  echo "Login success, welcome here, ".$row['username']."!";
}
else{
  echo "Failed to loging";
}


 ?>
