<!-- Header -->
<header id="header" class="alt">
    <?php if ($logo): ?>
        <span class="logo">
            <a href="<?php echo $base_path; ?>">
                <img src="<?php echo $logo; ?>" alt="Logo site" class="img-responsive logo">
            </a>
        </span>
    <?php endif; ?>
    <h1><?php echo $title; ?></h1>
    <p>Just another free, fully responsive site template.</p>
</header>

<!-- Nav -->
<nav id="nav">
    <?php echo $section[ 'main_menu' ]; ?>
</nav>

<!-- Main -->
<div id="main">
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content">
                <header class="major">
                    <h2><?php echo $title_main; ?></h2>
                    <?php if (!empty($section[ 'messages' ])): ?>
                        <?php echo $section[ 'messages' ]; ?>
                    <?php endif; ?>
                </header>
                <?php echo $section[ 'content' ] ?>
            </div>
        </div>
    </section>
</div>

<!-- Footer -->
<footer id="footer">
    <?php if (!empty($section[ 'footer_first' ])): ?>
        <section>
            <?php echo $section[ 'footer_first' ]; ?>
        </section>
    <?php endif; ?>
    <?php if (!empty($section[ 'footer_second' ])): ?>
        <section>
            <?php echo $section[ 'footer_second' ]; ?>
        </section>
    <?php endif; ?>
    <section>
        <?php echo $section[ 'second_menu' ]; ?>
    </section>
    <p class="copyright">
        Built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a>.
    </p>
    <?php if (!empty($section[ 'footer' ])): ?>
        <?php echo $section[ 'footer' ]; ?>
    <?php endif; ?>
</footer>