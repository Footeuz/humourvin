    </div>
    <footer id="footer" class="fixed-bottom bottom-0 pt-2 pb-0 mb-0 fw-lighter bg-black bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 col-sm-6 ps-3">
                    <ul class="list-inline fw-lighter mb-2">
                        <li class="d-inline p-2 pb-0 mb-0"><a rel="nofollow" target="_blank" href="https://www.facebook.com/humourvin" title="Facebook BHV"><i class="icon-xxs ion-social-facebook-outline"></i></a>&nbsp;</li>
                        <li class="d-inline p-2 pb-0 mb-0"><a rel="nofollow" target="_blank" href="https://www.instagram.com/humourvin" title="Instagram BHV"><i class="icon-xxs ion-social-instagram-outline"></i></a>&nbsp;</li>
                        <li class="d-inline p-2 pb-0 mb-0"><a rel="nofollow" target="_blank" href="https://www.youtube.com/channel/UCBKvW5qnwT8Mnd2RfDj-RcA" title="Youtube BHV"><i class="icon-xxs ion-social-youtube-outline"></i></a>&nbsp;</li>
                        <li class="d-inline p-2 pb-0 mb-0"><a rel="nofollow" target="_blank" href="https://twitter.com/humourvin" title="Twitter BHV"><i class="icon-xxs ion-social-twitter-outline"></i></a>&nbsp;</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-sm-6 ps-3">
                    <ul class="list-unstyled fw-lighter mb-2">
                        <li><a target="_blank" href="./mentions" class="text-decoration-none">Mentions Légales</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-sm-6 ps-3">
                    <ul class="list-unstyled fw-lighter mb-2">
                        <li>Réalisation site : <a target="_blank" href="https://stephaniemichel.com" class="text-decoration-none">WeBerry.fr</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-sm-6 ps-3">
                    <ul class="list-unstyled fw-lighter mb-2">
                        <li>©<?= date('Y') ?> HelProd <a href="<?= URL ?>" class="text-decoration-none">humourvin.fr</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="" id="galleryImage" class="img-responsive" />
                <p>
                    <br/>
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Fermer <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Besoin d'aide ?</h2>
                <h5 class="text-center">
                    Envoyez-nous un email :
                </h5>
                <p class="text-center"><a href="mailto:contact@stephaniemichel.com">contact@stephaniemichel.com</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
        </div>
    </div>




    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KRZY2HNVHC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-KRZY2HNVHC');
    </script>

  </body>
</html>