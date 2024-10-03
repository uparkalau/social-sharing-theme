<?php get_header(); ?>

<div id="primary" class="content-area container">
    <main id="main" class="site-main row">
        <div class="col-12">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
            else :
                echo '<p>No content found</p>';
            endif;
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
