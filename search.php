<?php get_header(); ?>

	<main class= "contenedor pagina seccion con-sidebar" role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Resultados de búsqueda de ', 'factoriapress' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
		<?php get_sidebar(); ?>
	</main>


<?php get_footer(); ?>
