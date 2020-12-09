
<?php


       if(isset($_POST['register'])){
          header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>

    <div class="login-page">
        <div class="form">
            <form class="register-form"method="post" >

                <input type="text" placeholder="First Name" name="fName">
                <input type="text" placeholder="Last Name" name="LName">
                <input type="text" placeholder="Address" name="address">
                <input type="email" placeholder="Email Address" name="eAddress">
                <input type="email" placeholder="Confirm Email Address" name="confirmAddress">
                <input type="password" placeholder="Password" name="pass">
                <input type="password" placeholder="Confirm Password" name="confirmPass">  
                <input type="submit" value="SUBMIT" name="register" name="register">             
                <p class="message">Already Registered?  <a href="login.php">Log In</a></p>
                
            </form>
      </div>
</div>

</body>
</html>