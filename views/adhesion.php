
   <?php  
     require_once("../models/model_general.php");

     require_once("../models/authentification/adhesion.php");
     include("header.php");
     
    //  compter_visiter($_SERVER['REMOTE_ADDR'],"adhesion");

    //   $pays = all("pays");
  ?>

    <div > <img src="../assets/images/slider/photo-01.png" height="100%" alt=""> <br> 
          <br><br>
        <div class="container">
            <div class="in-breadcrumb ">
                <div class="row">
                    <div class="col">
                        <h3 class="text-center">Demande d'adhesion</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="">Adhesion</a></li>
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
                                <h3 class="text-info">Merci de bien remplir le formulair  </h3>
                            </div>
   
                            <form action="../controllers/authentification/adhesion.php?" method="post"  >
                               <div class="contact-page-form">
                                   <div class="contact-input">

                                        <div class="contact-inner">
                                            <input name="nom" type="text" placeholder="Votre Nom  *" id=" first Name ">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="prenom" type="text" placeholder="Votre Prenom  *" id="last Name ">
                                        </div>

                                        <div class="contact-inner">
                                            <input name="profession" type="text" placeholder="Votre Profession *" id="rofession ">
                                        </div>

                                         <div class="contact-inner">
                                                <input type="text" placeholder="Email *" id="email" name="email">
                                         </div>

                                        <div class="contact-inner">
                                           <select id="inputState" name="sexe"   id="sexe"  class="form-control" placeholder="Complété votre sexe">
                                             <option selected>Complété votre sexe</option>
                   
                                              <option value="Masculin">Masculin</option>
                                              <option value="Feminin">Feminin</option>
                     
                                            </select>
                                      </div>

                                        <div class="contact-inner">
                                            <input name="telephone" type="text" placeholder="Telephone *" id="telephone ">
                                        </div>
<!-- 
                                      <div class="contact-inner">
                                         <select id="inputState" name="telephone" type="text" placeholder="Telephone *" id="telephone "class="form-control"> 
                                          <option selected>Telephone</option>
                                           <?php
                                           foreach($pays as $for)  {
                                         ?>
                                          <option value="<?=$for["id"];?>">  <?=$for["phonecode"];?></option>
                    
                                         <?php } ?>

                                         </select> 
                                       </div> -->

                                        <div class="contact-inner">
                                            <input name="adresse" type="text" placeholder="Votre Adresse*" id="adresse ">
                                        </div>

                                           <div class="contact-inner">
                                                <input name="ville" type="text" placeholder="Ville *" id="ville">
                                            </div>

                                            <div class="contact-inner">
                                           <select id="inputState" name="pays"   id="pays"  class="form-control" placeholder="Complété votre pays">
                                             <option selected>Complété votre pays</option>
                   
                                              <option value="AF">France</option>
                                              <option value="AL">Belgique</option>
                                              <option value="AL">Suice</option>
                                              <option value="FR">France</option>
                                              <option value="AF">Itali</option>
                                              <option value="AL">Albania</option>
                                              <option value="AF">Afghanistan</option>
                                              <option value="AL">USA</option>
                                              <option value="AF">Maroc</option>
                                              <option value="AL">Espagne</option>
                                              <option value="AF">Portugal</option>
                                              <option value="AL">Ukrain</option>

                     
                                            </select>
                                      </div>


                                        <div class="contact-inner contact-message">
                                            <textarea name="message"  placeholder="Message Complementaire*"></textarea>
                                        </div>
                                    </div>

                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A consectetur, cum amet rem perferendis quas repellendus culpa maiores esse similique, necessitatibus cumque? Officia vitae possimus iusto ullam dignissimos quidem cum?. </p>


                                    <div class="contact-submit-btn">
                                        <button class="submit-btn" type="submit">Envoyer votre Demande</button>
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
                            <p>Entrez vos information et votre message dans le formulaire ci-dessous nous vous répondrons dans les plus brefs délais. </p>
                        </div>
                        <div class="contact-address">
                            <ul>
                                <li><i class="fa fa-home"></i> Adress : Ville Paris France </li>
                                <li><i class="fa fa-envelope"></i>untec@.net</li>
                                <li><i class="fa fa-phone"></i> +33 00 00 00 00 </li>
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
    <!--// Page Conttent -->
    
    <?php include("footer.php")?>