<?php get_header(); ?>

  <section class="showcase">
   <div class="container">
    <h1>Välkommen till Spa & Massage</h1>
      <p>hej jag heter ramin rajy </p>
      <a class="btn btn-primary btn-lg" href="http://localhost/inlamningsuppgift/about-2/">Read More</a>
    </div>  
  </section>
  
  <div class="container">
    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
            <h2 class="intro-text text-center">
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
            <h2>Massage och Skönhetsnehandlingar</h2>
          
            <p>Välkommen på Spa i en lugnande asiatisk miljö för din stund av avkoppling eller skönhetsbehandling.Har du bokat massage eller Spapaket får du byta om till tofflor och badrock,
                och börja med ett varmt fotbad och något att dricka.</p>
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