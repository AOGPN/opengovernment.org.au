<?php 
/*
 * Template Name: Event page
 */

get_header(); include('inc/inc-page-events.php');

// current time
$current_time = date('Ymd', strtotime(current_time( 'mysql' )));

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

// the query
$uevents_query = new WP_Query( $upcomingargs );

?>

<div class="container">
	<div class="row">
		<div class="col-sm-8 event-list">
			<h1 class="page-heading"><?php single_post_title(); ?></h1>
			<?php if ($uevents_query->have_posts()) : $i=0; ?>
				<?php while ( $uevents_query->have_posts() ) : $uevents_query->the_post(); ?>
				<?php if ($i !== 0) { echo '<hr>'; } ?>
				<article class="media">
					<div class="media-left">
						<date class="date"><span><?= date('d', strtotime(get_field('start_date'))) ?></span><?= date('M', strtotime(get_field('start_date'))) ?></date>
					</div>
					<div class="media-body">
						<h3 class="media-heading padding-top-0"><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></h3>
						<p class="margin-top-10 medium-heavy"><?= get_field('location') ?></p>
						<p class="margin-top-10"><?= wp_trim_words( get_the_excerpt(), '50' ) ?></p>
					</div>
				</article><!--.media-->
				<?php $i++; endwhile ?>
				<?php else : ?>
				<p>No upcoming events.</p>
			<?php endif; wp_reset_postdata(); ?>
		</div>
		<div class="col-sm-4">
			<div class="filter-box padding-bottom-10 margin-top-10">
				<h3 class="margin-top-3">Recently ended</h3>
				<?php if ($revents_query->have_posts()) : $revents_query->the_post(); $i=0; ?>
				<p><strong><a href="<?= get_permalink() ?>"><?= get_the_title() ?></a></strong><br><?=  date('d M Y', strtotime(get_field('start_date'))) ?></p>
				<?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>