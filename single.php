<?php get_header(); ?>

	<main class="contenedor pagina seccion con-sidebar" role="main">
	<!-- section -->
	<section class="contenido-principal">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<!-- post title -->
			<div class="titulo-entrada">
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
		</div>
			<!-- /post title -->

			<!-- post details -->
			<div class="datos-publicacion">
			<span class="author"><?php _e( 'Publicado por', 'factoriapress' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( ' Deja tu comentario.', 'factoriapress' ), __( '1 Comment', 'factoriapress' ), __( '% Comments', 'factoriapress' )); ?></span>
			<span class="date">
				<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
					<?php the_date(); ?> <?php the_time(); ?>
				</time>
			</span>
			</div>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'factoriapress' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'factoriapress' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'factoriapress' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</article>	
	</section>
		<!-- /article -->
<?php get_sidebar(); ?>
</main>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article class="contenedor">

			<h1><?php _e( 'Lo siento, no hay nada que mostrar.', 'factoriapress' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


	<!-- /section -->
	



<?php get_footer(); ?>
