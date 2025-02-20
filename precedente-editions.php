
<?php
$page=4;
include('./_header.php');

$cpt = 1;
for ($year = date('Y')-1; $year >= 2017; $year--) {
    $pictures[$cpt]['path'] = './assets/Affiche-BourgesHumourVin-'.$year.'.jpg';
    $pictures[$cpt]['caption'] = 'Affiche festival '.$year;
    $pictures[$cpt]['year'] = $year;

    $cpt++;
}
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
            <?php foreach($pictures as $cpt => $picture) { ?>
                <div class="col-lg-4 col-sm-4 text-center">
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
                    <h2 class="mt-3"><?= $picture['year'] ?></h2>
                    <?php if ($picture['year'] == 2020) { ?><p>Edition annulée à cause du contexte sanitaire</p><?php } ?>
                </div>
            <?php } ?>
        </div>

        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <?php foreach($pictures as $cpt => $picture) { ?>
                    <div class="mySlides text-center bg-secondary">
                        <div class="numbertext fw-bold text-white"><?= $cpt ?> / <?= count($pictures) ?><br/><br/><?= $picture['year'] ?></div>
                        <img src="<?= $picture['path'] ?>" height="600" class="img-responsive" alt="<?= $picture['caption'] ?>" />
                    </div>
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