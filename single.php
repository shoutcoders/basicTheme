<?php get_header(); ?>

<!-- Main Content -->
<div class="container">
<div class="col-md-8">
<?php
if(have_posts()):
    while(have_posts()):
        the_post();

?>

<article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
        <p><?php the_date(); ?>, Posted By <a href="<?php the_author(); ?>"><?php the_author(); ?></a></p>
        <p><?php the_content();?> </p>
</article>


<?php
    endwhile;
else:
    echo "<h2>Nothing Found, Please Check Again</h2>";
endif;
?>
</div>

<!-- Sidebar -->

<div class="col-md-4">
<?php get_sidebar(); ?>
</div>

</div>


<?php get_footer(); ?>