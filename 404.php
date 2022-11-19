<?php get_header(); ?>

<main class="site-main">

	<section class="error-404 not-found">

		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('404. That’s an error.', 'monoscopic'); ?></h1>
		</header>

		<div class="page-content">
			<p><?php esc_html_e('The requested URL was not found on this server.', 'monoscopic'); ?></p>
		</div>

	</section>

</main>

<?php
get_footer();
