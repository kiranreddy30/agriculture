<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Signup</title>
    <link href="./blogmaterial/photos/WhatsApp Image 2023-05-08 at 10.46.07 PM.jpeg" rel="icon">
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/signupstyle.css">
    <!--Stylesheet-->
    
</head>
<body>
    <div class="background">
        <!-- <div class="shape"></div>
        <div class="shape"></div> -->
    </div>
    <form action="signup_form.php" method="post" id="signupform" onsubmit="return validSignup()" >
        <h3>Signup Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">
            
        <label for="password">Email</label>
        <input type="email" placeholder="Email-id" name="email" id="email">

        <input type="submit" value="SUBMIT" name="sent" class="button" >
        <!-- <button type="submit" name="sent">Log In</button> -->
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>


    <script src="./js/check.js"></script>

</body>
</html>