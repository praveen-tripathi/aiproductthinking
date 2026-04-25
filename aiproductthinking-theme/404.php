<?php
/**
 * 404 template.
 *
 * @package AIProductThinking
 */
get_header();
?>
<section class="section" style="text-align:center">
	<div class="container-sm">
		<div class="eyebrow"><?php esc_html_e( 'Error 404', 'aiproductthinking' ); ?></div>
		<h1><?php esc_html_e( 'Page not found', 'aiproductthinking' ); ?></h1>
		<p class="lead" style="margin-top:0.85rem"><?php esc_html_e( "The page you're looking for has moved, been renamed, or doesn't exist.", 'aiproductthinking' ); ?></p>
		<div style="margin-top:2rem">
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( '← Back to Home', 'aiproductthinking' ); ?></a>
		</div>
	</div>
</section>
<?php
get_footer();
