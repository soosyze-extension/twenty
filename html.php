<!DOCTYPE HTML>
<!--
    Twenty by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo htmlspecialchars($title); ?></title>
        <?php if ($favicon): ?>
            <link rel="shortcut icon" type="image/png" href="<?php echo $favicon; ?>"/>
        <?php endif; ?>

        <?php echo $meta; ?>
        <?php echo $styles; ?>

        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/admin.css" />
        <noscript><link rel="stylesheet" href="<?php echo $base_theme; ?>assets/css/noscript.css" /></noscript>
        <?php echo $styles ?>
    </head>
    <body class="index is-preload">
        <!-- Wrapper -->
        <div id="page-wrapper">
            <?php echo $section[ 'page' ] ?>

        </div>
        <!-- Scripts -->
        <?php echo $scripts ?>

        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
                integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
                crossorigin="anonymous">
        </script>
        <?php echo $script_inline; ?>

        <script src="<?php echo $base_theme; ?>assets/js/jquery.dropotron.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/jquery.scrolly.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/jquery.scrollex.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/browser.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/breakpoints.min.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/util.js"></script>
        <script src="<?php echo $base_theme; ?>assets/js/main.js"></script>
    </body>
</html>