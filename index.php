<?php if (!defined('ABSPATH')) exit; get_header(); ?>
<div class="page-hero"><h1>एक ख़ुदा</h1></div>
<div class="article">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_excerpt(); ?>
<?php endwhile; else: ?>
	<p>अभी कोई पोस्ट नहीं है।</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
