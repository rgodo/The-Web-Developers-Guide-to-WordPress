<?php 
get_header(); 
get_template_part( 'template-parts/header-image' );
?>  
   <div class="content-area">
      <main>
         <div class="container">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>
            <?php

            get_search_form();
            
            if( have_posts() ):
               while( have_posts() ): the_post();
                  get_template_part( 'template-parts/content', 'search' );
               endwhile;

               the_posts_pagination( array(
                  'prev_text' => 'Previous',
                  'next_text' => 'Next',
               ));

            else: 
               get_template_part( 'template-parts/content', 'none' );
            endif; ?>
         </div>
      </main>
   </div>
<?php get_footer(); ?>