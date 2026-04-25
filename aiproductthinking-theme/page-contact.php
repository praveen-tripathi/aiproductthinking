<?php
/**
 * Template Name: Contact
 *
 * @package AIProductThinking
 */

get_header();
?>

<section style="background:var(--bg-warm);border-bottom:1px solid var(--border);padding:5rem 2rem 4rem">
	<div class="container-sm" style="text-align:center">
		<div class="eyebrow"><?php esc_html_e( 'Get In Touch', 'aiproductthinking' ); ?></div>
		<h1><?php esc_html_e( "Let's Connect", 'aiproductthinking' ); ?></h1>
		<p class="lead" style="margin-top:0.85rem"><?php esc_html_e( 'Looking to collaborate, invest, build, or explore the vision? Every message is read personally and answered within 48 hours.', 'aiproductthinking' ); ?></p>
	</div>
</section>

<section class="section" style="padding-top:4rem">
	<div class="container">
		<div class="contact-grid">
			<div class="form-wrap">
				<h3 style="font-family:'DM Sans',sans-serif;font-size:1.1rem;font-weight:600;margin-bottom:0.35rem"><?php esc_html_e( 'Send a message', 'aiproductthinking' ); ?></h3>
				<p style="font-size:0.845rem;color:var(--ink-3);margin-bottom:1.75rem"><?php esc_html_e( 'Specific is always better than general. Tell me about your perspective on this space.', 'aiproductthinking' ); ?></p>

				<?php
				/**
				 * If a Contact Form 7 form is set in the theme's [aipt_contact_form_id] option,
				 * render its shortcode. Otherwise render the static styled form (will need
				 * a plugin or custom handler to actually deliver the message).
				 */
				$cf7_id = get_option( 'aipt_cf7_form_id', '' );
				if ( $cf7_id && shortcode_exists( 'contact-form-7' ) ) {
					echo do_shortcode( '[contact-form-7 id="' . esc_attr( $cf7_id ) . '"]' );
				} else {
					?>
					<form id="aipt-contact-form" method="post" action="#" novalidate>
						<div class="form-group">
							<label for="f-name"><?php esc_html_e( 'Full Name', 'aiproductthinking' ); ?></label>
							<input type="text" id="f-name" name="f_name" placeholder="<?php esc_attr_e( 'Your name', 'aiproductthinking' ); ?>" required>
						</div>
						<div class="form-group">
							<label for="f-email"><?php esc_html_e( 'Email Address', 'aiproductthinking' ); ?></label>
							<input type="email" id="f-email" name="f_email" placeholder="you@company.com" required>
						</div>
						<div class="form-group">
							<label><?php esc_html_e( "I'm reaching out as", 'aiproductthinking' ); ?></label>
							<div class="radio-group">
								<?php
								$roles = array( 'Investor', 'Technical Co-founder', 'Strategic Partner', 'Product Leader', 'Advisor', 'Recruiter', 'Other' );
								foreach ( $roles as $role ) {
									printf( '<button type="button" class="rbtn">%s</button>', esc_html( $role ) );
								}
								?>
							</div>
							<input type="hidden" id="f-role" name="f_role" value="">
						</div>
						<div class="form-group">
							<label for="f-message"><?php esc_html_e( 'What would you like to explore?', 'aiproductthinking' ); ?></label>
							<textarea id="f-message" name="f_message" placeholder="<?php esc_attr_e( "Tell me about your perspective on this space, your background, or what kind of conversation you'd like to have…", 'aiproductthinking' ); ?>" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary" style="width:100%;justify-content:center"><?php esc_html_e( 'Send Message →', 'aiproductthinking' ); ?></button>
						<div class="form-ok" id="form-ok"><?php esc_html_e( "✓ Thank you — your message has been received. I'll respond personally within 48 hours.", 'aiproductthinking' ); ?></div>
					</form>
					<p style="margin-top:1rem;font-size:0.78rem;color:var(--ink-3)"><?php esc_html_e( 'Note: install Contact Form 7, WPForms, or Fluent Forms to enable real submissions, then set the form ID via the aipt_cf7_form_id option.', 'aiproductthinking' ); ?></p>
					<?php
				}
				?>
			</div>

			<div>
				<h2 style="margin-bottom:1rem"><?php esc_html_e( 'Serious conversations welcome', 'aiproductthinking' ); ?></h2>
				<p class="lead"><?php esc_html_e( "This is an open invitation — for product leaders, engineers, investors, and collaborators who see the same gap in the market and want to explore what's possible.", 'aiproductthinking' ); ?></p>
				<div style="margin-top:2.5rem">
					<h3 style="font-family:'DM Sans',sans-serif;font-weight:600;font-size:0.95rem;margin-bottom:1rem"><?php esc_html_e( "I'm open to:", 'aiproductthinking' ); ?></h3>
					<?php
					$opens = array(
						'Product leadership and CPO-track conversations at serious, product-led companies',
						'Technical co-founder discussions — specifically engineers with LLM, NLP, or RLHF backgrounds',
						'Seed investor conversations — concept documentation, architecture, and financial model available on request',
						'Startup studio and accelerator partnership conversations',
						'Advisory relationships with operators who have scaled product organizations through Series A to Series C',
						'Introductions to others working on adjacent problems in the PM tooling space',
					);
					foreach ( $opens as $o ) {
						printf( '<div class="open-item"><div class="open-dot"></div><span>%s</span></div>', esc_html( $o ) );
					}
					?>
				</div>
				<div style="margin-top:2.5rem;padding:1.5rem;background:var(--accent-light);border:1px solid rgba(26,58,42,0.15);border-radius:var(--radius-lg)">
					<p style="font-size:0.875rem;color:var(--accent);font-weight:600;margin-bottom:0.35rem"><?php esc_html_e( 'The Founder Thesis', 'aiproductthinking' ); ?></p>
					<p style="font-size:0.845rem;color:var(--ink-2);line-height:1.7"><?php esc_html_e( '"Most PM tools give you a better place to put your feedback. aiproductthinking gives you a system that thinks about it — and gets smarter with every decision your team makes."', 'aiproductthinking' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
