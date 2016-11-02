<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = index.php');

		//backup if previous autoredierct fails
   echo '<meta HTTP-EQUIV="REFRESH" content="5; url=index.php">'
?>