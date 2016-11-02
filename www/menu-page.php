<?php
session_start();
var $load;
switch ($_SESSION['pageType']) {
	case 'teacher': 	$load = 'content/teacher.php';	break;
	case 'student': 	$load = 'content/student.php';	break;
}
/*Generates a button for a menu*/
function menuButton(var $link,var $txt) {
	return "<a href='$link'><div class='menu-item center'>$txt
		</div></a>";
}

function menuHeader(var $txt,var $id) {
	return "<div class='menu-header center'>$txt</div>";
}

?>