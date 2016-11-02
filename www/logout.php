<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php');

   echo '<meta HTTP-EQUIV="REFRESH" content="3; url=index.php">'
?>