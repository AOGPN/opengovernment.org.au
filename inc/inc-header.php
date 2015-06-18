<?php

// ******** Menu: Main Nav

$mainnav = array(
	'menu' => 'main-nav',
	'depth' => 2,
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	//Process nav menu using our custom nav walker
	'walker' => new wp_bootstrap_navwalker()
);

?>