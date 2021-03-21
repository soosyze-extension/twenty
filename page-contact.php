
<!-- Header -->
<header id="header">
    <h1 id="logo">
        <?php if ($logo): ?>
            <span class="logo">
                <a href="<?php echo $base_path; ?>">
                    <img src="<?php echo $logo; ?>" alt="Logo site" class="img-responsive logo">
                </a>
            </span>
        <?php endif; ?>
        <a class="logo_a" href="<?php echo $base_path; ?>"><?php echo htmlspecialchars($title); ?></a>
    </h1>

    <!-- Nav -->
    <nav id="nav">
        <?php echo $section[ 'main_menu' ]; ?>
    </nav>
</header>

<!-- Main -->
<article id="main">
    <header class="special container">
        <span class="icon solid fa fa-envelope"></span>
        <h2><?php echo $title_main; ?></h2>
        <?php if (!empty($section[ 'header' ])): ?>
            <?php echo $section[ 'header' ]; ?>
        <?php endif; ?>

    </header>

    <!-- One -->
    <section class="wrapper style4 special container medium">
        <!-- Content -->
        <div class="content">
            <?php if (!empty($section[ 'messages' ])): ?>
                <?php echo $section[ 'messages' ]; ?>
            <?php endif; ?>

            <?php if (!empty($section[ 'content_header' ])): ?>
                <?php echo $section[ 'content_header' ]; ?>
            <?php endif; ?>

            <?php echo $section[ 'submenu' ]; ?>

            <?php echo $section[ 'content' ]; ?>

            <?php if (!empty($section[ 'content_footer' ])): ?>
                <?php echo $section[ 'content_footer' ]; ?>
            <?php endif; ?>
        </div>
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
