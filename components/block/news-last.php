
<?php if ($news): ?>

    <div class="row">
        <?php foreach ($news as $new): ?>

            <div class="col-6 col-12-narrower">
                <section class="card__blog">
                    <?php if (empty($new[ 'field' ][ 'image' ][ 'field_value' ])): ?>

                        <header class="icon_default">
                            <a href="<?php echo $new[ 'link_view' ]; ?>">
                                <i class="icon <?php echo $new[ 'field' ][ 'icon' ][ 'field_value' ]; ?>"></i>
                            </a>
                        </header>
                    <?php else: ?>

                        <header>
                            <a href="<?php echo $new[ 'link_view' ]; ?>" class="image featured">
                                <?php echo $new[ 'field' ][ 'image' ][ 'field_display' ]; ?>
                            </a>
                        </header>
                    <?php endif; ?>

                    <div class="card__content">
                        <?php if ($new[ 'sticky' ]): ?>

                            <small class="card__blog_sticky">
                                <i class="fa fa-thumbtack" aria-hidden="true"></i> <?php echo t('Pinned content'); ?>
                            </small>
                        <?php endif; ?>

                        <h3 class="card__title"><a href="<?php echo $new[ 'link_view' ]; ?>"><?php echo $new[ 'title' ]; ?></a></h3>

                        <div class="card__text">
                            <?php echo $new[ 'field' ][ 'summary' ][ 'field_display' ]; ?>
                        </div>
                    </div>

                    <div class="card__footer">
                        <div class="card__date_tags">
                            <span class="card__date">
                                <i class="fa fa-calendar-alt"></i> 
                                <?php echo strftime('%d %B, %Y', $new[ 'date_created' ]); ?>
                                -
                                <i class="fa fa-clock"></i> 
                                ~<?php echo $new[ 'field' ][ 'reading_time' ][ 'field_value' ] . ' ' . t('minute(s)'); ?>
                            </span>
                        </div>
                    </div>
                </section>
            </div>
        <?php endforeach; ?>

    </div>
    <?php if ($is_link_more): ?>
        <footer class="major">
            <ul class="buttons">
                <li><a href="<?php echo $link_more; ?>" class="btn btn-primary"><?php echo t('Toutes les actualités'); ?></a></li>
            </ul>
        </footer>
    <?php endif; ?>

<?php else: ?>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo t('No articles for the moment'); ?></p>
        </div>
    </div>
<?php endif; ?>