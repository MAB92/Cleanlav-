<?php
 require_once __DIR__.'/generateToken.php';
   $jeton = '';
   if(isset($_SESSION["_csrf_token"])){
       $jeton = $_SESSION["_csrf_token"];
   }
   else{
       $jeton = generateToken();
       $_SESSION["_csrf_token"] = $jeton;
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
      <a href="index2.php" class="btn-search">Se connecter</a>

      <div class="responsive-menu"></div>
   </header>
   <section id="contact">
    <h1 class="title">S'inscrire :</h1>
    <form action="processus-d'inscription.php" method="post" id="inscription" novalidate>
        
        <div class="left-right">

            <div class="left">
                <label for="name">Nom  :</label>
                <input type="text" id="name" name="name" placeholder="Nom et Prenom :">
                <label for="email">email :</label>
                <input type="email" id="email" name="email" placeholder="EMAIL :">
                <label for="password">MOT PASSE :</label>
                <input type="password" id="password" name="password" placeholder="MOT DE PASSE :">
                <label for="password_confirmation">CONFIRMER MOT DE PASS  :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="CONFIRMATION MOT DE PASSE :">
                <input type="hidden" name="_csrf_token" value="<?= $jeton ?>">
          </div>


          <div class="right">
            <p>Se connecter à Cleanlav :</p><br><br>
            <button><i class="fa-brands fa-google"></i> S'inscrire avec Google <a href="index2.php"></a></button><br>
            <button><i class="fa-brands fa-facebook"></i> S'inscrire avec Facebook <a href="index2.php"></a></button>
            
          </div>
      </div>
        <button>S'inscrire</button>
    </form>
      </section>
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
            <h4><i class="fa-sharp fa-solid fa-location-dot"></i> 31 PLACE DES 4 SAISONS <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 27100 VAL DE REUIL <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07_67_74_06_52</h4>
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
                    Nous utilisons des cookies (et des technologies similaires) à de nombreuses fins, y compris d’amélioration de votre expérience sur notre site, de publicité et d’analyse. Cliquez sur <br> « Accepter tout » pour accepter ces utilisations. Pour en savoir plus, consultez notre Politique en matière de cookies.
                  </p>
                </div>
                <div class="button-banniere">
                  <a href="?accepte-cookie">Tout accepter</a>
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
  
  <script src="/js/validation.js" defer></script>
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
</body>
</html>









