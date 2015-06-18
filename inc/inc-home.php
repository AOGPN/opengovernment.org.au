<?php


// ********* Latest posts

$newposts = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
);

$the_query = new WP_Query( $newposts );


// current time
$current_time = date('Ymd', strtotime(current_time( 'mysql' )));

// ++++++++++ Upcoming events

// upcoming args
$upcomingargs = array( 
	'post_type' => 'event',
	'meta_key' => 'start_date', // start date
	'orderby'=> 'meta_value_num', // numbered ordering by meta_key
	'order' => 'ASC',
	'posts_per_page' => 3,
	'meta_query' => array(
		  array(
			  'key' => 'end_date',
			  'value' => $current_time,
			  'compare' => '>=' // compare end date and current time
		  )
	  )
);

$uevents_query = new WP_Query( $upcomingargs );

// ++++++++++ Recent events

// recent args
$recentargs = array( 
	'post_type' => 'event',
	'meta_key' => 'start_date', // start date
	'orderby'=> 'meta_value_num', // numbered ordering by meta_key
	'order' => 'DESC',
	'posts_per_page' => 3,
	'meta_query' => array(
		  array(
			  'key' => 'end_date',
			  'value' => $current_time,
			  'compare' => '<=' // compare end date and current time
		  )
	  )
);

$revents_query = new WP_Query( $recentargs );


?>