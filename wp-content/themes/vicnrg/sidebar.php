				<?php 
/* 				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. */
					the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
	/*			} 
				else {
					?><img width="400" height="549" src="<?php echo get_template_directory_uri(); ?>/library/images/about.png" class="feature-image attachment-sidebar-thumb img-rounded wp-post-image" alt="VicNRG"><?php
				}
*/
				?>	
				
				<div id="sidebar1" class="sidebar last clearfix" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>