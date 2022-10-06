<?php

    
    function uploader($infos,$dossier="images"){
        define('MAX_SIZE',1000000);
        $autorise=['jpg','jpeg','gif','pdf','png'];
        $tmp=$infos['tmp_name'];
        $nom_original=$infos['name'];
        $new_nom=  md5(date('Ymdhis')."_".rand(0,99999)).$nom_original;
        // $size=$infos['size'];// en octect
         $size=filesize($tmp);// en octect
         $path_info=pathinfo($nom_original);
         $ext=$path_info['extension'];
         if($size > MAX_SIZE){
             die("fichier volumineux ");
         }


         
         if(!in_array($ext,$autorise)){
         die("type de fichier non autorise");
         }
        $destination="$dossier/$new_nom";
        move_uploaded_file($tmp,$destination);
        //recuperer les datas
        return $destination;
        }
    
        function debug($variable){
            echo '<pre>'. print_r($variable, true) .'</pre>';
        }