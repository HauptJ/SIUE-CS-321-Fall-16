<?php
$page = '';
	if (!isset($_GET['dest'])) {
			$page = 'home';
			//main menu
	} else {
			$page = $_GET['dest'];
			//display the desired page
	}
	echo $_SERVER['PHP_SELF']."<br/>";
	echo $_SERVER['HTTP_ACCEPT']."<br/>";
	echo $_SERVER['QUERY_STRING']."<br/>";
	echo $_SERVER['REQUEST_METHOD']."<br/>";
	
?>


