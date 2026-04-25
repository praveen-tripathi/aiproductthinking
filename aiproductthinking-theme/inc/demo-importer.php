<?php
/**
 * One-click demo importer for AI Product Thinking theme.
 *
 * Provides:
 *  - An admin notice prompting the user to run the importer after activation.
 *  - An admin page (Appearance → Import Demo Content) that creates the 5 core
 *    pages with the right templates and slug hierarchy. If a page with the same
 *    slug already exists, its content is OVERRIDDEN (not duplicated).
 *  - Wires up the front page (Home) and registers a primary nav menu.
 *
 * The accompanying WXR file (wxr/aiproductthinking-demo.xml) does the same job
 * via the standard WordPress Importer plugin. Either path is supported.
 *
 * @package AIProductThinking
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add admin menu under Appearance.
 */
function aipt_register_importer_page() {
	add_theme_page(
		__( 'Import Demo Content', 'aiproductthinking' ),
		__( 'Import Demo Content', 'aiproductthinking' ),
		'edit_theme_options',
		'aipt-import',
		'aipt_render_importer_page'
	);
}
add_action( 'admin_menu', 'aipt_register_importer_page' );

/**
 * Show a one-time admin notice after theme activation.
 */
function aipt_activation_notice() {
	if ( get_option( 'aipt_demo_imported' ) ) {
		return;
	}
	$current_screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
	if ( $current_screen && 'appearance_page_aipt-import' === $current_screen->id ) {
		return;
	}
	$url = admin_url( 'themes.php?page=aipt-import' );
	?>
	<div class="notice notice-info is-dismissible">
		<p>
			<strong><?php esc_html_e( 'AI Product Thinking', 'aiproductthinking' ); ?>:</strong>
			<?php esc_html_e( 'Welcome! Click below to create the five demo pages (Home, How It Works, Solution, About, Contact) and assign the right templates.', 'aiproductthinking' ); ?>
			&nbsp;
			<a href="<?php echo esc_url( $url ); ?>" class="button button-primary"><?php esc_html_e( 'Import Demo Content', 'aiproductthinking' ); ?></a>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'aipt_activation_notice' );

/**
 * Render the importer page.
 */
function aipt_render_importer_page() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}
	$ran = false;
	$report = array();
	if ( isset( $_POST['aipt_run_import'] ) && check_admin_referer( 'aipt_run_import' ) ) {
		$report = aipt_run_demo_import();
		$ran    = true;
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Import Demo Content — AI Product Thinking', 'aiproductthinking' ); ?></h1>
		<p><?php esc_html_e( 'Creates the five core pages with the correct templates and parent/child relationships. Existing pages with the same slug will be updated (not duplicated).', 'aiproductthinking' ); ?></p>

		<?php if ( $ran ) : ?>
			<div class="notice notice-success">
				<p><strong><?php esc_html_e( 'Demo content imported.', 'aiproductthinking' ); ?></strong></p>
				<ul style="list-style:disc;padding-left:1.5rem">
					<?php foreach ( $report as $line ) : ?>
						<li><?php echo wp_kses_post( $line ); ?></li>
					<?php endforeach; ?>
				</ul>
				<p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="button button-primary"><?php esc_html_e( 'View Site', 'aiproductthinking' ); ?></a>
					<a href="<?php echo esc_url( admin_url( 'edit.php?post_type=page' ) ); ?>" class="button"><?php esc_html_e( 'Manage Pages', 'aiproductthinking' ); ?></a>
				</p>
			</div>
		<?php endif; ?>

		<form method="post">
			<?php wp_nonce_field( 'aipt_run_import' ); ?>
			<p>
				<label>
					<input type="checkbox" name="aipt_force" value="1" checked>
					<?php esc_html_e( 'Override content of existing pages with matching slugs', 'aiproductthinking' ); ?>
				</label>
			</p>
			<p>
				<button type="submit" name="aipt_run_import" value="1" class="button button-primary button-hero">
					<?php esc_html_e( 'Run Import', 'aiproductthinking' ); ?>
				</button>
			</p>
		</form>

		<hr>
		<h2><?php esc_html_e( 'Alternative: WXR import', 'aiproductthinking' ); ?></h2>
		<p>
			<?php
			printf(
				/* translators: %s: path to WXR file */
				esc_html__( 'You can also import via the WordPress Importer plugin (Tools → Import → WordPress) using the file at %s. The XML contains the same five pages and the same slugs.', 'aiproductthinking' ),
				'<code>' . esc_html( str_replace( ABSPATH, '', AIPT_THEME_DIR ) ) . '/wxr/aiproductthinking-demo.xml</code>'
			);
			?>
		</p>
	</div>
	<?php
}

/**
 * Definitions for the five demo pages.
 *
 * @return array
 */
