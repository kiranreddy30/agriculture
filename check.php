<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CropCure</title>
   <link href="./blogmaterial/photos/WhatsApp Image 2023-05-08 at 10.46.07 PM.jpeg" rel="icon">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

   <link rel="stylesheet" href="./css/style2.css">
   <link rel="stylesheet" href="./css/style1.css">

</head>

<body style="background-color: black;">

   <header>
	  <header style="background-color: #8BC34A; color: black; padding: 10px;">

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

   <section class="booking">

      <h1 class="heading-title" style="color: green;">Get ur plant cured here!</h1>

      <form action="solution.php" method="post" class="book-form" name="bokform" style="background-color: #5ae755;">

         <div class="flex">

            <div class="inputBox">
               <span style="color: black;">Plant name :</span>
               <input required type="text" placeholder="enter plant name" name="planname">
            </div>

            <div class="inputBox">
               <span style="color: black;">Symptom :</span>
               <input type="text" placeholder="enter the symptom observed" name="sympomname">
            </div>

         </div>

         <input type="submit" value="submit" class="btn" name="send"> <span></span>
         <!-- <input type="submit" value="Home" class="btn"> -->
         

      </form>
      <!-- <a href="index.php"> <button>Home</button></a> -->
   </section>

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

</html>