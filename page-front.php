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
    <?php echo $block[ 'main_menu' ]; ?>
</nav>
<!-- Main -->
<div id="main">
    <section id="intro" class="main">
        <div class="spotlight">
            <div class="content">
                <header class="major">
                    <h2><?php echo $title_main; ?></h2>
                    <?php echo $block[ 'messages' ] ?>
                </header>
                <?php echo $block[ 'content' ] ?>
            </div>
        </div>
    </section>
</div>
<!-- Footer -->
<footer id="footer">
    <section>
        <h2>Aliquam sed mauris</h2>
        <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat 
            magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. 
            Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, 
            vitae tincidunt odio.</p>
    </section>
    <section>
        <h2>Etiam feugiat</h2>
        <dl class="alt">
            <dt>Address</dt>
            <dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
            <dt>Phone</dt>
            <dd>(000) 000-0000 x 0000</dd>
            <dt>Email</dt>
            <dd><a href="#">information@untitled.tld</a></dd>
        </dl>
        <?php echo $block[ 'second_menu' ]; ?>
    </section>
    <p class="copyright">Power by <a href="http://soosyze.com/">SoosyzeCMS</a> |  
        Built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a>.
    </p>
</footer>