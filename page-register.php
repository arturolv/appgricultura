<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AppGRICULTURA</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="images/favico.png">

    <link rel="stylesheet" href="stylelogin.css">

</head>
<body>

<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `usuarios` (username, password, email, trn_date)
VALUES ('$username', '".$password."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='page-login.php'>Login</a></div>";
        }
    }else{
?>
	<form class="login" action="" method="post">
    <a class="navbar-brand" href="./"><img src="images/logo.png" alt=""></a>
		<input type="text" class="login-input" name="username" placeholder="Username" required />
    <input type="text" class="login-input" name="email" placeholder="Email Adress">
    <input type="password" class="login-input" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Register" class="login-button">
  <p class="login-lost">Already Registered? <a href="page-login.php">Login Here</a></p>
  </form>

<?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
