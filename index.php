<!DOCTYPE html>

<?php
    session_start();       
    $username="user";
    $password="password";
   
       
    if(isset($_POST['username']) && isset($_POST['password'])) {           
        if($_POST['username'] == $username && $_POST['password']==$password){
            $_SESSION['loggedin']=true;
        }
        else {
            echo "Username or password is incorrect";
        }
    }
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        header("location: loginsucess.php");  
    }
  
?>

<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="css\style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">

</head>
<body>
    <img src="image/login.png" alt="">
<form  method ="post" action="index.php">
      username: <br>
      <input type="text"  name="username" placeholder="Enter Username"><br>
      password :<br>
      <input type="password"  name="password" placeholder="Enter Password"><br>
       <input type="submit"  value="login">
</form>
</body>
</html>

