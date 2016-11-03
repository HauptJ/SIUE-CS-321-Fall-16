<?php

//request is post
require_once 'NavigationMap.php';
if (strcmp($_SERVER['REQUEST_METHOD'],"GET") == 0) {
	//script + all content prior to QUERY_STRING
	$content = $_GET['dest'];
	$GLOBALS['content'] = $content;
}
	if (!isset($GLOBALS['content']) || $GLOBALS['content'] == "") {
		$GLOBALS['content']='Home';
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
						echo "<a href='".$_SERVER['SCRIPT_NAME']."?dest=".$txt."'><div class='nav-item'>$txt</div></a>";
					
				}
		?>	  </nav>

		<?php
		$content = $GLOBALS['content'];
			if (strcmp(gettype($MENU_MESSAGE[$content]),"array") == 0) {
			
				//each menu
				for ($i=0;$i<count($MENU_MESSAGE[$content]);$i++) {
					//echo var_dump($MENU_LABELS[$content][$i]);
					makeMenu($MENU_MESSAGE[$content][$i],$MENU_LABELS[$content][$i],$MENU_LINKS[$content][$i],$LINK_TARGET[$content][$i]);
				}
			} else {
					makeMenu($MENU_MESSAGE[$content],$MENU_LABELS[$content],$MENU_LINKS[$content],$LINK_TARGET[$content]);
			}


function makeMenu($title, $links, $items, $target) {


	echo "\
	<section class='menu'>";
	echo "\
	<div class='menu-header'>$title</div>";

	
	for ($i = 0;$i<count($items);$i++) {
		echo "\
		<a href='{$target[$i]}?dest={$links[$i]}'><div class='menu-item center'>$items[$i]</div></a>";
	}


				echo "\
				</section>";
}
		?>

		