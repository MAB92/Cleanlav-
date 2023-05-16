<?php
  session_start();
//Sin l' utilisateur n'est pas connecté ou si il est connecté mais ne possède pas de role "admin", il est redirigé vers la page index2.php
  if(!isset($_SESSION['user']) || $_SESSION['user']['role_id'] != 1){
    header('location: index2.php');
    exit;
  }

//var_dump($_SESSION);

?>


<?php
  $mysqli = require __DIR__ . "/database.php";
    //recuperer les tarif et tarif type de la bdd

  
  $sql ="select t.*, tt.nom from tarif t join tarif_type tt on tt.id=t.type_id" ;
  $result = $mysqli->query($sql);
  $tarifs=$result -> fetch_all(MYSQLI_ASSOC);
 // var_dump($tarifs) ;
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
      <a href="se-deconnecter.php" class="btn-search">Se Déconnecter</a>

      <div class="responsive-menu"></div>
   </header>
   <section id="ajouter">
         <h1 class="title" >Ajouter tarifs :</h1> 
         <a href="./ajouter_tarifs.php">Ajouter tarifs :</a>
         <a href="se-deconnecter.php" class="btn-search">Se Déconnecter</a>
         <form>
            <table>
                <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;SERVICES</th>
                    <th>&nbsp;&nbsp;&nbsp;TARIFS</th><br><br><br>
                    <th>MACHINES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TYPE</th>
                    <th>ACTIONS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>

                <?php foreach($tarifs as $tarif):?>
                <tr>
                    <td><?php echo $tarif["service"];?></td> 
                    <td><?php echo $tarif["tarif"];?></td>
                    <td><?php echo $tarif["machines"];?></td>
                    <td><?php echo $tarif["nom"];?></td>
                    <td>
                       <a href="modifier.php?id=<?php echo $tarif['id']?>">Modifer</a>
                       <a href="supprimer.php?id=<?php echo $tarif['id'];?>">Supprimer</a>
                    </td>
                </tr>
                <?php endforeach;?>

            </table>
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