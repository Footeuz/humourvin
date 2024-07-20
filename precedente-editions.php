
<?php
    $page=4;
    include('./_header.php');
?>

<section id="four" class="header-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                <h2 class="text-primary cursive wow fadeIn">Retour sur les précédentes éditions</h2>
                <hr/>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(1)">
                    <img src="./assets/Affiche-BourgesHumourVin-2023.jpg" height="250" alt="Affiche festival 2023" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2023</h2>
            </div>

            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(2)">
                    <img src="./assets/Affiche-BourgesHumourVin-2022.jpg" height="250" alt="Affiche festival 2022" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2022</h2>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(3)">
                    <img src="./assets/Affiche-BourgesHumourVin-2021.jpg" height="250" alt="Affiche festival 2021" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2021</h2>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(4)">
                    <img src="./assets/Affiche-BourgesHumourVin-2020.jpg" height="250" alt="Affiche festival 2020" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2020</h2>
                <p>Edition annulée à cause du contexte sanitaire</p>
                <br/><br/><br/>&nbsp;
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(5)">
                    <img src="./assets/Affiche-BourgesHumourVin-2019.jpg" height="250" alt="Affiche festival 2019" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2019</h2>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(6)">
                    <img src="./assets/Affiche-BourgesHumourVin-2018.jpg" height="250" alt="Affiche festival 2018" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2018</h2>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
                <a class="gallery-box" onclick="openModal();currentSlide(7)">
                    <img src="./assets/Affiche-BourgesHumourVin-2017.jpg" height="250" alt="Affiche festival 2017" />
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <h2 class="mt-3">2017</h2>
            </div>
        </div>
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <?php $cpt = 1; $nb_pictures = date('Y')-2017; ?>
                <?php for ($year = date('Y')-1; $year >= 2017; $year--) { ?>
                    <div class="mySlides text-center bg-secondary">
                        <div class="numbertext fw-bold text-white"><?= $cpt ?> / <?= $nb_pictures ?><br/><br/><?= $year ?></div>
                        <img src="./assets/Affiche-BourgesHumourVin-<?= $year ?>.jpg" height="600" class="img-responsive" alt="" />
                    </div>
                    <?php $cpt++; ?>
                <?php } ?>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>


        <div class="mt-5 text-center">
            <a href="./tremplin" title="Palmarès tremplin humour"><button class="btn btn-xl btn-primary">Voir le palmarès du tremplin humour</button></a>
        </div>
        <div class="container mt-5">
            <h2 class="cursive text-primary text-center margin-top-20 wow fadeIn">Concours d'affiches / Prix Yann Millet </h2>
            <p class="margin-top-20 wow fadeIn">Bravo aux étudiantes et étudiants Bachelor Marketing et Communication de l'ESTACOM de Bourges pour leurs belles participations !</p>
            <p>Félicitations aux magnifiques lauréats, dont le projet a été retenu pour représenter le festival Bourges Humour et Vin.</p>
            <p>Lauréats :</p>
            <ul>
                <li>2023 : Marion Bergin (Estacom)</li>
                <li>2022 : Marion Besson et Alexia Posnic (Estacom)</li>
                <li>2021 : Agathe Bisson et Marion Bergin (Estacom)</li>
                <li>2019 : Julie Hounkpatin, Anissah Leze et Julien Jayer</li>
            </ul>
        </div>
    </div>
</section>
<?php include('./_footer.php'); ?>