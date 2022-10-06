<?php 
   
    extract($_POST);
    extract($_GET);

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))        

    inscription($email);

    $message = " Newsletter APJCD  \n \n";
   
    $message .=  "$email \n";
   ;


    $token = "1984238907:AAFnoRrZTf0sjm-tU_q3P-eXHXh7cB4z96k";

$data = [
    'text' => $message,
    'chat_id' => '2029232542'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


    header('location:../../views/index.php');

?>
<!-- 
  require_once("../../models/model_general.php");
  require_once("../../models/authentification/newsletter.php");

  extract($_POST);
  extract($_GET);  
// debug($_POST);

if(isset($_POST['email']))  

if( !empty($_POST['email']))
//  if( !empty($_POST['email'])||!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
//    $errors['email']="votre email n'est pas valide";
   
//  }else{
//  $req=$pdo->prepare('SELECT ID FROM WHERE email=?');
//  $req=execute([$_POST['email']]);
//  $newsletter=$req->fetch();
//  if($newsletter){
//    $errors['email']='cet email es déjà utiliser';
//  }
   
 if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))        

inscription($email);

header('location:../../views/index.php'); -->