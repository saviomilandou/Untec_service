<?php
    // function connecter_db(){
    //     try{
    //         $link = new PDO('mysql:host=localhost;dbname=associationpjcd', 'root', '');
    //         $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     } catch (PDOException $e) {
    //     echo "Erreur de connexion ".$e->getMessage();
    //     }
    //     return $link;
    // }

    // function all($table){
    //     $link=connecter_db();
    //     $rp=$link->prepare("select * from $table");
    //     $rp->execute();
    //   $resultat= $rp->fetchAll();
    //   return $resultat;
    // }

    function allBy($table,$conditions){
        $connexion =connecter_db();
        $res = $connexion->prepare("SELECT * FROM $table $conditions");
        $res->execute();
        $resultat = $res->fetchAll();
        return $resultat;
    }


    function supprimer($table,$id){
        $link=connecter_db();
        $rp=$link->prepare("delete from $table where id=?");
        $rp->execute([$id]);
    }


    function date_fr($date){
     $d=new DateTime($date);
     return $d->format("d-m-Y H:i:s");
    }

    
    function debug($variable)
      {
        echo '<pre>'. print_r($variable, true) .'</pre>';
      }


 
    function recuperer_element($id,$table){
        $connexion =connecter_db();
        $res = $connexion->prepare("SELECT * FROM $table WHERE id = $id");
        $res->execute();
        $resultat = $res->fetchAll();
        return $resultat[0];
    }


    function findBy($table,$id){
        $link=connecter_db();
        $rp=$link->prepare("select * from $table where id = ?");
        $rp->execute([$id]);
      $resultat=  $rp->fetch();
      return $resultat;
    }

    
  //   function compter_visiter($ip,$pages_vues){
  //       $connexion=connecter_db();
  //      $visiteur = $connexion->prepare("INSERT INTO visiteurs(ip,date_visite,pages_vues)
  //      values(?,now(),?)"); 
  //      $visiteur->execute([$ip,$pages_vues]);   
  //  } 