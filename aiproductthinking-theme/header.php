<?php
/**
 * Site header
 *
 * @package AIProductThinking
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<header class="site-header">
	<div class="nav-inner">
		<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
			<div class="site-branding has-custom-logo">
				<?php the_custom_logo(); ?>
			</div>
		<?php else : ?>
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<span class="logo-dot" aria-hidden="true"></span><?php bloginfo( 'name' ); ?>
			</a>
		<?php endif; ?>

		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => 'nav',
				'container_id'   => 'main-nav',
				'container_class'=> '',
				'menu_class'     => 'main-nav',
				'depth'          => 1,
				'fallback_cb'    => false,
			) );
		} else {
			?>
			<nav id="main-nav">
				<ul class="main-nav">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'aiproductthinking' ); ?></a></li>
					<?php
					$slugs = array(
						'how-it-works' => __( 'How It Works', 'aiproductthinking' ),
						'solution'     => __( 'Solution', 'aiproductthinking' ),
						'about'        => __( 'About', 'aiproductthinking' ),
						'contact'      => __( 'Contact', 'aiproductthinking' ),
					);
					foreach ( $slugs as $slug => $label ) {
						$page = get_page_by_path( $slug );
						if ( $page ) {
							printf(
								'<li><a href="%s">%s</a></li>',
								esc_url( get_permalink( $page->ID ) ),
								esc_html( $label )
							);
						}
					}
					?>
				</ul>
			</nav>
			<?php
		}

		$contact = get_page_by_path( 'contact' );
		$cta_url = $contact ? get_permalink( $contact->ID ) : '#contact';
		?>
		<a class="nav-cta" href="<?php echo esc_url( $cta_url ); ?>"><?php esc_html_e( 'Partner With Me', 'aiproductthinking' ); ?></a>
		<button class="hamburger" aria-label="<?php esc_attr_e( 'Menu', 'aiproductthinking' ); ?>" onclick="document.getElementById('main-nav').classList.toggle('open')"><span></span><span></span><span></span></button>
	</div>
</header>
