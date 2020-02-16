<div class="container">
    <div class="row">
        <div class="twelve columns">
            <nav style="text-align: right;">
                <?php if ($site->twitter()): ?>
                <a href="<?php echo $site->twitter() ?>" target="_blank">twitter</a>
                <?php endif ?>

                <?php if ($site->facebook()): ?>
                <a href="<?php echo $site->facebook() ?>" target="_blank">facebook</a>
                <?php endif ?>

                <?php if ($site->codepen()): ?>
                <a href="<?php echo $site->codepen() ?>" target="_blank">codepen</a>
                <?php endif ?>

                <?php if ($site->googleplus()): ?>
                <a href="<?php echo $site->googleplus() ?>" target="_blank">google+</a>
                <?php endif ?>

                <?php if ($site->instagram()): ?>
                <a href="<?php echo $site->instagram() ?>" target="_blank">instagram</a>
                <?php endif ?>

                <?php if ($site->gitlab()): ?>
                <a href="<?php echo $site->gitlab() ?>" target="_blank">gitlab</a>
                <?php endif ?>

                <?php if ($site->github()): // Social Networks ?>
                <a href="<?php echo $site->github() ?>" target="_blank">github</a>
                <?php endif ?>

                <?php if ($site->linkedin()): ?>
                <a href="<?php echo $site->linkedin() ?>" target="_blank">linkedin</a>
                <?php endif ?>
                </ul>
            </nav>

            <h1>
                <a style="text-decoration: none;" href="/" title="<?php echo $site->title() ?>">
                    <?php echo $site->title() ?>
                </a>
            </h1>
            <p>
                <?php echo $site->slogan() ?>
            </p>
        </div>
    </div>
</div> <!-- ./container of social links-->
