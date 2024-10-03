<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
    <header class="entry-header row">
        <div class="col-12">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
