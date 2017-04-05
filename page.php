<?php get_header();

 ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 page">
          
<?php 
    if(have_posts()) : 
      while (have_Posts())
       : the_post(); ?>
          
            <div class="page-content">
              <h2 class="page-title">
                <?php the_title(); ?>
              </h2>
              <?php the_post_thumbnail('featured-image'); ?>
              <?php the_content(); ?>
            </div><!-- /.page-content -->

              <?php endwhile; ?>
            <?php else : ?>

            <p> <?php __('No pages Found'); ?></p>

            <?php endif; ?>
            <!--sidebar-->
              


          </div><!-- /.page -->
       </div><!-- /.row -->
    </div><!-- /.container -->



<?php get_footer(); ?>

