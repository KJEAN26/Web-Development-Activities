<?php
       if(isset($_POST['login'])){
          header('location: main.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="login-page">
        <div class="form">
        <form class="login-form" method="post">
        <input type="email" placeholder="Email Address">
        <input type="password" placeholder="Password">
       <input type="submit" value="LOGIN" name="login">
       
<p class="message">Not Registered?  <a href="registration.php"> Register</a></p>
            </form> 
       </div>

    </div>

</body>
</html>
