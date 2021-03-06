<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

global $post;

?>

	<div class="small-12 medium-6 columns">

		<article class="card">

			<div id="post-<?php the_ID(); ?>" <?php post_class('card-section blogpost-entry'); ?>>
				<header>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</header>
				<div class="entry-content">
					<?php
						if ( has_excerpt( $post->ID ) ) {
						    echo the_excerpt();
						} else { ?>
						    <a href="<?php the_permalink(); ?>">Voir les conditions<i class="fa fa-chevron-circle-right"></i></a>
						<?php }
					?>
				</div>
				<footer>
					<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
				</footer>
			</div>

		</article>

	</div>
