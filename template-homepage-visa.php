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

$phone = bizpro_agency_get( 'topbar_phone', '+1 (555) 789-0123' );
$email = bizpro_agency_get( 'topbar_email', 'visa@bizproagency.com' );
?>

<main id="primary" class="site-main visa-niche-demo">

	<!-- 1. VISA HERO WITH ELIGIBILITY CHECKER -->
	<section class="visa-hero">
		<div class="container visa-hero__grid">
			<div class="visa-hero__copy">
				<div class="visa-cert-badge">
					<span class="visa-cert-shield">🛡️</span>
					<span>Licensed & Regulated Immigration Advisors</span>
				</div>
				<h1 class="visa-hero__title">
					Your Gateway to <span class="visa-accent-text">Global Living & Working</span>
				</h1>
				<p class="visa-hero__lead">
					Comprehensive legal immigration assistance, student visas, skilled worker pathways, and permanent residency solutions for Canada, UK, Australia, USA, and Europe.
				</p>

				<div class="visa-hero__actions">
					<a href="#assessment" class="btn visa-btn-primary">
						<span>Start Free Assessment</span>
						<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
					</a>
					<a href="<?php echo esc_url( home_url( '/visa-search/' ) ); ?>" class="btn visa-btn-ghost">Explore Countries</a>
				</div>

				<div class="visa-hero-trust">
					<div class="visa-trust-avatars">
						<span class="visa-avatar-circle" style="background:#2563eb;">CA</span>
						<span class="visa-avatar-circle" style="background:#059669;">UK</span>
						<span class="visa-avatar-circle" style="background:#d97706;">AU</span>
						<span class="visa-avatar-circle" style="background:#7c3aed;">US</span>
					</div>
					<div class="visa-trust-text">
						<strong>[Sample] Visas Processed</strong>
						<span>[Sample] Success Rate — Replace with your real data</span>
					</div>
				</div>
			</div>

			<!-- Hero Right: Interactive Quick Assessment Widget -->
			<div class="visa-hero__card" id="assessment">
				<div class="visa-form-box">
					<div class="visa-form-header">
						<span class="visa-form-tag">Free 2-Minute Check</span>
						<h3>Check Your Visa Eligibility</h3>
						<p>Get an instant evaluation from our licensed immigration attorneys.</p>
					</div>

					<form class="visa-quick-form" method="post" action="#pathways">
						<div class="visa-form-field">
							<label>Target Destination</label>
							<select name="visa_target_country" class="visa-input" required>
								<option value="canada"><span class="bpa-flag" aria-label="Canada" title="Canada"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="15" height="30" fill="#FF0000"/><rect x="45" width="15" height="30" fill="#FF0000"/><rect x="15" width="30" height="30" fill="#FFFFFF"/><text x="30" y="21" font-size="16" text-anchor="middle" fill="#FF0000">🍁</text></svg></span> Canada (Express Entry & PNP)</option>
								<option value="uk"><span class="bpa-flag" aria-label="United Kingdom" title="United Kingdom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V30 M0,15 H60" stroke="#fff" stroke-width="10"/><path d="M30,0 V30 M0,15 H60" stroke="#C8102E" stroke-width="6"/></svg></span> United Kingdom (Skilled Worker & Student)</option>
								<option value="australia"><span class="bpa-flag" aria-label="Australia" title="Australia"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#00008B"/><path d="M0,0 L30,15 M30,0 L0,15" stroke="#fff" stroke-width="5"/><path d="M0,0 L30,15 M30,0 L0,15" stroke="#C8102E" stroke-width="3"/><path d="M15,0 V15 M0,7.5 H30" stroke="#fff" stroke-width="8"/><path d="M15,0 V15 M0,7.5 H30" stroke="#C8102E" stroke-width="5"/></svg></span> Australia (Subclass 189/190/491)</option>
								<option value="usa"><span class="bpa-flag" aria-label="United States" title="United States"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#B22234"/><rect y="2.3" width="60" height="2.3" fill="#fff"/><rect y="6.9" width="60" height="2.3" fill="#fff"/><rect y="11.5" width="60" height="2.3" fill="#fff"/><rect y="16.1" width="60" height="2.3" fill="#fff"/><rect y="20.7" width="60" height="2.3" fill="#fff"/><rect y="25.3" width="60" height="2.3" fill="#fff"/><rect width="24" height="16" fill="#3C3B6E"/><text x="12" y="11" font-size="6" fill="white" text-anchor="middle">★★★</text></svg></span> United States (EB-1/EB-2/F-1)</option>
								<option value="germany"><span class="bpa-flag" aria-label="Germany" title="Germany"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="10" fill="#000"/><rect y="10" width="60" height="10" fill="#DD0000"/><rect y="20" width="60" height="10" fill="#FFCE00"/></svg></span> Germany (Opportunity Card & EU Blue Card)</option>
							</select>
						</div>

						<div class="visa-form-field">
							<label>Visa Category</label>
							<select name="visa_category" class="visa-input" required>
								<option value="pr">Permanent Residency (PR)</option>
								<option value="work">Work Permit & Employment Visa</option>
								<option value="student">Student Visa & University Admission</option>
								<option value="business">Investor & Business Setup</option>
								<option value="visit">Tourist & Family Visit Visa</option>
							</select>
						</div>

						<div class="visa-form-field">
							<label>Your Contact Details</label>
							<div class="visa-input-split">
								<input type="text" name="visa_name" placeholder="Full Name *" required class="visa-input">
								<input type="tel" name="visa_phone" placeholder="Phone / WhatsApp *" required class="visa-input">
							</div>
						</div>

						<button type="submit" class="btn visa-submit-btn">Check My Eligibility Now →</button>
						<p class="visa-form-guarantee">🔒 100% Confidential. No commitment required.</p>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. POPULAR COUNTRY PATHWAYS (CARDS WITH FLAGS, REQUIREMENTS & SUCCESS RATES) -->
	<section id="pathways" class="visa-section visa-pathways-section">
		<div class="container">
			<div class="visa-section-header">
				<span class="visa-section-badge">Immigration Destinations</span>
				<h2 class="visa-section-title">Popular Countries with High Approval Rates</h2>
				<p class="visa-section-desc">Explore pathways tailored for professionals, students, families and investors.</p>
			</div>

			<div class="visa-countries-grid">
				<!-- Canada -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="Canada" title="Canada"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="15" height="30" fill="#FF0000"/><rect x="45" width="15" height="30" fill="#FF0000"/><rect x="15" width="30" height="30" fill="#FFFFFF"/><text x="30" y="21" font-size="16" text-anchor="middle" fill="#FF0000">🍁</text></svg></span></span>
						<div>
							<h3>Canada PR & Visas</h3>
							<span class="visa-card-badge">Express Entry Active</span>
						</div>
					</div>
					<p class="visa-card-desc">Express Entry (FSW/CEC), Provincial Nominee Programs (PNP), and Post-Grad Work Permits.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>6 - 8 Months</strong></li>
						<li>Education Required: <strong>Diploma / Degree</strong></li>
						<li>Success Rate: <strong>[Sample]%</strong></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/visa-search/?country=canada' ) ); ?>" class="btn visa-card-btn">Apply for Canada →</a>
				</div>

				<!-- UK -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="United Kingdom" title="United Kingdom"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V30 M0,15 H60" stroke="#fff" stroke-width="10"/><path d="M30,0 V30 M0,15 H60" stroke="#C8102E" stroke-width="6"/></svg></span></span>
						<div>
							<h3>United Kingdom</h3>
							<span class="visa-card-badge">Skilled Worker Route</span>
						</div>
					</div>
					<p class="visa-card-desc">Skilled Worker Visa, Global Talent Route, Innovator Founder, and UK University Admissions.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>3 - 6 Weeks</strong></li>
						<li>Sponsorship Support: <strong>Available</strong></li>
						<li>Success Rate: <strong>[Sample]%</strong></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/visa-search/?country=uk' ) ); ?>" class="btn visa-card-btn">Apply for UK →</a>
				</div>

				<!-- Australia -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="Australia" title="Australia"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#00008B"/><path d="M0,0 L30,15 M30,0 L0,15" stroke="#fff" stroke-width="5"/><path d="M0,0 L30,15 M30,0 L0,15" stroke="#C8102E" stroke-width="3"/><path d="M15,0 V15 M0,7.5 H30" stroke="#fff" stroke-width="8"/><path d="M15,0 V15 M0,7.5 H30" stroke="#C8102E" stroke-width="5"/></svg></span></span>
						<div>
							<h3>Australia Migration</h3>
							<span class="visa-card-badge">Subclass 189 / 190</span>
						</div>
					</div>
					<p class="visa-card-desc">General Skilled Migration (GSM), Employer Nomination, and Student Subclass 500 visas.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>8 - 10 Months</strong></li>
						<li>Points Assessment: <strong>65+ Points</strong></li>
						<li>Success Rate: <strong>[Sample]%</strong></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/visa-search/?country=australia' ) ); ?>" class="btn visa-card-btn">Apply for Australia →</a>
				</div>

				<!-- USA -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag"><span class="bpa-flag" aria-label="United States" title="United States"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 30" width="28" height="20" style="vertical-align:middle;border-radius:2px;border:1px solid #e5e7eb;"><rect width="60" height="30" fill="#B22234"/><rect y="2.3" width="60" height="2.3" fill="#fff"/><rect y="6.9" width="60" height="2.3" fill="#fff"/><rect y="11.5" width="60" height="2.3" fill="#fff"/><rect y="16.1" width="60" height="2.3" fill="#fff"/><rect y="20.7" width="60" height="2.3" fill="#fff"/><rect y="25.3" width="60" height="2.3" fill="#fff"/><rect width="24" height="16" fill="#3C3B6E"/><text x="12" y="11" font-size="6" fill="white" text-anchor="middle">★★★</text></svg></span></span>
						<div>
							<h3>United States</h3>
							<span class="visa-card-badge">EB-1, EB-2 & F-1</span>
						</div>
					</div>
					<p class="visa-card-desc">National Interest Waiver (NIW), Employment-Based Green Cards, L-1 Intra-Company, and F-1 Students.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>Varies by Route</strong></li>
						<li>Attorney Representation: <strong>Full Service</strong></li>
						<li>Success Rate: <strong>[Sample]%</strong></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/visa-search/?country=usa' ) ); ?>" class="btn visa-card-btn">Apply for USA →</a>
				</div>
			</div>
		</div>
	</section>

	<!-- 3. OUR STEP-BY-STEP PROCESS TIMELINE -->
	<section class="visa-section visa-process-section">
		<div class="container">
			<div class="visa-section-header">
				<span class="visa-section-badge">How It Works</span>
				<h2 class="visa-section-title">Your 4-Step Journey to a Visa Approval</h2>
				<p class="visa-section-desc">A transparent, step-by-step process to guide your application from start to finish.</p>
			</div>

			<div class="visa-timeline">
				<div class="visa-step">
					<div class="visa-step-num">01</div>
					<h4>Profile Assessment</h4>
					<p>We review your education, work experience, language scores, and match you with the highest-probability visa program.</p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">02</div>
					<h4>Document Preparation</h4>
					<p>Our expert team collects, verifies, and formats your documents to meet official requirements.</p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">03</div>
					<h4>Application Filing</h4>
					<p>We submit your complete application file through official immigration portals and track its progress.</p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">04</div>
					<h4>Visa Granted & Relocation</h4>
					<p>Receive your official visa approval, pre-departure briefing, health insurance, and arrival support.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- 4. KEY STATS -->
	<section class="visa-stats-bar">
		<div class="container visa-stats-grid">
			<div class="visa-stat-box">
				<strong>[Sample]</strong>
				<span>Visas Processed (Demo)</span>
			</div>
			<div class="visa-stat-box">
				<strong>[Sample]</strong>
				<span>Client Satisfaction (Demo)</span>
			</div>
			<div class="visa-stat-box">
				<strong>[Sample]</strong>
				<span>Immigration Experts (Demo)</span>
			</div>
			<div class="visa-stat-box">
				<strong>[Sample]</strong>
				<span>Years in Business (Demo)</span>
			</div>
		</div>
	</section>

	<!-- 5. TESTIMONIALS / CLIENT GRANTED VISAS -->
	<section class="visa-section visa-testimonials-section">
		<div class="container">
			<div class="visa-section-header">
				<span class="visa-section-badge">Client Success Stories</span>
				<h2 class="visa-section-title">Approved Applicants Share Their Journey</h2>
				<p class="visa-section-desc">Real stories from people who successfully relocated with our team.</p>
			</div>

			<div class="visa-testimonials-grid">
				<div class="visa-testi-card">
					<div class="visa-testi-header">
						<span class="visa-testi-stamp">✓ PR APPROVED</span>
						<span class="visa-testi-country">Canada Express Entry</span>
					</div>
					<p>"After two rejections with previous agencies, BizPro Agency fixed my ECA discrepancies and filed my Express Entry. Received my Canadian CoPR in just 5 months!"</p>
					<div class="visa-testi-author">
						<div class="visa-author-img">AR</div>
						<div>
							<strong>Arun & Priya Sharma</strong>
							<span>Now living in Toronto, Ontario</span>
						</div>
					</div>
				</div>

				<div class="visa-testi-card">
					<div class="visa-testi-header">
						<span class="visa-testi-stamp">✓ VISA GRANTED</span>
						<span class="visa-testi-country">UK Skilled Worker</span>
					</div>
					<p>"Securing my UK healthcare worker visa was so simple with their legal guidance. They handled the Certificate of Sponsorship and biometric appointment seamlessly."</p>
					<div class="visa-testi-author">
						<div class="visa-author-img">DA</div>
						<div>
							<strong>Dr. Daniel Adebayo</strong>
							<span>Now working in Manchester, UK</span>
						</div>
					</div>
				</div>

				<div class="visa-testi-card">
					<div class="visa-testi-header">
						<span class="visa-testi-stamp">✓ STUDENT VISA</span>
						<span class="visa-testi-country">Australia Subclass 500</span>
					</div>
					<p>"Got into University of Melbourne with a 30% scholarship! BizPro handled both my university admission and student visa without any stress. Highly recommended!"</p>
					<div class="visa-testi-author">
						<div class="visa-author-img">KL</div>
						<div>
							<strong>Kelly Lin</strong>
							<span>Master of Data Science, Melbourne</span>
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
				<span class="visa-section-badge" style="background:rgba(255,255,255,0.15); color:#fff; border-color:rgba(255,255,255,0.3);">Book A Session</span>
				<h2>Speak With Our Immigration Advisors Today</h2>
				<p>Have complex questions or prior refusals? Get a free initial consultation to review your options.</p>
			</div>
			<div class="visa-cta-actions">
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="btn visa-btn-white">
					Call: <?php echo esc_html( $phone ); ?>
				</a>
				<a href="mailto:<?php echo esc_attr( $email ); ?>" class="btn visa-btn-outline-white">
					Email Our Team →
				</a>
			</div>
		</div>
	</section>

	<!-- Demo switcher bar at bottom -->
	<div class="vp-demo-switcher" aria-label="Theme demo switcher">
		<span>Explore Other Demos:</span>
		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Agency Home</a>
			<a href="<?php echo esc_url( home_url( '/travel-agency/' ) ); ?>">Travel Agency</a>
			<a href="<?php echo esc_url( home_url( '/it-solutions/' ) ); ?>">IT Solutions</a>
			<a href="<?php echo esc_url( home_url( '/business-consulting/' ) ); ?>">Business Consulting</a>
			<a href="<?php echo esc_url( home_url( '/corporate/' ) ); ?>">Corporate Enterprise</a>
		</div>
	</div>

</main>

<?php
get_footer();
