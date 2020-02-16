<nav class="main-navigation navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="three columns navbar-title">
        <a href="<?php echo $site->url() ?>">
			   <span class="navbar-title"><?php echo $site->title() ?></span>
        </a>
      </div>
      <div class="nine columns navbar-statics">
        <!-- Static pages -->
        <?php foreach ($staticContent as $staticPage): ?>
        <a class="" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
        <?php endforeach ?>
        
      </div>
    </div>
    <!-- ./row of url and static pages-->
  </div>
</nav>

<div id="spacer"></div>

<div class="u-full-width site-header">
  <div class="site-branding">
    <a class="" href="<?php echo $site->url() ?>">
      <h1 class="site-title">
        <?php echo $site->title() ?>
      </h1>
      <h2 class="site-slogan">
        <?php echo $site->slogan(); ?>
      </h2>
    </a>

  </div>
</div>
