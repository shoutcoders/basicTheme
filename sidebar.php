<div class="col-md-12">
          <div class="row">
               <h4 class="container-fluid bg-info basic_sidebarstyling">About <?php the_author(); ?></h4>
               <?php the_author_meta( 'description' ); ?>
            </div>
          <div class="row">
            <h4 class="container-fluid bg-info basic_sidebarstyling">Archives</h4>
            <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
          </div>
          
</div><!-- /.blog-sidebar -->