<?php get_header(); ?>

	    <main class="contenedor pagina seccion no-sidebar" role="main">
		
		
			<div class="contenido-principal">
                <div class="titulo-pagina">
			          <h1><?php the_title(); ?></h1>
				</div>

		         <?php if (have_posts()): while (have_posts()) : the_post(); ?>


			    <!-- article -->
			    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			     <?php the_content(); ?>

				 <?php comments_template( '', true ); // Remove if you don't want comments ?>

				 <br class="clear">

				 <?php edit_post_link(); ?>

		        </article>
			     <!-- /article -->
            </div>
			
             <!-- agregar get_sidebar con php para poder agregar sidebar y cambiar la case no-sidebar por con-sidebar -->
		     <?php endwhile; ?>
			</main>
			 <?php else: ?>
				
				<!-- article -->
				<article class="contenedor">
					
					<h2><?php _e( 'Lo siento, no hay nada que mostrar.', 'factoriapress' ); ?></h2>
					
				</article>
				<!-- /article -->
				
				<?php endif; ?>
				
				<!-- /section -->
				
	



<?php get_footer(); ?>
