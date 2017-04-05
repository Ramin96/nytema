<?php get_header();

 ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9 blog-post">
          
<?php 
    if(have_posts()) : 
      while (have_Posts())
       : the_post(); ?>
          
            <div class="blog-post">
              <h2 class="blog-post-title">
                  <?php the_title(); ?>
              </h2>
              <?php the_post_thumbnail('featured-image'); ?>
            <p class="blog-post-meta">Mars 30, 2017 by <a href="#">Mark</a></p>
               <?php the_content(); ?>

            </div><!-- /.blog-post -->

              <?php endwhile; ?>
            <?php else : ?>

            <p> <?php __('No posts Found'); ?></p>

            <?php endif; ?>
            <!--sidebar-->
              


          </div><!-- /.blog-post -->
          <div class="col-md-3">
            <?php 
              get_sidebar(); 
             ?>
         </div><!-- /.blog-sidebar -->
       </div><!-- /.row -->
    </div><!-- /.container -->



<?php get_footer(); ?>

