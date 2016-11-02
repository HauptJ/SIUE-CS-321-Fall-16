<!DOCTYPE html>
<html>
<body>

<?php
session_start();

$page;
//this says what the page should choose to load..
$content = $GET['q'];
if (isset($GET['q'])) {
	$_SESSION['pageType'] = $GET['q'];
} else if (isset($POST['q'])) {
	$_SESSION['pageType'] = $POST['q'];
}
switch ($content) {
	case 'big-ideas': 				break;
	case 'examples':$page = 'menu-page.php';	break;
	case 'teacher': $page = 'menu-page.php';  	break;
	case 'student': $page = 'menu-page.php'; 	break;
	case 'home': 	$page = 'menu-page.php'; 	break;
	default:	$page = 'menu-page.php';	break;
}


include $page;
loadPage();




/*Code for the header of webpage*/
require 'page-header.php';




?>

</body>
<html>