function aipt_demo_page_definitions() {
	return array(
		array(
			'slug'     => 'home',
			'title'    => 'Home',
			'template' => '',
			'parent'   => 0,
			'order'    => 0,
			'content'  => "<!-- wp:paragraph -->\n<p>This page is rendered by the front-page.php template of the AI Product Thinking theme. Editable content here is not displayed; the homepage is intentionally code-driven for design fidelity. To swap any block to editor-managed content, fork the front-page.php template.</p>\n<!-- /wp:paragraph -->",
		),
		array(
			'slug'     => 'how-it-works',
			'title'    => 'How It Works',
			'template' => 'page-how-it-works.php',
			'parent'   => 0,
			'order'    => 10,
			'content'  => "<!-- wp:paragraph -->\n<p>Rendered by the How It Works template. Five-stage intelligence pipeline, six input categories, the Priority Conflict Detector, the Impact Simulator, and the four-layer architecture. Edit copy in the page-how-it-works.php template.</p>\n<!-- /wp:paragraph -->",
		),
		array(
			'slug'     => 'solution',
			'title'    => 'Solution',
			'template' => 'page-solution.php',
			'parent'   => 0,
			'order'    => 20,
			'content'  => "<!-- wp:paragraph -->\n<p>Rendered by the Solution template. Market reality table, gap-vs-solution split, seven-module product suite, target personas, and KPI strip. Edit copy in the page-solution.php template.</p>\n<!-- /wp:paragraph -->",
		),
		array(
			'slug'     => 'about',
			'title'    => 'About',
			'template' => 'page-about.php',
			'parent'   => 0,
			'order'    => 30,
			'content'  => "<!-- wp:paragraph -->\n<p>Rendered by the About template. Founder background, two-year R&amp;D timeline, transparency block, and what the founder is open to next. Edit copy in the page-about.php template.</p>\n<!-- /wp:paragraph -->",
		),
		array(
			'slug'     => 'contact',
			'title'    => 'Contact',
			'template' => 'page-contact.php',
			'parent'   => 0,
			'order'    => 40,
			'content'  => "<!-- wp:paragraph -->\n<p>Rendered by the Contact template. Includes a styled contact form scaffold; install Contact Form 7, WPForms, or Fluent Forms and set the aipt_cf7_form_id option to enable real submissions.</p>\n<!-- /wp:paragraph -->",
		),
	);
}

/**
 * Create or update the five demo pages.
 *
 * @return array Report lines.
 */
function aipt_run_demo_import() {
	$force  = isset( $_POST['aipt_force'] ) ? (bool) $_POST['aipt_force'] : true;
	$report = array();
	$pages  = aipt_demo_page_definitions();
	$ids    = array();

	foreach ( $pages as $def ) {
		$existing = get_page_by_path( $def['slug'] );
		$args = array(
			'post_title'    => $def['title'],
			'post_name'     => $def['slug'],
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'post_content'  => $def['content'],
			'post_parent'   => $def['parent'],
			'menu_order'    => $def['order'],
		);
		if ( $existing ) {
			if ( $force ) {
				$args['ID'] = $existing->ID;
				$id = wp_update_post( $args, true );
				if ( ! is_wp_error( $id ) ) {
					$report[] = sprintf(
						/* translators: %1$s: slug, %2$d: id */
						esc_html__( 'Updated existing page %1$s (ID %2$d).', 'aiproductthinking' ),
						'<code>' . esc_html( $def['slug'] ) . '</code>',
						$existing->ID
					);
					$ids[ $def['slug'] ] = $existing->ID;
				} else {
					$report[] = sprintf( esc_html__( 'Failed to update %s: ', 'aiproductthinking' ) . esc_html( $id->get_error_message() ), '<code>' . esc_html( $def['slug'] ) . '</code>' );
				}
			} else {
				$ids[ $def['slug'] ] = $existing->ID;
				$report[] = sprintf(
					esc_html__( 'Skipped %s (already exists, ID %d).', 'aiproductthinking' ),
					'<code>' . esc_html( $def['slug'] ) . '</code>',
					$existing->ID
				);
			}
		} else {
			$id = wp_insert_post( $args, true );
			if ( ! is_wp_error( $id ) ) {
				$report[] = sprintf(
					esc_html__( 'Created page %1$s (ID %2$d).', 'aiproductthinking' ),
					'<code>' . esc_html( $def['slug'] ) . '</code>',
					$id
				);
				$ids[ $def['slug'] ] = $id;
			} else {
				$report[] = sprintf( esc_html__( 'Failed to create %s: ', 'aiproductthinking' ) . esc_html( $id->get_error_message() ), '<code>' . esc_html( $def['slug'] ) . '</code>' );
			}
		}

		if ( ! empty( $def['template'] ) && ! empty( $ids[ $def['slug'] ] ) ) {
			update_post_meta( $ids[ $def['slug'] ], '_wp_page_template', $def['template'] );
		}
	}

	if ( ! empty( $ids['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['home'] );
		$report[] = esc_html__( 'Set Home as the front page (Reading settings).', 'aiproductthinking' );
	}

	$menu_id = aipt_create_or_update_primary_menu( $ids );
	if ( $menu_id ) {
		$report[] = sprintf( esc_html__( 'Primary menu created/updated (ID %d) and assigned to "Primary Navigation".', 'aiproductthinking' ), $menu_id );
	}

	update_option( 'aipt_demo_imported', time() );
	$report[] = esc_html__( 'Demo import complete.', 'aiproductthinking' );

	return $report;
}

/**
 * Create or update the primary menu using the imported page IDs.
 *
 * @param array $ids Slug => post_id map.
 * @return int Menu ID
 */
function aipt_create_or_update_primary_menu( $ids ) {
	$menu_name = 'AI Product Thinking — Primary';
	$menu_obj  = wp_get_nav_menu_object( $menu_name );
	$menu_id   = $menu_obj ? (int) $menu_obj->term_id : (int) wp_create_nav_menu( $menu_name );
	if ( ! $menu_id || is_wp_error( $menu_id ) ) {
		return 0;
	}

	$existing_items = wp_get_nav_menu_items( $menu_id );
	if ( $existing_items ) {
		foreach ( $existing_items as $item ) {
			wp_delete_post( $item->ID, true );
		}
	}

	$order = 1;
	$slugs = array( 'home', 'how-it-works', 'solution', 'about', 'contact' );
	foreach ( $slugs as $slug ) {
		if ( empty( $ids[ $slug ] ) ) {
			continue;
		}
		wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'     => get_the_title( $ids[ $slug ] ),
				'menu-item-object'    => 'page',
				'menu-item-object-id' => $ids[ $slug ],
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-position'  => $order++,
			)
		);
	}

	$locations = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary'] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );

	return $menu_id;
}
