<!DOCTYPE HTML>
<?php 
    session_start();
    if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
        header("location:index.php");         
    }

    // remove all session variables
   session_unset();
   // destroy the session
      session_destroy();
?>

<html>
<body>    
 <h3> You have logged in successfully!</h3>
</body>
</html>