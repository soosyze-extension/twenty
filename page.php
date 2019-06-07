
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
        <a href="<?php echo $base_path; ?>"><?php echo $title; ?></a>
    </h1>

    <!-- Nav -->
    <nav id="nav">
        <?php echo $block[ 'main_menu' ]; ?>
    </nav>
</header>

<!-- Main -->
<article id="main">
    <header class="container">
        <h2><?php echo $title_main; ?></h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 container">
        <!-- Content -->
        <div class="content">
            <section>
                <?php if (!empty($block[ 'messages' ])): ?>
                    <?php echo $block[ 'messages' ]; ?>
                <?php endif; ?>
                <?php echo $block[ 'content' ] ?>
            </section>
        </div>
    </section>
</article>

<!-- CTA -->
<section id="cta">
    <header>
        <h2>Ready to do <strong>something</strong>?</h2>
        <p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
    </header>

    <footer>
        <ul class="buttons">
            <li><a href="#" class="button primary">Take My Money</a></li>
            <li><a href="#" class="button">LOL Wut</a></li>
        </ul>
    </footer>
</section>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon circle fab fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon circle fab fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon circle fab fa-google-plus"><span class="label">Google+</span></a></li>
        <li><a href="#" class="icon circle fab fa-github"><span class="label">Github</span></a></li>
        <li><a href="#" class="icon circle fab fa-dribbble"><span class="label">Dribbble</span></a></li>
    </ul>

    <?php echo $block[ 'second_menu' ]; ?>
</footer>
