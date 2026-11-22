<?php
/**
 * Template Name: Homepage - Visa & Immigration (Ready for Sell)
 *
 * Bespoke Immigration & Visa Consultancy homepage demo.
 * Designed with modern ThemeForest/Envato immigration standards.
 *
 * @package BizPro_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Elementor builder pass-through
if ( have_posts() && bizpro_agency_is_elementor() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<main id="primary" class="site-main site-main--builder">
			<?php the_content(); ?>
		</main>
		<?php
	}
	get_footer();
	return;
}

$bizpro_phone = bizpro_agency_get( 'topbar_phone', '+1 (555) 789-0123' );
$bizpro_email = bizpro_agency_get( 'topbar_email', 'visa@bizproagency.com' );
?>

<main id="primary" class="site-main visa-niche-demo">

	<!-- 1. VISA HERO WITH ELIGIBILITY CHECKER -->
	<section class="visa-hero">
		<div class="container visa-hero__grid">
			<div class="visa-hero__copy">
				<div class="visa-cert-badge">
					<span class="visa-cert-shield">🛡️</span>
					<span><?php esc_html_e( 'Licensed & Regulated Immigration Advisors', 'bizpro-agency' ); ?></span>
				</div>
				<h1 class="visa-hero__title">
					<?php esc_html_e( 'Your Gateway to', 'bizpro-agency' ); ?> <span class="visa-accent-text"><?php esc_html_e( 'Global Living & Working', 'bizpro-agency' ); ?></span>
				</h1>
				<p class="visa-hero__lead">
					<?php esc_html_e( 'Comprehensive legal immigration assistance, student visas, skilled worker pathways, and permanent residency solutions for Canada, UK, Australia, USA, and Europe.', 'bizpro-agency' ); ?>
				</p>

				<div class="visa-hero__actions">
					<a href="#assessment" class="btn visa-btn-primary">
						<span><?php esc_html_e( 'Start Free Assessment', 'bizpro-agency' ); ?></span>
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					</a>
					<a href="<?php echo esc_url( bizpro_agency_page_url( 'visa-search' ) ); ?>" class="btn visa-btn-ghost"><?php esc_html_e( 'Explore Countries', 'bizpro-agency' ); ?></a>
				</div>

				<div class="visa-hero-trust">
					<div class="visa-trust-avatars">
						<span class="visa-avatar-circle" style="background:#2563eb;"><?php esc_html_e( 'CA', 'bizpro-agency' ); ?></span>
						<span class="visa-avatar-circle" style="background:#047857;"><?php esc_html_e( 'UK', 'bizpro-agency' ); ?></span>
						<span class="visa-avatar-circle" style="background:#b45309;"><?php esc_html_e( 'AU', 'bizpro-agency' ); ?></span>
						<span class="visa-avatar-circle" style="background:#7c3aed;"><?php esc_html_e( 'US', 'bizpro-agency' ); ?></span>
					</div>
					<div class="visa-trust-text">
						<strong><?php esc_html_e( '2,500+ Visas Consulted', 'bizpro-agency' ); ?></strong>
						<span><?php esc_html_e( '98% Client Satisfaction Rate', 'bizpro-agency' ); ?></span>
					</div>
				</div>
			</div>

			<!-- Hero Right: Interactive Quick Assessment Widget -->
			<div class="visa-hero__card" id="assessment">
				<div class="visa-form-box">
					<div class="visa-form-header">
						<span class="visa-form-tag"><?php esc_html_e( 'Free 2-Minute Check', 'bizpro-agency' ); ?></span>
						<h3><?php esc_html_e( 'Check Your Visa Eligibility', 'bizpro-agency' ); ?></h3>
						<p><?php esc_html_e( 'Get an instant evaluation from our licensed immigration attorneys.', 'bizpro-agency' ); ?></p>
					</div>

					<form class="visa-quick-form" method="post" action="#pathways">
						<div class="visa-form-field">
							<label for="bizpro-visa-country"><?php esc_html_e( 'Target Destination', 'bizpro-agency' ); ?></label>
							<select id="bizpro-visa-country" name="visa_target_country" class="visa-input" required>
								<option value="canada"><?php esc_html_e( 'Canada', 'bizpro-agency' ); ?></option>
								<option value="uk"><?php esc_html_e( 'United Kingdom', 'bizpro-agency' ); ?></option>
								<option value="australia"><?php esc_html_e( 'Australia', 'bizpro-agency' ); ?></option>
								<option value="usa"><?php esc_html_e( 'United States', 'bizpro-agency' ); ?></option>
								<option value="germany"><?php esc_html_e( 'Germany', 'bizpro-agency' ); ?></option>
							</select>
						</div>

						<div class="visa-form-field">
							<label for="bizpro-visa-category"><?php esc_html_e( 'Visa Category', 'bizpro-agency' ); ?></label>
							<select id="bizpro-visa-category" name="visa_category" class="visa-input" required>
								<option value="pr"><?php esc_html_e( 'Permanent Residency (PR)', 'bizpro-agency' ); ?></option>
								<option value="work"><?php esc_html_e( 'Work Permit & Employment Visa', 'bizpro-agency' ); ?></option>
								<option value="student"><?php esc_html_e( 'Student Visa & University Admission', 'bizpro-agency' ); ?></option>
								<option value="business"><?php esc_html_e( 'Investor & Business Setup', 'bizpro-agency' ); ?></option>
								<option value="visit"><?php esc_html_e( 'Tourist & Family Visit Visa', 'bizpro-agency' ); ?></option>
							</select>
						</div>

						<div class="visa-form-field">
							<span class="visa-field-label"><?php esc_html_e( 'Your Contact Details', 'bizpro-agency' ); ?></span>
							<div class="visa-input-split">
								<input type="text" name="visa_name" placeholder="<?php esc_attr_e( 'Full Name *', 'bizpro-agency' ); ?>" aria-label="<?php esc_attr_e( 'Full Name', 'bizpro-agency' ); ?>" autocomplete="name" required class="visa-input">
								<input type="tel" name="visa_phone" placeholder="<?php esc_attr_e( 'Phone / WhatsApp *', 'bizpro-agency' ); ?>" aria-label="<?php esc_attr_e( 'Phone / WhatsApp', 'bizpro-agency' ); ?>" autocomplete="tel" required class="visa-input">
							</div>
						</div>

						<button type="submit" class="btn visa-submit-btn"><?php esc_html_e( 'Check My Eligibility Now →', 'bizpro-agency' ); ?></button>
						<p class="visa-form-guarantee"><?php esc_html_e( '🔒 100% Confidential. No commitment required.', 'bizpro-agency' ); ?></p>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. POPULAR COUNTRY PATHWAYS (CARDS WITH FLAGS, REQUIREMENTS & SUCCESS RATES) -->
	<section id="pathways" class="visa-section visa-pathways-section">
		<div class="container">
			<div class="visa-section-header">
				<span class="visa-section-badge"><?php esc_html_e( 'Immigration Destinations', 'bizpro-agency' ); ?></span>
				<h2 class="visa-section-title"><?php esc_html_e( 'Popular Countries with High Approval Rates', 'bizpro-agency' ); ?></h2>
				<p class="visa-section-desc"><?php esc_html_e( 'Explore pathways tailored for professionals, students, families and investors.', 'bizpro-agency' ); ?></p>
			</div>

			<div class="visa-countries-grid">
				<!-- Canada -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="<?php esc_attr_e( 'Canada', 'bizpro-agency' ); ?>" title="<?php esc_attr_e( 'Canada', 'bizpro-agency' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="15" height="30" fill="#FF0000"/><rect x="45" width="15" height="30" fill="#FF0000"/><rect x="15" width="30" height="30" fill="#FFFFFF"/><text x="30" y="21" font-size="16" text-anchor="middle" fill="#FF0000">🍁</text></svg></span></span>
						<div>
							<h3><?php esc_html_e( 'Canada PR & Visas', 'bizpro-agency' ); ?></h3>
							<span class="visa-card-badge"><?php esc_html_e( 'Express Entry Active', 'bizpro-agency' ); ?></span>
						</div>
					</div>
					<p class="visa-card-desc"><?php esc_html_e( 'Express Entry (FSW/CEC), Provincial Nominee Programs (PNP), and Post-Grad Work Permits.', 'bizpro-agency' ); ?></p>
					<ul class="visa-card-points">
						<li><?php esc_html_e( 'Processing Time:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( '6 - 8 Months', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Education Required:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Diploma / Degree', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Language Benchmark:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'CLB 7+ Recommended', 'bizpro-agency' ); ?></strong></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( 'country', 'canada', bizpro_agency_page_url( 'visa-search' ) ) ); ?>" class="btn visa-card-btn"><?php esc_html_e( 'Apply for Canada →', 'bizpro-agency' ); ?></a>
				</div>

				<!-- UK -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="<?php esc_attr_e( 'United Kingdom', 'bizpro-agency' ); ?>" title="<?php esc_attr_e( 'United Kingdom', 'bizpro-agency' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V30 M0,15 H60" stroke="#fff" stroke-width="10"/><path d="M30,0 V30 M0,15 H60" stroke="#C8102E" stroke-width="6"/></svg></span></span>
						<div>
							<h3><?php esc_html_e( 'United Kingdom', 'bizpro-agency' ); ?></h3>
							<span class="visa-card-badge"><?php esc_html_e( 'Skilled Worker Route', 'bizpro-agency' ); ?></span>
						</div>
					</div>
					<p class="visa-card-desc"><?php esc_html_e( 'Skilled Worker Visa, Global Talent Route, Innovator Founder, and UK University Admissions.', 'bizpro-agency' ); ?></p>
					<ul class="visa-card-points">
						<li><?php esc_html_e( 'Processing Time:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( '3 - 6 Weeks', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Sponsorship Support:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Available', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Visa Category:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Skilled Worker / Tier 2', 'bizpro-agency' ); ?></strong></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( 'country', 'uk', bizpro_agency_page_url( 'visa-search' ) ) ); ?>" class="btn visa-card-btn"><?php esc_html_e( 'Apply for UK →', 'bizpro-agency' ); ?></a>
				</div>

				<!-- Australia -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="<?php esc_attr_e( 'Australia', 'bizpro-agency' ); ?>" title="<?php esc_attr_e( 'Australia', 'bizpro-agency' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#00008B"/><path d="M0,0 L30,15 M30,0 L0,15" stroke="#fff" stroke-width="5"/><path d="M0,0 L30,15 M30,0 L0,15" stroke="#C8102E" stroke-width="3"/><path d="M15,0 V15 M0,7.5 H30" stroke="#fff" stroke-width="8"/><path d="M15,0 V15 M0,7.5 H30" stroke="#C8102E" stroke-width="5"/></svg></span></span>
						<div>
							<h3><?php esc_html_e( 'Australia Migration', 'bizpro-agency' ); ?></h3>
							<span class="visa-card-badge"><?php esc_html_e( 'Subclass 189 / 190', 'bizpro-agency' ); ?></span>
						</div>
					</div>
					<p class="visa-card-desc"><?php esc_html_e( 'General Skilled Migration (GSM), Employer Nomination, and Student Subclass 500 visas.', 'bizpro-agency' ); ?></p>
					<ul class="visa-card-points">
						<li><?php esc_html_e( 'Processing Time:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( '8 - 10 Months', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Points Assessment:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( '65+ Points Required', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Pathway:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Permanent Residency', 'bizpro-agency' ); ?></strong></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( 'country', 'australia', bizpro_agency_page_url( 'visa-search' ) ) ); ?>" class="btn visa-card-btn"><?php esc_html_e( 'Apply for Australia →', 'bizpro-agency' ); ?></a>
				</div>

				<!-- USA -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="<?php esc_attr_e( 'United States', 'bizpro-agency' ); ?>" title="<?php esc_attr_e( 'United States', 'bizpro-agency' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#B22234"/><rect y="2.3" width="60" height="2.3" fill="#fff"/><rect y="6.9" width="60" height="2.3" fill="#fff"/><rect y="11.5" width="60" height="2.3" fill="#fff"/><rect y="16.1" width="60" height="2.3" fill="#fff"/><rect y="20.7" width="60" height="2.3" fill="#fff"/><rect y="25.3" width="60" height="2.3" fill="#fff"/><rect width="24" height="16" fill="#3C3B6E"/><text x="12" y="11" font-size="6" fill="white" text-anchor="middle">★★★</text></svg></span></span>
						<div>
							<h3><?php esc_html_e( 'United States', 'bizpro-agency' ); ?></h3>
							<span class="visa-card-badge"><?php esc_html_e( 'EB-1, EB-2 & F-1', 'bizpro-agency' ); ?></span>
						</div>
					</div>
					<p class="visa-card-desc"><?php esc_html_e( 'National Interest Waiver (NIW), Employment-Based Green Cards, L-1 Intra-Company, and F-1 Students.', 'bizpro-agency' ); ?></p>
					<ul class="visa-card-points">
						<li><?php esc_html_e( 'Processing Time:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Varies by Route', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Guidance:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Comprehensive Support', 'bizpro-agency' ); ?></strong></li>
						<li><?php esc_html_e( 'Case Evaluation:', 'bizpro-agency' ); ?> <strong><?php esc_html_e( 'Pre-Assessment Included', 'bizpro-agency' ); ?></strong></li>
					</ul>
					<a href="<?php echo esc_url( add_query_arg( 'country', 'usa', bizpro_agency_page_url( 'visa-search' ) ) ); ?>" class="btn visa-card-btn"><?php esc_html_e( 'Apply for USA →', 'bizpro-agency' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<!-- 3. OUR STEP-BY-STEP PROCESS TIMELINE -->
	<section class="visa-section visa-process-section">
		<div class="container">
			<div class="visa-section-header">
				<span class="visa-section-badge"><?php esc_html_e( 'How It Works', 'bizpro-agency' ); ?></span>
				<h2 class="visa-section-title"><?php esc_html_e( 'Your 4-Step Journey to a Visa Approval', 'bizpro-agency' ); ?></h2>
				<p class="visa-section-desc"><?php esc_html_e( 'A transparent, step-by-step process to guide your application from start to finish.', 'bizpro-agency' ); ?></p>
			</div>

			<div class="visa-timeline">
				<div class="visa-step">
					<div class="visa-step-num">01</div>
					<h4><?php esc_html_e( 'Profile Assessment', 'bizpro-agency' ); ?></h4>
					<p><?php esc_html_e( 'We review your education, work experience, language scores, and match you with the highest-probability visa program.', 'bizpro-agency' ); ?></p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">02</div>
					<h4><?php esc_html_e( 'Document Preparation', 'bizpro-agency' ); ?></h4>
					<p><?php esc_html_e( 'Our expert team collects, verifies, and formats your documents to meet official requirements.', 'bizpro-agency' ); ?></p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">03</div>
					<h4><?php esc_html_e( 'Application Filing', 'bizpro-agency' ); ?></h4>
					<p><?php esc_html_e( 'We submit your complete application file through official immigration portals and track its progress.', 'bizpro-agency' ); ?></p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">04</div>
					<h4><?php esc_html_e( 'Visa Granted & Relocation', 'bizpro-agency' ); ?></h4>
					<p><?php esc_html_e( 'Receive your official visa approval, pre-departure briefing, health insurance, and arrival support.', 'bizpro-agency' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. KEY STATS -->
	<section class="visa-stats-bar">
		<div class="container visa-stats-grid">
			<div class="visa-stat-box">
				<strong>2,500+</strong>
				<span><?php esc_html_e( 'Visas Consulted', 'bizpro-agency' ); ?></span>
			</div>
			<div class="visa-stat-box">
				<strong>98%</strong>
				<span><?php esc_html_e( 'Client Satisfaction', 'bizpro-agency' ); ?></span>
			</div>
			<div class="visa-stat-box">
				<strong>45+</strong>
				<span><?php esc_html_e( 'Global Destinations', 'bizpro-agency' ); ?></span>
			</div>
			<div class="visa-stat-box">
				<strong>12+</strong>
				<span><?php esc_html_e( 'Years in Business', 'bizpro-agency' ); ?></span>
			</div>
		</div>
	</section>

	<!-- 5. TESTIMONIALS / CLIENT GRANTED VISAS -->
	<section class="visa-section visa-testimonials-section">
		<div class="container">
			<div class="visa-section-header">
				<span class="visa-section-badge"><?php esc_html_e( 'Client Success Stories', 'bizpro-agency' ); ?></span>
				<h2 class="visa-section-title"><?php esc_html_e( 'Approved Applicants Share Their Journey', 'bizpro-agency' ); ?></h2>
				<p class="visa-section-desc"><?php esc_html_e( 'Real stories from people who successfully relocated with our team.', 'bizpro-agency' ); ?></p>
			</div>

			<div class="visa-testimonials-grid">
				<div class="visa-testi-card">
					<div class="visa-testi-header">
						<span class="visa-testi-stamp"><?php esc_html_e( '✓ PR APPROVED', 'bizpro-agency' ); ?></span>
						<span class="visa-testi-country"><?php esc_html_e( 'Canada Express Entry', 'bizpro-agency' ); ?></span>
					</div>
					<p><?php esc_html_e( '"After two rejections with previous agencies, BizPro Agency fixed my ECA discrepancies and filed my Express Entry. Received my Canadian CoPR in just 5 months!"', 'bizpro-agency' ); ?></p>
					<div class="visa-testi-author">
						<div class="visa-author-img"><?php esc_html_e( 'AR', 'bizpro-agency' ); ?></div>
						<div>
							<strong><?php esc_html_e( 'Arun & Priya Sharma', 'bizpro-agency' ); ?></strong>
							<span><?php esc_html_e( 'Now living in Toronto, Ontario', 'bizpro-agency' ); ?></span>
						</div>
					</div>
				</div>

				<div class="visa-testi-card">
					<div class="visa-testi-header">
						<span class="visa-testi-stamp"><?php esc_html_e( '✓ VISA GRANTED', 'bizpro-agency' ); ?></span>
						<span class="visa-testi-country"><?php esc_html_e( 'UK Skilled Worker', 'bizpro-agency' ); ?></span>
					</div>
					<p><?php esc_html_e( '"Securing my UK healthcare worker visa was so simple with their legal guidance. They handled the Certificate of Sponsorship and biometric appointment seamlessly."', 'bizpro-agency' ); ?></p>
					<div class="visa-testi-author">
						<div class="visa-author-img"><?php esc_html_e( 'DA', 'bizpro-agency' ); ?></div>
						<div>
							<strong><?php esc_html_e( 'Dr. Daniel Adebayo', 'bizpro-agency' ); ?></strong>
							<span><?php esc_html_e( 'Now working in Manchester, UK', 'bizpro-agency' ); ?></span>
						</div>
					</div>
				</div>

				<div class="visa-testi-card">
					<div class="visa-testi-header">
						<span class="visa-testi-stamp"><?php esc_html_e( '✓ STUDENT VISA', 'bizpro-agency' ); ?></span>
						<span class="visa-testi-country"><?php esc_html_e( 'Australia Subclass 500', 'bizpro-agency' ); ?></span>
					</div>
					<p><?php esc_html_e( '"Got into University of Melbourne with a 30% scholarship! BizPro handled both my university admission and student visa without any stress. Highly recommended!"', 'bizpro-agency' ); ?></p>
					<div class="visa-testi-author">
						<div class="visa-author-img"><?php esc_html_e( 'KL', 'bizpro-agency' ); ?></div>
						<div>
							<strong><?php esc_html_e( 'Kelly Lin', 'bizpro-agency' ); ?></strong>
							<span><?php esc_html_e( 'Master of Data Science, Melbourne', 'bizpro-agency' ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 6. FINAL CONSULTATION BANNER -->
	<section class="visa-cta-banner">
		<div class="container visa-cta-inner">
			<div>
				<span class="visa-section-badge" style="background:rgba(255,255,255,0.15); color:#fff; border-color:rgba(255,255,255,0.3);"><?php esc_html_e( 'Book A Session', 'bizpro-agency' ); ?></span>
				<h2><?php esc_html_e( 'Speak With Our Immigration Advisors Today', 'bizpro-agency' ); ?></h2>
				<p><?php esc_html_e( 'Have complex questions or prior refusals? Get a free initial consultation to review your options.', 'bizpro-agency' ); ?></p>
			</div>
			<div class="visa-cta-actions">
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>" class="btn visa-btn-white">
					Call: <?php echo esc_html( $bizpro_phone ); ?>
				</a>
				<a href="mailto:<?php echo esc_attr( $bizpro_email ); ?>" class="btn visa-btn-outline-white">
					<?php esc_html_e( 'Email Our Team →', 'bizpro-agency' ); ?>
				</a>
			</div>
		</div>
	</section>

	<?php if ( bizpro_agency_get( 'show_demo_switcher' ) ) : ?>
	<!-- Demo switcher bar at bottom -->
	<div class="vp-demo-switcher" aria-label="<?php esc_attr_e( 'Theme demo switcher', 'bizpro-agency' ); ?>">
		<span><?php esc_html_e( 'Explore Other Demos:', 'bizpro-agency' ); ?></span>
		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Agency Home', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'travel' ) ); ?>"><?php esc_html_e( 'Travel Agency', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'it' ) ); ?>"><?php esc_html_e( 'IT Solutions', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'consulting' ) ); ?>"><?php esc_html_e( 'Business Consulting', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'corporate' ) ); ?>"><?php esc_html_e( 'Corporate Enterprise', 'bizpro-agency' ); ?></a>
		</div>
	</div>
	<?php endif; ?>

</main>

<?php
get_footer();
