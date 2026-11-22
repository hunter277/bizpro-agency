<?php
/**
 * Template Name: Homepage - Travel Agency (Ready for Sell)
 *
 * Premium bespoke Travel & Tour Agency homepage demo.
 * Designed with modern ThemeForest/Envato travel standards.
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

$bizpro_phone = bizpro_agency_get( 'topbar_phone', '+1 (555) 345-6789' );
$bizpro_email = bizpro_agency_get( 'topbar_email', 'travel@bizproagency.com' );
?>

<main id="primary" class="site-main travel-niche-demo">

	<!-- 1. HERO WITH SEARCH BAR WIDGET -->
	<section class="travel-hero">
		<div class="travel-hero__bg" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-01.svg' ) ); ?>');"></div>
		<div class="travel-hero__overlay"></div>
		<div class="container travel-hero__container">
			<div class="travel-hero__content">
				<span class="travel-pill-badge">
					<span class="travel-pill-dot"></span> Explore The World Beyond Boundaries
				</span>
				<h1 class="travel-hero__title">
					Discover Your Next <span class="travel-gradient-text">Great Adventure</span>
				</h1>
				<p class="travel-hero__subtitle">
					Handcrafted tour packages, private expeditions, and luxury getaways across 120+ destinations worldwide with 24/7 personal travel concierge.
				</p>
			</div>

			<!-- Modern Floating Travel Search Widget -->
			<div class="travel-search-card">
				<form class="travel-search-form" method="get" action="<?php echo esc_url( get_permalink() ); ?>#destinations">
					<div class="travel-search-group">
						<label class="travel-search-label">
							<span class="travel-icon">📍</span> Where To?
						</label>
						<select name="destination" class="travel-select">
							<option value="">Choose Destination</option>
							<option value="bali">Bali & Lombok, Indonesia</option>
							<option value="swiss">Swiss Alps, Switzerland</option>
							<option value="santorini">Santorini, Greece</option>
							<option value="maldives">Maldives Islands</option>
							<option value="kyoto">Kyoto & Tokyo, Japan</option>
							<option value="dubai">Dubai & Abu Dhabi, UAE</option>
						</select>
					</div>

					<div class="travel-search-group">
						<label class="travel-search-label">
							<span class="travel-icon">🗓️</span> When?
						</label>
						<select name="season" class="travel-select">
							<option value="">Any Month</option>
							<option value="spring">Spring 2027</option>
							<option value="summer">Summer Peak Season</option>
							<option value="autumn">Autumn Foliage</option>
							<option value="winter">Winter Holiday Escapes</option>
						</select>
					</div>

					<div class="travel-search-group">
						<label class="travel-search-label">
							<span class="travel-icon">🎒</span> Tour Style
						</label>
						<select name="type" class="travel-select">
							<option value="">All Types</option>
							<option value="luxury">Luxury & Honeymoon</option>
							<option value="adventure">Mountain & Trekking</option>
							<option value="beach">Tropical Island & Beach</option>
							<option value="family">Family & Cultural</option>
						</select>
					</div>

					<div class="travel-search-group travel-search-action">
						<button type="submit" class="travel-search-btn" style="background: linear-gradient(135deg, #059669, #047857) !important; color: #ffffff !important; border: none; cursor: pointer;">
							<span>Search Trips</span>
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</button>
					</div>
				</form>
			</div>

			<!-- Quick stats bar under hero -->
			<div class="travel-hero-chips">
				<div class="travel-chip">
					<strong>500+</strong> <span>Curated Trips (Sample)</span>
				</div>
				<div class="travel-chip-sep"></div>
				<div class="travel-chip">
					<strong>95%+</strong> <span>Satisfied Guests (Sample)</span>
				</div>
				<div class="travel-chip-sep"></div>
				<div class="travel-chip">
					<strong>50+</strong> <span>Destinations (Sample)</span>
				</div>
				<div class="travel-chip-sep"></div>
				<div class="travel-chip">
					<strong>24/7</strong> <span>On-Trip Assistance</span>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. POPULAR DESTINATIONS GRID -->
	<section id="destinations" class="travel-section travel-destinations-section">
		<div class="container">
			<div class="travel-section-header">
				<span class="travel-section-badge">Top Destinations</span>
				<h2 class="travel-section-title">Trending Places Loved by Travelers</h2>
				<p class="travel-section-desc">Hand-picked iconic getaways with exclusive local guides and private transport.</p>
			</div>

			<div class="travel-dest-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
				<!-- Dest 1 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-02.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-tag">Top Choice</div>
					<div class="travel-dest-content">
						<span class="travel-dest-country">Indonesia</span>
						<h3 class="travel-dest-name">Bali Island Paradise</h3>
						<div class="travel-dest-meta">
							<span>18 Tour Packages</span>
							<strong>From $749</strong>
						</div>
					</div>
				</a>

				<!-- Dest 2 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-03.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country">France</span>
						<h3 class="travel-dest-name">Paris & French Riviera</h3>
						<div class="travel-dest-meta">
							<span>14 Tour Packages</span>
							<strong>From $1,190</strong>
						</div>
					</div>
				</a>

				<!-- Dest 3 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-04.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country">Australia</span>
						<h3 class="travel-dest-name">Sydney & Great Barrier</h3>
						<div class="travel-dest-meta">
							<span>11 Tour Packages</span>
							<strong>From $1,450</strong>
						</div>
					</div>
				</a>

				<!-- Dest 4 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-05.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country">United Arab Emirates</span>
						<h3 class="travel-dest-name">Dubai Luxury Oasis</h3>
						<div class="travel-dest-meta">
							<span>22 Tour Packages</span>
							<strong>From $890</strong>
						</div>
					</div>
				</a>

				<!-- Dest 5 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-06.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-tag">Winter & Summer</div>
					<div class="travel-dest-content">
						<span class="travel-dest-country">Switzerland</span>
						<h3 class="travel-dest-name">Swiss Alps & Glacier Express</h3>
						<div class="travel-dest-meta">
							<span>16 Tour Packages</span>
							<strong>From $1,680</strong>
						</div>
					</div>
				</a>

				<!-- Dest 6 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-07.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-tag">Cultural Choice</div>
					<div class="travel-dest-content">
						<span class="travel-dest-country">Japan</span>
						<h3 class="travel-dest-name">Kyoto & Tokyo Blossom</h3>
						<div class="travel-dest-meta">
							<span>19 Tour Packages</span>
							<strong>From $1,590</strong>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- 3. FEATURED TOUR PACKAGES (WITH RATINGS, DURATION, PRICING) -->
	<section class="travel-section travel-packages-section">
		<div class="container">
			<div class="travel-section-header">
				<span class="travel-section-badge">Handpicked Packages</span>
				<h2 class="travel-section-title">Most Popular Tour Experiences</h2>
				<p class="travel-section-desc">All-inclusive stays, airport transfers, curated meals and licensed English-speaking local guides.</p>
			</div>

			<div class="travel-packages-grid">
				<!-- Package 1 -->
				<article class="travel-pkg-card">
					<div class="travel-pkg-thumb">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-08.svg' ) ); ?>" alt="Maldives Overwater Bungalow">
						<span class="travel-pkg-badge">Best Seller</span>
						<span class="travel-pkg-duration">7 Days / 6 Nights</span>
					</div>
					<div class="travel-pkg-body">
						<div class="travel-pkg-rating">
							<span class="travel-stars">★★★★★</span>
							<span class="travel-score">4.9</span>
							<span class="travel-reviews">(120+ reviews)</span>
						</div>
						<h3 class="travel-pkg-title">Maldives Private Lagoon & Luxury Overwater Escape</h3>
						<ul class="travel-pkg-features">
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Speedboat & Seaplane transfers</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> All-inclusive gourmet dining & drinks</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Coral reef snorkeling safari included</li>
						</ul>
						<div class="travel-pkg-footer">
							<div class="travel-pkg-price">
								<span class="travel-price-lbl">Starting from</span>
								<strong class="travel-price-val">$1,299</strong>
								<span class="travel-price-sub">/ person</span>
							</div>
							<a href="#booking-contact" class="btn travel-book-btn">Book Now</a>
						</div>
					</div>
				</article>

				<!-- Package 2 -->
				<article class="travel-pkg-card">
					<div class="travel-pkg-thumb">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-09.svg' ) ); ?>" alt="Tokyo & Kyoto Japan">
						<span class="travel-pkg-badge travel-pkg-badge--trending">Trending</span>
						<span class="travel-pkg-duration">10 Days / 9 Nights</span>
					</div>
					<div class="travel-pkg-body">
						<div class="travel-pkg-rating">
							<span class="travel-stars">★★★★★</span>
							<span class="travel-score">5.0</span>
							<span class="travel-reviews">(95+ reviews)</span>
						</div>
						<h3 class="travel-pkg-title">Japan Golden Route: Tokyo, Kyoto & Mt. Fuji Bullet Train</h3>
						<ul class="travel-pkg-features">
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 7-Day JR Shinkansen Bullet Train Pass</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Traditional Ryokan onsen stay with dinner</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> English-speaking cultural heritage guide</li>
						</ul>
						<div class="travel-pkg-footer">
							<div class="travel-pkg-price">
								<span class="travel-price-lbl">Starting from</span>
								<strong class="travel-price-val">$1,890</strong>
								<span class="travel-price-sub">/ person</span>
							</div>
							<a href="#booking-contact" class="btn travel-book-btn">Book Now</a>
						</div>
					</div>
				</article>

				<!-- Package 3 -->
				<article class="travel-pkg-card">
					<div class="travel-pkg-thumb">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-10.svg' ) ); ?>" alt="Santorini Sunset">
						<span class="travel-pkg-badge">Summer Special</span>
						<span class="travel-pkg-duration">8 Days / 7 Nights</span>
					</div>
					<div class="travel-pkg-body">
						<div class="travel-pkg-rating">
							<span class="travel-stars">★★★★★</span>
							<span class="travel-score">4.9</span>
							<span class="travel-reviews">(140+ reviews)</span>
						</div>
						<h3 class="travel-pkg-title">Greek Island Hopping: Athens, Mykonos & Santorini</h3>
						<ul class="travel-pkg-features">
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> High-speed catamaran ferry tickets</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Caldera sunset sailing cruise & Greek wine</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Boutique cliffside hotel with daily breakfast</li>
						</ul>
						<div class="travel-pkg-footer">
							<div class="travel-pkg-price">
								<span class="travel-price-lbl">Starting from</span>
								<strong class="travel-price-val">$1,450</strong>
								<span class="travel-price-sub">/ person</span>
							</div>
							<a href="#booking-contact" class="btn travel-book-btn">Book Now</a>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<!-- 4. WHY CHOOSE OUR TRAVEL AGENCY -->
	<section class="travel-section travel-why-section">
		<div class="container">
			<div class="travel-why-grid">
				<div class="travel-why-copy">
					<span class="travel-section-badge">Why Travelers Love Us</span>
					<h2 class="travel-section-title">We Turn Dreams Into Flawless Memories</h2>
					<p class="travel-section-desc">
						Planning international travel shouldn't be stressful. We handle flight bookings, visa documents, hotel upgrades, local private drivers, and customized itineraries so you can simply relax and immerse yourself.
					</p>

					<div class="travel-features-list">
						<div class="travel-feat-item">
							<div class="travel-feat-icon">🛡️</div>
							<div>
								<h4>100% Price & Quality Guarantee</h4>
								<p>No hidden charges, guaranteed verified accommodations, and price-match protection.</p>
							</div>
						</div>
						<div class="travel-feat-item">
							<div class="travel-feat-icon">📞</div>
							<div>
								<h4>24/7 Dedicated Concierge</h4>
								<p>Your personal travel manager is on WhatsApp or phone throughout your journey.</p>
							</div>
						</div>
						<div class="travel-feat-item">
							<div class="travel-feat-icon">🗺️</div>
							<div>
								<h4>Handcrafted Private Itineraries</h4>
								<p>100% tailored to your pace, preferences, dietary needs, and traveling style.</p>
							</div>
						</div>
						<div class="travel-feat-item">
							<div class="travel-feat-icon">✈️</div>
							<div>
								<h4>Seamless Visa & Flight Assistance</h4>
								<p>Our in-house visa division prepares and expedites visa applications for smooth transit.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="travel-why-visual">
					<div class="travel-why-img-card">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-11.svg' ) ); ?>" alt="Happy couple traveling">
						<div class="travel-floating-badge travel-floating-badge--top">
							<span class="travel-float-icon">🏆</span>
							<div>
								<strong>Sample Travel Agency</strong>
								<small>Demo Data Only</small>
							</div>
						</div>
						<div class="travel-floating-badge travel-floating-badge--bottom">
							<span class="travel-float-icon">⭐</span>
							<div>
								<strong>4.9 Star Rating</strong>
								<small>500+ Verified Traveler Reviews</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 5. PROMOTIONAL DISCOUNT CTA BANNER -->
	<section class="travel-promo-banner">
		<div class="container travel-promo-inner">
			<div class="travel-promo-text">
				<span class="travel-promo-badge">Limited Time Seasonal Deal</span>
				<h2>Save Up To 30% On Early Summer Bookings</h2>
				<p>Book your summer holiday package 60 days in advance and enjoy complimentary resort upgrades, free travel insurance, and zero cancellation fee.</p>
			</div>
			<div class="travel-promo-actions">
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>" class="btn travel-promo-call-btn">
					<span>Call Us: <?php echo esc_html( $bizpro_phone ); ?></span>
				</a>
				<a href="mailto:<?php echo esc_attr( $bizpro_email ); ?>" class="btn travel-promo-email-btn">
					Request Custom Quote →
				</a>
			</div>
		</div>
	</section>

	<!-- 6. TRAVELER REVIEWS / TESTIMONIALS -->
	<section class="travel-section travel-reviews-section">
		<div class="container">
			<div class="travel-section-header">
				<span class="travel-section-badge">Real Stories</span>
				<h2 class="travel-section-title">What Our Travelers Say</h2>
				<p class="travel-section-desc">Thousands of travelers have booked their adventures with us. (Sample testimonials for demo purposes.) Here are their experiences.</p>
			</div>

			<div class="travel-reviews-grid">
				<div class="travel-review-card">
					<div class="travel-review-stars">★★★★★</div>
					<p class="travel-review-text">
						"Our honeymoon trip to Bali was magical from start to finish! The private pool villa, daily driver, and romantic beach dinner were organized with such care. Will never book with anyone else!"
					</p>
					<div class="travel-reviewer">
						<div class="travel-reviewer-avatar">EK</div>
						<div>
							<strong>Emma & Kevin Vance</strong>
							<span>Traveled to Bali, Indonesia</span>
						</div>
					</div>
				</div>

				<div class="travel-review-card">
					<div class="travel-review-stars">★★★★★</div>
					<p class="travel-review-text">
						"The Swiss Alps tour was extraordinary. Every train connection, hotel voucher, and mountain pass was ready in our travel app. 24/7 WhatsApp support gave us complete peace of mind."
					</p>
					<div class="travel-reviewer">
						<div class="travel-reviewer-avatar">MS</div>
						<div>
							<strong>Dr. Marcus Sterling</strong>
							<span>Traveled to Zurich & Zermatt</span>
						</div>
					</div>
				</div>

				<div class="travel-review-card">
					<div class="travel-review-stars">★★★★★</div>
					<p class="travel-review-text">
						"Traveling with 3 young kids can be chaotic, but BizPro Travel arranged baby car seats, family-friendly hotel suites, and private Tokyo guides. Best family vacation of our lives!"
					</p>
					<div class="travel-reviewer">
						<div class="travel-reviewer-avatar">ST</div>
						<div>
							<strong>Sarah Takahashi</strong>
							<span>Family Trip to Japan</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 7. BOOKING & INQUIRY FORM SECTION -->
	<section id="booking-contact" class="travel-section travel-contact-section">
		<div class="container">
			<div class="travel-contact-box">
				<div class="travel-contact-info">
					<span class="travel-pill-badge">Let's Plan Your Trip</span>
					<h3>Speak With Our Specialist Travel Designers</h3>
					<p>Tell us your preferred destination, travel dates, and guest count. Our expert travel designers will curate a custom day-by-day itinerary with exact pricing in 24 hours.</p>

					<div class="travel-direct-contacts">
						<div class="travel-contact-row">
							<span class="travel-c-icon">📞</span>
							<div>
								<small>Direct Phone & WhatsApp</small>
								<strong><?php echo esc_html( $bizpro_phone ); ?></strong>
							</div>
						</div>
						<div class="travel-contact-row">
							<span class="travel-c-icon">✉️</span>
							<div>
								<small>Concierge Desk Email</small>
								<strong><?php echo esc_html( $bizpro_email ); ?></strong>
							</div>
						</div>
						<div class="travel-contact-row">
							<span class="travel-c-icon">🏢</span>
							<div>
								<small>Headquarters</small>
								<strong>123 Business Avenue, New York, NY</strong>
							</div>
						</div>
					</div>
				</div>

				<div class="travel-contact-form-wrap">
					<h4>Request A Free Custom Itinerary</h4>
					<form class="travel-inquiry-form" method="post" action="#booking-contact">
						<div class="travel-form-row">
							<input type="text" name="travel_name" placeholder="Full Name *" required class="travel-input">
							<input type="email" name="travel_email" placeholder="Email Address *" required class="travel-input">
						</div>
						<div class="travel-form-row">
							<input type="tel" name="travel_phone" placeholder="Phone / WhatsApp" class="travel-input">
							<input type="text" name="travel_dest" placeholder="Desired Destination" class="travel-input">
						</div>
						<div class="travel-form-row">
							<select name="travel_guests" class="travel-input">
								<option value="1">1 Traveler (Solo)</option>
								<option value="2" selected>2 Travelers (Couple)</option>
								<option value="family">3-5 Travelers (Family)</option>
								<option value="group">6+ Travelers (Group)</option>
							</select>
							<select name="travel_budget" class="travel-input">
								<option value="standard">Standard Package ($1,000 - $2,500)</option>
								<option value="premium" selected>Premium Comfort ($2,500 - $5,000)</option>
								<option value="luxury">Ultra Luxury ($5,000+)</option>
							</select>
						</div>
						<textarea name="travel_notes" rows="3" placeholder="Tell us about your interests, dream activities, or specific travel dates..." class="travel-textarea"></textarea>
						<button type="submit" class="btn travel-submit-btn">Get My Custom Plan & Quotes →</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php if ( bizpro_agency_get( 'show_demo_switcher' ) ) : ?>
	<!-- Demo switcher bar at bottom -->
	<div class="vp-demo-switcher" aria-label="Theme demo switcher">
		<span>Explore Other Demos:</span>
		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Agency Home</a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'visa' ) ); ?>">Visa & Immigration</a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'it' ) ); ?>">IT Solutions</a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'consulting' ) ); ?>">Business Consulting</a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'corporate' ) ); ?>">Corporate Enterprise</a>
		</div>
	</div>
	<?php endif; ?>

</main>

<?php
get_footer();
