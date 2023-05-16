<?php
if(isset($_GET['accepte-cookie'])){
  setcookie('accepte-cookie', true, time() + 365*24*3600 );
  header('location:./');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLEANLAV' Val-De-Reuil</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
   <section id ="home">
      <div class="box-container">
            <h2> Cleanlav  votre  laverie  libre  service </h2>
            <p>
                Facilement accessible, notre laverie, située à Val-De-Reuil, est idéale pour nettoyer vos vêtements, draps, 
                couettes, etc. Profitez de machines à laver et de sèche-linge dernière génération de grande capacité à des prix abordables.
                Vous trouverez des distributeurs automatiques de lessive et autre produits nécessaires au lavage et séchage complet de votre linge.
            </p>
            <h1><i class="fa-sharp fa-solid fa-location-dot"></i> 31 PLACE DES 4 SAISONS <br>27100 VAL DE REUIL </h1>
      </div> 
      <a href="à-propos.php" class="btn-search-home-btn"> EN SAVOIR PLUS</a>
      </section>
      <section>
       <div class="paiements">
        <h1>TOUS PAIEMENTS ACCEPTES <i class="fa-sharp fa-solid fa-credit-card"></i>  <i class="fa-brands fa-cc-visa"></i><i class="fa-brands fa-cc-mastercard"></i> <i class="fa-sharp fa-solid fa-coins"></i> <i class="fa-solid fa-money-bill-1"></i>  </h1>
       </div>
      </section>
      </body>
      <footer>
        <div class="contenu-footer">
          <div class="bloc -liens">
            <h5>LIENS RAPIDES</h5>
            <ul class="liens">
              <li><a href="index.php">ACCUEIL</a></li>
              <li><a href="services et tarifs.php">SERVICES ET  TARIFS</a></li>
              <li><a href="fonctionnement.php">FONCTIONNEMENT</a></li>
              <li><a href="location.php">LOCATION</a></li>
              <li><a href="contact.php">CONTACT</a></li>
              <li><a href="galerie.php">GALERIE</a></li>
              <li><a href="à-propos.php">À PROPOS</a></li>
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
            <h4><i class="fa-sharp fa-solid fa-location-dot"></i> 31 PLACE DES 4 SAISONS <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  27100 VAL DE REUIL <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07_67_74_06_52</h4>
          </div>
        </div>
        <p>Réaliser par  Mr&nbsp;.MAB dev | Copyright © Cleanlav' 2023 .</p>
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
</html>
