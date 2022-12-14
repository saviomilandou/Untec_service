
   <?php  
     require_once("../models/model_general.php");

     require_once("../models/authentification/adhesion.php");
     include("header.php");
     
    //  compter_visiter($_SERVER['REMOTE_ADDR'],"adhesion");

    //   $pays = all("pays");
  ?>
    
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area bg-info" data-bgimage="" data-black-overlay="4"> <img src="assets/images/slider/breadcrumb-bg-801.jpg" height="100%" alt=""> 
        
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Nos Realisations</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                        
                            <li class="breadcrumb-item active">Nos Realisations</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    <!-- Page Conttent -->
    <main class="page-content">
       
        <!-- Most Popular Courses Area -->
        <div class="most-popular-courses-area section-pb section-pt-90">
            <div class="container">

                <div class="row">
               <!-- ****************************** -->
               
               
                <!-- ************************************* -->
                <div class="col-lg-4  col-md-6 col-12">
                    <!-- single-courses -->
                    <div class="single-our-blog mt--30">
                        <div class="our-blog-image">
                            <a href="blog-details.php">
                                <img src="../assets/images/blog/courses-09.png" alt="AssociationPJCD">
                                <span class="in-our-blog-icon">
                                    <img src="../assets/images/icon/our-blog-01.png" alt="AssociationPJCD">
                                </span>
                            </a>
                            
                        </div>
                        <div class="our-blog-contnet">
                            <h5>Don des fournitures scolaire aux ??l??ves de Kinkala</h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">faisons  preuve de Charit??</a></li>
                                        
                                    </ul>
                                </div>
                                <p>L??? Association P??re JAN CZUBA (A.P.J.C) s???est r??jouis de fair don des fournitures scolaire pour le d??veloppement intellectuel des jeunes en milieu rural.</p>
                              <div class="button-block">
                               <b> <a href="#" class="botton-border"data-toggle="modal" data-target="#modelduModal">Voir D??tail</a></b>
                            </div>

                        </div>
                    </div><!--// single-courses -->
                </div>
                
        
                           <!-- Modal -->
                           <div class="modal fade" id="modelduModal" tabindex="-1" role="dialog" aria-labelledby="modelduModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                       <div class="modal-header" >
                                          <h5 class="modal-title" id="modelduModalLongTitle">Don des fournitures scolaire.<i class="fa fa-help"></i></h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                          </button>
                                       </div>
                                       <div class="modal-body ">
                                       L??? Association P??re JAN CZUBA (A.P.J.C) s???est r??jouis de fair don des fournitures scolaire pour le d??veloppement intellectuel des jeunes en milieu rural.
                                      </div>

                                        <div class="modal-footer">

                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
         
                                        </div>
                                    </div>
                                </div>
                            </div>

                <div class="col-lg-4  col-md-6 col-12">
                    <!-- single-courses -->
                    <div class="single-our-blog mt--30">
                        <div class="our-blog-image">
                            <a href="blog-details.php">
                                <img src="../assets/images/blog/Image1.PNG" alt="Association PJCD">
                                <span class="in-our-blog-icon">
                                    <img src="../assets/images/icon/our-blog-01.png" alt="Association PJCD">
                                </span>
                            </a>
                            
                        </div>


                        <div class="our-blog-contnet">
                        <h5>R??habilitation de l?????cole de Missafou .</h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">faisons  preuve de Charit??</a></li>
                                        
                                    </ul>
                                </div>
                                <p>L???Association P??re JAN CZUBA (A.P.J.C) s???est r??jouis de donn?? une contribution materiel et financiere pour la r??habilitation de l?????cole de Missafou dans le dioc??se de Kinkala ..</p>
                            <div class="button-block">
                              <b>  <a href="#" class="botton-border"data-toggle="modal" data-target="#newsmodal">Voir D??tail</a></b>
                            </div>

                           <!-- Modal -->
                            <div class="modal fade" id="newsmodal" tabindex="-1" role="dialog" aria-labelledby="newsmodalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                       <div class="modal-header" >
                                          <h5 class="modal-title" id="newsmodalLongTitle">R??habilitation de l?????cole de Missafou <i class="fa fa-help"></i></h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                       L???Association P??re JAN CZUBA (A.P.J.C) s???est r??jouis de donn?? une contribution materiel et financiere pour la r??habilitation de l?????cole de Missafou dans le dioc??se de Kinkala .
                                      </div>

                                        <div class="modal-footer">

                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--// single-courses -->
                </div>
             
    

                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="../assets/images/courses/courses-06.png" alt="Association PJCD">
                                 <!-- <span class="in-our-blog-icon">
                                    <img src="../assets/images/icon/our-blog-01.png" alt="AssociationPJCD">
                                  </span> -->
                              </a>

                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Les ??tudes des jeunes.</h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">faisons preuve de Charit??</a></li>
                                        
                                    </ul>
                                </div>
                                <p>prise en charge des frais d???h??bergement ?? l???internat St Augustin et des indemnit??s des vacataires
                                pour soutenir les jeunes dans la pr??paration aux examents</p>
                                <div class="button-block">
                                <b> <a href="#" class="botton-border"data-toggle="modal" data-target="#newsmodales">Voir D??tail</a></b>
                                </div>



                      <!-- Modal -->
                       <div class="modal fade" id="newsmodales" tabindex="-1" role="dialog" aria-labelledby="newsmodalesLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                       <div class="modal-header" >
                                          <h5 class="modal-title" id="newsmodalesLongTitle"> Soutien scolaire des jeunes. <i class="fa fa-help"></i></h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                       L???Association P??re JAN CZUBA (A.P.J.C) s???est r??jouis de prendre en charge les frais d???h??bergement ?? l???internat St Augustin et des indemnit??s des vacataires pour soutenir les jeunes dans la pr??paration aux examents.
                                      </div>

                                        <div class="modal-footer">

                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
         
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div><!--// single-courses -->
                    </div>
