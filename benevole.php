
<?php 
$page=8;
include('./_header.php'); ?>

<section class="header-content" id="last">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2 class="margin-top-0 wow fadeIn cursive text-primary">Pour devenir bénévole</h2>
                <hr class="primary">
                <p>Si vous voulez rejoindre l'équipe des <strong>bénévoles</strong></p>
                <p><strong>Envoyez nous un email </strong> : <a href="mailto:bourges.humour.vin@gmail.com">bourges.humour.vin@gmail.com</a></p>
            </div>
        </div>
    </div>

    <h2 class="text-center text-primary cursive wow fadeIn mt-5">On vous attend avec votre sourire</h2>
    <hr>
    <!-- Trigger the Modal -->
    <div class="container text-center pt-5">
        <div class="row justify-content-start">
            <div class="col-6">
                <img class="text-center hover-shadow w-75" src="./assets/images/equipe-2023.jpg" onclick="openModal();currentSlide(1)" alt="Equipe de bénévole 2024" />
                <p>Pierre Thévenoux & la team 2023</p>
            </div>
            <div class="col-6">
                <img class="text-center hover-shadow w-75" src="./assets/images/equipe-2022.jpg" onclick="openModal();currentSlide(2)" alt="Equipe de bénévole 2023" />
                <p>François-Xavier Demaison et la team 2022</p>
            </div>

            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">

                    <div class="mySlides">
                        <div class="numbertext">1 / 2</div>
                        <img src="./assets/images/equipe-2023.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 2</div>
                        <img src="./assets/images/equipe-2022.jpg" style="width:100%">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Caption text -->
                    <div class="caption-container">
                        <p id="caption">test</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include('./_footer.php'); ?>