<?php

//request is post
if (strcmp($_SERVER['REQUEST_METHOD'],"GET") == 0) {
	//script + all content prior to QUERY_STRING
	$accpt = $_SERVER['HTTP_ACCEPT'];
	
	//the qualified location of this file local to the server directory
	$scrpt = $_SERVER['SCRIPT_NAME'];
	//cut the script out - all i need is the content after
	$diff =	substr($accpt,strlen($scrpt));
	echo $diff."<br />";
}

	echo $_SERVER['PHP_SELF']."<br/>";
	echo $_SERVER['HTTP_ACCEPT']."<br/>";
	echo $_SERVER['QUERY_STRING']."<br/>";
	echo $_SERVER['REQUEST_METHOD']."<br/>";
	echo "'".$_SERVER['SCRIPT_NAME']."<br/>";
	
?>


