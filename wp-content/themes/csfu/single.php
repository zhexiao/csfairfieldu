<!-- display each post data -->
<?php
// calculate page view
setPostViews(get_the_ID());
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'post'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>