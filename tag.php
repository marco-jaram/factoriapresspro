<?php get_header(); ?>

	<main class="contenedor" role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Tag Archive: ', 'factoriapress' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