<!-- *********************** -->

                     <div class="col-lg-4  col-md-6 col-12">
                    <!-- single-courses -->
                    <div class="single-our-blog mt--30">
                        <div class="our-blog-image">
                            <a href="blog-details.php">
                                <img src="../assets/images/courses/poulet01.png" alt="AssociationPJCD">
                                <span class="in-our-blog-icon">
                                    <img src="../assets/images/icon/our-blog-01.png" alt="AssociationPJCD">
                                </span>
                            </a>
                        </div>

                        <div class="our-blog-contnet">
                           <h5>Projet Poulets Kotamweko</h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">faisons  preuve de Charit??</a></li>
                                        
                                    </ul>
                                </div>
                                <p>Renforcement de l???activit?? d?????levage de la volaille par les populations du dioc??se en leur dotant de 1 coq et 2 poules soit 3 t??tes par famille.</p>
                               <div class="button-block">
                              <b><a href="#" class="botton-border"data-toggle="modal" data-target="#exampleModal">Voir D??tail</a></b>
                            </div>

                              
                              <!-- Modal -->
                               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Projet Poulets Kotamweko</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    Renforcement de l???activit?? d?????levage de la volaille par les populations du dioc??se en leur dotant 1 coq et 2 poules soit 3 t??tes par famille.
                                    <br>
                                    R??sultats attendus au bout de 12 mois. Les familles b??n??ficiaires de cette aide, doivent ?? leur tour fournir 3 t??tes mini pour d???autres familles.
                                        <br> 
                                      <h5 class="text-info">Obligations des promoteurs du projet </h5> 
                                     <ol>
                                     <li>Financement et achats de poulets</li>??
                                     <li>Attribuer les poulets ?? des personnes qui sont capables de les ??lever.</li>
                                     <li>Pas plus de 3 personnes de la m??me famille</li>
                                     <li>Support technique: une plateforme pour le suivi des indicateurs constitu?? par les donateurs.</li>
                                     </ol>
 
                                      <h5 class="text-info ">Obligations des b??n??ficiaires</h5> 
                                     <ol>
                                     <li>Construire un poulailler </li>??
                                     <li>Nutrition des poulets et multiplication des poulets</li>
                                     <li>G??rer la liste des b??n??ficiaires et leurs coordonn??es </li>
                                     <li>Interdiction formelle de consommer les poulets, coqs et ??ufs avant le partage.</li>
                                     <li>Engagement de partage des poulets avec l'association PJCD ?? la fin du projet afin d???en faire b??n??ficier d???autres familles.</li>??
                                     
                                     </ol>



                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
 
                                    </div>
                                  </div>
                                </div>
                              </div> 


                        </div>
                    </div>      <!--// single-courses -->
                </div>
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="../assets/images/courses/courses-07.png" alt="Association PJCD"></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Projet Poulets Kotamweko</h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">faisons  preuve de Charit??</a></li>
                                        
                                    </ul>
                                </div>
                                <p>Renforcement de l???activit?? d?????levage de la volaille par les populations du dioc??se en leur dotant de 1 coq et 2 poules soit 3 t??tes par famille.</p>
                                <div class="button-block">
                                <b> <a href="#" class="botton-border"data-toggle="modal" data-target="#modelduModal">Voir D??tail</a></b>
                                </div>
                            </div>
                        </div><!--// single-courses -->
                    </div>

                   <div class="col-lg-4 col-md-6 col-12">
                        <!-- single-courses -->
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="../assets/images/courses/courses-05.jpg" alt="Association PJCD"></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Projet Agriculture</h5>
                                <div class="post_meta">
                                     <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">faisons  preuve de Charit??</a></li>
                                        
                                    </ul>
                                </div>
                                <p> Projets de d??veloppement agricole dont l???objet est l???accompagnement des agriculteurs pour la mise en ??uvre de m??thodes, outils et strat??gies pr??ventives.</p>
                                <div class="button-block">
                                <b> <a href="#" class="botton-border"data-toggle="modal" data-target="#modelmodaless">Voir D??tail</a></b>
                                </div>
                            </div>


                            <div class="modal fade" id="modelmodaless" tabindex="-1" role="dialog" aria-labelledby="modelmodalessLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                       <div class="modal-header" >
                                          <h5 class="modal-title" id="modelmodalesLongTitle"> Projet Agriculture <i class="fa fa-help"></i></h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">??</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                       Projets de d??veloppement agricole dont l???objet est l???accompagnement des agriculteurs pour la mise en ??uvre de m??thodes, outils et strat??gies pr??ventives.
                                      </div>

                                        <div class="modal-footer">

                                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
         
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div><!--// single-courses -->

                    </div>
                </div>


                <div class="col-lg-12"><!--// single-don -->
                    <div class="all-course-btn">
                      <a href="https://paypal.me/associationpjcd?locale.x=fr_FR" class="all-course" target="_blank"><i class="fa fa-heart mx-3"></i>  Nous soutenir</a>   
                    </div>
                </div><!--// single-don-->
                
                <!-- paginatoin-area Start -->
                <div class="paginatoin-area ">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#"><i class="fa fa-chevron-left"></i></a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <!-- <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li> -->
                                <li>
                                  <a class="Next" href="#"><i class="fa fa-chevron-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--// paginatoin-area End -->

            </div>
        </div>
        <!--// Most Popular Courses Area -->
        
    </main>
    <!--// Page Conttent -->
    
    <!-- Footer Area -->
    <?php include("footer.php")?>



