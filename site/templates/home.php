<?php snippet('header') ?>
<body class="" data-spy="scroll" data-target="#nav-main" >
    <div class="header">
      <!--h1><?= $page->title()->html() ?></h1-->
      <img  class="img-responsive img-desktop"
            src="/assets/images/header-2-desktop2.png"     />
        <img  class="img-responsive img-mobile"
            src="/assets/images/header-2-mobile.jpg"     />
      <ul id="nav-main" class="nav nav-main">
          <li><a class="info" href="#info">Info</a></li>
          <li><a class="video" href="#video">Video</a></li>
          <li><a class="musik" href="#musik">Musik</a></li>
          <li><a class="gigs" href="#gigs">Gigs</a></li>
          <li><a class="kontakt" href="#kontakt">Kontakt</a></li>
      </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="info"></a>
              <h1><?= $page->intro()->kirbytext() ?></h1>
              <?= $page->text()->kirbytext() ?>
            </div>
        </div>       
        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="video"></a>
                <h2>Video</h2>
            </div>
            <?php foreach($page->videolink()->toStructure() as $item): ?>
            <div class="col-md-6 col-video">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="<?= $item->url()->html() ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div> 
            <?php endforeach ?>
            <div class="col-md-12">
              <p class="spacetop"><a href="https://www.youtube.com/channel/UC-PIf2MiyQXQbwOMLsSD-PQ" class="border" target="_blank">Meh Video auf youtube.com</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="musik"></a>
                <h2>New Album</h2>
                <div class="col-md-6 col-md-offset-3 stream-list">
                    <a href="https://lnk.site/jo-sicher" target="_blank"><img class="img-responsive" src="/assets/images/album-jo-sicher.jpg"></a>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <p></p>
                  <p><a href="https://lnk.site/jo-sicher" target="_blank">Jetzt Anhören</a></p>
                </div>
            </div>
        </div>
        <div class="row stream-list">
            <div class="col-md-12">
                <h2>Stream</h2>
            </div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://music.apple.com/ch/album/jo-sicher/1500271075"><img class="img-responsive" src="/assets/images/n_apple_music.png"></a></div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://open.spotify.com/album/5ifcO729j2t1tcsn9j25bI?si=2K0eymAyS5CkZTxGLYqVIQ"><img class="img-responsive" src="/assets/images/n_spotify.png"></a></div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://www.deezer.com/us/album/133248842"><img class="img-responsive" src="/assets/images/n_deezer.png"></a></div>   
        </div>
        <div class="row stream-list">
            <div class="col-md-12">
                <h2>Buy</h2>
            </div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://music.apple.com/ch/album/jo-sicher/1500271075?app=itunes&ign-mpt=uo%3D4"><img class="img-responsive" src="/assets/images/n_itunes.png"></a></div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://play.google.com/store/music/album/Studeyeah_Jo_Sicher?id=Bprgxe6damfc4oai7x5sz4hp4du"><img class="img-responsive" src="/assets/images/n_google_play.png"></a></div>
            <div class="col-md-4 col-xs-6"><a target="_blank" href="https://www.amazon.de/dp/B08546F5X4?tag=igroove0a-21"><img class="img-responsive" src="/assets/images/n_amazon.png"></a></div>    
        </div>

        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="gigs"></a>
                <h2>Konzerte</h2>
                <div style="overflow-x:auto;">
                <table class="table table-hover table-responsive">
                    <?php $ispast = false; ?>
                  <?php foreach($page->tourdates()->toStructure() as $item): ?>

                    <?php
                    error_log($item->canceled()->toBool());
                    ?>
                    <?php if( $item->date() < time() && !$ispast ): ?>
                        </table>
                        <h3><a href=""><label for="pastcheck">PAST SHOWS</label></a></h3>
                        <input type="checkbox" id="pastcheck"/>
                        <table class="table table-hover table-responsive table-past">
                        <?php $ispast = true; ?>
                    <?php endif; ?>
                    <tr class="<?= ($ispast) ? 'past-show' : '' ; ?> <?= ( $item->canceled() == '1' ) ? 'canceled-show' : '' ; ?>">
                      <td><?= $item->date('d.m.Y') ?></td>
                      <td><?= $item->title()->html() ?></td>
                      <td><a href="<?= $item->url()->html() ?>" target="_blank"><?= $item->location()->html() ?></a></td>
                    </tr>
                  <?php endforeach ?>
                </table>
                </div>      
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="kontakt"></a>
                <h2>Kontakt</h2>
                <?= $page->contact()->kirbytext() ?>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/Studeyeah/" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/studeyeah/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC-PIf2MiyQXQbwOMLsSD-PQ" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>  
    </div>
<?php snippet('footer') ?>
