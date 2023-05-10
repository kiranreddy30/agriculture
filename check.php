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

   <link rel="stylesheet" href="./css/style2.css">

</head>

<body style="background-color: black;">

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

         <input type="submit" value="submit" class="btn" name="send">

      </form>

   </section>

</body>

</html>