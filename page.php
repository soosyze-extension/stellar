<header id="header">
    <?php if ($logo): ?>
        <span class="logo">
            <a href="<?php echo $base_path; ?>">
                <img src="<?php echo $logo; ?>" alt="Logo site" class="img-responsive logo">
            </a>
        </span>
    <?php endif; ?>
    <h2><a href="<?php echo $base_path; ?>"><?php echo $title; ?></a></h2>
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
        <ul class="icons">
            <li><a href="#" class="icon fab fa-twitter alt"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fab fa-facebook alt"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fab fa-instagram alt"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fab fa-github alt"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon fab fa-dribbble alt"><span class="label">Dribbble</span></a></li>
        </ul>
        <?php echo $section[ 'second_menu' ]; ?>
    </section>
    <p class="copyright">
        Built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a> | 
        Power by <a href="http://soosyze.com/">SoosyzeCMS</a>.
    </p>
</footer>

