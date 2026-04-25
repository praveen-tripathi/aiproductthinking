<?php
/**
 * Default fallback template (blog index).
 *
 * @package AIProductThinking
 */
get_header();
?>
<main class="entry-content">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<header>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p style="font-size:0.78rem;color:var(--ink-3)"><?php echo esc_html( get_the_date() ); ?></p>
				</header>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>
			</article>
			<hr style="border:none;border-top:1px solid var(--border);margin:2rem 0">
		<?php endwhile; ?>

		<nav class="pagination">
			<?php the_posts_pagination(); ?>
		</nav>
	<?php else : ?>
		<h2><?php esc_html_e( 'Nothing here yet.', 'aiproductthinking' ); ?></h2>
		<p><?php esc_html_e( 'It looks like nothing has been published. Check back soon.', 'aiproductthinking' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
