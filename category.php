<?php

get_header(); include('inc/inc-page-blognews.php');

$current_term = get_queried_object()->name;
$queried_object = get_queried_object(); 
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id; 
$image = get_field('image', $taxonomy . '_' . $term_id ) 

?>

<div class="container">
	<div class="row wide-gutter-row">
		<div class="col-lg-offset-2 col-lg-8 wide-gutter-col">
			<h1 class="page-heading"><?= single_cat_title( '', true ); ?></h1>


			<?php if ( category_description() ) : ?>
				<?php if (!$image) : ?>
				<section>
				<?= wpautop( category_description() ); ?> 
				</section>
				<hr>
				<?php else : ?>
				<div class="row">
					<div class="col-sm-8">
						<?= wpautop( category_description() ); ?>
					</div>
					<div class="col-sm-4">
						<img class="img-responsive" src="<?= $image['sizes']['medium'] ?>">
					</div>
				</div>
				<hr>
				<?php endif ?>
			<?php endif ?>


			<?php if (have_posts()) : $i=0; while ( have_posts() ) : the_post(); ?>
			<?php if ($i !== 0 ) : ?><hr><?php endif ?>
			<article class="media">
				<h3><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
				<p class="medium-heavy"><?php echo get_the_date() ?></p>
				<p class="margin-top-10"><?php echo wp_trim_words(get_the_excerpt()) ?></p>
			</article>
			<?php $i++; endwhile; endif; ?>
			<?php wp_pagenavi(); ?>
		</div>
	</div>
</div>

<?php get_footer();?>