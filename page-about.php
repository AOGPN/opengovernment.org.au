<?php
/*
 * Template Name: About page
 */

get_header(); ?>

<?php $i=0; if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php
// check if the repeater field has rows of data
if( have_rows('page_sections') ):

	// loop through the rows of data
    $b=0; while ( have_rows('page_sections') ) : the_row();
    $jumplinks[] = array(
	    'title' => get_sub_field('title'),
	    'id' => '#section-' . $b,
    );
    $b++; endwhile;
    wp_reset_postdata();
 

 	// loop through the rows of data
    while ( have_rows('page_sections') ) : the_row(); ?>
	
		<section id="section-<?= $i ?>" class="band <?= $i . ' ' ; if ($i % 2 !== 0) : ?>bg-grey<?php endif ?>">
			<div class="container">
				<div class="row wide-gutter-row">
					<aside class="col-sm-4 wide-gutter-col">
						<?php if ($i == '0') : ?><h1 class="page-heading margin-bottom-20"><?= single_post_title() ?></h1>
						<ul>
							<?php foreach ($jumplinks as $jumplink) : ?>
							<li><a href="<?= $jumplink['id'] ?>"><?= $jumplink['title'] ?></a></li>
							<?php endforeach ?>
						</ul>
						<?php else : ?>
						<p><br><a href="#section-0"><span class="glyphicon glyphicon-triangle-top"></span> Back to the top</a></p>
						<?php endif ?>
					</aside>
					<div class="col-sm-8 wide-gutter-col">
						
				    	<h2><?= get_sub_field('title'); ?></h2>
				    	<br>	
				    	<?= get_sub_field('text_area') ?>
					</div>
				</div>
			</div>
		</section>

    <?php $i++; 
	endwhile; 

endif; ?>
				

<?php endwhile ?>
<?php endif ?>

<?php get_footer();?>