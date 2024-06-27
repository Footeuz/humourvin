<nav class="navbar bg-dark  navbar-expand-lg border-bottom border-body fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= URL ?>">
        <img src="./assets/images/logo-bourges-humour-vin.jpg" alt="Logo bourges Humour et Vin" width="50"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php
            if(!empty($menu)){
                foreach($menu as $id => $menu_item){
                    if($page == $id) {
                      $active='active';
                    } else {
                      $active = '';
                    }
                    echo '<a class="nav-link btn btn-outline-light text-info mx-1 '. $active .'" href="'. $menu_item['link'] .'">'.$menu_item['text'].'</a>';
                }
            }
            ?>
        </div>
    </div>
  </div>
</nav>