<?php get_header(); ?>

<div class="content">

<?php if ( have_posts() ) : ?>

			<div class="page-title">
				
				<div class="section-inner">
		
					<h4>
						<?php 
						echo sprintf( __( 'Search results for: "%s"', 'Variable: search query text', 'fukasawa' ), get_search_query() );
						?>
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

</div><!-- .content -->

<?php get_footer(); ?>
