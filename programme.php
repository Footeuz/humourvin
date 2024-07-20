<?php
$page=1;
include('./_header.php');
?>

    <section class="header-content" id="one">
      <div class="container pb5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	            <h2 class="wow fadeIn text-center text-primary cursive">Programme</h2>
                <hr>
                <p class="text-center wow fadeIn">
                    Le festival <strong>Bourges Humour & Vin</strong>
                    <br/>aura lieu du 05 au 08 décembre 2024
                </p>
                <hr/>
                <!--<p>Programme à venir...</p>-->
                <div class="media wow fadeInRight">
                    <div class="d-table-cell align-middle">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                    <div class="d-table-cell ps-5 align-middle w-75">
                        <h3>Théâtre Jacques Coeur - <a href="./artist-noens" class="text-decoration-none">Simon Noens</a></h3>
                        <p>Prix du Jury & Public 2023</p>
                        <p>Jeudi 05 décembre 2024 - 20h00</p>
                    </div>
                    <div class="d-table-cell ps-5 align-middle">
                        <a href="./artist-noens" class="text-decoration-none"><img src="./assets/images/artist/Simon-Noens.jpg" class="d-block w-100" alt="Simon Noens" /></a>
                    </div>
                </div>
                <hr/>
                <div class="media wow fadeInRight">
                    <div class="d-table-cell align-middle">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                    <div class="d-table-cell ps-5 align-middle w-75">
                        <h3>Théâtre Jacques Coeur - <a href="./artist-demanche" class="text-decoration-none">Arnaud Demanche</a></h3>
                        <p>Vendredi 06 décembre 2024 - 20h30</p>
                    </div>
                    <div class="d-table-cell ps-5 align-middle">
                        <a href="./artist-demanche" class="text-decoration-none"><img src="./assets/images/artist/Arnaud-Demanche.jpg" class="d-block w-100" alt="Arnaud Demanche" /></a>
                    </div>
                </div>
                <hr/>
                <div class="media wow fadeInRight">
                    <div class="d-table-cell align-middle">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                    <div class="d-table-cell ps-5 align-middle w-75">
                        <h3>Théâtre Jacques Coeur - <a href="./artist-santini" class="text-decoration-none">Julien Santini</a></h3>
                        <p>Samedi 07 décembre 2024 - 20h30</p>
                    </div>
                    <div class="d-table-cell ps-5 align-middle">
                        <a href="./artist-santini" class="text-decoration-none"><img src="./assets/images/artist/Julien-Santini.jpg" class="d-block w-100" alt="Julien Santini" /></a>
                    </div>
                </div>
                <hr/>
                <div class="media wow fadeInRight">
                    <div class="d-table-cell align-middle">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                    <div class="d-table-cell ps-5 align-middle">
                        <h3>Théâtre Jacques Coeur - Tremplin jeunes talents</h3>
                        <p>Samedi 07 décembre 2024 - 14h00</p>
                        <p>Président du jury : à venir</p>
                    </div>
                </div>
                <hr/>
                <div class="media wow fadeInRight">
                    <div class="d-table-cell align-middle">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                    <div class="d-table-cell ps-5 align-middle w-75">
                        <h3>Théâtre Jacques Coeur - <a href="./artist-tranie" class="text-decoration-none"> Benjamin Tranié </a> </h3>
                        <p>Dimanche 08 décembre 2024 - 19h00</p>
                    </div>
                    <div class="d-table-cell ps-5 align-middle">
                        <a href="./artist-tranie" class="text-decoration-none"><img src="./assets/images/artist/Benjamin-Tranie.jpg" class="d-block w-100" alt="Benjamin Tranié" /></a>
                    </div>
                </div>
                <hr/>
                <div class="media wow fadeInRight">
                    <div class="d-table-cell align-middle">
                        <i class="icon-lg ion-ios-bolt-outline"></i>
                    </div>
                    <div class="d-table-cell ps-5 align-middle">
                        <h3>Salle du Duc Jean - SALON DES VINS + SALON DU LIVRE + Ateliers, Conférences</h3>
                        <p>Vendredi 06 décembre 2024 - 17h/20h</p>
                        <p>Samedi 07 décembre 2024 - 14h/20h</p>
                        <p>Dimanche 08 décembre 2024 - 11h/18h30</p>
                    </div>
                </div>
                <hr/>
                <h2 class="wow fadeIn text-center text-primary cursive">SALON DU LIVRE</h2>
                   
                <hr>
                <h3 class="text-center wow fadeIn"> AUTEURS :</h3>
                <?php 
                    if (!empty($auteurs)){
                        foreach($auteurs as $id => $auteur){
                            echo '<p class="mb-0">'.  $auteur .'</p>'; 
                        }
                    }
                ?>
                </p>
                <h2 class=" wow fadeIn text-center text-primary cursive d-block">SALON DES VINS</h2>
                <ul>
                <hr>
                <h3 class="text-center">VIGNERONS :</h3>
                <p class="wow fadeInRight">
					<?php 
                    if (!empty($vignerons)){
                        foreach($vignerons as $id => $vigneron){
                            echo '<p class="mb-0">'.  $vigneron .'</p>'; 
                        }
                    }
                    ?>
                </p>

                <!-- <h2 class="text-center text-primary cursive wow fadeIn">PROGRAMME COMPLET</h2>
                <hr/>
            <div class="container text-center pt-5">
                <div class="row justify-content-start">
                        <img style="max-width:50%;" class="text-center" src="./assets/Depliant-RECTO.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
                    

                        <img style="max-width:50%;" class="text-center" src="./assets/Depliant-VERSO.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
                        
                        <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            <div class="mySlides">
                                <div class="numbertext">1 / 2</div>
                                <img src="./assets/Depliant-RECTO.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 2</div>
                                <img src="./assets/Depliant-VERSO.jpg" style="width:100%">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                        </div> 
                    
                </div>
            </div> -->

                <!--<div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 text-center">
                        
                            <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/Depliant-RECTO.jpg">
                                <img style="max-width:50%;" class="text-center" src="./assets/Depliant-RECTO.jpg" class="img-responsive rounded mx-auto d-block" alt="Programme festival 2022 recto">
                                <div class="gallery-box-caption">
                                    <div class="gallery-box-content">
                                        <div>
                                            <i class="icon-lg ion-ios-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-center">
                        
                            <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/Depliant-VERSO.jpg">
                                <img style="max-width:50%;" class="text-center" src="./assets/Depliant-VERSO.jpg" class="img-responsive rounded mx-auto d-block" alt="Programme festival 2022 verso">
                                <div class="gallery-box-caption">
                                    <div class="gallery-box-content">
                                        <div>
                                            <i class="icon-lg ion-ios-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>-->

                </div>
            </div>
        </div>
      </div>
    </section>
    
    <?php
        include('./_footer.php');
    ?>