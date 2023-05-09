<?php

$conn = mysqli_connect('localhost','root','','kontak_db') or die('connection failed');

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
   <title>WEB IKHSAN</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/testcss.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">TheSanns<span>GARAGE.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">RESERVASI</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <!-- <div class="content text-center text-md-left"> -->
            <!-- <h3>let us brighten your smile</h3> -->
            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora voluptatibus.</p> -->
            <!-- <a href="#contact" class="link-btn">make appointment</a> -->
         <!-- </div> -->
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/mechanic.png" class="w-75 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>Tentang TheSanns GARAGE</span>
            <h3>True Healthcare For Your CAR</h3>
            <p>The Sanns GARAGE adalah tempat yang dirancang khusus untuk menyimpan, memelihara, dan mempersiapkan mobil balap untuk berbagai jenis perlombaan. Dan sudah dilengkapi dengan peralatan khusus seperti lift, alat pengukur dan penguji performa mobil, dan mesin penggiling ban. Selain itu juga dilengkapi dengan bahan bakar, oli, dan suku cadang yang diperlukan untuk menjaga mobil dalam kondisi optimal. The Sanns GARAGE merupakan tempat yang penting untuk tim balap mobil, karena kesiapan dan performa mobil yang baik sangat menentukan kesuksesan dalam kompetisi balap mobil bagi The Sanns GARAGE.</p>
            <a href="#contact" class="link-btn">RESERVASI</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/1.png" alt="">
         <h3>SERVICES</h3>
         <p>Proses pemeliharaan dan perawatan mobil</p>
      </div>

      <div class="box">
         <img src="images/2.png" alt="">
         <h3>PAINTING</h3>
         <p>Metode yang diperuntukan mempercantik dan memperbaiki bodi mobil anda</p>
      </div>

      <div class="box">
         <img src="images/3.png" alt="">
         <h3>RACE</h3>
         <p>Mofikasi mobil anda dengan memakai part-part racing</p>
      </div>

      <div class="box">
         <img src="images/4.png" alt="">
         <h3>UPGRADE</h3>
         <p>Menjual part-part untuk menambah performa mobil anda</p>
      </div>

      <div class="box">
         <img src="images/5.png" alt="">
         <h3>Tunning</h3>
         <p>Proses perawatan rutin yang dilakukan pada mobil untuk memastikan performa mesin tetap optimal dan efisien</p>
      </div>

      <div class="box">
         <img src="images/6.png" alt="">
         <h3>EXHAUST</h3>
         <p>Membuat mesin bekerja lebih keras dari kondisi normal. Dengan tetap optimal</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/gnjr.jpg" alt="">
         <p>Puas banget disini sumpah.<br>Gak bakal kecewa<br>Dan harganya terjangkau<br>Tunggu apa lagi, sikatt<br></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/dvt.jpg" alt="">
         <p>Tunning disini aja<br>mobil makin kencang<br>part-partnya juga basgus<br>pokoknya mah, WELL!<br></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/cc.jpg" alt="">
         <p>Percuma punya mobil balap<br>tapi ga main ke<br>TheSanns GARAGE<br>CHUAKKSS!!!<br></p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">RESERVASI</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="RESERVASI" name="submit" class="link-btn">
   </form>  

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>085609796361</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Jambi, Indonesia</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>ikhsan@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>IKHSAN BOM BOM</span>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>