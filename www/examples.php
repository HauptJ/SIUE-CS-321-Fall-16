<?php

//request is post
require_once 'ExampleMap.php';
$content = "";
if (strcmp($_SERVER['REQUEST_METHOD'],"GET") == 0) {
	$content = $_GET['dest'];
	$GLOBALS['content'] = $content;
}
	if (!isset($GLOBALS['content']) || $GLOBALS['content'] == "") {
		//example was not declared
		//we cannot do anything
		//i do not know how to handle this :l

	}
//display page contents


//header & title contents
?>
<html>  <head>    <link rel="stylesheet" type="text/css" href="/css/style.css">  </head>
  <body>    <article class="page">      <header id="CBHeader">        <a href="index.html"><img id="homeIcon" src="/icons/home.jpg" alt="home icon"></a>        <h1 id="CBHeaderText" class="center">College Board</h1>
        <h2 id="CBSubHeaderText"><?php echo $EX_NAME[$GLOBALS['content']];?></h2>      </header>
		
		<nav>		 <a href="./home.php?dest=Home"><div class="nav-item">Home</div></a>
		 <a href="./home.php?dest=Students Home"><div class="nav-item">Students Home</div></a>
		 <a href="./home.php?dest=Examples"><div class="nav-item">Examples</div></a>	  </nav>

		
		<?php

		require_once 'ExampleMap.php';
		$content = $GLOBALS['content'];
		
		$page = 0;
			if (isset($_GET['p']) and is_numeric($_GET['p'])) {
					$page = number($_GET['p']);
			}

			
			
			
			if ($page == -1) {
				//fullText
				foreach ($EX_CONTENT[$content] as $data) {
					echo $data;
				}
				
			} else {

			
				echo $EX_CONTENT[$content][$page];

				echo "<br><br><div class='linkContainer'>";
				
				if ($page > 0) {
					echo "<a href='?examples.php?dest=$content&p=".($page-1)."'><span class='pageLink float-left'><b>&#x2190;</b></span></a>";

				}
				if ($page < count($EX_CONTENT[$content])) {
					echo "<a href='?examples.php?dest=$content&p=".($page+1)."'><span class='pageLink float-right'><b>&#x2192;</b></span></a>";
				}
			echo "</div><br/><br/>";
			

			

			}
		?>



	  