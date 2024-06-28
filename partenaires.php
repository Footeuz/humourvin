<?php
    $page=6;
    include('./_header.php');
?>
    <section class="header-content" id="five">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="inner">
                    <h2 class="cursive text-primary text-center wow fadeIn">Nos partenaires</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div>
                    <?php 
                        if(!empty($partenaire)){ 
                            foreach($partenaire as $id => $partenaire_item){
                                echo '<a href="'. $partenaire_item['link'] .'" title="'. $partenaire_item['text'] .'" target="_blank"><img style="height:100px;" class="text-center me-4 my-2" src="' . $partenaire_item['image'] .'" class="img-responsive" alt="'. $partenaire_item['text'] .'" /></a>';
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include('./_footer.php');
?>