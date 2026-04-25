<?php
/**
 * Template Name: How It Works
 *
 * @package AIProductThinking
 */

get_header();
$solution = get_page_by_path( 'solution' );
$solution_url = $solution ? get_permalink( $solution->ID ) : '#';
?>

<section class="hiw-intro">
	<div class="container-sm" style="text-align:center">
		<div class="eyebrow"><?php esc_html_e( 'System Design', 'aiproductthinking' ); ?></div>
		<h1><?php esc_html_e( 'How It Works', 'aiproductthinking' ); ?></h1>
		<p class="lead" style="margin-top:0.85rem"><?php esc_html_e( 'From fragmented product signals to structured, evidence-based decisions. aiproductthinking is not a feedback aggregator — it is a multi-layer reasoning agent with a learning loop built in from day one.', 'aiproductthinking' ); ?></p>
	</div>
</section>

<section class="section" style="padding-top:3.5rem">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Core Architecture', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( '5-Stage Intelligence Pipeline', 'aiproductthinking' ); ?></h2>
		<div style="margin:2rem 0 2.5rem;background:#ffffff;border:1px solid var(--border);border-radius:10px;padding:2rem;box-shadow:0 2px 16px rgba(26,24,20,0.06);">
			<img class="platform-img" style="max-width:860px;margin:0 auto;" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/pipeline-5stage.png' ); ?>" alt="<?php esc_attr_e( '5-stage pipeline diagram', 'aiproductthinking' ); ?>">
		</div>
		<div class="wf-strip">
			<?php
			$stages = array(
				array( '1', 'Data Ingestion', 'Collects structured and unstructured signals from all connected sources in real time.' ),
				array( '2', 'AI Understanding Layer', 'Clusters, interprets, and connects signals using NLP, semantic analysis, and intent detection.' ),
				array( '3', 'Recommendation Engine', 'Generates structured problem statements, ranked priorities, and suggested actions with evidence.' ),
				array( '4', 'Impact Simulator', 'Models projected outcomes — NPS, retention, revenue — before your team commits to any decision.' ),
				array( '5', 'Learning Loop', 'Tracks post-decision outcomes as reinforcement signals. The agent improves with every decision.' ),
			);
			foreach ( $stages as $s ) {
				printf(
					'<div class="wf-stage"><div class="wf-num">%s</div><h3>%s</h3><p>%s</p></div>',
					esc_html( $s[0] ), esc_html( $s[1] ), esc_html( $s[2] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Stage 1 — Ingestion', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'Where the signals come from', 'aiproductthinking' ); ?></h2>
		<p class="lead" style="margin-top:0.5rem;max-width:600px"><?php esc_html_e( 'The quality of any recommendation depends on the quality of the signals feeding it. aiproductthinking connects to the six categories of input that product decisions actually depend on.', 'aiproductthinking' ); ?></p>
		<div style="margin:2.25rem auto 2rem;background:#ffffff;border:1px solid var(--border);border-radius:10px;padding:2rem;box-shadow:0 2px 16px rgba(26,24,20,0.06);max-width:760px;">
			<img class="platform-img" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/inputs-hub.png' ); ?>" alt="<?php esc_attr_e( '6 input sources flowing into Intelligence Hub', 'aiproductthinking' ); ?>">
		</div>
		<div class="inp-grid">
			<?php
			$inputs = array(
				array( 'Sales / CRM',         'Revenue Signals',     'Lost deal reasons, feature gaps, enterprise requirements from Salesforce and HubSpot.', '"Lost 3 enterprise deals this quarter — all cited missing WhatsApp integration."' ),
				array( 'Support / CX',        'User Pain Signals',   'Tickets, CSAT, escalations, recurring complaint themes from Zendesk, Intercom, Convin.ai.', '"Export function failing for 40% of Chrome users — 87 tickets opened this week."' ),
				array( 'Product Analytics',   'Behavioral Signals',  'Drop-off rates, feature adoption, retention cohorts from Amplitude, Mixpanel, Google Analytics.', '"Day-7 retention dropped 12% for users who never completed their first export."' ),
				array( 'Engineering',         'Technical Signals',   'Jira backlog, Datadog error rates, LaunchDarkly flags, incident reports, tech debt signals.', '"FirebaseAuth crash on iOS 17.2 — affects 23% of mobile DAU. P1 open 11 days."' ),
				array( 'Leadership',          'Strategic Signals',   'OKRs, board priorities, market positioning decisions from leadership notes and strategy docs.', '"Q4 priority: reduce SMB churn. Enterprise expansion is secondary this quarter."' ),
				array( 'Market Feedback',     'Competitive Signals', 'App store reviews, G2/Capterra, social listening, analyst notes — competitive intelligence in real time.', '"G2 reviewers cite Competitor X\'s mobile offline mode as reason for switching."' ),
			);
			foreach ( $inputs as $inp ) {
				printf(
					'<div class="inp-card"><span class="inp-tag">%s</span><h3>%s</h3><p>%s</p><div class="snippet">%s</div></div>',
					esc_html( $inp[0] ), esc_html( $inp[1] ), esc_html( $inp[2] ), esc_html( $inp[3] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section" style="background:var(--bg-warm)">
	<div class="container">
		<div class="intel-grid">
			<div>
				<div class="eyebrow"><?php esc_html_e( 'Stage 2 — Understanding', 'aiproductthinking' ); ?></div>
				<h2><?php esc_html_e( 'What the AI does with the data', 'aiproductthinking' ); ?></h2>
				<p class="lead" style="margin-top:0.5rem"><?php esc_html_e( 'Raw signals from disconnected systems rarely speak the same language. The AI understanding layer connects them, finds patterns, and extracts meaning at scale.', 'aiproductthinking' ); ?></p>
				<div class="intel-list">
					<?php
					$intel = array(
						array( '🔗', 'Cluster Feedback & Detect Themes', 'Groups semantically similar signals from different sources into coherent problem themes — even when they use completely different language.' ),
						array( '🎯', 'Emotion & Intent Detection', 'NLP-based detection of frustration, urgency, confusion, and delight signals across all qualitative text inputs at scale.' ),
						array( '📡', 'Connect Signals Across Teams', 'Links a sales loss, a support spike, and an engineering bug as parts of the same root problem — automatically, without manual correlation.' ),
						array( '⚠️', 'Surface Priority Conflicts', 'When sales, support, and leadership want incompatible things — the agent surfaces the conflict explicitly, with evidence from all sides.' ),
					);
					foreach ( $intel as $i ) {
						printf(
							'<div class="intel-item"><div class="intel-icon">%s</div><div><h3>%s</h3><p>%s</p></div></div>',
							esc_html( $i[0] ), esc_html( $i[1] ), esc_html( $i[2] )
						);
					}
					?>
				</div>
			</div>
			<div style="display:flex;flex-direction:column;justify-content:center;height:100%;">
				<div style="background:#ffffff;border:1px solid var(--border);border-left:4px solid var(--accent);border-radius:10px;padding:1.5rem;box-shadow:0 4px 24px rgba(26,24,20,0.08);">
					<div style="font-size:0.68rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--accent);margin-bottom:1rem;"><?php esc_html_e( 'AI Output Examples', 'aiproductthinking' ); ?></div>
					<img class="platform-img" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/ai-output-examples.png' ); ?>" alt="<?php esc_attr_e( 'AI detected: Mobile Stability Crisis, Enterprise Integration Gap, Revenue Leakage on iOS', 'aiproductthinking' ); ?>">
					<p style="font-size:0.78rem;color:var(--ink-3);margin-top:1rem;text-align:center;"><?php esc_html_e( 'Problems, opportunities & risks — surfaced automatically across all sources', 'aiproductthinking' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Exclusive Capability', 'aiproductthinking' ); ?></div>
		<div class="uniq-badge"><?php esc_html_e( '★ Not available in any competing PM tool', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'Priority Conflict Detector', 'aiproductthinking' ); ?></h2>
		<p class="lead" style="margin-top:0.5rem;max-width:640px"><?php esc_html_e( 'When sales, support, engineering, and leadership all want different things — no current tool surfaces the contradiction. It stays invisible until it damages the roadmap. aiproductthinking surfaces it proactively, with evidence from all sides.', 'aiproductthinking' ); ?></p>
		<div class="sim-grid">
			<div class="sim-panel">
				<div class="sim-head"><?php esc_html_e( 'Conflict Detected — This Week', 'aiproductthinking' ); ?></div>
				<div class="sim-body">
					<div class="sim-item"><div class="sim-dot" style="background:#d97706"></div><p><strong><?php esc_html_e( 'Sales:', 'aiproductthinking' ); ?></strong> <?php esc_html_e( 'WhatsApp integration blocking 3 enterprise deals worth $180K ARR. Escalated to CPO.', 'aiproductthinking' ); ?></p></div>
					<div class="sim-item"><div class="sim-dot" style="background:#dc2626"></div><p><strong><?php esc_html_e( 'Support:', 'aiproductthinking' ); ?></strong> <?php esc_html_e( 'Export bug has 87 open tickets, week-over-week +340%. Customers threatening churn.', 'aiproductthinking' ); ?></p></div>
					<div class="sim-item"><div class="sim-dot" style="background:#2563eb"></div><p><strong><?php esc_html_e( 'Leadership:', 'aiproductthinking' ); ?></strong> <?php esc_html_e( 'Q4 OKR is reducing SMB churn. Export fix directly addresses the retention drop.', 'aiproductthinking' ); ?></p></div>
					<div class="sim-hl"><?php esc_html_e( '⚠ Conflict: Sales priority (WhatsApp) contradicts Q4 OKR (SMB churn). Evidence supports fixing export first. Stakeholder review recommended before roadmap commit.', 'aiproductthinking' ); ?></div>
				</div>
			</div>
			<div class="sim-panel">
				<div class="sim-head"><?php esc_html_e( 'Agent Recommendation', 'aiproductthinking' ); ?></div>
				<div class="sim-body">
					<p style="font-size:0.875rem;color:var(--ink-2);margin-bottom:1rem;line-height:1.7"><?php esc_html_e( 'Cross-source analysis supports the following sequencing — with explicit stakeholder rationale attached to each item:', 'aiproductthinking' ); ?></p>
					<div class="sim-item"><div class="sim-dot"></div><p><strong><?php esc_html_e( 'Sprint 1:', 'aiproductthinking' ); ?></strong> <?php esc_html_e( 'Fix export backend. Aligns with Q4 OKR, resolves 87 tickets, recovers day-7 retention.', 'aiproductthinking' ); ?></p></div>
					<div class="sim-item"><div class="sim-dot"></div><p><strong><?php esc_html_e( 'Sprint 2:', 'aiproductthinking' ); ?></strong> <?php esc_html_e( 'Patch iOS FirebaseAuth P1. 23% DAU recovery projected within 7 days.', 'aiproductthinking' ); ?></p></div>
					<div class="sim-item"><div class="sim-dot"></div><p><strong><?php esc_html_e( 'Q4 Planning:', 'aiproductthinking' ); ?></strong> <?php esc_html_e( 'Scope WhatsApp MVP. Brief sales team on sequencing rationale — evidence attached.', 'aiproductthinking' ); ?></p></div>
					<div class="sim-hl"><?php esc_html_e( 'This recommendation resolves the conflict with data, not politics.', 'aiproductthinking' ); ?></div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section" style="background:var(--bg-warm)">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Exclusive Capability', 'aiproductthinking' ); ?></div>
		<div class="uniq-badge"><?php esc_html_e( '★ Not available in any competing PM tool', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'Impact Simulator', 'aiproductthinking' ); ?></h2>
		<p class="lead" style="margin-top:0.5rem;max-width:640px"><?php esc_html_e( 'Before your team commits to a decision, aiproductthinking models what is likely to happen. Compare multiple paths side by side and choose with evidence — not instinct.', 'aiproductthinking' ); ?></p>
		<div class="callout">
			<h4><?php esc_html_e( 'Why this matters', 'aiproductthinking' ); ?></h4>
			<p><?php esc_html_e( 'Every PM has been asked "what happens if we ship this?" and had to answer with gut feeling. The Impact Simulator gives that question a data-driven answer — using historical outcomes, behavioral patterns, and cross-source signals — before a single line of code is written.', 'aiproductthinking' ); ?></p>
		</div>
		<div style="margin:2rem auto 0;background:#ffffff;border:1px solid var(--border);border-top:3px solid var(--accent);border-radius:10px;padding:2rem;box-shadow:0 4px 24px rgba(26,24,20,0.08);max-width:820px;">
			<div style="font-size:0.68rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);margin-bottom:1.25rem;"><?php esc_html_e( 'Simulated Outcomes · Post-Decision Tracking', 'aiproductthinking' ); ?></div>
			<img class="platform-img" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/simulator-outcomes.png' ); ?>" alt="<?php esc_attr_e( 'NPS 28 to 36, Export Complaints 47 to 0, Session Duration 2.3m to 8.1m', 'aiproductthinking' ); ?>">
			<p style="font-size:0.78rem;color:var(--ink-3);text-align:center;margin-top:1rem;border-top:1px solid var(--border);padding-top:0.85rem;"><?php esc_html_e( 'Outcome metrics tracked after implementation — fed back as reinforcement learning signals', 'aiproductthinking' ); ?></p>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section" style="text-align:center">
	<div class="container-sm">
		<div class="eyebrow"><?php esc_html_e( 'Stage 5 — Reinforcement Learning', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'The agent learns from every decision your team makes', 'aiproductthinking' ); ?></h2>
		<p class="lead" style="margin-top:0.75rem"><?php esc_html_e( 'After teams act, aiproductthinking tracks outcome metrics and uses them as reinforcement learning signals — building institutional intelligence that compounds over time. No other PM tool closes this loop.', 'aiproductthinking' ); ?></p>
	</div>
</section>

<div class="divider"></div>

<section class="section" style="background:var(--bg-warm)">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'System Architecture', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'Four-layer architecture overview', 'aiproductthinking' ); ?></h2>
		<div class="arch-grid">
			<?php
			$arch = array(
				array( 'Layer 1', 'Ingestion Layer',    array( 'Salesforce / HubSpot', 'Zendesk / Intercom / Convin.ai', 'Amplitude / Mixpanel / GA', 'Jira / Datadog / LaunchDarkly', 'App Store / G2 / Capterra' ) ),
				array( 'Layer 2', 'Processing Layer',   array( 'NLP classification', 'Semantic clustering', 'Emotion & intent detection', 'Cross-source linking', 'Conflict detection' ) ),
				array( 'Layer 3', 'Intelligence Layer', array( 'Problem generation', 'Impact scoring', 'Decision simulation', 'Roadmap modeling', 'Risk assessment' ) ),
				array( 'Layer 4', 'Output Layer',       array( 'PM Copilot dashboard', 'Auto PRD generation', 'Slack agent interface', 'Alignment dashboard', 'RL outcome tracking' ) ),
			);
			foreach ( $arch as $a ) {
				echo '<div class="arch-layer"><span class="arch-tag">' . esc_html( $a[0] ) . '</span><h3>' . esc_html( $a[1] ) . '</h3><ul class="arch-items">';
				foreach ( $a[2] as $li ) {
					echo '<li>' . esc_html( $li ) . '</li>';
				}
				echo '</ul></div>';
			}
			?>
		</div>
		<div style="margin-top:3rem;background:#ffffff;border:1px solid var(--border);border-radius:10px;padding:2rem;box-shadow:0 4px 32px rgba(26,24,20,0.08);">
			<div style="font-size:0.68rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);margin-bottom:1.25rem;"><?php esc_html_e( 'Full System View — End to End', 'aiproductthinking' ); ?></div>
			<img class="platform-img" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/system-full-view.png' ); ?>" alt="<?php esc_attr_e( 'Full system: inputs through intelligence layer to recommendations roadmap and feedback loop', 'aiproductthinking' ); ?>">
			<p style="font-size:0.78rem;color:var(--ink-3);text-align:center;margin-top:1rem;border-top:1px solid var(--border);padding-top:0.85rem;"><?php esc_html_e( 'From multi-source inputs through the intelligence layer → recommendations → roadmap → continuous feedback loop', 'aiproductthinking' ); ?></p>
		</div>
	</div>
</section>

<div class="cta-strip">
	<h2><?php esc_html_e( 'Now see how this becomes a business', 'aiproductthinking' ); ?></h2>
	<p><?php esc_html_e( 'Explore the product suite, the commercial model, and the market opportunity behind aiproductthinking.', 'aiproductthinking' ); ?></p>
	<div class="cta-actions">
		<a class="btn btn-gold" href="<?php echo esc_url( $solution_url ); ?>"><?php esc_html_e( 'Solution for Businesses →', 'aiproductthinking' ); ?></a>
	</div>
</div>

<?php get_footer(); ?>
