<?php
  $mysqli = require __DIR__ . "/database.php";
    //recuperer les tarif et tarif type de la bdd
  $sql ="SELECT * FROM tarif_type" ;
  $result = $mysqli->query($sql);
  $types=$result -> fetch_all(MYSQLI_ASSOC);
  
  $sql ="SELECT * FROM tarif" ;
  $result = $mysqli->query($sql);
  $tarifs=$result -> fetch_all(MYSQLI_ASSOC);
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
    <meta name="viewport" content="width=device-width">
    <title>CLEANLAV' Val-De-Reuil</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  
     <section id="nos-services">
        <h1 class="title"> NOS SERVICES :</h1>
        <div class="img-desc">
           <div>
            <div class="box-container">
               <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                 <i class="fa-solid fa-spray-can-sparkles"></i>
                   <h3>Propreté</h3>
                   <p>La laverie et les machines sont nettoyées et désinfectées <br> quotidiennement avec des produits écologique</p>
               </div>
       
               <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                   <i class="fas fa-car"></i>
                   <h3>Accessibilité</h3>
                   <p>Deux grands parkings gratuits sont à<br> proximité</p>
               </div>
       
               <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                   <i class="fas fa-video-camera"></i>
                   <h3>Sécurité</h3>
                   <p>8 caméras de vidéosurveillance <br> et  des machines sécurisées</p>
               </div>
       
               <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                 <i class="fa-solid fa-phone"></i>
                   <h3>Assistance</h3>
                   <p>Nous sommes joignables du lundi au dimanche par téléphone <br> de 7h à 22h</p>
               </div>
       
               <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                 <i class="fa-solid fa-gem"></i>
                   <h3>Qualité</h3>
                   <p>Des machines professionnelles <br> au meilleur  prix</p>
               </div>
       
               <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                 <i class="fa-sharp fa-solid fa-shirt"></i>
                   <h3>Capacité</h3>
                   <p> Vous pouvez  nettoyer jusqu'à <br> 20 kg  de linge</p>
               </div>
             </div>
             <br><br>
             <section>
              <br><br>
              <section id="services">
             <p>
              Notre laverie libre-service est ouverte 7 jours/7 de 7H à 22H <br><br>
               Les machines sont révisées régulièrement <br><br>
               Nous possédons un distributeur de lessive, d'adoucissant, de désinfectant et de détachant. (Made in France)  <br><br>
               Nous avons une centrale de paiement acceptant les billets, monnaies et CB avec et sans contacts.<br><br>
               Mise à disposition d'un locker Amazon pour retirer vos colis.
              </p><br>
              </section>
           </div>
        </div>
      </section>
      <section id="nos-services">
        <h1 class="title"> NOS EQUIPEMENTS  :</h1>
          <div class =row>
             <div class="counter-up">
                <div class="content">

                  <div class="column">
                    <div class="box-conter">
                      <div class="counter">9</div>
                      <div class="text">Machines à laver<br><br>professionnelles</div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="box-conter">
                      <div class="counter">4</div>
                      <div class="text">Séchoirs de &nbsp;<br><br>14 kg</div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="box-conter">
                      <div class="counter">5</div>
                      <div class="text" >Programmes de Lavage<br><br> de 15° à 90°</div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="box-conter">
                      <div class="counter">20</div>
                      <div class="text">kg <br> Capacité maximale<br>de lavage</div>
                    </div>
                  </div>
                </div>
             </div>
          </div>
        </section>
      <section id="tarifs">
        <div id="nos-tarifs">
           <h1 class="title"> NOS TARIFS ET  PRODUITS :</h1>
            <div class="box-container">
              <?php foreach($types as $type):?>
                <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                  <h4><?php echo $type["nom"];?></h4>
                  <?php foreach($tarifs as $tarif):?>
                    <?php if($tarif['type_id'] === $type['id']):?>
                      <p>
                    <?php echo $tarif["service"];?>  <span><?php echo $tarif ["tarif"];?>  &nbsp;    € &nbsp;&nbsp;( La dose )</span>       
                      <p> <?php echo $tarif["machines"];?></p>  
                      </p>
                    <?php endif;?>
                  <?php endforeach;?>  
                </div>
              <?php endforeach;?>
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
            <li><a href="services et tarifs.php">SERVICES ET  TARIFS</a></li>
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

    <script>
      $(document).ready(function(){
        $(".counter").counterUp({
          delay:10,
          time:1200
        });
      });
    </script>
    
</body>
</html>