<ul class="copyright">
    <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    <li>Power by <a href="https://soosyze.com">SoosyzeCMS</a></li>
    <?php foreach ($menu as $link): ?>

        <li class="<?php echo $link[ 'link_active' ]; ?>">
            <a href="<?php echo $link[ 'link' ]; ?>" target="<?php echo $link[ 'target_link' ]; ?>" <?php if ($link[ 'target_link' ] === '_blank'): ?> rel="noopener noreferrer" <?php endif; ?>>
                <?php echo $link[ 'title_link' ]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>