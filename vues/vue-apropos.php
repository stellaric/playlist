<!DOCTYPE html>
<html>
  <head>
    <title>Playlist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../images/logo-play.png" />
  
 <!-- Lien  Axentix css + lien css-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@2.2.0/dist/axentix.min.css">
    <link href="../styles/styles.css" rel="stylesheet" media="all" type="text/css">
      <!-- Lien Axentix JS minified version + lien js  -->
<script src="https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

</head>

 <!-- fonction loading html/js  -->
<body onload="myFunction()" >
<div id="loader"> </div>
<div style="display:none;" id="myDiv" class="animate-bottom">
 
 <!-- barre de menu  -->
<nav class="navbar shadow-1 transparent text-white">
    <a href="#" class="navbar-brand navbar-center">Playlist</a>
  <div class="navbar-menu ml-auto">
   <a class="navbar-link" href="../index.php">Accueil</a>
   <a class="navbar-link" href="vue-liste.php">Liste</a>
  </div>
</nav>
 <!-- -->
 
  <!-- main-->
 <main>
  <div class="grix xs2 md3 lg3">
    <div class="container mt-5" >
       <!-- section 1 : image + question + lien des resources utilisé -->
      <div class="card glassmorphism text-white mx-auto shadow-2">
        <div class="card-header text-center"> <img src="../images/logo-play.png" alt="test"</></div>
            <div class="card-content">
            <h4>Playlist, c'est quoi ? </h4>
              <p>Playlist est un site qui permet dd'écouter votre propre musique </p>
               Ce site n'est qu'un simple exemple et cette organisation n'existe pas  
<br>

            <h4>Notre équipe</h4>
              <p>Notre équipe est composé de personne .Ceci est une simple démo  </p>
<br>

            <h4>Où nous trouver ?</h4>
              <p>Vous pouvez nous trouver nulle part . Ceci est une simple démo</p>

               
<br>
              <h4>Ressources utilisées </h4>
              <button class="btn shadow-1 white rounded-4 text-white transparent shadow-2 >
                <a href="../note.txt" download="ressources_playlist">Télécharger les ressources utilisés </a>
              </button>
<br>
<br>
          </div>
       </div>
      </div>
 <!-- -->
 <!-- section 2 : titre + video -->
<div class="pos-xs2 col-xs2">
  <div class="container mt-5" style="width:90%">
    <div class="card glassmorphism text-white mx-auto shadow-1">
      <div class="card-header text-center ">
      <h4>Le meilleur de votre création</h4>
      </div>

      <div class="card-content pt-1">
      <video src="../images/video-play.mp4" width="80%" controls loop autoplay muted>test</video>
      </div>


    </div>
  </div>
<!-- -->
<!-- section 3 : lien réseaux sociaux-->
<div class="pos-xs2 col-xs2">
  <div class="container mt-5" style="width:90%">
    <div class="card glassmorphism text-white mx-auto shadow-1">
      <div class="card-header text-center ">
      <h4>Nos réseaux</h4>
      </div>
      <div class="card-content pt-1">
        <!-- btn twitter -->
        <button class="btn btn-circle transparent shadow-1">
          <span class="iconify-inline font-s6" data-icon="mdi:twitter" style="color: white;"></span>
        </button>
        <!-- -->
        <!-- btn email -->
        <button class="btn btn-circle transparent shadow-1">
         <span class="iconify-inline font-s6" data-icon="mdi:email" style="color: white;"></span>
        </button>
        <!-- -->
        <!-- btn insta -->
        <button class="btn btn-circle transparent shadow-1">
          <span class="iconify-inline font-s6" data-icon="mdi:instagram" style="color: white;"></span>
        </button>
        <!-- -->
        <!-- btn snap -->
        <button class="btn btn-circle transparent shadow-1">
          <span class="iconify-inline font-s6" data-icon="mdi:snapchat" style="color: white;"></span>
        </button>
        <!-- -->
      </div>
</div>
</div>
</div>



</div>
</main>

<br>
<!-- footer-->
<footer class="d-flex fx-col ">

  <div class="footer fx-center transparent shadow-2 text-white">Copyright © 2022 - Example crée par Rstella</div>
</footer>
 <!-- -->
</div>
</div>

</body>
</html>