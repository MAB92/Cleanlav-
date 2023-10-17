<?php
if(isset($_GET['accepte-cookie'])){
  setcookie('accepte-cookie', true, time() + 1365*24*3600 );
  header('location:./');
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>CLEANLAV' Val-De-Reuil</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lightbox.css">
</head>
<body>
   <header>
      <div class="logo">
        <a href="index.php"><span>Clean</span>lav'</a>
      </div> 
      <ul class="menu">
      <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="services et tarifs.php">SERVICES ET TARIFS</a></li>
        <li><a href="fonctionnement.php">FONCTIONNEMENT</a></li>
        <li><a href="location.php">LOCATION</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="galerie.php">GALERIE</a></li>
        <li><a href="à-propos.php">À PROPOS</a></li>
      </ul> 
      <a href="index2.php" class="btn-search">Se Connecter</a>

      <div class="responsive-menu"></div>
    </header>
       
     <section id="galerie">
         <h1 class="title"> GALERIE :</h1>
         <div class="container">
            <div class="gallery">
                <a href="images/img 1.jpg" data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 1.jpg">
                </a>
                <a href="images/img 2.jpg" data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 2.jpg">
                </a>
                <a href="images/img 3.png " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 3.png">
                </a>
                <a href="images/img 5.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 5.jpg">
                </a>
                <a href="images/img 9.jpg" data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 9.jpg">
                </a>
                <a href="images/img 10.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 10.jpg">
                </a>
                <a href="images/img 11.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 11.jpg">
                </a>
                <a href="images/img 14.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 14.jpg">
                </a>
            </div>
         </div>
       </div>
     </section>
    
     <footer>
      <div class="contenu-footer">
        <div class="bloc -liens">
          <h5>LIENS RAPIDES</h5>
          <ul class="liens">
              <li><a href="index.php">ACCUEIL</a></li>
              <li><a href="services et tarifs.php">SERVICES ET TARIFS</a></li>
              <li><a href="fonctionnement.php">FONCTIONNEMENT</a></li>
              <li><a href="location.php">LOCATION</a></li>
              <li><a href="contact.php">CONTACT</a></li>
              <li><a href="galerie.php">GALERIE</a></li>
              <li><a href="à-propos.php">À PROPOS</a></li>
              <li><a href="http://localhost/projet_laverie(final-2)/fichiers/mentions%20l%C3%A9gals.pdf"  target="_blank">MENTIONS LÉGALES</a></li>
              <li><a href="http://localhost/projet_laverie(final-2)/fichiers/politique%20de%20confidentialit%C3%A9.pdf"  target="_blank">POLITIQUE DE CONFIDALITÉ</a></li>
        </ul>
          </ul>
        </div>
        <div class="bloc -media">
          <h5>RESEAUX SOCIAUX</h5>
          <ul class="media">
            <li><a href="https://www.facebook.com/people/Cleanlav-Laverie/pfbid0d3Q6Dn8MQQE4jiDYXN93bZunRBzWJYMSN2No16MZH9qdetJX7EYYvbB3hmuq5AeJl/"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/laverie.cleanlav/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://goo.gl/maps/RZBLsqtEXAuq94sx9"><i class="fa-brands fa-google"></i></a></li>
          </ul>
        </div>
        <div class="bloc -logo">
            <a href="index.php"><span>Clean</span>lav'</a>
            <h4><i class="fa-sharp fa-solid fa-location-dot"></i> 31 PLACE DES 4 SAISONS <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  27100 VAL DE REUIL <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07_67_74_06_52</h4>
          </div>
      </div>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Réaliser par  Mr&nbsp;.MAB dev | Copyright © Cleanlav' 2023 .</p>
   </footer>
   <?php 
       if (!isset($_COOKIE['accepte-cookie'])){
       ?>
          <div class="banniere" >
                <div class="text-banniere">
                  <p>
                    Nous utilisons des cookies et des technologies similaires à de nombreuses fins, y compris d’amélioration de votre expérience sur notre site, de publicité et d’analyse. <br><br> &nbsp; Cliquez sur &nbsp;« Accepter tout » &nbsp;pour accepter ces utilisations. Pour en savoir plus, consultez notre Politique en matière de cookies.
                  </p>
                </div>
                <div class="button-banniere">
                  <a href="?accepte-cookie"> Accepter tout</a>
                </div>
          </div>
      <?php 
      }
      ?> 
   <script>
         let toggle_menu = document.querySelector('.responsive-menu');
         let menu = document.querySelector('.menu');
         toggle_menu.onclick = function(){
         toggle_menu.classList.toggle('active');
         menu.classList.toggle('responsive')
      }
   </script>
   <script src="lightbox-plus-jquery.js"></script>
</body>
</html>