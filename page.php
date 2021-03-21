<header id="header">
    <?php if ($logo): ?>
        <span class="logo">
            <a href="<?php echo $base_path; ?>">
                <img src="<?php echo $logo; ?>" alt="Logo site" class="img-responsive logo">
            </a>
        </span>
    <?php endif; ?>
    <h2><a href="<?php echo $base_path; ?>"><?php echo htmlspecialchars($title); ?></a></h2>
    <?php if (!empty($section[ 'header' ])): ?>
        <?php echo $section[ 'header' ]; ?>
    <?php endif; ?>
</header>
<!-- Nav -->
<nav id="nav">
    <?php echo $section[ 'main_menu' ]; ?>
</nav>
<!-- Main -->
<div id="main">
    <section id="content" class="main">
        <div class="spotlight">
            <div class="content">
                <header class="major">
                    <h2><?php echo htmlspecialchars($title_main); ?></h2>
                    <?php if (!empty($section[ 'messages' ])): ?>
                        <?php echo $section[ 'messages' ]; ?>
                    <?php endif; ?>
                </header>

                <?php if (!empty($section[ 'content_header' ])): ?>
                    <?php echo $section[ 'content_header' ]; ?>
                <?php endif; ?>

                <?php echo $section[ 'submenu' ]; ?>

                <?php echo $section[ 'content' ]; ?>

                <?php if (!empty($section[ 'content_footer' ])): ?>
                    <?php echo $section[ 'content_footer' ]; ?>
                <?php endif; ?>
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

