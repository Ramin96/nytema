<?php
	function nytema_custom _excerpt_length($length){
		return 45;
	}
	add_filter('excerpt_length', 'nytema_custom_excerpt_length');

	function nytema_excerpt_more($more){
		return "Read more >>";
	}
	add_filter('excerpt_more', 'nytema_excerpt_more');