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
      <?php if (!$page->isStatic() && !$url->notFound()):  ?>
      <i class="far fa-calendar"></i>
      <?php echo $page->date(); ?> &ndash;
      <i class="fas fa-book"></i>
      <?php echo $L->get('Reading time') . ': ' . $page->readingTime(); ?>
      <?php endif ?>
      <hr class="article-meta-line" />
    </div>
  </header>

  <div class="article-summary">
    <!-- Full content -->
    <?php echo $page->content(); ?>
  </div>

  <footer class="article-footer"> </footer>
  <?php Theme::plugins('pageEnd'); // Load Bludit Plugins: Page End ?>

</article>