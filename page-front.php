
<!-- Header -->
<header id="header" class="alt">
    <h1 id="logo">
        <?php if ($logo): ?>
            <span class="logo">
                <a href="<?php echo $base_path; ?>">
                    <img src="<?php echo $logo; ?>" alt="Logo site" class="img-responsive logo">
                </a>
            </span>
        <?php endif; ?>
        <a href="<?php echo $base_path; ?>"><?php echo $title; ?></a>
    </h1>

    <!-- Nav -->
    <nav id="nav">
        <?php echo $section[ 'main_menu' ]; ?>
    </nav>
</header>

<!-- Banner -->
<section id="banner">
    <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
    -->
    <div class="inner">
        <header>
            <h2><?php echo $title; ?></h2>
        </header>

        <?php if (!empty($section[ 'header' ])): ?>
            <?php echo $section[ 'header' ]; ?>
        <?php endif; ?>
    </div>
</section>

<!-- Main -->
<article id="main">
    <section class="wrapper style3 container special">
        <header class="major">
            <h2><?php echo $title_main; ?></h2>
            <?php if (!empty($section[ 'messages' ])): ?>
                <?php echo $section[ 'messages' ]; ?>
            <?php endif; ?>
        </header>

        <?php if (!empty($section[ 'content_header' ])): ?>
            <?php echo $section[ 'content_header' ]; ?>
        <?php endif; ?>
        <?php echo $section[ 'content' ]; ?>
        <?php if (!empty($section[ 'content_footer' ])): ?>
            <?php echo $section[ 'content_footer' ]; ?>
        <?php endif; ?>
    </section>

    <?php if (!empty($section[ 'footer_first' ])): ?>
        <section class="wrapper style1 container special">
            <?php echo $section[ 'footer_first' ]; ?>
        </section>
    <?php endif; ?>
</article>

<?php if (!empty($section[ 'footer_second' ])): ?>
    <!-- CTA -->
    <section id="cta">
        <?php echo $section[ 'footer_second' ]; ?>
    </section>
<?php endif; ?>

<!-- Footer -->
<footer id="footer">
    <?php if (!empty($section[ 'footer' ])): ?>
        <?php echo $section[ 'footer' ]; ?>
    <?php endif; ?>
    <?php echo $section[ 'second_menu' ]; ?>
</footer>
