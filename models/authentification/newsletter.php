<?php


    function inscription($email){
            
        $connexion = connecter_db();

        // Inscription de membres dans la newsletter 
        $req = $connexion->prepare("INSERT INTO newsletter(email,date_enregistrement) values(?,now())");
        $req->execute([$email]);
    }
?>  