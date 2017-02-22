<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="hero-banner">
</div>  


<div class="shopstuff container">
    <h2>shop stuff</h2>
</div>

<div class="latest-blogpost">
    <h2>inhabitent journal</h2>
<?php
   global $post;
     $args = array(
       'post_type' => 'post',
       'order' => 'ASC',
       'posts_per_page' => 3);
     $product_posts = get_posts( $args ); // returns an array of posts
   ?>
   <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
     
     <!--grab from content-sigle.php-->  
     <?php the_post_thumbnail( 'thumbnail' ); ?>
     <div class="entry-meta">
       <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> 
     </div><!-- .entry-meta -->
     <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
     
     
     <div><a class="read-more" href="<?php the_permalink(); ?>"> Read Entry </a></div>
   <?php endforeach; wp_reset_postdata(); ?>
    
</div>

<div class="adventures container">
    <h2>latest adventures</h2>
</div>

<?php get_footer(); ?>