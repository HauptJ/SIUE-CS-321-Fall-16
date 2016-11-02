<?php
   ob_start();
   session_start();
   
   $error=''; // errors
   if (isset($_POST['submit'])) {
   if (empty($_POST['username']) || empty($_POST['password'])) {
   $error = "Username or Password is invalid";
   }
   else
   {
   // Define $username and $password
   $username=$_POST['username'];
   $password=$_POST['password'];
   // Connect to DB w/ username and password
   $connection = mysql_connect("localhost", "ZurgUser", "");
   // clean info
   $username = stripslashes($username);
   $password = stripslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);
   // Selecting Database
   $db = mysql_select_db("Zurg", $connection);
   // SQL query to verify user validity
   $query = mysql_query("select * from users where Password='$password' AND Name='$username'", $connection);
   $rows = mysql_num_rows($query);
   if ($rows == 1) {
   $_SESSION['loginUser']=$username; // Initializing Session
   header("location: home.php"); // Redirecting To home.php
   } 
   else {
   $error = "Invalid login: You entered an invalid username or password";
   }
   mysql_close($connection); 
   }
   }


       //DEBUG
      echo $username;
   		echo $password;

   ?>
<html lang = "en">
   <head>
      <title>College Board: Computer Science</title>
      <link href = "bootstrap.min.css" rel = "stylesheet">
			<link href = "index.css" rel = "stylesheet">
   </head>
   <body>
   		<h2>Welcome!</h2>
      <h2>Enter Username and Password</h2>
      <div class = "container form-signin">
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
            
               if ($_POST['username'] == 'Student' && 
                  $_POST['password'] == 'password') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Student';

                  //Works sometimes? WTF???
                  echo 'You have entered valid use name and password. If you are not logged in momentarily, there is an error with this website. Sorry';
               }else {
                  $msg = 'Invalid Login: You have entered a wrong username or password';
               }
            }
            ?>
      </div>
      <div class = "container">
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
               ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = Student" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
 
         
          <a href = "logout.php" tite = "Click here to reset this web application.">.
      </div>
   </body>
</html>

