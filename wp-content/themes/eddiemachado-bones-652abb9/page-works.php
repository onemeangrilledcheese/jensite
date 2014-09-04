<?php
/*
 * Template Name: Works Custom Page
 * Description: Page which shows different works, seperated into two categories
 * 
*/
?>

<?php get_header(); ?>


		<div id="content">

			<div id="inner-content" class="inner-wrap cf">

					<div id="main" class="m-all t-all d-all cf" role="main">
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							</header> <?php // end article header ?>

							<div class="button-wrapper m-all t-all d-all cf">
								<button class="toggle-btn" id="fine-btn">Fine Art</button>							
								<button class="toggle-btn" id="graphic-btn">Graphic Art</button>
							</div><!-- end button-wrapper -->

							<section class="entry-content works-content m-all t-all d-all cf" itemprop="articleBody">

								<div class="fine">
									<?php if( have_rows('fine_art_image') ): ?>
									    <?php while ( have_rows('fine_art_image') ) : the_row(); ?>
									    <?php
 
										 $imageArray = get_sub_field('image_upload'); // Array returned by Advanced Custom Fields
										 $imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
										 $imageThumbURL = $imageArray['sizes']['bones-thumb-700']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
										 $imageCaption = $imageArray['caption'];	
										 	if( $imageCaption ): ?>
												<div class="wp-caption">					
											<?php endif; ?>
										    <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
										</a>
											<?php if( $imageCaption ): ?>
													<p class="wp-caption-text"><?php echo $imageCaption; ?></p>
												</div>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php else: // no rows found ?>
									<?php endif; ?>
								</div>

								<div class="graphic">
									<?php if( have_rows('graphic_art_image') ): ?>
									    <?php while ( have_rows('graphic_art_image') ) : the_row(); ?>
									    <?php
										 $imageArray = get_sub_field('image_upload'); // Array returned by Advanced Custom Fields
										 $imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
										 $imageThumbURL = $imageArray['sizes']['bones-thumb-700']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
										 $imageCaption = $imageArray['caption'];
										 	if( $imageCaption ): ?>
												<div class="wp-caption">
											<?php endif; ?>
										    <img src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>">
										</a>
											<?php if( $imageCaption ): ?>
													<p class="wp-caption-text"><?php echo $imageCaption; ?></p>
												</div>
											<?php endif; ?>										
										<?php endwhile; ?>
									<?php else: // no rows found ?>
									<?php endif; ?>
								</div>

							</section>
						</article>
					</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
