<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="./blogmaterial/photos/WhatsApp Image 2023-05-08 at 10.46.07 PM.jpeg" rel="icon">

  <title>CropCure</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./css/mobile-style.css">
</head>

<body>
  <header>
    
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="home.php" style="font-size: 35px; color:black;">
        <i class="fa-solid fa-tractor fa-xl" style="color: black;"></i><span></span><span></span> <span></span> Crop Cure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php"><i class="fa-solid fa-house" style="color: black;"></i>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" style="color: black;">PRODUCTS</a>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="check.php" class="nav-link" style="color: black;">CURE </a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <div class="dropdown">
                <a href="#" class="nav-link" style="color: black;">NEWS</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: black;">FACT</a>

            </li>

            <li class="nav-item">
              <a class="nav-link " href="login.php"><i class="fa-solid fa-right-to-bracket" style="color: black;"></i> </a>
            </li>
          </ul>
        </div>
      </nav>

      <hr>
      <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-5 col-10">
            <div class="pray">

            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left" style="font-style: normal; font-size:30px; display:flex; text-align: center;font-family: 'Dancing Script', cursive;">
            <?php

             $connection=mysqli_connect('localhost','dbms07','dbms@07','dbms07');
             if(isset($_POST['send'])){
                $plantname=$_POST['planname'];
                $symptomname=$_POST['sympomname'];

<<<<<<< HEAD
                $req1="select treatment_desc from treatment where disease_id=(select disease_id from dis_ident where plant_id=(select plant_id from plant where plant_name='$plantname') and symptom_id=(select symptom_id from symptoms where symptom_name='$symptomname'))" ;
=======
               
                $req1="select * from treatment where disease_id=(select disease_id from dis_ident where plant_id=(select plant_id from plant where plant_name='$plantname') and symptom_id=(select symptom_id from symptoms where symptom_name='$symptomname'))" ;
                $req3="select disease_desc from disease where disease_id=(select disease_id from dis_ident where plant_id=(select plant_id from plant where plant_name='$plantname') and symptom_id=(select symptom_id from symptoms where symptom_name='$symptomname'))";
>>>>>>> b10db5c8fb7e490fa73877500b66c07e633d44e9
                $result=mysqli_query($connection, $req1);
                $result3=mysqli_query($connection, $req3);


                if(mysqli_num_rows($result3)>0){
                  while($row3=mysqli_fetch_assoc($result3)) {


                    echo "Disease: ";
                   
                    echo  htmlspecialchars($row3["disease_desc"]);
                    echo '<br>';
                    echo '<br>';
   
                 }

                }

               if (mysqli_num_rows($result) > 0) {

<<<<<<< HEAD
                if (mysqli_num_rows($result) > 0) {

=======
>>>>>>> b10db5c8fb7e490fa73877500b66c07e633d44e9
                    while($row = mysqli_fetch_assoc($result)) {

                      echo "Treatment: ";
                      echo '<br>';
                       echo  htmlspecialchars($row["treatment_desc"]);
                       echo '<br>';
                       echo '<br>';

                       echo "Fertilisers: ";
                       echo '<br>';
                       echo  htmlspecialchars($row['fertilisers']);
                    
                      
                       //echo '<h3>' . htmlspecialchars($row["fertilisers"]) . '</h3>';

				        
                       
                   }
                 } else {
                    echo "No solution has been found we will shortly update your query";

                    $req2="INSERT INTO `queststore` (`q_id`, `plant name`, `symptom`) VALUES (NULL,'$plantname', '$symptomname')";
                    $result=mysqli_query($connection, $req2);

<<<<<<< HEAD
                  }
=======
                 }
>>>>>>> b10db5c8fb7e490fa73877500b66c07e633d44e9

            }

             ?>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

    </div>

  </header>
    <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5" style="position: relative; left: 100px;">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Our expertise will provide a detailed solution for the damaged crop.</p>

        </div>

        <div class="col-md-2 col-sm-12" style="position: relative; left: 400px;">
          <h4 class="text-light">Follow Us On</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f" style="color: blue;"></i>
            <i class="fab fa-instagram" style="color: rgb(247, 119, 55);"></i>
            <i class="fab fa-twitter" style="color: blue;"></i>
            <i class="fab fa-youtube" style="color: red;"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

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