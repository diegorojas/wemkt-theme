<?php get_header(); ?>

<div class="content thin">
											        
	<?php 
	
	if ( have_posts() ) : 
		
		while ( have_posts() ) : the_post(); 
		
			?>
			
			<div id="post-<?php the_ID(); ?>" <?php post_class( 'post single' ); ?>>
			
				<?php
				
				$post_format = get_post_format(); 
				
				if ( $post_format == 'video' ) :
				
					if ( $pos = strpos( $post->post_content, '<!--more-->' ) ) : ?>
			
						<div class="featured-media">
						
							<?php
									
							// Fetch post content
							$content = get_post_field( 'post_content', get_the_ID() );
							
							// Get content parts
							$content_parts = get_extended( $content );
							
							// oEmbed part before <!--more--> tag
							$embed_code = wp_oembed_get( $content_parts['main'] );
							
							echo $embed_code;
							
							?>
						
						</div><!-- .featured-media -->
					
						<?php
					endif;
					
				elseif ( $post_format == 'gallery' ) : ?>
				
					<div class="featured-media">	
		
						<?php fukasawa_flexslider( 'post-image' ); ?>
						
						<div class="clear"></div>
						
					</div><!-- .featured-media -->
								
				<?php elseif ( has_post_thumbnail() ) : ?>
						
					<div class="featured-media">
			
						<?php the_post_thumbnail( 'post-image' ); ?>
						
					</div><!-- .featured-media -->
						
				<?php endif; ?>
				
				<div class="post-inner">
					
					<div class="post-header">
														
						<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
																
					</div><!-- .post-header -->
						
					<div class="post-content">
					
						<?php 
						if ( $post_format == 'video' && isset( $content_parts ) ) { 
							$content = $content_parts['extended'] ?: '';
							$content = apply_filters( 'the_content', $content );
							echo $content;
						} else {
							the_content();
						}
						?>
					
					</div><!-- .post-content -->
				
				</div><!-- .post-inner -->

				<?php if ( is_single() ) : ?>
				
					<div class="post-navigation">

						<?php

						$prev_post = get_previous_post();
						$next_post = get_next_post();

						if ( $prev_post ) : ?>
						
							<a class="post-nav-prev" href="<?php echo get_permalink( $prev_post->ID ); ?>">
								<p>&larr; <?php _e( 'Previous project', 'fukasawa' ); ?></p>
							</a>

							<?php 
						endif;
						
						if ( $next_post ) : ?>
							
							<a class="post-nav-next" href="<?php echo get_permalink( $next_post->ID ); ?>">					
								<p><?php _e( 'Next project', 'fukasawa' ); ?> &rarr;</p>
							</a>
					
							<?php 
						endif; 
						?>
						
						<div class="clear"></div>
					
					</div><!-- .post-navigation -->

				<?php endif; ?>
			
			</div><!-- .post -->
																	
			<?php 
		endwhile; 

	endif; 
	
	?>
	<div class="rodape-we"></div>
</div><!-- .content -->	
<?php get_footer(); ?>