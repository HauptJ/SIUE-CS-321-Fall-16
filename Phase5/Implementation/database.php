

<?php
/******************************************************************
 *	Functions for communicating with the database. A bridge for
 *	communication so code should be independant.
 *
 *	NOTE: Think of $testID as an identifier for a collection of 		questions.
******************************************************************/


/*******************************************************************
 *Get the number of questions available for a given test.
 
 
 vars: $testID - the id of the sample test they are taking.
 return: number(integer)
*/
function questionCount(var $testID) {
/*TODO: implement*/
}


/******************************************************************
 * Get Questions from the database. Will copy $count many.
   These questions are going to be used for the student.
   
   
   vars:
   return: array of <?>
*/
function pullQuestions(var $testID, var $count) {
/*TODO: implement*/
}

/********************************************************************
  Pull a given question from the database
  
  
  vars:
  return: array of <?>
*/
function getQuestion(var $testID, var $questionID) {

}
/********************************************************************
  Pull the answers for a given question.
  
  
  vars:
  return: array of <?>
*/
function getAnswers(var $testID, var $questionID) {

}
/*Make this a thing..?
function sort(var $arr[], var $asc) {

}*/
?>
