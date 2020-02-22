    <!-- Pagination -->
    <?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1) : ?>
    
    <nav class="pagination">
        <!-- Previous button -->
        <?php if (Paginator::showPrev()) : ?>
            <a href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"><?php echo $L->get('Previous'); ?></a>
        <?php endif; // Paginator::showPrev() ?>

        <?php if (Paginator::showPrev() && Paginator::showNext()) : ?> &mdash;
        <?php endif; // Paginator::showPrev() ?>

        <!-- Next button -->
        <?php if (Paginator::showNext()) : ?>
            <a href="<?php echo Paginator::nextPageUrl() ?>" tabindex="-1"><?php echo $L->get('Next'); ?></a>
        <?php endif; // Paginator::showPrev() ?>
    </nav>
    <?php endif ?>
