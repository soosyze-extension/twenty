
<section class="wrapper style3 container special">
    <div class="row">
        <?php if ($nodes): ?>
            <?php foreach ($nodes as $node): ?>
                <?php $node[ 'field' ] = unserialize($node[ 'field' ]); ?>

                <div class="col-6 col-12-narrower">
                    <section>
                        <header>
                            <h3><a href="<?php echo $node[ 'link_view' ]; ?>"><?php echo $node[ 'title' ]; ?></a></h3>
                        </header>
                        <small><?php echo date('F d, Y', $node[ 'created' ]); ?></small>
                        <p><?php echo $node[ 'field' ][ 'summary' ]; ?></p>
                        <a href="<?php echo $node[ 'link_view' ]; ?>" class="button">En savoir plus</a>
                    </section>
                </div>
            <?php endforeach; ?>
        <?php else: ?> 

            <div class="col-12 col-12-narrower">
                <p><?php echo $default; ?></p>
            </div>
        <?php endif; ?>

    </div>
</section>