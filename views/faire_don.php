
   <?php  
     require_once("../models/model_general.php");

     require_once("../models/authentification/adhesion.php");
     include("header.php");
     
    //  compter_visiter($_SERVER['REMOTE_ADDR'],"adhesion");

    //   $pays = all("pays");


  ?>
    <div class="breadcrumb-area bg-danger" data-bgimage="" data-black-overlay="4"> <img src="../assets/images/slider/breadcrumb-bg-801.jpg" height="100%" alt=""> 
        
        <div class="container">
            <div class="in-breadcrumb ">
                <div class="row">
                    <div class="col">
                        <h3>Faire un don au Diocèse de kinkala </h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Faire un don </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    
    <!-- Page Conttent -->
    <main class="page-content section-ptb">
       <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="contact-form">
                        <div class="contact-form-info">
                            <div class="contact-title">
                                <h3 class="text-info">Faire un don au Diocèse de Kinkala
                                  à travers l’association Père Jan Czuba Développement </h3>
                            </div>
                                       
                                       
                                       <h3 class="text-danger">Pour faire votre don</h3>
                                     
                                 <div>
                                      <p>
                                     <h5>1. Par chèque. Veuillez indiquer à l’ordre de l’Association Kinkala Solidarite </h5> 
                                     A envoyer à l’adresse de l’Association Père Jan Czuba Développement (en spécifiant entre parenthèses Association Kinkala Solidarité), 74-76 Avenue Eugène Varlin 77270  VILLEPARISIS <br> <br>

                                     <h5>2. Par virement bancaire</h5> 
                                      <b> Adresse :	</b> Association Kinkala Solidarité   
                                                    12 rue du Château 
		                                             38650 MONESTIER DE CLERMONT<br>
                                     <b>Titulaire du compte :</b>	Association Kinkala Solidarite  <br><br>
                                     <h5>Référence bancaire nationales – RIB </h5>

                                     <table>                            

                                     <tr><td>Banque</td> 

                                     <td>Indicatif</td>

                                     <th> N° de Compte</th>

                                     <th>cle</th>
                                     </tr>

                                    <tr>
                                    <td>10278</td>	
                                    <td> 08952</td>
                                    <td>00020314102</td>
                                     <td>14 </td>
                                    
                                    </tr>

                                     </table>
                                     <br>
                                     <h5>Références bancaires internationales :</h5>
                                      <h5>IBAN : FR7610278089520002031410214</h5>
                                      <h5>BIC : CMCIFR2A</h5>
                                      <br>

                                             <h3 class="text-info">Important !</h3>

                                        L’association Père Jan Czuba Développement soutient plusieurs projets au Congo. Afin que votre don soit affecté au Diocèse de Kinkala et ses œuvres sociales, il est nécessaire de :<br>
                                        <b>a) confirmer la destination de votre don (Diocese de Kinkala)</b> auprès de Jean-Baptiste Milandou, président de l’association:<br>
                                       
                                        <b>- Par courrier :</b>	Association Père Jan Czuba Développement
                                          <br>
                                        <ul>
                                        
                                        <li> Diocèse de Kinkala</li>
                                        <li>74-76 Avenue Eugène Varlin</li>
                                        <li>77270  VILLEPARISIS</li>

                                        </ul>
                                        <b>- Par téléphone :   </b>0641450286 <br>
                                        <b>- Par email :</b>   assojanczu@yahoo.com
                                               <br><br>
                                               <b>b) indiquer si vous souhaiter recevoir un reçu fiscal</b> <br>
                                               <h4 class="text-info">Avantages fiscaux</h4>

                                               <b>Pour les particuliers :</b>déduction fiscale de 66 % de votre don, dans la limite de 20% de votre revenu imposable. 
	                                           Exemples : Si vous faites un don de 30 €, vous bénéficierez d’une déduction d’impôts de 20 €, soit un coût réel de 10 €.
                                                Si votre don est de 100 €, votre déduction sera de 66 €, pour un coût réel de 33 €. <br> <br>

                                                 <b>Pour les entreprises : </b> déduction fiscale de 60% de votre don, dans la limite de 0,5% du chiffre d’affaires. 
	                                            Exemple : si votre chiffre d’affaire est de 400.000 €, vous pouvez faire un don de 2.000 €, votre déduction d’impôts sera de 1.200 €, soit un coût réel pour votre entreprise de 800 €.


    
                                     </p>

                                 </div>
 
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="contact-infor">
                        <div class="contact-title">
                            <h3 class="text-danger">Nous contacter</h3>
                        </div>
                        <div class="contact-dec">
                            <p>Entrez vos information et votre message dans le formulaire ci-dessous nous vous répondrons dans les plus brefs délais. </p>
                        </div>
                        <div class="contact-address">
                            <ul>
                                <li><i class="fa fa-home"></i> Adress : Ville Parisis France </li>
                                <li><i class="fa fa-envelope"></i>associationpjcd@gmail.com</li>
                                <li><i class="fa fa-phone"></i> +33 64 14 50 286</li>
                            </ul>
                        </div>

                        <div class="work-hours">
                            <h6><strong>Toujours Disponible</strong></h6>
                            <p><strong>Disponible</strong>: &nbsp;7jours/7</p>
                        </div>
                    </div>
<br><br><br>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="AAQYAQ83JWTTY" />
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Bouton Faites un don avec PayPal" />
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
</form>



                </div>
            </div>
        </div>
    </main>
    <!--// Page Conttent -->
    <?php include("footer.php")?>