<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<div class="row wide-gutter-row">
			<div class="postcontent col-lg-offset-2 col-lg-8 wide-gutter-col" id="post-<?php the_ID(); ?>">
				<h1 class="page-heading"><?php single_post_title(); ?></h1>
				<?php the_content() ?>
			</div>

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
