<?php 
    require_once("../../models/model_general.php");

    require_once("../../models/authentification/adhesion.php");

    extract($_POST);
    extract($_GET);

   
    $message = " Demande d'adhesion a l'Association PJCD \n \n";
    $message .= "$nom \n";
    $message .= "$prenom \n";
    $message .= "$email \n";
    $message .= "$sexe\n";
    $message .= "$profession \n";
    $message .= "$ville\n";
    $message .= "$telephone\n";
    $message .= "$adresse \n";
    $message .= "$message \n";


    $token = "1984238907:AAFnoRrZTf0sjm-tU_q3P-eXHXh7cB4z96k";

$data = [
    'text' => $message,
    'chat_id' => '2029232542'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
   
  

    // header('location:../../views/index.php');

    // echo "Inscription terminé";

    header('location:../../views/message.php');
   
    //  header('location:../../views/index.php');

?>