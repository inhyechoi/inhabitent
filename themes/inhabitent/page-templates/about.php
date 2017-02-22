<?php  
/**Template Name: About Page
*
* @package Inhabitent Theme
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- wp_add_inline_style  for hero image-->

            <h2>Our Story</h2>
            <?php echo CFS()->get('about_out_story'); ?>
            <p></p>
            <?php echo CFS()->get('about_out_story'); ?>

			<h2>Our Team</h2>
            <?php echo CFS()->get('about_out_team'); ?>
            <p></p>
           

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
