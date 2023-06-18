
<?php
session_start();
 require_once __DIR__.'/generateToken.php';
   $jeton = '';
   //si _csrf_token est défini dans le tableau $_SESSION
   if(isset($_SESSION["_csrf_token"])){
       $jeton = $_SESSION["_csrf_token"];
   }
   else{
       $jeton = generateToken();
       $_SESSION["_csrf_token"] = $jeton;
   }
   ?>


<?php
  $mysqli = require __DIR__ . "/database.php"; 
    //recuperer  toutes les lignes de tarif type de la bdd
  $sql ="SELECT * FROM tarif_type" ;
  $result = $mysqli->query($sql);
  $types=$result->fetch_all(MYSQLI_ASSOC);
    // var_dump($tarifs);
  // var_dump($types);
?>


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
            <a href="index2.php" class="btn-search">Se Deconnecter</a>

            <div class="responsive-menu"></div>
        </header>

        <section id="ajouter_tarif">
              <h1 class="title"> Ajouter tarifs:</h1>
              <form action="processus_ajout_tarif.php" method="post" id="inscription" novalidate>
              <div class="left-right">
                <div class="left">
                  <label>SERVICES :</label>
                  <input type="text" name= "services" placeholder="SERVICES:" required >
                  <label>TARIFS :</label>
                  <input type="text" name= "tarifs" placeholder="TARIFS :" required >
                  <label>MACHINES :</label>
                  <input type="text" name= "machines" placeholder="MACHINES :" required >
                  <label>type_id :</label>
                    <select name="type_id" id="type_id" required>
                    <?php foreach ($types as $type): ?> 
                     <option value="<?php echo $type['id'] ?>"><?php echo $type['nom'] ?></option>
                     <?php endforeach; ?> 
                    </select>
                    <input type="hidden" name="_csrf_token" value="<?= $jeton ?>">
                </div>
              </div>
              <button>Ajouter</button>
              <?php if(isset($_GET["error"])):?>
                <p>jéton csrf invalide !</p>
                  <?php endif;?>
              </form>
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