            <!-- Pagination -->
            <?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
            <nav style="float:left;">
                <!-- Previous button -->
                <?php if (Paginator::showPrev()): ?>
                <a href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"><?php echo $Language->get('Previous'); ?></a>
                <?php endif; // Paginator::showPrev() ?>

                <?php if (Paginator::showPrev() && Paginator::showNext()): ?> &mdash;
                <?php endif; // Paginator::showPrev() ?>

                <!-- Next button -->
                <?php if (Paginator::showNext()): ?>
                <a href="<?php echo Paginator::nextPageUrl() ?>" tabindex="-1"><?php echo $Language->get('Next'); ?></a>
                <?php endif; // Paginator::showPrev() ?>
            </nav>
            <?php endif ?>
