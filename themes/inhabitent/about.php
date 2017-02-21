<?php /* Template Name: about */ ?>
<!-- this name is to setup the custom page template -->
<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<!--<section class="about_hero_banner">
		<h1 class="about-hero-text"> About </h1>
	</section>

	<section class="about_text">
		<div class="ourstory">
			<h2 >Our Story</h2>

		</div>-->
	
		<!--<div class="ourteam">
			<h2> Our Team </h2>-->
		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-page' ); ?>

			<?php endwhile; ?>

	

<?php get_footer(); ?>
