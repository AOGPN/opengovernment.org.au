<?php 
/*
 * Template Name: Resources page
 */

get_header(); include('inc/inc-page-resources.php'); ?>

<div class="container">
	<div class="row wide-gutter-row">
		<div class="col-sm-8 wide-gutter-col">
			<h1 class="page-heading"><?php single_post_title(); ?></h1>
			
			<?php if ($the_query->have_posts()) : $i=0; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php if ($i !== 0 ) : ?><hr><?php endif; ?>
			<?php $types = wp_get_post_terms(get_the_ID(), 'types'); ?>
			
			<article class="media">
				<h3 class="margin-top-0"><a href="<?php echo the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
				<p class="medium-heavy"><?php echo get_the_date() ?> &ndash; <?= $types[0]->name; ?></p>
				<p class="margin-top-10"><?php echo wp_trim_words(get_the_excerpt()) ?></p>
			</article>
			
			<?php $i++; endwhile; endif; ?>
			
			<?php wp_pagenavi(array( 'query' => $the_query )); ?>
			
		</div>
		
		<aside class="col-sm-4 wide-gutter-col">
			<div class="filter-box">
				<h3 class="widget-title">Filter resources:</h3>
				<h4><a class="active" href="<?php echo site_url() ?>/resources">All resources</a></h4>
				<?php $types = get_terms('types') ?>
				<?php foreach ($types as $type) : ?>
				<h4><a href="<?= get_term_link($type) ?>"><?= $type->name ?></a></h4>
				<?php endforeach ?>
			</div>
		</aside>
	</div>
</div>

<?php 
	
get_footer();

?>