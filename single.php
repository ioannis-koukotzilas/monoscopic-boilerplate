<?php get_header(); ?>

<main class="site-main">

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content-post-single'); ?>

	<?php endwhile; ?>

</main>

<?php
get_footer();
