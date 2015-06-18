<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
	<div class="row wide-gutter-row">
		<article class="col-sm-8 wide-gutter-col">
	        <h1 class="page-heading"><?php echo single_post_title(); ?></h1>
	        <?php the_content() ?>
	    </article>
	    <aside class="col-sm-4 wide-gutter-col">
	    	<div class="grey-box padding-bottom-10 margin-top-10">
		    	<h3 class="margin-top-3">Event details</h3>
		    	<dl>
		    		<dt>Location</dt>
		    		<dl><?php echo get_field('location') ?></dl>
		    		<dt>Start date</dt>
		    		<dl><?php echo date('D j M Y', strtotime(get_field('start_date'))) ?></dl>
		    		<dt>End date</dt>
		    		<dl><?php echo date('D j M Y', strtotime(get_field('end_date'))) ?></dl>		    		
		    	</dl>
		    </div>
	    </aside>
    </div>
</div>

<?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>