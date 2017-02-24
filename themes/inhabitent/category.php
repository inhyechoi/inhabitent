<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
      
	
                <header class="category-header">
                <?php print_r($term); ?>
				<?php $term = get_queried_object(); ?>
					<h1>CATEGORY: <?php echo $term -> name; ?> </h1>
				
			    </header>
				

            <?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content' ); ?>
		<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
