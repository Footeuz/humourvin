
<?php 
$page=8;
include('./_header.php');

$pictures[1]['path'] = './assets/images/equipe-2023.jpg';
$pictures[2]['path'] = './assets/images/equipe-2022.jpg';
$pictures[3]['path'] = './assets/images/equipe-2022b.jpg';
$pictures[1]['caption'] = 'Pierre Thévenoux & la team 2023';
$pictures[2]['caption'] = 'François-Xavier Demaison et la team 2022';
$pictures[3]['caption'] = 'Antoine Lucciardi et la team 2022';
?>

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
            <?php foreach($pictures as $cpt => $picture) { ?>
                <div class="col-md-4 col-12">
                    <a class="gallery-box" onclick="openModal();currentSlide(<?= $cpt ?>)">
                        <img src="<?= $picture['path'] ?>" height="250" alt="<?= $picture['caption'] ?>" />
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <p><?= $picture['caption'] ?></p>
                </div>
            <?php } ?>

            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <?php foreach($pictures as $cpt => $picture) { ?>
                        <div class="mySlides text-center bg-secondary">
                            <div class="numbertext fw-bold text-white"><?= $cpt ?> / <?= count($pictures) ?></div>
                            <img src="<?= $picture['path'] ?>" height="600" class="img-responsive" alt="<?= $picture['caption'] ?>" />
                        </div>
                    <?php } ?>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- Caption text -->
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('./_footer.php'); ?>