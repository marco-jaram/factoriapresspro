<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

	    <header class="site-header">

            <div class="contenedor">
               <div class="barra-navegacion" role="baner">
					<div class="logo">
			
                            
						
					   <?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$fppro_description = get_bloginfo( 'description', 'display' );
						if ( $fppro_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $fppro_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
							
                  	 </div>	

					<div class="menu-desktop" role="navigation" >
						<nav class="menu-principal">
						    <?php factoriapress_nav(); ?>
					    </nav>
				     </div>
				
					<div><span class="ham" id="ham">&#9776;</span></div>

                </div>

					<div class="menu-movil" id="menu_wrapper" role="navigation" >
                         <div class="menux lista-navegacion">
							 <nav class="menu-principal" >
						 <?php factoriapress_nav(); ?>
						 </nav>
                         </div>
                    </div>

                
			</div>
		</header>
			<!-- /header -->
