<?php

//request is post
require_once 'NavigationMap.php';
if (strcmp($_SERVER['REQUEST_METHOD'],"GET") == 0) {
	//script + all content prior to QUERY_STRING
	$link = $_SERVER['PHP_SELF'];
	
	//the qualified location of this file local to the server directory
	$scrpt = $_SERVER['SCRIPT_NAME'];
	//cut the script out - all i need is the content after

	//which page to load
	$content = substr($link,strlen($scrpt)+1));
}
//display page contents


//header & title contents
?>
<html>  <head>    <link rel="stylesheet" type="text/css" href="style.css">  </head>
  <body>    <article class="page">      <header id="CBHeader">        <a href="index.html"><img id="homeIcon" src="icons/home.jpg" alt="home icon"></a>        <h1 id="CBHeaderText" class="center">College Board</h1>
        <h2 id="CBSubHeaderText"><?php echo $MENU_LABELS[$content];?></h2>      </header>



	
<?php
function menuButton(var $link,var $txt) {
	return "<a href='$link'><div class='menu-item center'>$txt
		</div></a>";
}

function menuHeader(var $txt,var $id) {
	return "<div class='menu-header center'>$txt</div>";
}

?>


