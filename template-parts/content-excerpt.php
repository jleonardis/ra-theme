<?php
/**
 * Template part for displaying post excerpts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RacingAlzheimers
 */

?>

<article id="post-excerpt-<?php the_ID(); ?>" <?php post_class('article-excerpt'); ?> data-url=<?php esc_url(the_permalink()); ?>>
  <div class="post-thumbnail-container">
    <?php racing_alzheimers_post_thumbnail(); ?>
  </div>
	<header class="excerpt-header">
    <div class="excerpt-header-container">
		<?php
		the_title( '<h2 class="entry-title">', '</a></h2>' );
    ?><div class="post-date"> <?php the_date('M j, Y'); ?> </div>
  </div>
	</header><!-- .entry-header -->
	<div class="excerpt-content">

		<?php

    the_excerpt();
		// the_content( sprintf(
		// 	wp_kses(
		// 		/* translators: %s: Name of current post. Only visible to screen readers */
		// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'racing-alzheimers' ),
		// 		array(
		// 			'span' => array(
		// 				'class' => array(),
		// 			),
		// 		)
		// 	),
		// 	get_the_title()
		// ) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'racing-alzheimers' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
