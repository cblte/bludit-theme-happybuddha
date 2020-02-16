<!DOCTYPE html>
<html lang="de">

<head>
  <?php include(THEME_DIR_PHP.'head.php'); ?>
</head>

<body>
  <?php Theme::plugins('siteBodyBegin');  // Load Bludit Plugins: Site Body Begin ?>

  <header>
    <?php include(THEME_DIR_PHP . 'header.php'); ?>
  </header>
  <!-- ./section header-->
  <div id="content" class="site-main">
    <div class="container">
      <div class="row">
        <div id="content-left" class="nine columns">
          <?php
              if ($WHERE_AM_I == 'page') {
                  include(THEME_DIR_PHP.'page.php');
              } else {
                  include(THEME_DIR_PHP.'home.php');
              }
          ?>
        </div>
        <!-- ./one-half -->
        <div id="content-right" class="three columns">
          <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
        </div>

      </div>
      <!-- ./row -->
    </div>
    <!-- ./container -->
  </div>
  <!-- ./section -->
  <footer class="site-footer">
    <?php include(THEME_DIR_PHP.'footer.php'); ?>
  </footer>

  <?php Theme::plugins('siteBodyEnd'); // Load Bludit Plugins: Site Body End ?>
</body>

</html>