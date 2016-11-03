<!DOCTYPE HTML>
<html>
<head><title>College Board: Computer Science</title></head></html>
<?php
/*
	Contains the navigation map for the software.
	Each object is a "menu" and each element to that object are the links which that menu takes you too.
	>>If this were to be the same for multiple pages, it could be confusing.
*/
//For navigation
$LINK_TARGET = array();

//for use to build the nav chains systematically.
$MENU_PARENT = array();
//the unique refereancable identifier
//  ((ALSO))  the text that appears at the top of the screen, under the title bar. (CBSubHeader).
$MENU_LABELS = array();
$MENU_LINKS = array();
//The text that is shown in the dialogue box. (Question portion of the menu)
$MENU_MESSAGE = array();



/******** Home ********/

$LINK_TARGET['Home'] = array("home.php","home.php");
$MENU_PARENT['Home'] = null;
$MENU_MESSAGE['Home'] = "Select your status";
$MENU_LABELS['Home'] = array("Teachers Home","Students Home");
$MENU_LINKS['Home'] = array("Teacher","Student");

/******** Student Home********/

$LINK_TARGET['Students Home'] = array("","","","home.php");


$MENU_PARENT["Students Home"] = "Home";
$MENU_MESSAGE["Students Home"] = "What are you looking for?";
$MENU_LABELS["Students Home"] = array("Course Information","Learning Resources","Practice Exam","Examples");
$MENU_LINKS["Students Home"] = array("Course Information","Learning Resources","Test Preperation","Examples");

/******** Teacher Home********/

$LINK_TARGET['Teachers Home'] = array(array("","",""),array("",""));



$MENU_PARENT["Teachers Home"] = "Home";
$MENU_MESSAGE["Teachers Home"] = array("What are you looking for?","Course Materials");


$MENU_LABELS["Teachers Home"] = 
		array(
					array("Teaching Resources","Tests","Students"),
					array("Thinking Practices","Course Topics")
		);
		
$MENU_LINKS["Teachers Home"] = 
		array(
					array("Teaching Resources","Teacher-Test Link?","Teacher-Student link?"),
					array("Thinking Practices","Course Topics")
		);




/**********Examples*********/
$LINK_TARGET["Examples"] = array("home.php");
$MENU_PARENT["Examples"] = "Students Home";
$MENU_MESSAGE["Examples"] = "Choose an example for review";
$MENU_LABELS["Examples"] = 
					array("Ex-Algo1","Ex-Algo2","Ex-Algo3");
$MENU_LINKS["Examples"] = array("Algorithm Analysis","Swapping","R");
