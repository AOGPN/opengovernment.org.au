<?php

get_header(); include('inc/inc-page-blognews.php');

?>

<div class="container">
	<div class="row wide-gutter-row">
		<div class="col-sm-8 wide-gutter-col col-lg-offset-2">
			<h1 class="page-heading">Search results for '<?= get_search_query(); ?>'</h1>

			<?php if (have_posts()) : $i=0; while ( have_posts() ) : the_post(); ?>

			<?php if ($i !== 0 ) : ?><hr><?php endif ?>
			<h3><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
			<p class="medium-heavy"><?php echo get_the_date() ?>  &ndash; <?= cat_output() ?></p>
			<p><?php echo wp_trim_words(get_the_excerpt()) ?></p>
			<?php $i++; endwhile; ?>
			<?php else : ?>
			<p>Sorry, nothing has been found for '<?= get_search_query(); ?>'. Please try something else.</p>
			<form role="search" action="<?php echo get_site_url() ?>" method="get">
					<div class="input-group">
						<label for="search" class="sr-only">Search the site</label>
						<input type="text" value="" id="search" name="s" class="search-page-search form-control" placeholder="Search">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">Search</button>
						</span>
					</div>
				</form>
			<?php endif ?>
			<?php wp_pagenavi(); ?>
		</div>
		<aside class="col-sm-4">
		</aside>
	</div>
</div>

<?php get_footer();?>