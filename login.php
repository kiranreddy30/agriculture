<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <link href="./blogmaterial/photos/WhatsApp Image 2023-05-08 at 10.46.07 PM.jpeg" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <link rel="stylesheet" href="./css/loginstyle.css">
    <link rel="stylesheet" href="./css/style1.css">

</head>
<body>


    <header>
        <header>
        <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php" style="font-size: 35px; color:black;">
        <i class="fa-solid fa-tractor fa-xl" style="color: black;"></i><span></span><span></span> <span></span> Crop Cure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><i class="fa-solid fa-house" style="color: black;"></i>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="forum.php" style="color: black;">FORUM</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="check.php" class="nav-link" style="color: black;">CURE </a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="blog.php" class="nav-link" style="color: black;">NEWS </a>

              </div>
            </li>
            <li class="nav-item" style="color: white;">
              <a class="nav-link" href="contactf.php" style="color: black;">Contact Us</a>

            </li>

            <li class="nav-item">
              <a class="nav-link " href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: black;"></i> </a>
            </li>
          </ul>
        </div>
      </nav>

        </header>
    </header>

    
    <div class="background">

    </div>
    <form action="login_form.php" method="post" id="loginform" onsubmit="return validSignup()" >
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <input type="submit" value="SUBMIT" name="sent" class="button" >

        <div class="social">
          <div class="go"><i class="fab fa-google"></i></div>
          <div class="fb"><i class=" fab fa-facebook"></i></div>
          <a href="signup.php"><div class="signup"><i class="fa-solid fa-user-plus"></i> </div></a>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/f9fb1558da.js" crossorigin="anonymous"></script>
    <script src="./js/check2.js"></script>
    
    <script src="https://kit.fontawesome.com/f9fb1558da.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>


</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
    <link href="./blogmaterial/photos/WhatsApp Image 2023-05-08 at 10.46.07 PM.jpeg" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/loginstyle.css">
</head>
<body>
    <div class="background">

    </div>
    <form action="login_form.php" method="post" id="loginform" onsubmit="return validSignup()" >
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <input type="submit" value="SUBMIT" name="sent" class="button" >

        <div class="social">
          <div class="go"><i class="fab fa-google"></i></div>
          <div class="fb"><i class=" fab fa-facebook"></i></div>
          <a href="signup.php"><div class="signup"><i class="fa-solid fa-user-plus"></i> </div></a>
        </div>
    </form>

    <script src="https://kit.fontawesome.com/f9fb1558da.js" crossorigin="anonymous"></script>
    <script src="./js/check2.js"></script>

</body>
>>>>>>> b10db5c8fb7e490fa73877500b66c07e633d44e9
</html>