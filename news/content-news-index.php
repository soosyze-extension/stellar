
<section>
    <?php if ($news): ?>
        <div class="posts">
            <?php foreach ($news as $new): ?>

                <article>
                    <img src="<?php echo htmlspecialchars($new[ 'field' ][ 'image' ][ 'field_value' ]); ?>" alt="Illustration <?php echo t($new[ 'title' ]); ?>">
                    <h3><a href="<?php echo $new[ 'link_view' ]; ?>"><?php echo t($new[ 'title' ]); ?></a></h3>
                    <small><?php echo date('F d, Y', $new[ 'date_created' ]); ?></small>
                    <small> ~<?php echo $new[ 'field' ][ 'reading_time' ][ 'field_value' ]
                            . ' '
                            . t(if_or($new[ 'field' ][ 'reading_time' ][ 'field_value' ] === 1, 'minute', 'minutes')); ?></small>
                    <p><?php echo $new[ 'field' ][ 'summary' ][ 'field_display' ]; ?></p>
                    <ul class="actions">
                        <li><a href="<?php echo $new[ 'link_view' ]; ?>" class="button"><?php echo t('Learn more'); ?></a></li>
                    </ul>
                </article>
            <?php endforeach; ?>
        <?php else: ?> 

            <div class="col-12">
                <p><?php echo $default; ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>
<div class="col-12">
    <?php echo $paginate; ?>
</div>
<div class="col-12">
    <a type="application/rss+xml" href="<?php echo $link_rss; ?>" title="Flux RSS"><i class="fa fa-rss-square" aria-hidden="true"></i></a>
</div>