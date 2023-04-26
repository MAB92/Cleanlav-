<?php
function generateToken(){
    //générer un id unique
    $id = uniqid();//renvoie un nombre aléatoire en chaine de caracteres
    //hacher id généré
    $hash = md5($id);
    //retourner le hash
    return $hash;
}


