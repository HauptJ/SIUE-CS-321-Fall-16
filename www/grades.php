<!DOCTYPE html>
<html>

<head>

  <title> Quiz Grade </title>

  <link rel="stylesheet" type= "text/css" href="quiz.css"/>

</head>

<body>

  <div id="page">

    <header id="CBHeader">
        <a href="home.php"><img id="homeIcon" src="icons/home.jpg" alt="home icon"></a>
        <h1 id="CBHeaderText">Quiz Grade</h1>
    </header>



    <nav>      <a href="home.php"><div class="nav-item">Home</div></a>
      <a href="student.html"><div class="nav-item">Student</div></a>
      <a href="practice_quiz.php"><div class="nav-item">Quiz</div></a>
    </nav>

    <?php

      $answer1 = $_POST['question-1-answers'];
      $answer2 = $_POST['question-2-answers'];
      $answer3 = $_POST['question-3-answers'];
      $answer4 = $_POST['question-4-answers'];
      $answer5 = $_POST['question-5-answers'];

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
    
      $totalCorrect = 0;
      $questionNumber = 0;

foreach($dbh->query('SELECT Answer FROM quiz') as $row) {
  $questionNumber = $questionNumber +1; 
  $answerString = "question-".$questionNumber."-answers";
  $answer = $_POST[$answerString];
  if ($answer == $row['Answer']) {$totalCorrect++;}
}

      echo '<div id="results" >'. "Total: " . $totalCorrect. ' /'. $questionNumber . '</div>' 

  
     ?>
</div>

</body>

</html>