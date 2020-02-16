<div class="u-full-width">
  <div class="container site-footer-info-container">
    <div class="row">
      <div class="twelve columns">
        <a href="https://www.uberspace.de" target="_blank">hosted on asteroids</a> &ndash;
        <a href="http://www.adfreeblog.org" target="_blank">ad free blog</a> &ndash;
        <a href="http://www.bludit.com" target="_blank">made with bludit</a> &ndash;
    
        <?php
        // Class name of the plugin
        $className = 'pluginRSS';

        if (pluginActivated($className)) {
            echo '<a href="'. DOMAIN .'/rss.xml" target="_blank">RSS</a> &ndash;';
        }
        ?>
          <?php
        // Class name of the plugin
        $className = 'pluginSitemap';

        if (pluginActivated($className)) {
            echo '<a href="'. DOMAIN .'/sitemap.xml" target="_blank">Sitemap</a> &ndash;';
        }
        ?>

        <a href="/impressum" target="_blank">Impressum</a> &ndash;
        <?php echo $site->footer(); ?>
      </div>
    </div>
  </div>
</div>