<?php
/**
 * Template Name: Solution
 *
 * @package AIProductThinking
 */

get_header();
$contact = get_page_by_path( 'contact' );
$contact_url = $contact ? get_permalink( $contact->ID ) : '#';
?>

<section style="background:var(--bg-warm);border-bottom:1px solid var(--border);padding:5rem 2rem 4rem">
	<div class="container-sm" style="text-align:center">
		<div class="eyebrow"><?php esc_html_e( 'Business Case', 'aiproductthinking' ); ?></div>
		<h1><?php esc_html_e( 'A Full Suite of AI-Powered Product Intelligence Tools', 'aiproductthinking' ); ?></h1>
		<p class="lead" style="margin-top:0.85rem"><?php esc_html_e( 'Built for product organizations serious about making better decisions, faster — at any company size, in any industry.', 'aiproductthinking' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Market Reality', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'What the market has. What is missing. What aiproductthinking builds.', 'aiproductthinking' ); ?></h2>
		<p style="margin-top:0.5rem;max-width:640px"><?php esc_html_e( "The existing tools cover parts of the problem. No single platform spans the full decision lifecycle — and three critical capabilities don't exist anywhere in the market today.", 'aiproductthinking' ); ?></p>
		<table class="diff-table">
			<thead>
				<tr>
					<th><?php esc_html_e( 'Capability', 'aiproductthinking' ); ?></th>
					<th><?php esc_html_e( 'Market Today', 'aiproductthinking' ); ?></th>
					<th><?php esc_html_e( 'aiproductthinking', 'aiproductthinking' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr><td class="td-f"><?php esc_html_e( 'Multi-source feedback aggregation', 'aiproductthinking' ); ?></td><td class="td-m"><?php esc_html_e( 'Partial — Productboard, Zeda.io', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Full cross-source ingestion', 'aiproductthinking' ); ?></td></tr>
				<tr><td class="td-f"><?php esc_html_e( 'NLP sentiment & emotion detection', 'aiproductthinking' ); ?></td><td class="td-m"><?php esc_html_e( 'Available in silos (CX tools only)', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Unified, intent-aware, cross-source', 'aiproductthinking' ); ?></td></tr>
				<tr><td class="td-f"><?php esc_html_e( 'Auto PRD generation from insight', 'aiproductthinking' ); ?></td><td class="td-m"><?php esc_html_e( 'ChatPRD (manual trigger only)', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Auto-triggered on confirmed problem', 'aiproductthinking' ); ?></td></tr>
				<tr><td class="td-f"><?php esc_html_e( 'Slack PM Copilot', 'aiproductthinking' ); ?></td><td class="td-m"><?php esc_html_e( 'Dovetail (basic, June 2025)', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Full reasoning agent in Slack', 'aiproductthinking' ); ?></td></tr>
				<tr><td class="td-f"><?php esc_html_e( 'AI Roadmap Builder', 'aiproductthinking' ); ?></td><td class="td-m"><?php esc_html_e( 'Aha!, ProductPlan (manual input)', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Built from confirmed insight', 'aiproductthinking' ); ?></td></tr>
				<tr><td style="font-weight:700;color:var(--gold)"><?php esc_html_e( '★ Priority Conflict Detector', 'aiproductthinking' ); ?></td><td style="font-weight:600;color:#c05050"><?php esc_html_e( 'Does not exist anywhere', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Core feature — built in', 'aiproductthinking' ); ?></td></tr>
				<tr><td style="font-weight:700;color:var(--gold)"><?php esc_html_e( '★ Impact Simulator', 'aiproductthinking' ); ?></td><td style="font-weight:600;color:#c05050"><?php esc_html_e( 'Does not exist anywhere', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Pre-decision outcome modeling', 'aiproductthinking' ); ?></td></tr>
				<tr><td style="font-weight:700;color:var(--gold)"><?php esc_html_e( '★ RL-powered learning loop', 'aiproductthinking' ); ?></td><td style="font-weight:600;color:#c05050"><?php esc_html_e( 'Does not exist anywhere', 'aiproductthinking' ); ?></td><td class="td-y"><?php esc_html_e( '✓ Learns from every decision made', 'aiproductthinking' ); ?></td></tr>
			</tbody>
		</table>
	</div>
</section>

<div class="divider"></div>

<section class="section" style="background:var(--bg-warm)">
	<div class="container">
		<div class="sol-split">
			<div>
				<div class="eyebrow"><?php esc_html_e( 'The Gap', 'aiproductthinking' ); ?></div>
				<h2><?php esc_html_e( "What's broken in product organizations today", 'aiproductthinking' ); ?></h2>
				<div class="pain-list">
					<?php
					$pains = array(
						'Teams use multiple tools but still struggle to convert fragmented inputs into confident decisions.',
						'PMs waste 40–60% of their time on synthesis and coordination overhead instead of strategic work.',
						'Leadership lacks a single shared system of product truth — decisions rely on whoever spoke last.',
						'Post-launch learning is ad hoc. No system closes the feedback loop or uses outcomes to improve future recommendations.',
					);
					foreach ( $pains as $p ) {
						printf( '<div class="pain-item"><span class="pain-x">✕</span><p>%s</p></div>', esc_html( $p ) );
					}
					?>
				</div>
			</div>
			<div>
				<div class="eyebrow"><?php esc_html_e( 'The Solution', 'aiproductthinking' ); ?></div>
				<h2><?php esc_html_e( 'What aiproductthinking changes', 'aiproductthinking' ); ?></h2>
				<div class="val-list">
					<?php
					$vals = array(
						'One unified intelligence layer that ingests all input streams and converts them into structured, prioritized product insight.',
						'AI-generated problem statements, conflict alerts, and ranked recommendations ready for immediate team review.',
						'Impact Simulator answers "what happens if we ship this?" with data — before any commitment is made.',
						'Closed-loop reinforcement learning makes every decision a training signal for future recommendations. The system compounds.',
					);
					foreach ( $vals as $v ) {
						printf( '<div class="val-item"><span class="val-check">✓</span><p>%s</p></div>', esc_html( $v ) );
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Product Suite · 7 Modules', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'What companies buy', 'aiproductthinking' ); ?></h2>
		<p class="lead" style="margin-top:0.5rem;max-width:580px"><?php esc_html_e( 'Seven modular tools that can be adopted individually or deployed as a complete product intelligence platform. Each module connects to the shared AI intelligence layer — making the system more valuable the more of it you use.', 'aiproductthinking' ); ?></p>
		<div class="module-grid">
			<?php
			$modules = array(
				array( '💡', 'Insight Engine', 'Teams have signal but no synthesis.', 'Ingests structured and unstructured signals from every connected source and delivers a prioritized, real-time insight feed — no manual aggregation.', false ),
				array( '⚠️', 'Priority Conflict Detector', 'Stakeholder conflicts stay invisible until they damage the roadmap.', 'Proactively surfaces incompatible priorities from all stakeholders — with evidence from both sides — so teams resolve conflicts with data, not politics.', true ),
				array( '🧮', 'Impact Simulator', 'Roadmap trade-offs are evaluated on instinct.', 'Models the projected NPS, retention, churn, and revenue impact of multiple decision paths — before your team commits a single engineering sprint.', true ),
				array( '📄', 'Auto PRD Generator', 'PRD writing is slow, inconsistent, and always done last.', 'Once a problem and solution are confirmed, auto-drafts a fully structured PRD — with user stories, acceptance criteria, and edge cases — pushed to Notion or Google Docs.', false ),
				array( '💬', 'Slack PM Copilot', "Stakeholders keep asking questions PMs don't have time to answer.", 'A full reasoning agent in Slack. "What\'s the biggest churn reason this month?" returns a ranked, evidence-backed answer — not a dashboard link.', false ),
				array( '🗺️', 'AI Roadmap Builder', 'Roadmaps are built manually and go stale immediately.', 'Converts confirmed, prioritized opportunities into roadmap options with sequencing logic, dependency flagging, and effort modeling — connected to the evidence that created it.', false ),
				array( '🤝', 'Stakeholder Alignment Dashboard', "Alignment is fragile — decisions aren't documented, rationale gets lost.", 'Gives every team a shared, real-time view of what is being built, why it was prioritized, and what outcomes are being tracked. Update meetings become optional.', false ),
			);
			foreach ( $modules as $m ) {
				$cls = $m[4] ? 'mod-card mod-u' : 'mod-card';
				$badge = $m[4] ? '<div class="uniq-badge" style="margin-bottom:0.5rem;font-size:0.63rem">' . esc_html__( '★ Market-first capability', 'aiproductthinking' ) . '</div>' : '';
				printf(
					'<div class="%s"><span class="mod-icon">%s</span>%s<h3>%s</h3><p class="mod-prob">%s</p><p class="mod-sol">%s</p></div>',
					esc_attr( $cls ),
					esc_html( $m[0] ),
					$badge,
					esc_html( $m[1] ),
					esc_html( $m[2] ),
					esc_html( $m[3] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section" style="background:var(--bg-warm)">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Target Market', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'Built for organizations scaling product complexity', 'aiproductthinking' ); ?></h2>
		<div class="persona-grid">
			<?php
			$personas = array(
				array( '🚀', 'Startups (Seed–Series A)', 'Entry via Insight Engine and Slack Copilot. Replaces manual synthesis for small PM teams. Fastest time-to-value.' ),
				array( '☁️', 'Mid-market SaaS (Series B–C)', 'Full platform deployment. Highest value from Conflict Detector and Impact Simulator as cross-functional complexity scales.' ),
				array( '📈', 'Scale-ups', 'Growing teams experiencing cross-functional coordination overhead for the first time. Roadmap Builder and Alignment Dashboard most valued.' ),
				array( '🏢', 'Enterprises', 'Alignment Dashboard and API integration. White-label intelligence layer for large organizations with multiple product lines.' ),
			);
			foreach ( $personas as $p ) {
				printf(
					'<div class="persona-card"><span class="persona-icon">%s</span><h3>%s</h3><p>%s</p></div>',
					esc_html( $p[0] ), esc_html( $p[1] ), esc_html( $p[2] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Business Value', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'What it delivers to the organization', 'aiproductthinking' ); ?></h2>
		<div class="kpi-strip">
			<?php
			$kpis = array(
				array( '↑ Speed',    'Faster discovery and decision cycles with AI-assisted synthesis' ),
				array( '↓ Cost',     'Reduced coordination overhead and PM synthesis burden across teams' ),
				array( '↑ Quality',  'Consistent, evidence-based prioritization across all roadmap decisions' ),
				array( '↑ Learning', 'RL loop means the agent gets measurably smarter with every decision' ),
			);
			foreach ( $kpis as $k ) {
				printf(
					'<div class="kpi-item"><span class="kpi-val">%s</span><span class="kpi-lbl">%s</span></div>',
					esc_html( $k[0] ), esc_html( $k[1] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="cta-strip">
	<h2><?php esc_html_e( 'Interested in building or backing this vision?', 'aiproductthinking' ); ?></h2>
	<p><?php esc_html_e( 'Open to conversations with investors, technical co-founders, and strategic partners who see the same whitespace in this market.', 'aiproductthinking' ); ?></p>
	<div class="cta-actions">
		<a class="btn btn-gold" href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( 'Partner / Investor Inquiry', 'aiproductthinking' ); ?></a>
		<a class="btn btn-outline-w" href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( 'Get in Touch', 'aiproductthinking' ); ?></a>
	</div>
</div>

<?php get_footer(); ?>
