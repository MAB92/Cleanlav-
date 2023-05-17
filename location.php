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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLEANLAV' Val-De-Reuil</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="lightbox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
  
   <section id="location">
        <h1 class="title"> LOCATION  :</h1>
        <div class="left">
            <h2>LOCATION DE SHAMPOUINEUSE​ </h2><br><br>
            <p> 
                Vous avez besoin de nettoyer un tapis, les sièges de votre voiture ou encore un matelas ? Louez une shampouineuse professionnelle !
                Grâce à un système de pulvérisation et d’extraction, cette shampouineuse Kärcher Puzzi 10/1 injecte en profondeur un mélange d’eau et de shampooing pour un nettoyage rapide de vos textiles. 
            </p>
        </div> <br><br><br><br> <br><br>

        <section id="galerie">
         <h1 class="title">SHAMPOUINEUSE &nbsp;&nbsp;Kärcher Puzzi  :</h1>
         <div class="container">
            <div class="gallery">
                <a href="images/img 15.jpg" data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 15.jpg">
                </a>
                <a href="images/img 16.jpg" data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 16.jpg">
                </a>
                <a href="images/img 25.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 17.jpg">
                </a>
                <a href="images/img 18.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 18.jpg">
                </a>
                <a href="images/img 19.jpg" data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 19.jpg">
                </a>
                <a href="images/img 20.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 20.jpg">
                </a>
                <a href="images/img 21.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 21.jpg">
                </a>
                <a href="images/img 22.jpg " data-lightbox="models" data-title="Cleanlav">
                    <img src="images/img 22.jpg">
                </a>
                <a><iframe width="560" height="315" src="https://www.youtube.com/embed/QgZhySu2x9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a>
            </div>
         </div>
       </div>
     </section>
     <section id="prix">
        <h1 class="title"> Prix  :</h1>
          <div class =row>
             <div class="counter-up">
                <div class="content">

                  <div class="column">
                    <div class="box-conter">
                      <div class="text" >Tarif jourée  &nbsp;&nbsp;</div><br><br><br>
                      <div class="counter">40</div>
                      <div class="text">€</div>  
                    </div>
                  </div>

                  <div class="column">
                    <div class="box-conter">
                      <div class="text">Tarif week-end  </div><br><br><br>
                      <div class="counter">50</div>
                      <div class="text">€</div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="box-conter">
                      <div class="text"> Pastilles<br> de détergent</div>
                      <div class="counter">5</div>
                      <div class="text" >€ (les 3)</div>
                    </div>
                  </div>

                </div>
             </div>
          </div>
        </section>
        <a href="mailto:laverie.cleanlav@gmail.com?subject=" class="btn-search">RESERVER</a>
   </section>
      </body>
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
            <h4><i class="fa-sharp fa-solid fa-location-dot"></i> 31 PLACE DES 4 SAISONS <br>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  27100 VAL DE REUIL <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07_67_74_06_52</h4>
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
     <script>
      $(document).ready(function(){
        $(".counter").counterUp({
          delay:10,
          time:1200
        });
      });
    </script>
    <script src="lightbox-plus-jquery.js"></script>
</html>