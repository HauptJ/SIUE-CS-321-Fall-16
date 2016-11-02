

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
   // SQL query to fetch information of registerd users and finds user match.
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
   ?>
<html lang = "en">
   <head>
      <title>College Board</title>
      <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel = "stylesheet">
      <style>
         body {
         padding-top: 45px;
         padding-bottom: 45px;
         background-color: white;
         }
         .form-signin {
         max-width: 350px;
         padding: 20px;
         margin: 0 auto;
         color: black;
         }
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
         margin-bottom: 10px;
         }
         .form-signin .checkbox {
         font-weight: normal;
         }
         .form-signin .form-control {
         position: relative;
         height: auto;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         padding: 10px;
         font-size: 16px;
         }
         .form-signin .form-control:focus {
         z-index: 2;
         }
         .form-signin input[type="email"] {
         margin-bottom: -1px;
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
         border-color: black;
         }
         .form-signin input[type="password"] {
         margin-bottom: 10px;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
         border-color: black;
         }
         h2{
         text-align: center;
         color: black;
         }
      </style>
   </head>
   <body>
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
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
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
         <?php 
         //DEBUG
         echo $username;
         ech $password;
         ?>
         
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
      </div>
   </body>
</html>

