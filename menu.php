<ul>
    <?php foreach ($menu as $link): ?>

        <li class="<?php echo $link[ 'link_active' ] ? 'current' : ''; ?> <?php echo !empty($link[ 'submenu' ]) ? 'submenu' : ''; ?>">
            <a href="<?php echo $link[ 'link' ]; ?>" target="<?php echo $link[ 'target_link' ]; ?>" <?php if ($link[ 'target_link' ] === '_blank'): ?> rel="noopener noreferrer" <?php endif; ?>>
                <?php echo !empty($link['icon']) ? "<i class='{$link['icon']}' aria-hidden='true'></i> {$link[ 'title_link' ]}" : $link[ 'title_link' ]; ?>
            </a>

        <?php if (!empty($link[ 'submenu' ])): ?>

            <?php echo $link[ 'submenu' ]; ?>
        <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>