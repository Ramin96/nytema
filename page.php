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
          <h2>Vad är Eteriska oljor?</h2>
            <p>Växter innehåller komplexa och kraftfulla essenser som försvarar dem mot insekter och olika sjukdomar. Genom destillering av olika växtdelar – som blommor, blad, bark, frön eller rötter – kan aromatiska vätskor utvinnas. Dessa kallas eteriska oljor (på engelska essential oils = oumbärliga, felfria).
            Eteriska oljor av god kvalitet är naturligt för kroppen och har inga biverkningar. De är ett mycket bekvämt alternativ till örtmedicin för den moderna människa som är medveten om farorna med syntetiska mediciner, men har begränsat med tid för att samla in, torka och förbereda olika växtdelar. En droppe eterisk olja kan innehålla 100-10 000 gånger så koncentrerat ämne som i växten eller växtdelen.
            Det finns ett brett utbud av eteriska oljor på marknaden, alla med sina egna egenskaper (helande eller inte, utan bieffekter eller med bieffekter).
            Vi använder 100% rena, ekologiska, terapeutiska eteriska oljor från Young Living, auktoriteten på eteriska oljor i världen. Innan man släpper en eterisk olja på marknaden analyseras dess kvalitet i en gasvätskekromatograf. Genom denna teknik är det möjligt att mäta nivåerna av olika aktiva beståndsdelar ned till ett fåtal delar per miljard.</p>

      </div><!-- /.page -->
    </div><!-- /.row -->
  </div><!-- /.container -->



<?php get_footer(); ?>

