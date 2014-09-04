<?php
/*
 *
 * Template Name: Front Custom Page
 * Description: Landing Page. Shows Rotatiion of selected featured images.
 *
 * For reference: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

	<div id="content" class="front-wrap">

		<div id="inner-content" class="inner-wrap cf">

				<div id="main" class="m-all t-all d-all cf" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">
						
						<h1 class="page-title" id="front-title" itemprop="headline"><?php the_title(); ?></h1>

						</header> <?php // end article header ?>

						<section class="entry-content normal-content cf" itemprop="articleBody">
							<?php 
								// featured image
								if ( has_post_thumbnail()) {
								  echo '<a href="index.php?page_id=2">';
								  the_post_thumbnail('bones-theme-700');
								  echo '</a>'; }
								?>	
							<div class="wp-caption"> <!-- styling for title -->
								<?php 
									// title of the current featured image
									the_field('featured_image_title'); 
								?>
							</div>
					
							<p class="image-description">
								<?php 
									// description of the current featured image
									the_field('featured_image_description'); 
								?>
							</p>

							<?php	

								// the content (pretty self explanatory huh)
								the_content();

								/*
								 * Link Pages is used in case you have posts that are set to break into
								 * multiple pages. You can remove this if you don't plan on doing that.
								 *
								 * Also, breaking content up into multiple pages is a horrible experience,
								 * so don't do it. While there are SOME edge cases where this is useful, it's
								 * mostly used for people to get more ad views. It's up to you but if you want
								 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
								 *
								 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
								 *
								*/
								?>

						</section> <?php // end article section ?>
					

					</article>

					<?php endwhile; else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

				</div>

		</div>

	</div>

<?php get_footer(); ?>