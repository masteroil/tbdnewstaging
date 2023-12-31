<?php
/* template name: New page*/

include 'new_page_header.php';
?>
<div class="wrap accout-of-new" id="all-page-header-space">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
			while ( have_posts() ) :
				the_post();
                
				get_template_part( 'template-parts/page/content', 'page' );
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
                
			endwhile; // End the loop.
           
            
			?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->