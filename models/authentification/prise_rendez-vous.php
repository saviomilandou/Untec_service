<?php

     function inscription($nom,$prenom,$email,$objet,$message ){
            
     $connexion = connecter_db();

     // Inscription de membres
    $req = $connexion->prepare("INSERT INTO prise_rendez-vous (nom,prenom,sexe,age,telephone,adresse,lieu_depart,lieu_arriver,ville,accompagnateur,date_depart,date_retour,message,date_envoi) values(?,?,?,?,?,?,?,?,?,?,?,?,?,now())");
    

    $req->execute([$nom,$prenom,$sexe,$age,$telephone,$adresse,$lieu_depart,$lieu_arriver,$ville,$accompagnateur,$date_depart,$date_retour,$message]);
     }
?>  