
<section class="special">
    <div class="row">
        <?php if ($news): ?>
            <?php foreach ($news as $new): ?>

                <div class="col-6 col-12-narrower">
                    <section>
                        <a class="image featured" href="<?php echo $new[ 'link_view' ]; ?>">
                            <img src="<?php echo $new[ 'field' ][ 'image' ][ 'field_value' ]; ?>" alt="Illustration <?php echo $new[ 'title' ]; ?>">
                        </a>
                        <header>
                            <h3><a href="<?php echo $new[ 'link_view' ]; ?>"><?php echo $new[ 'title' ]; ?></a></h3>
                        </header>
                        <small><?php echo date('F d, Y', $new[ 'date_created' ]); ?></small> ~ 
                        <small><?php echo $new[ 'field' ][ 'reading_time' ][ 'field_value' ] . ' ' . t('minute(s)'); ?></small>

                        <p><?php echo $new[ 'field' ][ 'summary' ][ 'field_display' ]; ?></p>
                        <a href="<?php echo $new[ 'link_view' ]; ?>" class="button"><?php echo t('Learn more'); ?></a>
                    </section>
                </div>
            <?php endforeach; ?>
            <div class="col-md-12">
                <?php echo $paginate; ?>
            </div>
            <div class="col-md-12">
                <a type="application/rss+xml" href="<?php echo $link_rss; ?>" title="Flux RSS"><i class="fa fa-rss-square" aria-hidden="true"></i></a>
            </div>
        <?php else: ?>

            <div class="col-12 col-12-narrower">
                <p><?php echo $default; ?></p>
            </div>
        <?php endif; ?>

    </div>
</section>