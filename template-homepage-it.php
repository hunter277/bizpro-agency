<?php
/**
 * Template Name: Homepage - IT & Technology
 *
 * Tailored landing page for IT Solutions, Cloud Services, and Software Development agencies.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// If the page is being edited or viewed with Elementor:
if ( have_posts() && bizpro_agency_is_elementor() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<main id="primary" class="site-main site-main--builder">
			<?php the_content(); ?>
		</main>
		<?php
		get_footer();
		return;
	}
}

$bizpro_phone = bizpro_agency_get( 'topbar_phone' );
$bizpro_email = bizpro_agency_get( 'topbar_email' );

$bizpro_it_services = array(
	array(
		'title' => __( 'Cloud Infrastructure & DevOps', 'bizpro-agency' ),
		'desc'  => __( 'AWS, Azure, and Google Cloud architected with Terraform IaC, multi-region Kubernetes, auto-scaling, and CI/CD pipelines.', 'bizpro-agency' ),
		'icon'  => 'it',
		'tag'   => 'Cloud & SRE',
	),
	array(
		'title' => __( 'Custom Enterprise Software', 'bizpro-agency' ),
		'desc'  => __( 'Bespoke web applications, scalable microservices, and distributed systems built with Python, Go, Node.js, and React.', 'bizpro-agency' ),
		'icon'  => 'consulting',
		'tag'   => 'Engineering',
	),
	array(
		'title' => __( 'Cybersecurity & Compliance', 'bizpro-agency' ),
		'desc'  => __( 'Vulnerability assessment, penetration testing, data encryption, SOC2 Type II, ISO 27001, and HIPAA compliance audits.', 'bizpro-agency' ),
		'icon'  => 'security',
		'tag'   => 'Security',
	),
	array(
		'title' => __( 'AI & Machine Learning Systems', 'bizpro-agency' ),
		'desc'  => __( 'Enterprise LLM fine-tuning, RAG semantic pipelines, real-time computer vision, and predictive business intelligence.', 'bizpro-agency' ),
		'icon'  => 'marketing',
		'tag'   => 'Artificial Intelligence',
	),
	array(
		'title' => __( '24/7 Managed NOC & SRE Support', 'bizpro-agency' ),
		'desc'  => __( 'Proactive infrastructure monitoring, automated disaster recovery backups, and guaranteed sub-15-minute incident SLA.', 'bizpro-agency' ),
		'icon'  => 'support',
		'tag'   => 'Managed Services',
	),
	array(
		'title' => __( 'Data Engineering & Analytics', 'bizpro-agency' ),
		'desc'  => __( 'High-throughput event streaming with Apache Kafka, Snowflake modern data warehouse architectures, and real-time ETL pipelines.', 'bizpro-agency' ),
		'icon'  => 'finance',
		'tag'   => 'Big Data',
	),
);

$bizpro_tech_stack = array(
	'Cloud & DevOps'         => array( 'AWS', 'Google Cloud', 'Microsoft Azure', 'Docker', 'Kubernetes', 'Terraform', 'Helm', 'GitLab CI' ),
	'Backend & DB'           => array( 'Python', 'Go', 'Node.js', 'PostgreSQL', 'Redis', 'Apache Kafka', 'GraphQL', 'MongoDB' ),
	'Frontend & Mobile'      => array( 'React', 'Next.js', 'TypeScript', 'Tailwind CSS', 'Vue.js', 'React Native', 'Flutter' ),
	'Security & Reliability' => array( 'HashiCorp Vault', 'Cloudflare Enterprise', 'SOC2 Certified', 'Datadog', 'Prometheus', 'Grafana' ),
);

$bizpro_it_cases = array(
	array(
		'client' => 'FinTech Global Payments',
		'title'  => 'Cloud-Native Migration & Microservices Architecture',
		'desc'   => 'Migrated monolithic legacy payment core to AWS EKS Kubernetes with zero downtime, cutting server costs by 42% while managing $180M in daily volume.',
		'result' => '42% Cost Reduction',
		'badge'  => '99.999% Uptime',
	),
	array(
		'client' => 'HealthConnect SaaS',
		'title'  => 'HIPAA-Compliant Real-Time Telemedicine Engine',
		'desc'   => 'Engineered an end-to-end encrypted WebRTC video consultation system supporting 2.4 million active patients with sub-100ms latency globally.',
		'result' => '2.4M Patients',
		'badge'  => 'SOC2 & HIPAA Compliant',
	),
	array(
		'client' => 'LogiTrack IoT Systems',
		'title'  => 'Real-Time Telemetry Pipeline Processing 85k Events/sec',
		'desc'   => 'Architected high-throughput ingestion platform using Apache Kafka and Snowflake, providing instant predictive anomaly detection for freight fleets.',
		'result' => '85,000 Events/sec',
		'badge'  => '< 50ms Ingestion',
	),
);
?>

<main id="primary" class="site-main site-main--it">

	<!-- IT Hero -->
	<section class="hero" style="background: linear-gradient(135deg, #090d16 0%, #0f172a 45%, #1e1b4b 100%);">
		<div class="container hero__inner">
			<div class="hero__content">
				<div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(56, 189, 248, 0.12); border: 1px solid rgba(56, 189, 248, 0.3); border-radius: 50px; padding: 6px 14px; margin-bottom: 20px;">
					<span style="width: 8px; height: 8px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 10px #38bdf8;"></span>
					<span style="color: #38bdf8; font-size: 0.85rem; font-weight: 700; letter-spacing: 0.5px; text-transform: uppercase;"><?php esc_html_e( 'Enterprise Cloud & Custom Software Engineering', 'bizpro-agency' ); ?></span>
				</div>
				<h1 class="hero__title" style="font-size: clamp(2.4rem, 5vw, 3.8rem); line-height: 1.15;"><?php esc_html_e( 'Architecting Resilient Cloud Systems & High-Impact Software', 'bizpro-agency' ); ?></h1>
				<p class="hero__subtitle" style="max-width: 680px; font-size: 1.15rem; color: #94a3b8;"><?php esc_html_e( 'We design, build, and scale mission-critical cloud infrastructure, distributed microservices, and AI-powered enterprise platforms that accelerate velocity and withstand peak global traffic.', 'bizpro-agency' ); ?></p>
				<div class="hero__actions" style="margin-top: 28px;">
					<a class="btn btn--primary btn--lg" href="#it-services"><?php esc_html_e( 'Explore Solutions', 'bizpro-agency' ); ?></a>
					<a class="btn btn--outline btn--lg" href="#contact"><?php esc_html_e( 'Request Tech Audit', 'bizpro-agency' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- IT Services Grid -->
	<section id="it-services" class="section section--services">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow" style="color: #4f46e5;"><?php esc_html_e( 'Core Capabilities', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'High-Impact Technology Engineering', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Engineered for velocity, military-grade security, and measurable ROI.', 'bizpro-agency' ); ?></p>
			</header>

			<div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
				<?php foreach ( $bizpro_it_services as $bizpro_s ) : ?>
					<article class="service-card" style="position: relative; border-radius: 16px; transition: transform 0.3s ease, box-shadow 0.3s ease;">
						<span style="position: absolute; top: 16px; right: 16px; font-size: 11px; font-weight: 700; color: #4f46e5; background: rgba(99,102,241,0.1); padding: 3px 8px; border-radius: 20px; text-transform: uppercase;"><?php echo esc_html( $bizpro_s['tag'] ); ?></span>
						<div class="service-card__icon" style="background: rgba(99,102,241,0.1); color: #4f46e5;">
							<?php echo bizpro_agency_get_icon( $bizpro_s['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
						<h3 class="service-card__title"><?php echo esc_html( $bizpro_s['title'] ); ?></h3>
						<p class="service-card__text"><?php echo esc_html( $bizpro_s['desc'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Tech Stack Section -->
	<section id="it-tech" class="section" style="background: var(--bpa-bg-alt, #0b1120); padding: 80px 0;">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow" style="color: #38bdf8;"><?php esc_html_e( 'Modern Tooling', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Enterprise Technology Matrix', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Built with best-in-class open-source engines and cloud-native frameworks.', 'bizpro-agency' ); ?></p>
			</header>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
				<?php foreach ( $bizpro_tech_stack as $bizpro_category => $bizpro_items ) : ?>
					<div class="bpa-tech-card" style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 16px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.04); transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;">
						<h3 style="font-size: 1.15rem; font-weight: 800; margin-bottom: 16px; color: var(--bpa-text, #0f172a); border-bottom: 2px solid #4f46e5; padding-bottom: 8px; display: inline-block;"><?php echo esc_html( $bizpro_category ); ?></h3>
						<div style="display: flex; flex-wrap: wrap; gap: 8px;">
							<?php foreach ( $bizpro_items as $bizpro_tech ) : ?>
								<span style="background: var(--bpa-bg-alt, #f1f5f9); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 8px; padding: 7px 13px; font-size: 0.88rem; font-weight: 600; color: var(--bpa-text, #334155); transition: all 0.2s ease;"><?php echo esc_html( $bizpro_tech ); ?></span>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- IT Case Studies -->
	<section id="it-cases" class="section section--cases">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow" style="color: #10b981;"><?php esc_html_e( 'Proven Track Record', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Real-World Architectural Deliveries', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Measurable outcomes delivered for fast-growing scaleups and multinational enterprises.', 'bizpro-agency' ); ?></p>
			</header>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
				<?php foreach ( $bizpro_it_cases as $bizpro_cs ) : ?>
					<div style="background: var(--bpa-bg, #ffffff); border: 1px solid var(--bpa-border, #e2e8f0); border-radius: 18px; padding: 32px; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 12px 30px rgba(0,0,0,0.05);">
						<div>
							<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
								<span style="font-size: 0.8rem; font-weight: 700; color: var(--bpa-text-muted, #64748b); text-transform: uppercase;"><?php echo esc_html( $bizpro_cs['client'] ); ?></span>
								<span style="background: rgba(16,185,129,0.1); color: #10b981; font-size: 0.75rem; font-weight: 700; padding: 3px 8px; border-radius: 20px;"><?php echo esc_html( $bizpro_cs['badge'] ); ?></span>
							</div>
							<h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 12px; color: var(--bpa-text, #0f172a);"><?php echo esc_html( $bizpro_cs['title'] ); ?></h3>
							<p style="color: var(--bpa-text-muted, #64748b); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;"><?php echo esc_html( $bizpro_cs['desc'] ); ?></p>
						</div>
						<div style="border-top: 1px solid var(--bpa-border, #f1f5f9); padding-top: 16px; display: flex; justify-content: space-between; align-items: center;">
							<span style="font-size: 0.85rem; color: var(--bpa-text-muted, #64748b);"><?php esc_html_e( 'Key Result:', 'bizpro-agency' ); ?></span>
							<strong style="color: #2563eb; font-size: 1.15rem; font-weight: 800;"><?php echo esc_html( $bizpro_cs['result'] ); ?></strong>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Tech SLA & Reliability -->
	<section id="it-sla" class="section section--stats" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); color: #fff; padding: 70px 0;">
		<div class="container">
			<div class="stats" style="margin-top: 0;">
				<div class="stat">
					<span class="stat__number" style="color: #38bdf8;">99.99%</span>
					<span class="stat__label" style="color: #cbd5e1;"><?php esc_html_e( 'Uptime SLA Guaranteed', 'bizpro-agency' ); ?></span>
				</div>
				<div class="stat">
					<span class="stat__number" style="color: #38bdf8;">&lt; 15m</span>
					<span class="stat__label" style="color: #cbd5e1;"><?php esc_html_e( 'Incident Response SLA', 'bizpro-agency' ); ?></span>
				</div>
				<div class="stat">
					<span class="stat__number" style="color: #38bdf8;">450+</span>
					<span class="stat__label" style="color: #cbd5e1;"><?php esc_html_e( 'Production Deployments', 'bizpro-agency' ); ?></span>
				</div>
				<div class="stat">
					<span class="stat__number" style="color: #38bdf8;">100%</span>
					<span class="stat__label" style="color: #cbd5e1;"><?php esc_html_e( 'Zero-Trust Data Protection', 'bizpro-agency' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<!-- IT Retainers / Pricing -->
	<section id="it-pricing" class="section section--pricing">
		<div class="container">
			<header class="section__header">
				<p class="section__eyebrow"><?php esc_html_e( 'Predictable Investment', 'bizpro-agency' ); ?></p>
				<h2 class="section__title"><?php esc_html_e( 'Dedicated Engineering Retainers', 'bizpro-agency' ); ?></h2>
				<p class="section__subtitle"><?php esc_html_e( 'Transparent monthly plans with guaranteed SLAs and direct Senior Architect access.', 'bizpro-agency' ); ?></p>
			</header>

			<div class="pricing-grid">
				<div class="pricing-card reveal">
					<h3 class="pricing-card__name"><?php esc_html_e( 'Cloud Starter', 'bizpro-agency' ); ?></h3>
					<div class="pricing-card__price">
						<span class="pricing-card__amount">$1,499</span>
						<span class="pricing-card__period"><?php esc_html_e( '/ month', 'bizpro-agency' ); ?></span>
					</div>
					<ul class="pricing-card__features">
						<li><?php esc_html_e( 'Managed Cloud Server (AWS / Azure)', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Daily Automated Backups & DR', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '4-Hour Business SLA Response', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Monthly Security & Patch Audit', 'bizpro-agency' ); ?></li>
					</ul>
					<a class="btn btn--outline" href="#contact"><?php esc_html_e( 'Get Started', 'bizpro-agency' ); ?></a>
				</div>

				<div class="pricing-card pricing-card--popular reveal">
					<div class="pricing-ribbon"><?php esc_html_e( 'Most Popular', 'bizpro-agency' ); ?></div>
					<h3 class="pricing-card__name"><?php esc_html_e( 'Scale DevOps & SRE', 'bizpro-agency' ); ?></h3>
					<div class="pricing-card__price">
						<span class="pricing-card__amount">$3,890</span>
						<span class="pricing-card__period"><?php esc_html_e( '/ month', 'bizpro-agency' ); ?></span>
					</div>
					<ul class="pricing-card__features">
						<li><?php esc_html_e( 'Dedicated Senior DevOps Lead', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Kubernetes / Container Orchestration', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Automated CI/CD Pipeline Tuning', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Sub-15m Critical Incident SLA', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( '24/7 Monitoring & Direct Slack NOC', 'bizpro-agency' ); ?></li>
					</ul>
					<a class="btn btn--primary" href="#contact"><?php esc_html_e( 'Start 14-Day Trial', 'bizpro-agency' ); ?></a>
				</div>

				<div class="pricing-card reveal">
					<h3 class="pricing-card__name"><?php esc_html_e( 'Enterprise Dedicated', 'bizpro-agency' ); ?></h3>
					<div class="pricing-card__price">
						<span class="pricing-card__amount"><?php esc_html_e( 'Custom', 'bizpro-agency' ); ?></span>
						<span class="pricing-card__period"><?php esc_html_e( '/ tailored scope', 'bizpro-agency' ); ?></span>
					</div>
					<ul class="pricing-card__features">
						<li><?php esc_html_e( 'Dedicated Full-Stack Pod (3-5 Engineers)', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Fractional CTO / Principal Architect', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'SOC2 / HIPAA / ISO Compliance Attestation', 'bizpro-agency' ); ?></li>
						<li><?php esc_html_e( 'Guaranteed 99.99% Application Uptime', 'bizpro-agency' ); ?></li>
					</ul>
					<a class="btn btn--outline" href="#contact"><?php esc_html_e( 'Request Consultation', 'bizpro-agency' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA Banner / Contact Form -->
	<section id="contact" class="cta-banner" style="background: radial-gradient(circle at 85% 30%, #312e81 0%, #1e1b4b 55%, #0f172a 100%); border-top: 1px solid rgba(99,102,241,0.25); position: relative; overflow: hidden;">
		<div class="container cta-banner__inner">
			<div class="cta-banner__text">
				<h2 class="cta-banner__title"><?php esc_html_e( 'Ready to Modernize Your Technology Architecture?', 'bizpro-agency' ); ?></h2>
				<p class="cta-banner__subtitle"><?php esc_html_e( 'Schedule a zero-obligation 30-minute architectural audit with our principal cloud engineers today.', 'bizpro-agency' ); ?></p>
			</div>
			<div class="cta-banner__actions">
				<?php if ( $bizpro_phone ) : ?>
					<a class="btn btn--light btn--lg" href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>"><?php echo esc_html( $bizpro_phone ); ?></a>
				<?php endif; ?>
				<?php if ( $bizpro_email ) : ?>
					<a class="btn btn--outline btn--lg" href="<?php echo esc_url( 'mailto:' . $bizpro_email ); ?>"><?php esc_html_e( 'Email Engineering Team', 'bizpro-agency' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
