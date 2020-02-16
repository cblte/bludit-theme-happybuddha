<?php foreach ($content as $page): ?>
<!-- A single blog post -->
<article>
  <?php Theme::plugins('pageBegin'); // Load Bludit Plugins: Page Begin ?>

  <!-- Cover image -->
  <?php if ($page->coverImage()): ?>
  <div class="article-cover-image">
    <a href="<?php echo $page->permalink(); ?>">
      <img class="bludit-image" alt="Cover Image of <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>" />
    </a>
  </div>
  <?php endif ?>

  <header class="article-header">
    <h2 class="article-title">
      <a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a> <br/>
    </h2>
    <div class="article-meta">
      <i class="far fa-calendar"></i>
      <?php echo $page->date(); ?> &ndash;
      <i class="fas fa-book"></i>
      <?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>

      <!-- STICK POST -->
      <?php if($page->type() == 'sticky') { ?>
        <i class="far fa-sticky-note"></i> Angeheftet
      <?php } ?>
      <hr class="article-meta-line" />
    </div>
  </header>

  <div class="article-summary">
    <!-- Breaked content -->
    <?php echo $page->contentBreak(); ?>

    <?php if ($page->readMore()): // Read more" button ?>
    <p class="article-read-more">
      <a href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a>
    </p>
    <?php endif ?>

  </div>

  <footer class="article-footer"> </footer>
  <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>

</article>
<?php endforeach; ?>