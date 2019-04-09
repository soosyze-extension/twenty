<!DOCTYPE HTML>
<!--
    Twenty by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title><?php echo $title ?></title>
        <?php if( $favicon ): ?>
            <link rel="shortcut icon" type="image/png" href="<?php echo $favicon; ?>"/>
        <?php endif; ?>
        <meta charset="utf-8" />
        <meta name="description" content="<?php echo $description ?>"/>
        <meta name="keywords" content="<?php echo $keyboard ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/admin.css" />
        <noscript><link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/noscript.css" /></noscript>
        <?php echo $styles ?>
    </head>
    <body class="index is-preload">
        <!-- Wrapper -->
        <div id="page-wrapper">
            <?php echo $block[ 'page' ] ?>
        </div>
        <!-- Scripts -->
        <script src="<?php echo $base_theme; ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/jquery.dropotron.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/jquery.scrolly.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/jquery.scrollex.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/browser.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/breakpoints.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/util.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/main.js"></script>
        <?php echo $scripts ?>
    </body>
</html>