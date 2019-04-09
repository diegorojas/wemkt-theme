<?php get_header(); ?>

<div class="content">

<?php if ( have_posts() ) :
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
?>
			<div class="page-title">
				
				<div class="section-inner">
		
					<h4>
						<?php echo _e( 'Search results for:', 'fukasawa' ) ; ?>
						<div class="clear"></div>
					</h4>

					<?php get_search_form(); ?>
							
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

<?php else : ?>

	<div class="post single">
	
		<div class="post-inner section-inner thin">
		                
		<div class="post-header">
		
			<h1 class="post-title"><?php _e( 'Nothing Found', 'fukasawa' ); ?></h1>
													
		</div><!-- .post-header -->
	                                                	            
        <div class="post-content">
        	            
            <p><?php _e( "Sorry, but nothing matched your search terms. Please try again with some different keywords.", 'fukasawa' ); ?></p>
            
            <?php get_search_form(); ?>
            
        </div><!-- .post-content -->
        	            	                        	
	</div><!-- .post -->

<?php endif; ?>

	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
		<div class="archive-nav">
				
			<?php echo get_next_posts_link( __( 'Older posts', 'fukasawa' ) . ' &rarr;' ); ?>
				
			<?php echo get_previous_posts_link( '&larr; ' . __( 'Newer posts', 'fukasawa' ) ); ?>
			
			<div class="clear"></div>
						
		</div><!-- .archive-nav -->
						
	<?php endif; ?>

</div><!-- .content -->

<?php get_footer(); ?>
