<?php
//$page=10;
include('./_header.php');
?>
<div class="container">
    <div class="row">
        <h1 class="cursive my-3 text-primary text-center wow fadeIn"><?= $artist['name'] ?></h1>
        <div class="col-md-3 col-12 my-3">
            <div class="d-table-cell align-middle w-25">
                <img src="./assets/images/artist/<?= $artist['picture'] ?>" class="d-block w-100" alt="<?= $artist['name'] ?>" />
            </div>
        </div>
        <div class="col-md-4 col-12 ps-5 align-middle my-3">
            <h3 class="cursive"><?= $artist['place'] ?></h3>
            <p><?= $artist['date'] ?></p>
            <?php if (!empty($artist['website'])) { ?><p><a target="_blank" href="<?= $artist['website'] ?>"> Ses prochains spéctacles ! </a></p><?php } ?>
            <h3 class="mt-5">Le suivre sur:</h3>
            <ul>
                <?php if (!empty($artist['rs_facebook'])) { ?><li class="d-inline p-2"><a rel="nofollow" target="_blank" href="<?= $artist['rs_facebook'] ?>https://www.facebook.com/ArnaudDemanchePage" title="Facebook"><i class="icon-xs ion-social-facebook-outline"></i></a></li><?php } ?>
                <?php if (!empty($artist['rs_instagram'])) { ?><li class="d-inline p-2"><a rel="nofollow" target="_blank" href="<?= $artist['rs_instagram'] ?>https://www.instagram.com/arnauddemanche/" title="Instagram"><i class="icon-xs ion-social-instagram-outline"></i></a></li><?php } ?>
                <?php if (!empty($artist['rs_youtube'])) { ?><li class="d-inline p-2"><a rel="nofollow" target="_blank" href="<?= $artist['rs_youtube'] ?>https://www.youtube.com/channel/UC8-xeUF3sXerirWvgobhz7g" title="Youtube"><i class="icon-xs ion-social-youtube-outline"></i></a></li><?php } ?>
                <?php if (!empty($artist['rs_x'])) { ?><li class="d-inline p-2"><a rel="nofollow" target="_blank" href="<?= $artist['rs_x'] ?>https://x.com/ArnaudDemanche" title="Twitter"><i class="icon-xs ion-social-twitter-outline"></i></a></li><?php } ?>
            </ul>
        </div>
        <div class="col-md-5 col-12 align-middle my-3">
            <iframe width="560" height="315" src="<?= $artist['video'] ?>" title="Video <?= $artist['name'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
    <div class="text-center my-3">
        <a href="./programme" title="Programme Humour & Vin"><button class="btn btn-xl btn-primary">Retour</button></a>
    </div>
</div>
<?php include('./_footer.php') ?>
