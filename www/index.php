<html lang = "en">
   <head>
      <title>College Board: Computer Science</title>
      <link href = "/css/bootstrap.min.css" rel = "stylesheet">
			<link href = "/css/index.css" rel = "stylesheet">
   </head>
   <body>
   		<h2>Welcome to AP Computer Science!</h2>
      <h2>Enter your username and password!</h2>
      <div class = "container form-signin">
      
      </div>
      <div class = "container">
         <form class = "form-signin" role = "form" 
            method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h4 class = "form-signin-heading"></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = Student" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>

<?php
    $username = "";
    $password = "";

if (isset($_POST["SUBMIT"])){
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    if ($username = "" || $password = "")
    {
        echo 'The username and / or password is / are invalid.';
    }
    elseif ($username == "Teacher")
    {
        header('Refresh: 2; URL = home.php?dest=TeachersHome');
    }
    elseif ($username == "Student")
    {
        header('Refresh: 2; URL = home.php?dest=StudentsHome');
    }
    else
    {
        echo 'The username and / or password is / are invalid.'; 
    }
    
}   
?>
 
         
          <a href = "logout.php" tite = "Click here to reset this web application.">.
      </div>
   </body>
</html>