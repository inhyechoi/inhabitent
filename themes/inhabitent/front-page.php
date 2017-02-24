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
    <?php    
        $terms = get_terms( array(
          'taxonomy' => 'product_type',
           'orderby' => 'name', ));
        foreach ($terms as $term) :
          $url = get_term_link ($term->slug , 'product_type');              
    ?>  
      <div class="shop-stuff-item">
          <div class="product-icon-image">       
              <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg">
          </div>

          <p> <?php echo $term->description; ?> </p>
         
          <button><a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?> Stuff </a></button>
      </div>
                        
    <?php endforeach; ?>
</div>

<div class="latest-blogpost">
    <h2>inhabitent journal</h2>
    <?php
      global $post;
      $args = array(  'post_type' => 'post',
                      'order' => 'ASC',
                      'posts_per_page' => 3
                    );

     $product_posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
      <section class="single-thumbnail">
     <!--grab from content-sigle.php-->  
     <?php the_post_thumbnail( 'medium_large' ); ?>
        <div class="text-area">
        <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> 
        </div><!-- .entry-meta -->
        <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
     
     
        <div>
          <a class="read-entry" href="<?php the_permalink(); ?>"> Read Entry </a></div>
        </div>
     </section>
   
   <?php endforeach; wp_reset_postdata(); ?>

    
</div>
<div class="adventures container">
    <h2>latest adventures</h2>
</div>

  <section class="story-wrapper">  


  <div class="adventure-canoe">
          <p>Getting Back to Nature in a Canoe</p>     
      <div>
          <a class="read-entry" href="<?php the_permalink(); ?>"> Read More </a>
      </div>
  </div>
  <div class="adventure-beach">
          <p>A Night with Friends at the Beach</p>     
      <div>
          <a class="read-entry" href="<?php the_permalink(); ?>"> Read More </a>
      </div>
  </div>

  <div class="adventure-sky">
          <p>Star-Gazing at the Night Sky</p>     
      <div>
          <a class="read-entry" href="<?php the_permalink(); ?>"> Read More </a>
      </div>
  </div>
    <div class="adventure-mountain">
          <p>Taking in the View at Big Mountain</p>     
      <div>
          <a class="read-entry" href="<?php the_permalink(); ?>"> Read More </a>
      </div>

      <button>more adventures</button>
</section>
        
<?php get_footer(); ?>