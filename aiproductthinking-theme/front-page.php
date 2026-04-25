<?php
/**
 * Home / Front Page
 *
 * @package AIProductThinking
 */

get_header();
$hiw     = get_page_by_path( 'how-it-works' );
$contact = get_page_by_path( 'contact' );
$solution= get_page_by_path( 'solution' );
$hiw_url      = $hiw ? get_permalink( $hiw->ID ) : '#';
$contact_url  = $contact ? get_permalink( $contact->ID ) : '#';
$solution_url = $solution ? get_permalink( $solution->ID ) : '#';
?>

<section class="hero">
	<div class="hero-inner">
		<div>
			<div class="hero-eyebrow"><span class="logo-dot" style="width:5px;height:5px"></span><?php esc_html_e( 'AI × Product Management', 'aiproductthinking' ); ?></div>
			<h1 class="hero-headline"><?php
				echo wp_kses_post( __( 'Your product team has all the signals.<br>What it\'s missing is the <em>agent</em> that connects them.', 'aiproductthinking' ) );
			?></h1>
			<p class="hero-sub"><?php esc_html_e( 'Introducing aiproductthinking — the intelligent product decision agent.', 'aiproductthinking' ); ?></p>
			<p class="hero-body"><?php esc_html_e( 'aiproductthinking ingests fragmented signals from every stakeholder source, identifies the problems worth solving, recommends what to build next, simulates outcomes before you commit — and gets smarter with every decision your team makes.', 'aiproductthinking' ); ?></p>
			<div class="hero-actions">
				<a class="btn btn-primary" href="<?php echo esc_url( $hiw_url ); ?>"><?php esc_html_e( 'See How It Works →', 'aiproductthinking' ); ?></a>
				<a class="btn btn-outline" href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( 'Partner With Me', 'aiproductthinking' ); ?></a>
			</div>
			<div class="hero-proof">
				<div class="proof-item"><div class="proof-dot"></div><?php esc_html_e( 'Priority Conflict Detector', 'aiproductthinking' ); ?></div>
				<div class="proof-item"><div class="proof-dot"></div><?php esc_html_e( 'Impact Simulator', 'aiproductthinking' ); ?></div>
				<div class="proof-item"><div class="proof-dot"></div><?php esc_html_e( 'Reinforcement Learning Loop', 'aiproductthinking' ); ?></div>
			</div>
		</div>

		<div style="display:flex;align-items:center;justify-content:center;">
			<div style="background:#ffffff;border:1px solid var(--border);border-top:3px solid var(--accent);border-radius:12px;padding:1.75rem;box-shadow:0 8px 40px rgba(26,24,20,0.10);width:100%;">
				<div style="font-size:0.68rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;"><?php esc_html_e( 'Platform Intelligence Loop', 'aiproductthinking' ); ?></div>
				<img class="platform-img" src="<?php echo esc_url( AIPT_THEME_URI . '/assets/images/hero-loop.png' ); ?>" alt="<?php esc_attr_e( 'Inputs to Analysis to Recommendations to Outcomes', 'aiproductthinking' ); ?>">
				<div style="display:flex;justify-content:space-between;margin-top:1rem;padding-top:0.85rem;border-top:1px solid var(--border);">
					<span style="font-size:0.72rem;color:var(--ink-3);"><?php esc_html_e( 'Inputs', 'aiproductthinking' ); ?></span>
					<span style="font-size:0.72rem;color:var(--ink-3);"><?php esc_html_e( 'Analysis', 'aiproductthinking' ); ?></span>
					<span style="font-size:0.72rem;color:var(--ink-3);"><?php esc_html_e( 'Recommendations', 'aiproductthinking' ); ?></span>
					<span style="font-size:0.72rem;color:var(--ink-3);"><?php esc_html_e( 'Outcomes', 'aiproductthinking' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="problem-intro">
			<div>
				<div class="eyebrow"><?php esc_html_e( 'The Problem', 'aiproductthinking' ); ?></div>
				<h2><?php esc_html_e( 'The way product decisions get made today is fundamentally broken.', 'aiproductthinking' ); ?></h2>
			</div>
			<div style="padding-top:0.5rem">
				<p class="lead"><?php esc_html_e( "It's not a tools problem. Teams already use Jira, Salesforce, Amplitude, and Zendesk. The problem is that nothing connects them into a trusted intelligence layer — so PMs spend 40–60% of their time on synthesis, not on decisions.", 'aiproductthinking' ); ?></p>
			</div>
		</div>
		<div class="problem-grid">
			<?php
			$problems = array(
				array( '01', 'Scattered Signals', 'Critical signals live in disconnected tools across every team and never get synthesized into a single, coherent view.' ),
				array( '02', 'Manual Synthesis', 'PMs spend the majority of their time gathering and translating data rather than making the strategic decisions they were hired to make.' ),
				array( '03', 'Biased Prioritization', 'Roadmap decisions are driven by the loudest stakeholder, the most recent complaint, or the highest-paid opinion — not by evidence.' ),
				array( '04', 'Reactive Roadmaps', "Teams are always solving yesterday's problem. There is no predictive layer to surface emerging risks and opportunities early." ),
				array( '05', 'Invisible Conflicts', "When sales, support, and leadership all want incompatible things, no system surfaces the contradiction until it's too late." ),
				array( '06', 'No Feedback Loop', 'After a feature ships, most teams move on. No system tracks whether the decision was right and uses that to calibrate the next one.' ),
			);
			foreach ( $problems as $p ) {
				printf(
					'<div class="prob-card"><div class="prob-num">%s</div><h3>%s</h3><p>%s</p></div>',
					esc_html( $p[0] ),
					esc_html( $p[1] ),
					esc_html( $p[2] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="divider"></div>

<section class="section dark-sec">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'Why Now', 'aiproductthinking' ); ?></div>
		<h2><?php echo wp_kses_post( __( "AI hasn't just improved the tools available to product teams.<br>It has made a fundamentally different kind of system possible.", 'aiproductthinking' ) ); ?></h2>
		<p class="lead" style="margin-top:0.75rem;max-width:620px"><?php esc_html_e( 'For the first time, a single reasoning layer can ingest structured and unstructured data from dozens of sources, cluster it semantically, detect patterns across teams, simulate decision outcomes, and learn from real-world feedback — without human bottlenecks.', 'aiproductthinking' ); ?></p>
		<div class="why-grid">
			<?php
			$why = array(
				array( '⚡', 'Multi-source Analysis at Scale', 'LLMs can now process thousands of qualitative signals — tickets, call transcripts, reviews — and extract structured insight simultaneously.' ),
				array( '🔍', 'Real-time Pattern Detection', 'Emerging user needs and risks can be detected and surfaced before they become critical — across sources no single PM could track manually.' ),
				array( '🧠', 'Decision Simulation', 'AI can model the downstream impact of roadmap choices before teams commit engineering effort — answering "what happens if we ship this?"' ),
				array( '🔄', 'Continuous Learning', 'Reinforcement learning means the system improves from every implemented decision, building institutional intelligence that compounds over time.' ),
			);
			foreach ( $why as $w ) {
				printf(
					'<div class="why-card"><span class="why-icon">%s</span><h3>%s</h3><p>%s</p></div>',
					esc_html( $w[0] ),
					esc_html( $w[1] ),
					esc_html( $w[2] )
				);
			}
			?>
		</div>
	</div>
</section>

<section class="section" style="background:var(--bg-warm)">
	<div class="container">
		<div class="eyebrow"><?php esc_html_e( 'The System', 'aiproductthinking' ); ?></div>
		<h2><?php esc_html_e( 'What aiproductthinking is designed to do', 'aiproductthinking' ); ?></h2>
		<div class="steps-strip">
			<?php
			$steps = array(
				array( '01', 'Ingest Fragmented Signals', 'Connects to every source of product truth — CRM, support, analytics, engineering, leadership notes, market data — in real time.' ),
				array( '02', 'Understand Problems & Conflicts', 'Clusters, connects, and interprets signals. Surfaces hidden opportunities — and stakeholder conflicts before they reach the roadmap.' ),
				array( '03', 'Simulate & Recommend', 'Generates ranked recommendations and simulates projected outcomes — NPS, retention, revenue — before your team commits to any decision.' ),
				array( '04', 'Learn from Outcomes', 'Tracks post-decision metrics as reinforcement signals to improve every future recommendation. The agent gets smarter over time.' ),
			);
			foreach ( $steps as $s ) {
				printf(
					'<div class="step-item"><div class="step-num">%s</div><h3>%s</h3><p>%s</p></div>',
					esc_html( $s[0] ),
					esc_html( $s[1] ),
					esc_html( $s[2] )
				);
			}
			?>
		</div>
	</div>
</section>

<div class="cta-strip">
	<h2><?php esc_html_e( 'This is not a concept. It is a structured system.', 'aiproductthinking' ); ?></h2>
	<p><?php esc_html_e( "Explore the full architecture, intelligence model, and the capabilities that don't exist anywhere else in the market.", 'aiproductthinking' ); ?></p>
	<div class="cta-actions">
		<a class="btn btn-gold" href="<?php echo esc_url( $hiw_url ); ?>"><?php esc_html_e( 'See the Full Architecture →', 'aiproductthinking' ); ?></a>
		<a class="btn btn-outline-w" href="<?php echo esc_url( $solution_url ); ?>"><?php esc_html_e( 'What This Means for Your Business', 'aiproductthinking' ); ?></a>
	</div>
</div>

<?php get_footer(); ?>
