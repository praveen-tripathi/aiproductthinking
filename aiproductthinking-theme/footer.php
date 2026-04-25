<?php
/**
 * Site footer
 *
 * @package AIProductThinking
 */
?>

<footer class="site-footer">
	<div class="footer-inner">
		<div class="footer-grid">
			<div class="footer-brand">
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:rgba(255,255,255,0.88)">
					<span class="logo-dot"></span><?php bloginfo( 'name' ); ?>
				</a>
				<p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
				<p class="footer-tagline"><?php esc_html_e( 'Concept, research, and architecture — 2 years of founder-led R&D.', 'aiproductthinking' ); ?></p>
			</div>

			<div class="footer-col">
				<h5><?php esc_html_e( 'Navigate', 'aiproductthinking' ); ?></h5>
				<?php
				if ( has_nav_menu( 'footer-navigate' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer-navigate',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'depth'          => 1,
					) );
				} else {
					$slugs = array(
						''             => __( 'Home', 'aiproductthinking' ),
						'how-it-works' => __( 'How It Works', 'aiproductthinking' ),
						'solution'     => __( 'Solution', 'aiproductthinking' ),
						'about'        => __( 'About', 'aiproductthinking' ),
						'contact'      => __( 'Contact', 'aiproductthinking' ),
					);
					foreach ( $slugs as $slug => $label ) {
						$href = $slug ? '/' . $slug . '/' : '/';
						printf( '<a href="%s">%s</a>', esc_url( home_url( $href ) ), esc_html( $label ) );
					}
				}
				?>
			</div>

			<div class="footer-col">
				<h5><?php esc_html_e( 'Connect', 'aiproductthinking' ); ?></h5>
				<?php
				$contact = get_page_by_path( 'contact' );
				$contact_url = $contact ? get_permalink( $contact->ID ) : '#';
				if ( has_nav_menu( 'footer-connect' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer-connect',
						'container'      => false,
						'items_wrap'     => '%3$s',
						'depth'          => 1,
					) );
				} else {
					$labels = array( 'Investor Inquiry', 'Partner With Me', 'Co-founder Interest', 'Product Leadership' );
					foreach ( $labels as $label ) {
						printf( '<a href="%s">%s</a>', esc_url( $contact_url ), esc_html( $label ) );
					}
				}
				?>
			</div>
		</div>
		<div class="footer-bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> &middot; <?php esc_html_e( 'All research and architecture is original conceptual work', 'aiproductthinking' ); ?></span>
			<span style="color:rgba(255,255,255,0.22)"><?php esc_html_e( '2 years of founder-led R&D', 'aiproductthinking' ); ?></span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
