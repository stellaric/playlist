<!-- N'hésiter pas à consulter mes autres créations  : https://github.com/stellaric-->
<!DOCTYPE html>
<html>
  <head>
    <title>Playlist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../images/logo-play.png" />
  <!-- Head of your page -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@2.2.0/dist/axentix.min.css">
    <link href="../styles/styles.css" rel="stylesheet" media="all" type="text/css">
    <!-- Axentix JS minified version -->
<script src="https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

</head>

 <!-- fonction loading :  html/script js  -->
<body onload="myFunction()" >
<div id="loader"> </div>
<div style="display:none;" id="myDiv" class="animate-bottom">
  <!--  -->

 <!-- barre de menu -->
<nav class="navbar shadow-1 transparent text-white">
  <a href="#" class="navbar-brand navbar-center">Playlist</a>
    <div class="navbar-menu ml-auto">
      <a class="navbar-link" href="../index.php">Accueil</a>
      <a class="navbar-link" href="vue-apropos.php">À propos</a>
   </div>
</nav>
  <!--  -->

   <!-- Main -->
<main>

 
 <!-- grille --> 
 <div class="grix xs2 md3 lg3">
   

<!------------------------- cover hip-hop -------------------->

 <!-- card-header -->
  <div class="card shadow-1 glassmorphism shadow-1 " id="card" >
    <div class="card-image">
      <img src="../images/album-hp.png" class="responsive-media" alt="img-hip_hop">
    </div>
     <div class="card-header">Hip-Hop</div>
      <!--  -->
     <!-- card-content -->
  <div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
    <!--  -->
   <!--  card-footer -->
<div class="card-footer pt-0">
  <a href="musique/vue-hip_hop.php" alt="lien-hip_hop">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
  </div>
</div>

 <!--  -->

 <!------------------------- cover pop -------------------->
   <!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card"> 
    <div class="card-image">
    <img src="../images/album-pop.png" class="responsive-media" alt="img-pop">
  </div>
    <div class="card-header">Pop</div>
     <!--  -->
     <!-- card-content  -->
  <div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
     <!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-pop.php" alt="lien-pop">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
  </div>
</div>
<!---->

 <!------------------------- cover electro -------------------->
 <!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card">
  <div class="card-image">
    <img src="../images/album-electro.png" class="responsive-media" alt="img-electro">
</div>
     <div class="card-header">Electro</div>
<!---->
<!-- card-content-->
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
 <!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-electro.php" alt="lien-electro">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
</div>
</div>
<!---->



<!------------------------- cover reggae -------------------->
<!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card">
  <div class="card-image">
    <img src="../images/album-reggae.png" class="responsive-media" alt="img-reggae">
  </div>  
<div class="card-header">Reggae</div>
<!---->
<!-- card-content-->
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
 <!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-reggae.php" alt="lien-reggae">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
</div>
</div>
<!---->



<!------------------------- cover rock -------------------->
<!-- card header  -->
  <div class="card shadow-1 glassmorphism shadow-1" id="card"> 
  <div class="card-image">
    <img src="../images/album-rock.png" class="responsive-media" alt="img-rock">
  </div>  
  <div class="card-header">Rock</div>
<!---->
<!-- card-content-->
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
 <!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-rock.php" alt="lien-rock">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
</div>
</div>
<!---->

<!------------------------- cover latino -------------------->
  <!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card">
  <div class="card-image">
    <img src="../images/album-latino.png" class="responsive-media" alt="img-latino">
  </div> 
  <!---->
<!-- card-content-->
    <div class="card-header">Latino</div>
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
 <!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-latino.php" alt="lien-latino">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
  </div>
</div>
<!---->


<!------------------------- cover zouk -------------------->
  <!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card"> 
  <div class="card-image">
    <img src="../images/album-zouk.png" class="responsive-media" alt="img-zouk">
  </div>
    <div class="card-header">Zouk</div>
<!---->
<!-- card-content-->
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
 <!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-zouk.php" alt="lien-zouk">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
</div>
</div>
<!---->


<!------------------------- cover afro -------------------->
  <!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card"> 
<div class="card-image">
    <img src="../images/album-afro.png" class="responsive-media" alt="img-afro">
  </div>
    <div class="card-header">Afro</div>
<!---->
<!-- card-content-->
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
<!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
  <a href="musique/vue-afro.php" alt="lien-afro">
    <button class="btn blue dark-3 rounded-2 w100 light-shadow-1">Accéder</button>
  </a>
  </div>
</div>
<!---->

<!------------------------- cover jazz -------------------->
  <!-- card header  -->
<div class="card shadow-1 glassmorphism shadow-1" id="card"> 
  <div class="card-image">
    <img src="../images/album-jazz.png" class="responsive-media" alt="jazz">
  </div>
    <div class="card-header">Jazz</div>
<!---->
<!-- card-content-->
<div class="card-content">
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis excepturi natus impedit distinctio quidem, nesciunt id
    possimus quia, tempore fuga doloribus reiciendis facilis voluptate accusantium! Adipisci est nam soluta!
  </p>
</div>
<!--  -->
      <!-- card-footer  -->
<div class="card-footer pt-0">
    <button class="btn meadow dark-3 rounded-2 w100 light-shadow-1 disabled">Bientôt disponible</button>
  </div>
</div>
<!---->

</div>
<!--  -->
</main>


<!-- footer  -->
<footer class="d-flex fx-col ">
  <div class="footer fx-center transparent shadow-2 text-white">Copyright © 2022 - Example crée Par RStella</div>
</footer>
</div>
</body>
</html>
<!-- N'hésiter pas à consulter mes autres créations  : https://github.com/stellaric-->