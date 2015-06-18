<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php $types = wp_get_post_terms(get_the_ID(), 'types'); ?>

<div class="container">
	<div class="row">
		<article class="postcontent col-lg-offset-2 col-lg-8">
			<p class="margin-top-30 single-meta"><a class="boxed" href="<?= get_term_link($types[0]) ?>"><?= $types[0]->name; ?></a> <?php echo get_the_date() ?></p>
	        <h1 class="page-heading"><?php echo single_post_title(); ?></h1>
	        <?php the_content() ?>
	    </article>
    </div>
</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>