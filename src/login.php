<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./csss/loginstyle.css">
</head>
<body>
    <div class="background">
        <!-- <div class="shape"></div>
        <div class="shape"></div> -->
    </div>
    <form action="login_form.php" method="post" id="loginform" onsubmit="return validSignup()" >
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username">


        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <input type="submit" value="SUBMIT" name="sent" class="button" >
        <!-- <button type="submit" name="sent">Log In</button> -->
        <div class="social">
          <div class="go"><i class="fab fa-google"></i></div>
          <div class="fb"><i class=" fab fa-facebook"></i></div>
          <a href="signup.php"><div class="signup"><i class="fa-solid fa-user-plus"></i> </div></a>
        </div>
    </form>


    <script src="https://kit.fontawesome.com/f9fb1558da.js" crossorigin="anonymous"></script>
    <script src="check2.js"></script>

</body>
</html>