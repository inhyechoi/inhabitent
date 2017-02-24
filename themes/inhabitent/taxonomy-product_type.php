<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php $term = get_queried_object(); ?>
					<h1><?php echo $term -> name; ?> </h1>
						<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>


			</header>
			
			<ul class="shop-flexbox">
				<section class="allproducts">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<li class="shop-product">

						
						<div class="archive-product">
							<a href="<?php the_permalink();?>" ><?php the_post_thumbnail('large'); ?>
							</a>
						</div>
						<div class="archive-product-text">
						<div class="archive-title">
							<p><?php the_title(); ?></p>
						</div>
						<div class="item-price">
          				<?php echo CFS()->get('price'); ?>
		   				</div>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
			
			<?php endif; ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
