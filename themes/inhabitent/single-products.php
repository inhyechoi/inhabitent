<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>	
		<div class="shop-item">
			<div class="item-img">
			<?php the_post_thumbnail( 'large' ); ?>
			</div>
		
			<div class="item-text">
					<h2><?php the_title(); ?></h2>
					<div class="item-price">
          				<?php echo CFS()->get('price'); ?>
		   			</div>
					
					<p><?php the_excerpt(); ?></p>
					<button><a href="http://www.facebook.com"><i class="fa fa-facebook"></i>Like</a></button>
					<button><a href="http://www.twitter.com"><i class="fa fa-twitter"></i>Tweet</a></button>
					<button><a href="http://www.pinterest.com"><i class="fa fa-pinterest"></i>Pin</a></button>
			</div>
		</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
