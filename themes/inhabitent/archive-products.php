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
		
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<ul class="shop-flexbox">
			<section class="allproducts">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<li class="shop-product">
			<div class="archive-product">
			<a href="<?php the_permalink();?>" ><?php the_post_thumbnail('large'); ?></a>
			</div>
			<div class="archive-title">
			<p><?php the_title(); ?></p>
			</div>
			</li>
			<?php endwhile; ?>
			</ul>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
