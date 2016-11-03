<!DOCTYPE html>
<html>
  <head>
   
    <title> Practice Quiz </title>

    <link rel = "stylesheet" type = "text/css" href = "quiz.css"/>
  </head>

  <body>
  
    <div id= "page">

    <header id="CBHeader">
        <a href="home.php"><img id="homeIcon" src="icons/home.jpg" alt="home icon"></a>
        <h1 id="CBHeaderText">Test Preparation</h1>
    </header>

<?php
$hostname = "localhost";
$username = "ZurgUser";
$password = "Dr4g0n!3";
$questionNumber = 0;
 
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=Zurg", $username, $password);
     // check for connection
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

echo '<nav>';
echo '<a href="./home.php?dest=Home"><div class="nav-item">Home</div></a>';
echo '<a href="./home.php?dest=Students Home"><div class="nav-item">Student</div></a>';
echo '</nav>';
echo '<br>';
echo '<form action = "grades.php" method ="post" id="quiz">';
echo '<ol>';

   foreach($dbh->query('SELECT * FROM quiz;') as $row) {
   $questionNumber = $questionNumber + 1;
   echo '<li>';
   echo '<h3>'. $row['Question']. '</h3>';
   echo '<div>';
   echo '<input type="radio" name="question-' . $questionNumber . '-answers" id="question-'. $questionNumber . '-answers-A" value="A" />';
   echo '<label for="question-'.$questionNumber.'-answers-A">'. 'A.) '. $row['ChoiceA']. '</label>';
   echo '</div>';

   echo '<div>';
   echo '<input type="radio" name="question-' . $questionNumber . '-answers" id="question-'. $questionNumber . '-answers-B" value="B" />';
   echo '<label for="question-'.$questionNumber.'-answers-B">'. 'B.) '. $row['ChoiceB']. '</label>';

   echo '<div>';
   echo '<input type="radio" name="question-' . $questionNumber . '-answers" id="question-'. $questionNumber . '-answers-C" value="C" />';
   echo '<label for="question-'.$questionNumber.'-answers-C">'. 'C.) '. $row['ChoiceC']. '</label>';
   echo '</div>';

   echo '<div>';
   echo '<input type="radio" name="question-' . $questionNumber . '-answers" id="question-'. $questionNumber . '-answers-D" value="D" />';
   echo '<label for="question-'.$questionNumber.'-answers-D">'. 'D.) '. $row['ChoiceD']. '</label>';
   echo '</div>';

   echo '<br>';
   echo '</li>';

   }
echo '</ol>';
?> 


       <input id = "submit" type="submit" value="Submit Quiz"/>

     </form>
     
   </div>

 </body> 
  
</html>
