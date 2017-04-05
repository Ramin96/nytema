<?php get_header(); ?>

  <section class="showcase">
   <div class="container">
    <h1>Custom Boostrap Wordpress Theme</h1>
      <p>hej jag heter ramin rajy </p>
      <a class="btn btn-primary btn-lg">Read More</a>
    </div>  
  </section>
  
  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
            <h2 class="intro-text text-center">About
              <strong>Milstenen Spa & Massage</strong>
            </h2>
          <hr>
        </div><!--col-lg-12-->
        <?php 
            if(have_posts()) : 
              while (have_Posts())
               : the_post(); ?>
        <div class="row">
          <div class="col-md-6">
            <?php the_post_thumbnail('front-image', array('class' => 'img-responsive img-border-left')); ?>
            <!-- <img class="img-responsive img-border-left" src="http://placehold.it/400x250" alt=""> -->
          </div><!--col-md-6-->
          <div class="col-md-6 front-page-content">
            <p>This is a great place to introduce your company or project and describe what you do.</p>
            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div><!--col-md-6-->
                      
        </div>

        <div class="clearfix"></div> 
        <p>            
          <?php the_content(); ?>
        </p>
      </div><!--box-->
    </div><!--row-->
                 <?php endwhile; ?>
        
               <?php else : ?>

                 <p> <?php __('No posts Found'); ?></p>

               <?php endif; ?>
  </div> <!--container-->      
  <?php get_footer(); ?>