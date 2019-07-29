
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

        <p>This is <strong>Twenty</strong>, a free
            <br />
            responsive template
            <br />
            by <a href="http://html5up.net">HTML5 UP</a>.</p>

        <footer>
            <ul class="buttons stacked">
                <li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
            </ul>
        </footer>
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

        <?php echo $section[ 'content' ] ?>
    </section>

    <section class="wrapper style1 container special">
        <div class="row">
            <div class="col-4 col-12-narrower">
                <section>
                    <header>
                        <h3>This is Something</h3>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button small">Learn More</a></li>
                        </ul>
                    </footer>
                </section>
            </div>

            <div class="col-4 col-12-narrower">
                <section>
                    <header>
                        <h3>Also Something</h3>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button small">Learn More</a></li>
                        </ul>
                    </footer>
                </section>
            </div>

            <div class="col-4 col-12-narrower">
                <section>
                    <header>
                        <h3>Probably Something</h3>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button small">Learn More</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
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
    
    <?php echo $section[ 'second_menu' ]; ?>
</footer>