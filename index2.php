<?php
session_start();
if (isset($_SESSION["user"])) {
    
   // $mysqli = require __DIR__ . "/database.php";
    
   // $sql = "SELECT * FROM user
           // WHERE id = {$_SESSION["user_id"]}";
            
   // $result = $mysqli->query($sql);
    
    $user = $_SESSION["user"];
}
?>
<?php
if(isset($_GET['accepte-cookie'])){
  setcookie('accepte-cookie', true , time() + 1365*24*3600 , $_SERVER['HTTP_HOST'], );
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
      <a href="se-deconnecter.php"" class="btn-search">Se Déconnecter</a>
      <div class="responsive-menu"></div>
   </header>
   <section id="contact">
         <h1 class="title"> Home :</h1>
    <?php if (isset($user)): ?>
      <h2>Carte De Fidelité <span>Clean</span>lav'</h2>
      <div class="wrapper">
      <div class="profile-top"></div>
      <div class="profile-bottom">
        <div class="profile-infos">
          <div class="main-infos">
          <p>BIENVENUE <br> <?= htmlspecialchars($user["name"]) ?></p>
          </div>
        </div>
        <p><a href="se-deconnecter.php">Se Déconnecter</a></p>
    <?php else: ?> 
        <p><a href="se-connecter"> Se Connecter</a>  &nbsp;  ou  &nbsp;   <a href="s'inscrire.php">S'inscrire</a></p>
    <?php endif; ?>
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
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    