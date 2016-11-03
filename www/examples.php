<?php

//request is post
require_once 'NavigationMap.php';
if (strcmp($_SERVER['REQUEST_METHOD'],"GET") == 0) {
	//script + all content prior to QUERY_STRING
	$content = $_GET['dest'];
	$GLOBALS['content'] = $content;
}
	if (!isset($GLOBALS['content']) || $GLOBALS['content'] == "") {
		//example was not declared

	}
//display page contents


//header & title contents
?>
<html>  <head>    <link rel="stylesheet" type="text/css" href="/css/style.css">  </head>
  <body>    <article class="page">      <header id="CBHeader">        <a href="index.html"><img id="homeIcon" src="/icons/home.jpg" alt="home icon"></a>        <h1 id="CBHeaderText" class="center">College Board</h1>
        <h2 id="CBSubHeaderText"><?php echo $GLOBALS['content'];?></h2>      </header>
		
		<nav>
		<?php
				require_once 'NavigationMap.php';
				$stack = array();
				$node = $MENU_PARENT[$GLOBALS['content']];
				
				while ($node !== null) {
				
					$stack[] = $node;
					$node = $MENU_PARENT[$node];
				}
				$linkchain = array_reverse($stack);
				foreach ($linkchain as $txt) {
						echo "\
						<a href='".$_SERVER['SCRIPT_NAME']."?dest=".$txt."'><div class='nav-item'>$txt</div></a>";
					
				}
		?>	  </nav>