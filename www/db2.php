<?php
$hostname = "localhost";
$username = "ZurgUser";
$password = "Dr4g0n!3";
 
 try {
     $dbh = new PDO("mysql:host=$hostname;dbname=Zurg", $username, $password);
         echo "Connected to database"; // check for connection
             }
             catch(PDOException $e)
                 {
                     echo $e->getMessage();
                         }
                         ?>