<!-- 
                      <div class="col-lg-4 col-md-6 col-12">
                      
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="../assets/images/courses/courses-07.png" alt="Association PJCD"></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Les etudes des jeunes </h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">Fessons preuve de Charit??</a></li>
                                    
                                    </ul>
                                </div>
                                <p>prise en charge des frais d???h??bergement ?? l???internat St Augustin et des indemnit??s des vacataires
                                pour soutenir les jeunes dans la pr??paration aux examents</p>
                                <div class="button-block">
                                    <a href="#" class="botton-border">D??tail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                       
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="../assets/images/courses/courses-08.jpg" alt="Association PJCD"></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Action Sociale</h5>
                                <div class="post_meta">
                                    <ul>
                                        <li><a href="https://www.paypal.com/paypalme/associationpjcd?locale.x=fr_FR" target="_blank">Fessons preuve de Charit??</a></li>
                                       
                                    </ul>
                                </div>
                                <p>Financement du voyage des jeunes du Dioc??se de Kinkala ?? Pointe-Noire </p>
                                <div class="button-block">
                                    <a href="#" class="botton-border">D??tail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        
                        <div class="single-popular-courses mt--30">
                            <div class="popular-courses-image">
                                <a href="#"><img src="../assets/images/courses/courses-07.jpg" alt="Association PJCD"></a>
                            </div>
                            <div class="popular-courses-contnet">
                                <h5>Department of Science.</h5>
                                <p>Soutien sanitaire au dispensaire (mat??riel de petite chirurgie du dispensaire de Massembo).</p>
                                <div class="button-block">
                                    <a href="course-details.php" class="botton-border">apply now</a>
                                </div>
                            </div>
                        </div>
                    </div>
 -->








