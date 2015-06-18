<?php

$newposts = array(
	'post_type' => 'post',
	'posts_per_page' => 10,
	'paged' => get_query_var('paged'),
);
$the_query = new WP_Query( $newposts ); 

function cat_output() {
	$categories = get_the_category();
	$separator = ', ';
	$output = '';

	if($categories){
		foreach($categories as $category) {
			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		echo trim($output, $separator);
	}
}

?>