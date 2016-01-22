<?php 
/*
 * Template Name: Updates page
 */

get_header(); ?>

<div class="container">
	<div class="row wide-gutter-row">
		<div class="col-sm-8 wide-gutter-col">
			<h1 class="page-heading"><?php single_post_title(); ?></h1>	
		</div>
	</div>
</div>

<?php $i=0; if( have_rows('category_row') ):

    while ( have_rows('category_row') ) : the_row();
    
    ?>
    
<div class="band <?php echo $i . ' ' ; if ($i % 2 !== 0) : ?>bg-grey<?php endif ?>">
	<div class="container">
		<div class="row wide-gutter-row">
			<div class="col-sm-4 wide-gutter-col">
				<h2><?php echo get_the_category_by_ID( get_sub_field('post_category') ); ?></h2>
				<?= wpautop(get_sub_field('description')); ?>
				<p><a class="btn btn-primary margin-top-10" href="<?= get_category_link(get_sub_field('post_category')) ?>">View all</a></p>
			</div>
			<div class="col-sm-8 wide-gutter-col">
				<?php
		        $args = array(
					'posts_per_page' => 10,
					'category_name' => get_the_category_by_ID( get_sub_field('post_category') ),
				);
				$the_query = new WP_Query( $args );
				
				if ($the_query->have_posts()) : ?>
				<ul class="list-unstyled margin-top-20 margin-bottom-15">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			        
				    <li><strong><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></strong> - <?php echo get_the_date() ?></li>
					
					<?php endwhile; ?>
				</ul>
				<?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>

<?php $i++; endwhile; endif ?>

<?php 
	
get_footer();

?>