<?php
/*
Template Name: Right Sidebar
*/
?>

<?php get_header(); ?>
	<div class="container content">
		
		<div class="container main-col col-sm-7 col-md-7 col-lg-7">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
								
					<section class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					</section>

				<?php endwhile; else : ?>

						<!-- error messages here -->

						<!--<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
							</footer>
						</article>-->

				<?php endif; ?>

		</div>
		
		<div class="container sidebar-col col-sm-5 sidebar-right col-md-5 col-lg-5">	
			<div class="sidebar-wrap">	
			  <?php get_sidebar(); ?>
			</div>
		</div>
		
	</div>
						



	</div>

<?php get_footer(); ?>
