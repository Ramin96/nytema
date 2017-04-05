 <?php
 function set_excerpt_length(){
 	return 40;
 }
 add_filter('excerpt_length','set_excerpt_length'); 
 function nytema_excerpt_more($more){
 	return sprintf( '<br /><a class="read-more btn btn-primary" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More &gt;', 'nytema' )
    );
 }
 add_filter('excerpt_more', 'nytema_excerpt_more');


