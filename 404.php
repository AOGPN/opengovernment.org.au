<?php get_header() ?>


	<div class="container">
		<div class="row wide-gutter-row">
			<div class="col-sm-8 wide-gutter-col" id="post-<?php the_ID(); ?>">
				<h1 class="page-heading">404: Page not found</h1>
				<p>That's an error. Sorry, the page you are looking for is not here. Please try searching for something else or go back to the <a href="<?= site_url() ?>">Home page</a>.</p>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>


<?php get_footer() ?>