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
<html>

        <h2 id="CBSubHeaderText"><?php echo $EX_NAME[$GLOBALS['content']];?></h2>
		
		<nav>
		 <a href="../student.html"><div class="nav-item">Student</div></a>
		 <a href="./example-index.html"><div class="nav-item">Examples</div></a>

		
		<?php
		$page = 0;
			if (isset($_GET['p']) && isnumber($_GET['p']) {
					$page = number($_GET
			}

		?>



	  