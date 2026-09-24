<?php if (!defined('ABSPATH')) exit; get_header(); ?>
<div class="page-hero"><h1><?php the_title(); ?></h1></div>
<div class="article">
<?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
</div>
<?php get_footer(); ?>
