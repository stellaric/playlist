<!DOCTYPE html>
<html>
  <head>
    <title>Playlist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="images/logo-play.png" />
    
  <!-- Head of your page -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@2.2.0/dist/axentix.min.css">
    <link href="styles/styles.css" rel="stylesheet" media="all" type="text/css">
    <!-- Axentix JS minified version -->
<script src="https://cdn.jsdelivr.net/npm/axentix@2.2.1/dist/axentix.min.js"></script>
<script src="js/script.js"></script>

</head>


<body onload="myFunction()" >

<div id="loader"> </div>

<div style="display:none;" id="myDiv" class="animate-bottom">
 


<nav class="navbar shadow-1 transparent text-white">
<a href="#" class="navbar-brand navbar-center">Playlist</a>
   <div class="navbar-menu ml-auto">
   <a class="navbar-link" href="vues/vue-liste.php">Liste</a>
     <a class="navbar-link" href="vues/vue-apropos.php">À propos</a>
   </div>
 </nav>
 
 <main>

<div class="container mt-4" >
    <div class="card glassmorphism text-white mx-auto shadow-2">
    <div class="card-header text-center">Bienvenue !</div>
            <div class="card-content">
              <div class="grix xs1 sm2"></div>
 </div>
            <video src="images/Playlist.mp4" controls loop autoplay>test</video>
          
            
    </div>
</div>


      
</main>
<br>
<br>
<footer class="d-flex fx-col ">

  <div class="footer fx-center transparent shadow-2 text-white">Copyright © 2022 - Example</div>
</footer>
</div>
</div>
</body>
</html>