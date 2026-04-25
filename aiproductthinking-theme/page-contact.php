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
				 * Render the Contact Form 7 form. The form ID and title are read
				 * from the Customizer (Appearance > Customize > Contact Form);
				 * defaults are id="f7daf39" title="Contact form 1". If CF7 is
				 * not installed, fall back to a styled static form.
				 */
				$cf7_shortcode = function_exists( 'aipt_get_contact_form_shortcode' ) ? aipt_get_contact_form_shortcode() : '';
				if ( $cf7_shortcode && shortcode_exists( 'contact-form-7' ) ) {
					echo do_shortcode( $cf7_shortcode );
				} else {
					?>
					<form id="aipt-contact-form" class="aipt-contact-fallback" method="post" action="#" novalidate>
						<div class="form-group">
							<label for="f-name"><?php esc_html_e( 'Your name', 'aiproductthinking' ); ?></label>
							<input type="text" id="f-name" name="f_name" placeholder="<?php esc_attr_e( 'Your name', 'aiproductthinking' ); ?>" autocomplete="name" required>
						</div>
						<div class="form-group">
							<label for="f-email"><?php esc_html_e( 'Your email', 'aiproductthinking' ); ?></label>
							<input type="email" id="f-email" name="f_email" placeholder="you@company.com" autocomplete="email" required>
						</div>
						<div class="form-group">
							<label for="f-subject"><?php esc_html_e( 'Subject', 'aiproductthinking' ); ?></label>
							<input type="text" id="f-subject" name="f_subject" placeholder="<?php esc_attr_e( 'What is this about?', 'aiproductthinking' ); ?>" required>
						</div>
						<div class="form-group">
							<label for="f-message"><?php esc_html_e( 'Your message (optional)', 'aiproductthinking' ); ?></label>
							<textarea id="f-message" name="f_message" placeholder="<?php esc_attr_e( "Tell me about your perspective on this space, your background, or what kind of conversation you'd like to have…", 'aiproductthinking' ); ?>"></textarea>
						</div>
						<button type="submit" class="btn btn-primary" style="width:100%;justify-content:center"><?php esc_html_e( 'Submit', 'aiproductthinking' ); ?></button>
						<div class="form-ok" id="form-ok"><?php esc_html_e( "✓ Thank you — your message has been received. I'll respond personally within 48 hours.", 'aiproductthinking' ); ?></div>
					</form>
					<p style="margin-top:1rem;font-size:0.78rem;color:var(--ink-3)">
						<?php
						printf(
							/* translators: %s: file path of the CF7 template inside the theme */
							esc_html__( 'Install the Contact Form 7 plugin and import the template at %s to activate this form.', 'aiproductthinking' ),
							'<code>assets/contact-form-7-template.txt</code>'
						);
						?>
					</p>
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
