
   <?php  
     require_once("../models/model_general.php");

     require_once("../models/authentification/adhesion.php");
     include("header.php");
     
    //  compter_visiter($_SERVER['REMOTE_ADDR'],"adhesion");

    //   $pays = all("pays");
  ?>
    

     <div> 
        <div><img  src="../assets/images/slider/slider01.png" height="100%" alt=""></div><br>
        
        <div class="container">
            <div class="in-breadcrumb ">
                <div class="row">
                    <div class="col">
                       <h3 class="text-center">Contactez-Nous </h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item text-info"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active text-info"><a href="">Contact</a></li>
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
                                <h3 class="text-info">Laissez nous un Message </h3>

                            </div>
                            <form action="../controllers/authentification/contact.php?" method="post"  >

                               <div class="contact-page-form">
                                   <div class="contact-input">
                                        <div class="contact-inner">
                                            <input data-parsley-minlength="3" name="nom" type="text" placeholder="Votre Nom  *" id="Votre Nom ">
                                        </div>
                                        <div class="contact-inner">
                                            <input data-parsley-minlength="4" name="prenom" type="text" placeholder="Votre Prenom *" id="Votre Prenom ">
                                        </div>
                                        <div class="contact-inner">
                                            <input type="text" placeholder="Email *" id="email" name="email">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="objet" type="text" placeholder="Objet *" id="subject">
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="message"  placeholder="Message *"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn">
                                        <button class="submit-btn" type="submit">Envoyer votre Email</button>
                                        <p class="form-messege"></p>
                                    </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="contact-infor">
                        <div class="contact-title">
                            <h3 class="text-danger">Nous contacter</h3>
                        </div>
                        <div class="contact-dec">
                            <p>Entrez vos informations et votre message dans le formulaire ci-dessous nous vous répondrons dans les plus brefs délais.</p>
                        </div>
                        <div class="contact-address">
                            <ul>
                                <li><i class="fa fa-home"></i> Adress : Ville Paris France </li>
                                <li><i class="fa fa-envelope"target="_blank"></i>untec@.net</li>
                                <li><i class="fa fa-phone"target="_blank"></i> +33 00 00 00 00 </li>
                            </ul>
                        </div>
                        <div class="work-hours">
                            <h6><strong>Toujours Disponible</strong></h6>
                            <p><strong>Disponible</strong>: &nbsp;7jours/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.2681578314487!2d2.294382615124194!3d48.85309670903438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701f2748959f%3A0xa5090fb4094c951!2s74%20Rue%20de%20la%20F%C3%A9d%C3%A9ration%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1664355315913!5m2!1sfr!2sfr"  width="100% " height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
<br><br><br>



    <!--// Page Conttent -->
    
    <!-- Footer Area -->
    <!-- <footer class="footer-area"> -->
       
        
        <!-- <div class="footer-top section-pb section-pt-60">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mt--60">
                        <div class="footer-single-block"> 

     <div class="footer-logo">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick" />
<input type="hidden" name="hosted_button_id" value="AAQYAQ83JWTTY" />
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Bouton Faites un don avec PayPal" />
<img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
</form>
</div>


                            <p class="footer-dec">Merci de soutenire nos differents projets en fesons un don pour l'association (APJCD).</p>
                            <h5 class="text-danger">Soyez Généreux</h5>
                            <ul class="footer-social-link">
                                <li><a href="#"><i class="fa fa-facebook"target="_blank"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"target="_blank"></i></a></li>
                                <li><a href="mailto:associationpjcd@gmail.com"target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6  mt--60">
                        <div class="footer-block">
                            <h5>Quick Links</h5>
                            <ul class="footer-list">
                                <li><a href="#">Privacy Statement</a></li>
                                <li><a href="#">Teaching Staff</a></li>
                                <li><a href="#">Report Copyright</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Schedule</a></li>
                                <li><a href="#">Discount Program</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt--60">
                        <div class="footer-block">
                            <h5>Nous soutenir c'est</h5>
                            <ul class="footer-courses">
                            <li>    
                                    <div class="courses-image">
                                        <a href="#"><img src="../assets/images/blog/small-tham/blog-01.png" alt="Association PJCD"></a>
                                    </div>
                                    <div class="courses-nifo">
                                        <h5><a href="#">Voir des nouveaux enfants
                                         prendre le chemin de l'ecole.</a></h5>
                                        
                                    </div>
                                </li>
                                <li>    
                                    <div class="courses-image">
                                        <a href="#"><img src="../assets/images/blog/small-tham/blog-02.png" alt="Association PJCD"></a>
                                    </div>
                                    <div class="courses-nifo">
                                        <h5><a href="#">Une education reussie,
                                            est la base d'une vie reussie</a></h5>
                                      
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt--60">
                        <div class="footer-block">
                            <h5>Inscrivez vous a notre Newsletter</h5>
                            <div class="newsletter-wrap">
                                <p>Entrer votre email pour avoir plus d'information.</p>
                                <div class="newsletter-input-box">
                                <form action="../controllers/authentification/newsletter.php?" method="post"  >
                                        <input type="text" placeholder="Your email address">
                                        <button class="newsletter-button"><i class="fa fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>// Footer Top Area -->
        
        <?php include("footer.php")?>