<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "ZurgUser", "");
// Selecting Database
$db = mysql_select_db("Zurg", $connection);
session_start();// Starting Session
// store session
$userCheck=$_SESSION['login_user'];
// fetch query to verify user info from DB
$ses_sql=mysql_query("select Name from users where Name='$userCheck'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$loginSession =$row['Name'];
if(!isset($loginSession)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>