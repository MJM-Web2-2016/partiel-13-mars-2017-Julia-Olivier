<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="row">
	<div class="small-12 columns">

		<div id="post-<?php the_ID(); ?>" <?php post_class('featured blogpost-entry'); ?>>
			<header>
				<h2>FIRST<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php foundationpress_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
			</div>
			<footer>
				<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
			</footer>
		</div>

	</div>
</div>
