<?php
/**
 * Template Name: About
 *
 * @package AIProductThinking
 */

get_header();
$contact = get_page_by_path( 'contact' );
$hiw     = get_page_by_path( 'how-it-works' );
$contact_url = $contact ? get_permalink( $contact->ID ) : '#';
$hiw_url     = $hiw ? get_permalink( $hiw->ID ) : '#';
?>

<section class="about-hero">
	<div class="container-sm">
		<div class="eyebrow"><?php esc_html_e( 'Founder Story', 'aiproductthinking' ); ?></div>
		<h1><?php esc_html_e( 'About Me', 'aiproductthinking' ); ?></h1>
		<p class="lead"><?php esc_html_e( 'A product leader who spent two years building the intellectual foundation for a category-defining AI platform — because no one else was doing it the right way.', 'aiproductthinking' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="about-grid">
			<div>
				<div class="eyebrow"><?php esc_html_e( 'Background', 'aiproductthinking' ); ?></div>
				<h2><?php esc_html_e( '10+ years in product. The same problem, every time.', 'aiproductthinking' ); ?></h2>
				<p class="lead" style="margin-top:0.5rem"><?php esc_html_e( 'Over more than a decade working in product management — across startups, scale-ups, and product-led organizations — I kept encountering the same structural failure. Product decisions were being made without a unified intelligence layer.', 'aiproductthinking' ); ?></p>
				<p style="margin-top:1rem"><?php esc_html_e( 'The signals existed. CRM, support, analytics, engineering — every team generated valuable product signal, every week. But no system connected them into a coherent, trusted picture. Product managers — including me — spent the majority of their time not making decisions, but synthesizing the information needed to make them.', 'aiproductthinking' ); ?></p>
				<p style="margin-top:1rem"><?php esc_html_e( 'I became convinced this was not a tool problem. It was a category problem. And that the right response was not another tool — but a fundamentally different kind of system.', 'aiproductthinking' ); ?></p>

				<div class="bq" style="margin-top:2.5rem">
					<p><?php esc_html_e( '"I spent the last two years researching, designing, and conceptualizing an AI-driven product management platform. This website captures the thinking, architecture, and product direction that came out of that work."', 'aiproductthinking' ); ?></p>
					<cite><?php esc_html_e( '— Founder Statement', 'aiproductthinking' ); ?></cite>
				</div>

				<div style="margin-top:3rem">
					<div class="eyebrow"><?php esc_html_e( 'The Last Two Years', 'aiproductthinking' ); ?></div>
					<h2><?php esc_html_e( 'What I built during this period', 'aiproductthinking' ); ?></h2>
					<div style="margin:1.75rem 0 2rem;background:#ffffff;border:1px solid var(--border);border-top:3px solid var(--gold);border-radius:10px;padding:1.75rem;box-shadow:0 4px 24px rgba(26,24,20,0.07);">
						<div style="font-size:0.68rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;"><?php esc_html_e( 'Platform Architecture — Designed During R&D', 'aiproductthinking' ); ?></div>
						<img class="platform-img" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/platform-architecture.png' ); ?>" alt="<?php esc_attr_e( 'Platform Inputs through Intelligence Engine to outputs', 'aiproductthinking' ); ?>">
						<p style="font-size:0.78rem;color:var(--ink-3);text-align:center;margin-top:1rem;border-top:1px solid var(--border);padding-top:0.85rem;"><?php esc_html_e( 'The system architecture conceived and designed across two years of founder-led research', 'aiproductthinking' ); ?></p>
					</div>
					<div class="timeline" style="margin-top:1.75rem">
						<?php
						$phases = array(
							array( 'Phase 1', 'Problem Space Research', 'Deep study of how product organizations actually make decisions — their failure modes, tooling gaps, and cognitive overhead. Competitive analysis of every tool in the market. Identification of the five capabilities no current tool provides.', true ),
							array( 'Phase 2', 'System Architecture Design', 'Designed the full 5-layer intelligence pipeline: ingestion, AI understanding, recommendation engine, impact simulator, and continuous learning loop. Mapped the ML and LLM capabilities required to build each layer properly.', true ),
							array( 'Phase 3', 'Product Module Mapping', 'Designed 7 distinct product modules — each with a clear problem statement, solution logic, target user, and commercial rationale. Validated against real PM pain points from market research and competitive analysis.', true ),
							array( 'Phase 4', 'Business Model & Go-to-Market', 'Developed the commercial model — pricing tiers, per-seat logic, usage-based add-ons, enterprise API pathway. Built GTM strategy by customer segment and financial logic for a credible SaaS business at each stage of company growth.', false ),
						);
						foreach ( $phases as $ph ) {
							$track = $ph[3] ? '<div class="tl-track"></div>' : '';
							printf(
								'<div class="tl-item"><div class="tl-line"><div class="tl-dot"></div>%s</div><div class="tl-content"><div class="tl-year">%s</div><h3>%s</h3><p>%s</p></div></div>',
								$track,
								esc_html( $ph[0] ),
								esc_html( $ph[1] ),
								esc_html( $ph[2] )
							);
						}
						?>
					</div>
				</div>

				<div style="margin-top:3rem;padding:2rem;background:var(--bg-warm);border:1px solid var(--border);border-radius:var(--radius-lg)">
					<div class="eyebrow"><?php esc_html_e( 'Transparency', 'aiproductthinking' ); ?></div>
					<h3 style="font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:600;margin-bottom:0.75rem"><?php esc_html_e( 'What stopped full execution', 'aiproductthinking' ); ?></h3>
					<p style="font-size:0.875rem;color:var(--ink-2);line-height:1.75"><?php esc_html_e( 'Building this platform at the required level of quality demands three things I was working to find: the right AI engineering talent with deep ML and LLM expertise, the capital to fund serious R&D, and a technical co-founder aligned on both product vision and execution approach. The concept is solid. The timing is right. The missing piece is the right team and early capital to build it properly.', 'aiproductthinking' ); ?></p>
				</div>

				<div style="margin-top:3rem">
					<div class="eyebrow"><?php esc_html_e( 'Open To', 'aiproductthinking' ); ?></div>
					<h2><?php esc_html_e( "What I'm looking for now", 'aiproductthinking' ); ?></h2>
					<div class="looking-grid">
						<?php
						$looking = array(
							array( '💼', 'Product Leadership Roles' ),
							array( '⚙️', 'Technical Co-founders' ),
							array( '🤖', 'AI/ML Collaborators' ),
							array( '💰', 'Seed Investors' ),
							array( '🏗️', 'Startup & Accelerator' ),
							array( '🤝', 'Strategic Advisors' ),
						);
						foreach ( $looking as $l ) {
							printf( '<div class="looking-item"><span>%s</span><span>%s</span></div>', esc_html( $l[0] ), esc_html( $l[1] ) );
						}
						?>
					</div>
				</div>
			</div>

			<div>
				<div class="founder-card">
					<?php
					/**
					 * Founder photo.
					 *
					 * Source priority:
					 *  1. Customizer setting `aipt_founder_photo` (Appearance > Customize > Founder Photo).
					 *  2. Default uploaded image at /wp-content/uploads/2026/04/WhatsApp-Image-2026-04-25-at-17.48.24.jpeg
					 *     (the user-uploaded photo on aiproductthinking.com).
					 *
					 * Falls back to the original "PT" monogram avatar if the image fails to load.
					 */
					$founder_photo = trim( (string) get_theme_mod( 'aipt_founder_photo', '' ) );
					if ( '' === $founder_photo ) {
						$founder_photo = content_url( '/uploads/2026/04/WhatsApp-Image-2026-04-25-at-17.48.24.jpeg' );
					}
					?>
					<img class="founder-av founder-av-img"
						src="<?php echo esc_url( $founder_photo ); ?>"
						alt="<?php esc_attr_e( 'Founder portrait', 'aiproductthinking' ); ?>"
						loading="lazy"
						onerror="this.outerHTML='<div class=\'founder-av\'>PT</div>'">
					<h3><?php esc_html_e( 'Founder', 'aiproductthinking' ); ?></h3>
					<p><?php esc_html_e( 'Product Leader & AI Platform Conceptualist', 'aiproductthinking' ); ?></p>
					<div class="fstat-row">
						<div class="fstat"><span class="fstat-v">10+</span><span class="fstat-l"><?php esc_html_e( 'Years in Product', 'aiproductthinking' ); ?></span></div>
						<div class="fstat"><span class="fstat-v">2 yrs</span><span class="fstat-l"><?php esc_html_e( 'R&D Research', 'aiproductthinking' ); ?></span></div>
					</div>
					<div class="flinks">
						<a href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( '→ Connect with me', 'aiproductthinking' ); ?></a>
						<a href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( '→ Investor inquiry', 'aiproductthinking' ); ?></a>
						<a href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( '→ Co-founder conversation', 'aiproductthinking' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="cta-strip">
	<h2><?php esc_html_e( "If this vision resonates with you, let's connect.", 'aiproductthinking' ); ?></h2>
	<p><?php esc_html_e( 'Open to product leadership, co-founder conversations, and investor discussions — all of them serious, all of them welcome.', 'aiproductthinking' ); ?></p>
	<div class="cta-actions">
		<a class="btn btn-gold" href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( 'Write to Me →', 'aiproductthinking' ); ?></a>
		<a class="btn btn-outline-w" href="<?php echo esc_url( $hiw_url ); ?>"><?php esc_html_e( 'View the Architecture', 'aiproductthinking' ); ?></a>
	</div>
</div>

<?php get_footer(); ?>
