<?php
/**
 * Generic page template
 *
 * @package AIProductThinking
 */
get_header();
while ( have_posts() ) {
	the_post();
	?>
	<article class="entry-content">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<div class="entry-body">
			<?php the_content(); ?>
		</div>
	</article>
	<?php
}
get_footer();
