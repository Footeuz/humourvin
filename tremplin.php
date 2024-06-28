<?php
$page=9;
include('./_header.php');
?>

<section class="header-content" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2 class="wow fadeIn cursive text-primary">Pour le tremplin jeunes talents</h2>
                <hr/>

                <p>Si vous voulez candidater pour le tremplin d'humour les sélections se font de <strong>mi avril à mi juillet</strong></p>
                <p class="fw-bold">Envoyez une vidéo démo sur l'email suivant</strong> : <a href="mailto:bourges.humour.vin@gmail.com">bourges.humour.vin@gmail.com</a></p>
            </div>

            <div class="col-lg-10 col-lg-offset-1 text-center mt-5">
                <h2 class="wow fadeIn cursive text-primary">Palmarès</h2>
                <hr/>
                <div class="container text-center pt-5">
                    <div class="row mt-4">
                        <div class="col-6">
                            <img src="./assets/images/tremplin/gagnants/2023-gagnant.jpg" onclick="openModal();currentSlide(1)" height="250" alt="Gagnant 2023 Simon Noens" />
                        </div>
                        <div class="col-6 text-start">
                            <p class="fw-bold h3">2023</p>
                            <p>Prix du Jury & public : <a href="https://www.instagram.com/simonnoens" target="_blank">Simon Noens</a></p>
                            <p>Prix spécial : <a href="https://www.instagram.com/hahamez" target="_blank">Amziane Bouzid</a></p>
                        </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <img src="./assets/images/tremplin/gagnants/2022-gagnant.jpg" onclick="openModal();currentSlide(2)" height="250" alt="Gagnante 2022 Margot Demeurisse" />
                    </div>
                    <div class="col-6 text-start">
                        <p class="mt-5 fw-bold h3">2022</p>
                        <p>Prix du Jury : <a href="https://www.tiktok.com/@margot_demeurisse" target="_blank">Margot Demeurisse</a></p>
                        <p>Prix du Public : <a href="http://hugueslavigne.com/" target="_blank">Hugues Lavigne</a></p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <img src="./assets/images/tremplin/gagnants/2021-gagnant.jpg" onclick="openModal();currentSlide(3)" height="250" alt="Gagnant 2021 Benoît Turjman" />
                    </div>
                    <div class="col-6 text-start">
                        <p class="mt-5 fw-bold h3">2021</p>
                        <p>Prix du Jury : <a href="https://www.benoitturjman.com" target="_blank">Benoît Turjman</a></p>
                        <p>Prix du Public : Benoît Turjman</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <img src="./assets/images/tremplin/gagnants/2019-gagnant.jpg" onclick="openModal();currentSlide(4)" height="250" alt="Gagnant 2019 Antoine Lucciardi" />
                    </div>
                    <div class="col-6 text-start">
                        <p class="mt-5 fw-bold h3">2019</p>
                        <p>Prix du Jury : <a href="https://antoinelucciardi.com" target="_blank">Antoine Lucciardi</a></p>
                        <p>Prix du Public : Monsieur S</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <img src="./assets/images/tremplin/gagnants/2018-gagnant.jpg" onclick="openModal();currentSlide(5)" height="250" alt="Gagnant 2018 Olivier Stephan" />
                    </div>
                    <div class="col-6 text-start">
                        <p class="mt-5 fw-bold h3">2018</p>
                        <p>Prix du Jury : <a href="https://www.facebook.com/olivier.stephan.sur.scene/" target="_blank">Olivier Stephan</a></p>
                        <p>Prix du Public : Cyrille Huguet</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <img src="./assets/images/tremplin/gagnants/2017-gagnant.jpg" onclick="openModal();currentSlide(6)" height="250" alt="Gagnante 2017 Doully" />
                    </div>
                    <div class="col-6 text-start">
                        <p class="mt-5 fw-bold h3">2017</p>
                        <p>Prix du Jury : <a href="https://www.facebook.com/DoullyOfficiel/" target="_blank">Doully</a></p>
                        <p>Prix du Public : <a href="https://www.facebook.com/BodyCloud" target="_blank">Damien Préteux</a></p>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="./assets/images/tremplin/gagnants/2023-gagnant.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="./assets/images/tremplin/gagnants/2022-gagnant.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="./assets/images/tremplin/gagnants/2021-gagnant.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="./assets/images/tremplin/gagnants/2019-gagnant.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="./assets/images/tremplin/gagnants/2018-gagnant.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="./assets/images/tremplin/gagnants/2017-gagnant.jpg" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('./_footer.php'); ?>