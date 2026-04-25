<?php
/**
 * Single post template.
 *
 * @package AIProductThinking
 */
get_header();
while ( have_posts() ) {
	the_post();
	?>
	<article <?php post_class( 'entry-content' ); ?>>
		<header class="entry-header">
			<div class="eyebrow"><?php echo esc_html( get_the_date() ); ?></div>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-body"><?php the_content(); ?></div>
	</article>
	<?php
}
get_footer();
