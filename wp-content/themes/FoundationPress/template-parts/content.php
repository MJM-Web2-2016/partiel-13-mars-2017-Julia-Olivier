<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) );

?>


<article class="card">

	<div class="row">

		<div class="small-12 medium-8 large-7 columns">

			<div class="text">

				<div id="post-<?php the_ID(); ?>" <?php post_class('card-section blogpost-entry'); ?>>
					<header>
						<?php the_category( ', ' ); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<span><i class="fa fa-calendar-o"></i>Mercredi 3 Mai</span>
					</header>
					<div class="entry-content">
						<?php the_excerpt(); ?>
						<a class="readmore" href="<?php the_permalink(); ?>">Lire la suite<i class="fa fa-chevron-circle-right"></i></a>
					</div>
					<footer>
						<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
					</footer>
				</div>

			</div>

		</div>

		<div class="small-12 medium-4 large-5 columns relative">
			<div class="visuel">
				<div class="featured-image" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
			</div>
		</div>

	</div>

</article>
