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
					<a href="#pathways" class="btn visa-btn-ghost">Explore Countries</a>
				</div>

				<div class="visa-hero-trust">
					<div class="visa-trust-avatars">
						<span class="visa-avatar-circle" style="background:#2563eb;">CA</span>
						<span class="visa-avatar-circle" style="background:#059669;">UK</span>
						<span class="visa-avatar-circle" style="background:#d97706;">AU</span>
						<span class="visa-avatar-circle" style="background:#7c3aed;">US</span>
					</div>
					<div class="visa-trust-text">
						<strong>15,000+ Visas Approved</strong>
						<span>99.2% Visa Success Rate Across 42 Countries</span>
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

					<form class="visa-quick-form" method="post" action="#assessment">
						<div class="visa-form-field">
							<label>Target Destination</label>
							<select name="visa_target_country" class="visa-input" required>
								<option value="canada">🇨🇦 Canada (Express Entry & PNP)</option>
								<option value="uk">🇬🇧 United Kingdom (Skilled Worker & Student)</option>
								<option value="australia">🇦🇺 Australia (Subclass 189/190/491)</option>
								<option value="usa">🇺🇸 United States (EB-1/EB-2/F-1)</option>
								<option value="germany">🇩🇪 Germany (Opportunity Card & EU Blue Card)</option>
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
						<span class="visa-flag">🇨🇦</span>
						<div>
							<h3>Canada PR & Visas</h3>
							<span class="visa-card-badge">Express Entry Active</span>
						</div>
					</div>
					<p class="visa-card-desc">Express Entry (FSW/CEC), Provincial Nominee Programs (PNP), and Post-Grad Work Permits.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>6 - 8 Months</strong></li>
						<li>Education Required: <strong>Diploma / Degree</strong></li>
						<li>Success Rate: <strong>99.4%</strong></li>
					</ul>
					<a href="#assessment" class="btn visa-card-btn">Apply for Canada →</a>
				</div>

				<!-- UK -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag">🇬🇧</span>
						<div>
							<h3>United Kingdom</h3>
							<span class="visa-card-badge">Skilled Worker Route</span>
						</div>
					</div>
					<p class="visa-card-desc">Skilled Worker Visa, Global Talent Route, Innovator Founder, and UK University Admissions.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>3 - 6 Weeks</strong></li>
						<li>Sponsorship Support: <strong>Available</strong></li>
						<li>Success Rate: <strong>98.7%</strong></li>
					</ul>
					<a href="#assessment" class="btn visa-card-btn">Apply for UK →</a>
				</div>

				<!-- Australia -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag">🇦🇺</span>
						<div>
							<h3>Australia Migration</h3>
							<span class="visa-card-badge">Subclass 189 / 190</span>
						</div>
					</div>
					<p class="visa-card-desc">General Skilled Migration (GSM), Employer Nomination, and Student Subclass 500 visas.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>8 - 10 Months</strong></li>
						<li>Points Assessment: <strong>65+ Points</strong></li>
						<li>Success Rate: <strong>98.9%</strong></li>
					</ul>
					<a href="#assessment" class="btn visa-card-btn">Apply for Australia →</a>
				</div>

				<!-- USA -->
				<div class="visa-country-card">
					<div class="visa-card-head">
						<span class="visa-flag">🇺🇸</span>
						<div>
							<h3>United States</h3>
							<span class="visa-card-badge">EB-1, EB-2 & F-1</span>
						</div>
					</div>
					<p class="visa-card-desc">National Interest Waiver (NIW), Employment-Based Green Cards, L-1 Intra-Company, and F-1 Students.</p>
					<ul class="visa-card-points">
						<li>Processing Time: <strong>Varies by Route</strong></li>
						<li>Attorney Representation: <strong>Full Service</strong></li>
						<li>Success Rate: <strong>97.8%</strong></li>
					</ul>
					<a href="#assessment" class="btn visa-card-btn">Apply for USA →</a>
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
				<p class="visa-section-desc">A transparent, legally verified process to eliminate delays and rejections.</p>
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
					<p>Our certified legal team collects, verifies, audits, and formats your documents to meet official embassy standards.</p>
				</div>
				<div class="visa-step">
					<div class="visa-step-num">03</div>
					<h4>Application Filing</h4>
					<p>We submit your complete file through official immigration portals and represent your case until processing completes.</p>
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
				<strong>15,000+</strong>
				<span>Approved Visas</span>
			</div>
			<div class="visa-stat-box">
				<strong>99.2%</strong>
				<span>Success Rate</span>
			</div>
			<div class="visa-stat-box">
				<strong>45+</strong>
				<span>Licensed Immigration Lawyers</span>
			</div>
			<div class="visa-stat-box">
				<strong>18+</strong>
				<span>Years Global Experience</span>
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
				<h2>Speak With An Immigration Attorney Today</h2>
				<p>Have complex questions or prior refusals? Book a dedicated 45-minute confidential case consultation.</p>
			</div>
			<div class="visa-cta-actions">
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>" class="btn visa-btn-white">
					Call: <?php echo esc_html( $phone ); ?>
				</a>
				<a href="mailto:<?php echo esc_attr( $email ); ?>" class="btn visa-btn-outline-white">
					Email Our Attorneys →
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
