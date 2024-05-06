<?php 

   get_header();
   
   $post_col = is_active_sidebar( 'blog-sidebar' ) ? 'col-xxl-8 col-lg-8' : 'col-xxl-12 col-lg-12'; 
   $post_col_order = get_theme_mod('order-sidebar', false); 

   $post_col_rev = $post_col ? 'row-rovers' : ''; 

?>



<section class="postbox__area grey-bg-4 pt-120 pb-120">
   <div class="container">
      <div class="row <?php echo esc_attr($post_col_rev); ?>">
         <div class="<?php echo esc_attr($post_col); ?>">
            <div class="postbox__wrapper">
            <?php if ( have_posts() ) : ?>
                  <?php while ( have_posts() ) : the_post(); ?> 
                  <?php echo get_template_part( 'template-parts/content' , get_post_format() ); ?>
                  <?php endwhile; ?>
             <?php else : ?>
               <?php echo get_template_part( 'template-parts/content-none' ); ?>
            <?php endif; ?>

            <div class="tp-pagination tp-pagination-style-2 mt-20">
               <?php harry_navigation(); ?>
            </div>

            </div>
         </div>

         <?php if(is_active_sidebar( 'blog-sidebar' )) : ?>      
         <div class="col-xxl-4 col-lg-4">
            <div class="sidebar__wrapper pl-40">
               <?php get_sidebar(); ?>
            </div>
         </div>
         <?php endif; ?>

      </div>
   </div>
</section>


<?php

get_footer();