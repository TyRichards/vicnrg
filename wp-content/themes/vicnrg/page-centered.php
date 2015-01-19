<?php
/*
Template Name: Centered
*/
?>

<?php get_header(); ?>
<!-- 	<div class="container content"> -->
		
		<div class="main-col col-sm-6 col-sm-offset-3">
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
		
<!-- 	</div> -->
						



	</div>

<?php get_footer(); ?>
