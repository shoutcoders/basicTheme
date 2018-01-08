<?php
/* header Included Here */
get_header();
    if(have_posts()):
        while(have_posts()):the_post(); ?>

    
<div class="container">    
    <article class="post">  
        <p>
            <?php the_content();?>
        </p>
    </article>
</div>

    <?php endwhile;
    else:
        echo'<h2>There is No Content</h2>'; 
    endif;
get_footer();
?>