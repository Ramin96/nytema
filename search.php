<?php get_header();

 ?>

  <div class="container">
    <div class="row">
      <div class="col-md-9 blog-main">
          
        <?php 
          if(have_posts()) {
            while (have_posts()) {
             the_post(); ?>
              
              <div class="blog-post">
                <h2 class="blog-post-title">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="blog-post-meta">Mars 30, 2017 by <a href="#">Mark</a></p>
                   <?php the_excerpt(); ?>

                </div><!-- /.blog-post -->

              <?php } ?>
            <?php } else { ?>

              <p><?php _e('No posts Found'); ?></p>

            <?php } ?>

      </div><!-- /.blog-main -->
        <div class="col-md-3">  
        <?php 
          get_sidebar(); 
        ?>
        </div><!-- /.blog-sidebar -->
    </div><!-- /.row -->
  </div><!-- /.container -->



<?php get_footer(); ?>

