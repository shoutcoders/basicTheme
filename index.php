<?php get_header(); ?>

<div class="container">
    <!-- Main Container -->

<!-- Content Container -->
<div class="col-md-12">
    <?php
    $basic_counter = 1;
    if ( have_posts() ) :
        while ( have_posts() && $basic_counter<=3 ) : the_post();
        ?>
           
        <div class="col-md-4 text-center">
            <a href="<?php the_permalink(); ?>">
             <?php 
                if ( has_post_thumbnail() ) {
                the_post_thumbnail();
                } 
            ?></a>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
            <p class="text-center">Posted By <a href="<?php the_author(); ?>"><?php the_author(); ?></a></p>
            <p><?php the_excerpt(); ?><a class="btn btn-info btn-center" href="<?php the_permalink(); ?>">Read More</a> </p>
        </div>
        <?php
        $basic_counter++;
        endwhile;
        else :
            echo wpautop( 'Sorry, no posts were found' );
        endif;
    ?>   
    
</div>
    <!-- Sidebar Container // Not On Homepage -->
</div>






<?php get_footer(); ?>

