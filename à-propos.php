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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <header>
      <div class="logo">
        <a href="index.php"><span>Clean</span>lav'</a>
      </div> 
      <ul class="menu">
      <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="services et tarifs.php">SERVICES ET  TARIFS</a></li>
        <li><a href="fonctionnement.php">FONCTIONNEMENT</a></li>
        <li><a href="location.php">LOCATION</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        <li><a href="galerie.php">GALERIE</a></li>
        <li><a href="à-propos.php">À PROPOS</a></li>
      </ul> 
      <a href="index2.php" class="btn-search">Se Connecter</a>
      <div class="responsive-menu"></div>
   </header>
  
   <section>
      <div id="à-propos">
         <h1 class="title">À PROPOS  :</h1>
         <section id="à-propos">
               <div class="left-right">
                  <div class="left">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23503.798569638842!2d1.2046447983755144!3d49.2666034951018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e1253d83182aad%3A0x946198202db28e36!2sClean%20lav&#39;!5e0!3m2!1sfr!2sfr!4v1679043293619!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                        <div class="right">
                           <h3>Cleanlav  votre  laverie  libre  service</h3>
                            <h5> Facilement accessible, notre laverie, située à Val-De-Reuil, est idéale pour nettoyer vos  vêtements, draps, 
                                couettes, etc. Profitez de machines à laver et de sèche-linge dernière génération de grande capacité à des prix abordables.
                                Vous trouverez des distributeurs automatiques de lessive et autre produits nécessaires au lavage et séchage complet de votre linge.
                            </h5> 
                            <h4><i class="fa-sharp fa-solid fa-location-dot"></i>31 PLACE DES 4 SAISONS<br>27100 VAL DE REUIL .<br><i class="fa-sharp fa-solid fa-phone"></i>07_67_74_06_52&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-sharp fa-solid fa-at"></i><a href="mailto:laverie.cleanlav@gmail.com?subject=">Envoyer un e-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h4>
                          </div>
                </div>
            </form>
                 
      </section>
      <section>
          <div class="box-container">
              <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                    <h2>  <br>Prestations :</h2>
                       <p>  
                       <br>  <br>  <br>    
                           Blanchisserie pour particulier<br><br>
                           Distributeur d'assouplissant<br><br>
                           Distributeur de détachant<br><br>
                           Laverie pour particuliers <br><br>
                           Séchoir grande capacité<br><br>
                           Nettoyage de vêtement<br><br>
                           Nettoyage de couette <br><br>
                           Laverie automatique <br><br>
                           Nettoyage de linge<br><br>
                           Nettoyage rideaux<br><br>
                           Accès handicapé<br><br>
                           Table de pliage<br><br>
                           Parking<br><br>
                      </p>
                </div>
              <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                    <h2>  <br>Horaires : </h2>
                    <p>
                      <br>  <br>  <br>  <br>   
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lundi	07h00 - 22h00 <br><br><br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mardi	07h00 - 22h00 <br><br><br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mercredi	07h00 - 22h00 <br><br><br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeudi	07h00 - 22h00 <br><br><br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vendredi	07h00 - 22h00 <br><br><br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Samedi	07h00 - 22h00 <br><br><br> 
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dimanche	07h00 - 22h00
                    </p>
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
            <h4><i class="fa-sharp fa-solid fa-location-dot"></i> 31 PLACE DES 4 SAISONS <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  27100 VAL DE REUIL <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 07_67_74_06_52</h4>
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
</body>
</html>