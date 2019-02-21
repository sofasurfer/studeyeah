<?php snippet('header') ?>
<body class="" data-spy="scroll" data-target="#nav-main" >
    <div class="jumbotron header">
      <h1><?= $page->title()->html() ?></h1>
      <ul id="nav-main" class="nav-main">
          <li><a href="#info">Info</a></li>
          <li><a href="#video">Video</a></li>
          <li><a href="#musik">Musik</a></li>
          <li><a href="#gigs">Gigs</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
      </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="info"></a>
              <h2><?= $page->intro()->kirbytext() ?></h2>
            <?= $page->text()->kirbytext() ?>
            </div>
        </div>       
        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="video"></a>
                <h2>Video</h2>
            </div>
            <?php foreach($page->videolink()->toStructure() as $item): ?>
            <div class="col-md-4 col-video">
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
            <div class="col-md-6 col-md-offset-3">
                <a class="anchor" id="musik"></a>
                <h2>Musik</h2>
                <iframe src="<?= $page->mx3link()->html() ?>" width="100%" height="68" scrolling="no" frameborder="no" allowfullscreen></iframe>
                <p><a class="border" href="http://mx3.ch/studeyeah" target="_blank">Meh Musig auf mx3.ch</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="anchor" id="gigs"></a>
                <h2>Konzerte</h2>
                <div style="overflow-x:auto;">
                <table class="table table-hover table-responsive">
                    <?php $ispast = false; ?>
                  <?php foreach($page->tourdates()->toStructure() as $item): ?>
                    <?php if( $item->date() < time() && !$ispast ): ?>

                        <tr><td colspan="3"><h3>PAST SHOWS</h3></td></tr>
                        <?php $ispast = true; ?>
                    <?php endif; ?>
                    <tr>
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
