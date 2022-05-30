<?php

$conn = mysqli_connect('localhost','root','','avis') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DentaleCare</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Care.</span></a>

         <nav class="nav">
            <a href="#home">Accueille</a>
            <a href="#about">à propos</a>
            <a href="#services">services</a>
            <a href="#reviews">Commentaires</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">prendre un rendez-vous</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>laissez-nous illuminer votre sourire</h3>
            <p>La douleur elle-même est l'amour du principal, l'adipisique Ceux qui louent donc comme s'il s'agissait d'autres moments de plaisir.</p>
            <a href="#contact" class="link-btn">prendre un rendez-vous</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>à propos de nous</span>
            <h3>De vrais soins de santé pour votre famille</h3>
            <p>De vrais soins de santé pour votre famille</p>
            <a href="#contact" class="link-btn">prendre un rendez-vous</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">Nos services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Spécialiste de l'alignement</h3>
         <p>La douleur elle-même est importante pour la principale élite adipeuse. Fuyez, n'est-ce pas ?</p>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Dentisterie cosmétique</h3>
         <p>La douleur elle-même est importante pour la principale élite adipeuse. Fuyez, n'est-ce pas ?</p>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Experts en hygiène bucco-dentaire</h3>
         <p>La douleur elle-même est importante pour la principale élite adipeuse. Être petit ?</p>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Spécialiste des canaux radiculaires</h3>
         <p>La douleur elle-même est importante pour la principale élite adipeuse. Être petit ?</p>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Conseil dentaire en direct</h3>
         <p>La douleur elle-même est importante pour la principale élite adipeuse. Être petit ?</p>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
         <p>La douleur elle-même est importante pour la principale élite adipeuse. Être petit ?</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">processus de travail</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Dentisterie cosmétique</h3>
         <p>La douleur elle-même est la douleur, elle aime le processus d'adipisicing principal. Surtout, attrapez-le !</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Dentisterie pédiatrique</h3>
         <p>La douleur elle-même est la douleur, elle aime le processus d'adipisicing principal. Surtout, attrapez-le !</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Implants dentaires</h3>
         <p>La douleur elle-même est la douleur, elle aime le processus d'adipisicing principal. Surtout, attrapez-le !</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> clients satisfaits </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Votre prise en charge rapide, votre professionnalisme et l’excellence du service à la clientèle que l’on y reçoit, vous distinguent des autres.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anis Serrar</h3>
         <span> clients satisfaits</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p> VMa famille est très satisfaite du service de toute l’équipe du cabinet dentaire qui est très cordial et professionnel. Nous avons rencontré 3 dentistes et sommes très satisfait du service reçu de chacun.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Imene bouteraa</h3>
         <span>clients satisfaits</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Je recommande à tous cette clinique, sans contredit.Merci à toute l’équipe du Centre Dentaire Pierrefonds, vous me redonnez mon sourire.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chemseddine tigane</h3>
         <span>clients satisfaits</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">prendre un rendez-vous</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>votre nom :</span>
      <input type="text" name="name" placeholder="Entrez votre nom" class="box" required>
      <span>votre email :</span>
      <input type="email" name="email" placeholder="Entrez  votre email" class="box" required>
      <span>votre numero :</span>
      <input type="number" name="number" placeholder="Entrez  votre numero" class="box" required>
      <span>date de rendez-vous :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="prendre un rendez-vous" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Numero telephone</h3>
         <p>+213668979699</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>mon addresse</h3>
         <p>Batna, Algerie - 51000</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>l'heure d'ouverture</h3>
         <p>07:00 to 22:00</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email </h3>
         <p>akramzender07@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Zender Akram</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>