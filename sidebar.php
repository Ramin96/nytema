<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->


<div id="container">
	<div id="content" role="main">
					<?php the_post(); ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
		
					<?php get_search_form(); ?>
		
						<h2 class="Archive2">Archives by Month:</h2>
							<ul>
					<?php wp_get_archives('type=monthly'); ?>
							</ul>

						<h2 class="Archive2">Archives by Subject:</h2>
							<ul>
			 		<?php wp_list_categories(); ?>
						</ul>

	</div><!-- #content -->
</div><!-- #container -->