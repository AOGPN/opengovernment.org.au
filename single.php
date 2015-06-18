<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); 

$category = get_the_category();

if ($category) {
	$cat_name = $category[0]->name;
	$cat_term_id = $category[0]->term_id; 
}

?>

<div class="container">
	<div class="row">
		<article class="postcontent col-lg-offset-2 col-lg-8">
			<p class="margin-top-30 single-meta"><a class="boxed" href="<?php echo get_category_link($cat_term_id); ?>"><?= $cat_name ?></a> <?php echo get_the_date() ?></p>
			
			<h1 class="page-heading"><?php echo single_post_title(); ?></h1>
			
			<p class="single-meta">by <?php the_author(); ?></p>
			<p class="single-meta margin-bottom-30"><?php the_author_meta('description'); ?></p>

	        <?php the_content() ?>
	    </article>
	    
	    <?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>	
			
    </div>
</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>