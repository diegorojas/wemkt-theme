<?php

/* Template Name: Jetpack Portfolio Archive Template */

get_header(); ?>

<div class="content">						

	<?php if ( have_posts() ) :
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	?>
		<?php endif; ?>

			<div class="page-title">
				
				<div class="section-inner">
		
					<h4 class="jetpack-portfolio">
						<?php _e( 'Portfolio', 'fukasawa' ); ?>
							<div class="clear"></div>
					</h4>
							
				</div><!-- .section-inner -->
				
			</div><!-- .page-title -->
	
		<div class="posts" id="posts">

			<div class="grid-sizer"></div>
				
			<?php 
			while ( have_posts() ) : the_post();
			
				get_template_part( 'content', get_post_format() );
				
			endwhile; 
			?>
		
		</div><!-- .posts -->
	
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
		<div class="archive-nav">
				
			<?php echo get_next_posts_link( __( 'Older projects', 'fukasawa' ) . ' &rarr;' ); ?>
				
			<?php echo get_previous_posts_link( '&larr; ' . __( 'Newer projects', 'fukasawa' ) ); ?>
			
			<div class="clear"></div>
						
		</div><!-- .archive-nav -->
						
	<?php endif; ?>	
</div><!-- .content -->
	<div class="rodape-we"></div>							
<?php get_footer(); ?>