<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<div class="row align-spaced">
		<div class="small-expanded medium-12 columns">
			<header id="masthead">

				<div class="title-bar">
					<div class="title-bar-left">
							<button class="menu-rwd fa fa-bars" type="button" data-toggle="mobile-menu" aria-expanded="false" aria-controls="mobile-menu"></button>
					</div>
					<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="center" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-musiqueaction.png" alt="Musique Action" width="229" height="27" /></a>
					<div class="top-bar-right">
						<a id="search-menu" data-toggle="search-bar" aria-controls="search-bar"><i class="fa fa-search"></i></a>
						<?php //foundationpress_top_bar_r(); ?>
					</div>

							<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
					</div>
			</header>
		</div>
	</div>

	<div data-toggler data-animate="fade-in fade-out" class="callout ease" id="search-bar" aria-expanded="true" style="display: none;">
		<div class="row">
			<div class="columns">
				<form role="search" method="get" id="searchform" action="http://localhost:8888/fp-ca-beta/">
					<input type="text" value="" name="s" id="s" placeholder="Rechercher...">
				</form>
			</div>
			<div class="shrink columns">
				<a><i data-toggle="search-bar" aria-controls="search-bar" class="fa fa-times"></i></a>
			</div>
		</div>
	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
