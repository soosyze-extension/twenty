
<ul class="copyright">
    <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    <?php foreach ($menu as $link): ?>

        <li class="<?php echo $link[ 'link_active' ]; ?>">
        <a href="<?php echo $link[ 'link' ]; ?>"<?php if ($link[ 'target_link' ]): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>>
            <?php echo if_or($link['icon'], '<i class="' . htmlspecialchars($link['icon']) . ' aria-hidden="true"></i>'); ?>
            <?php echo t($link[ 'title_link' ]); ?>

        </a>
        <?php if (!empty($link[ 'submenu' ])): ?>
            <?php echo $link[ 'submenu' ]; ?>
        <?php endif; ?>

    </li>
    <?php endforeach; ?>

</ul>