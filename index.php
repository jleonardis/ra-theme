<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RacingAlzheimers
 */

get_header();
?>

	<div id="primary" class="content-area">
		<?php
		$racing_alzheimers_description = get_bloginfo( 'description', 'display' );
		if ( $racing_alzheimers_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $racing_alzheimers_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
		<main id="main" class="site-main">
			<h1 id="posts-heading">Latest Posts</h1>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			?>
			<section id="posts-area">
			<?php
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-excerpt', get_post_type() );

			endwhile;

			the_posts_navigation();

			?></section><?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
