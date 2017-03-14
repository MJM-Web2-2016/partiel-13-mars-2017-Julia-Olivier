<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="page-full-width" role="main">

	<div class="row">

		<div class="small-12 medium-4 large-offset-1 large-3 columns">
			<h2>Programme</h2>
			<p>Retrouvez le programme de la 33e édition du festival.</p>
			<a class="hollow button" href="#">Voir tout</a>
			<button class="dropdown hollow button">Catégorie</button>
		</div>

		<div class="small-12 medium-8 columns">

			<?php if ( have_posts() ) :
						query_posts( array( 'cat' => array(4,5), 'posts_per_page' => 3 ) );
			?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>

		</div>
	</div>

	<div class="row">
		<div class="small-12 columns">
			<div class="card">
				<section class="card-section">
					<h2>Le Label Vand'Œuvre</h2>
					<i class="fa fa-chevron-circle-right"></i>
				</section>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="small-12  medium-4 large-offset-1 large-3 columns">
			<h2>Billetterie</h2>
			<p>La billetterie comprend les abonnements mais aussi les tickets individuels.</p>
			<a class="hollow button" href="#">Voir tout</a>
		</div>

		<div class="small-12 medium-8 columns">

			<div class="row">

				<?php if ( have_posts() ) :
							query_posts( array( 'cat' => array(6), 'posts_per_page' => 4 ) );
				?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/card-pass', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; // End have_posts() check. ?>

			</div>

		</div>
	</div>

	<div class="row">

		<div class="small-12 medium-4 columns">
			<div class="card">
				<section class="card-section">
					<h2>Informations pratiques</h2>
					<i class="fa fa-chevron-circle-right"></i>
				</section>
			</div>
		</div>

		<div class="small-12 medium-4 columns">
			<h2>Découvrir</h2>
			<p>Découvrez notre catalogue de tous les labels Vand’œuvre depuis 1985.</p>
			<a class="hollow button" href="#">Tous les labels</a>
		</div>

		<div class="small-12 medium-4 columns">
			<div class="card">
				<section class="card-section">
					<img src="http://placehold.it/360x150">
				</section>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="small-12 columns">

			<div class="card">
				<section class="card-section">

					<div class="row">
						<div class="small-12 medium-4 columns">
							<h2>Accès</h2>
							<div class="text">
								<p>CCAM-Scène nationale de Vandœuvre<br>
								   Rue de Parme 54500 Vandœuvre-lès-Nancy</p>

								<p>Tél. : +33 (0)3 83 56 15 00<br>
									 Fax : +33 (0)3 83 53 21 85</p>

								<a href="#">www.centremalraux.com</a>
							</div>
							<a class="hollow button" href="#">Voir tous les accès</a>
						</div>
						<div class="hide-for-small medium-8 columns">
							<img src="http://placehold.it/800x500">
						</div>
					</div>

				</section>
			</div>

		</div>
	</div>

</div>

<?php get_footer();
