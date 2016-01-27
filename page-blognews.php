<?php
/*
 * Template Name: Blog News
 */

get_header(); include('inc/inc-page-blognews.php');

?>

<div class="container">
	<div class="row wide-gutter-row">
		<div class="col-sm-8 wide-gutter-col">
			<h1 class="page-heading"><?php echo get_the_title() ?></h1>

			<?php if ($the_query->have_posts()) : $i=0; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php if ($i !== 0 ) : ?><hr><?php endif ?>
			
			<h3><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
			<p class="medium-heavy"><?php echo get_the_date() ?> &ndash; <?= cat_output() ?></p>
			<p><?php echo wp_trim_words(get_the_excerpt()) ?></p>
			<p><a href="<?php echo get_permalink() ?>" class="btn btn-primary">Read more &rsaquo;</a></p>
			
			<?php $i++; endwhile; endif; ?>
			
			<?php wp_pagenavi(array( 'query' => $the_query )); ?>
			
		</div>
		<aside class="col-sm-4">
			<?php get_template_part( 'content', 'sidebar' ); ?>
		</aside>
	</div>
</div>

<?php get_footer();?>