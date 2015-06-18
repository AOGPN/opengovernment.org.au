<?php 

get_header();

$current_term = get_queried_object()->name;

?>

<div class="container">
	<div class="row wide-gutter-row">
		<div class="col-sm-8 wide-gutter-col">
			<h1 class="page-heading"><?= $current_term ?></h1>
			
			<?php if (have_posts()) : $i=0; while ( have_posts() ) : the_post(); ?>

			<?php if ($i !== 0 ) : ?><hr><?php endif; ?>
			
			<h3><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
			<p class="medium-heavy"><?php echo get_the_date() ?></p>
			<p><?php echo wp_trim_words(get_the_excerpt()) ?></p>
			<p><a href="<?php echo get_permalink() ?>" class="btn btn-primary">Read more &rsaquo;</a></p>
			
			<?php $i++; endwhile; endif; ?>
			
		</div>
		
		<aside class="col-sm-4 wide-gutter-col">
			<div class="filter-box">
				<h3 class="widget-title">Filter resources:</h3>
				<h4><a href="<?php echo site_url() ?>/resources">All resources</a></h4>
				<?php $types = get_terms('types') ?>
				<?php foreach ($types as $type) : ?>
				<h4><a <?php if ($current_term == $type->name) : ?>class="active"<?php endif ?> href="<?= get_term_link($type) ?>"><?= $type->name ?></a></h4>
				<?php endforeach ?>
			</div>
		</aside>
	</div>
</div>

<?php 
	
get_footer();

?>