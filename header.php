<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="mobile-navigation">
	
			<ul class="mobile-menu">
						
				<?php 
				if ( has_nav_menu( 'primary' ) ) {

					$nav_args = array( 
						'container' 		=> '', 
						'echo'				=> false,
						'items_wrap' 		=> '%3$s',
						'theme_location' 	=> 'primary'
					);
																	
					$primary_nav = wp_nav_menu( $nav_args );

					echo $primary_nav;

				} else {

					$list_pages_args = array(
						'container' => '',
						'echo'		=> false,
						'title_li' 	=> ''
					);

					$pages_list = wp_list_pages( $list_pages_args );

					echo $pages_list;
					
				} 
				?>
				
			 </ul>
		 
		</div><!-- .mobile-navigation -->
	
		<div class="sidebar">
		
			<?php if ( get_theme_mod( 'fukasawa_logo' ) ) : ?>
			
		        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
		        	<img src='<?php echo esc_url( get_theme_mod( 'fukasawa_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
		        </a>
		
			<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : 
				
				// h1 on singular, h2 elsewhere
				$title_type = is_singular() ? 'h2' : 'h1'; ?>
		
				<<?php echo $title_type; ?> class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</<?php echo $title_type; ?>>
				
			<?php endif; ?>
			
			<button type="button" class="nav-toggle hidden" title="<?php _e( 'Click to view the navigation', 'fukasawa' ); ?>">
			
				<div class="bars">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
				
				<p>
					<span class="menu"><?php _e( 'Menu', 'fukasawa' ); ?></span>
					<span class="close"><?php _e( 'Close', 'fukasawa' ); ?></span>
				</p>
			
			</button>
			
				<ul class="main-menu">

					<?php 
					if ( isset( $primary_nav ) ) {
						echo $primary_nav;
					} else {
						echo $pages_list;
					} 
					?>

				</ul>

				<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

					<div class="widgets">

						<?php dynamic_sidebar( 'sidebar' ); ?>

					</div>

				<?php endif; ?>
				
				<div class="btn-sociais">

					<h3 class="widget-title"><?php _e( 'FOLLOW US', 'fukasawa' ); ?></h3>

					<?php
                    $fukasawa_fb_link = get_theme_mod( 'fukasawa_fb_link' );
                	?>
	                	<?php if ( $fukasawa_fb_link ) { ?>
	                        <a class="btn-fb" href="<?php echo $fukasawa_fb_link; ?>" target="_blank" alt="Facebook">
	                        </a>
	                    <?php } ?>
                    <?php
                    $fukasawa_insta_link = get_theme_mod( 'fukasawa_insta_link' );
                	?>
                		<?php if ( $fukasawa_insta_link ) { ?>
                       		<a class="btn-insta" href="<?php echo $fukasawa_insta_link; ?>" target="_blank" alt="Instagram">
                        	</a>
                        <?php } ?>
                    <?php
                    $fukasawa_twitter_link = get_theme_mod( 'fukasawa_twitter_link' );
                	?>
                		<?php if ( $fukasawa_twitter_link ) { ?>
	                        <a class="btn-twitter" href="<?php echo $fukasawa_twitter_link; ?>" target="_blank" alt="Twitter"> 
	                        </a>
                        <?php } ?>
                    <?php
                    $fukasawa_yt_link = get_theme_mod( 'fukasawa_yt_link' );
                	?>
                		<?php if ( $fukasawa_yt_link ) { ?>
	                        <a class="btn-yt" href="<?php echo $fukasawa_yt_link; ?>" target="_blank" alt="YouTube">
	                        </a>
                        <?php } ?>

                    <?php
                    $fukasawa_linkedin_link = get_theme_mod( 'fukasawa_linkedin_link' );
                	?>
                		<?php if ( $fukasawa_linkedin_link ) { ?>
	                        <a class="btn-linkedin" href="<?php echo $fukasawa_linkedin_link; ?>" target="_blank" alt="Linkedin">
	                        </a>
                        <?php } ?>
                </div>

				<div class="credits">

					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a> &copy; <?php echo date( 'Y' ); ?></p>
					<p><?php _e( 'Powered by', 'fukasawa' ); ?> <a href="https://www.wordpress.org">WordPress</a></p>

				</div>

				<div class="clear"></div>
							
		</div><!-- .sidebar -->
	
		<div class="wrapper" id="wrapper">