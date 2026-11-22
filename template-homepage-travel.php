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
					<span class="travel-pill-dot"></span> <?php esc_html_e( 'Explore The World Beyond Boundaries', 'bizpro-agency' ); ?>
				</span>
				<h1 class="travel-hero__title">
					<?php esc_html_e( 'Discover Your Next', 'bizpro-agency' ); ?> <span class="travel-gradient-text"><?php esc_html_e( 'Great Adventure', 'bizpro-agency' ); ?></span>
				</h1>
				<p class="travel-hero__subtitle">
					<?php esc_html_e( 'Handcrafted tour packages, private expeditions, and luxury getaways across 120+ destinations worldwide with 24/7 personal travel concierge.', 'bizpro-agency' ); ?>
				</p>
			</div>

			<!-- Modern Floating Travel Search Widget -->
			<div class="travel-search-card">
				<form class="travel-search-form" method="get" action="<?php echo esc_url( get_permalink() ); ?>#destinations">
					<div class="travel-search-group">
						<label class="travel-search-label">
							<span class="travel-icon">📍</span> <?php esc_html_e( 'Where To?', 'bizpro-agency' ); ?>
						</label>
						<select name="destination" class="travel-select">
							<option value=""><?php esc_html_e( 'Choose Destination', 'bizpro-agency' ); ?></option>
							<option value="bali"><?php esc_html_e( 'Bali & Lombok, Indonesia', 'bizpro-agency' ); ?></option>
							<option value="swiss"><?php esc_html_e( 'Swiss Alps, Switzerland', 'bizpro-agency' ); ?></option>
							<option value="santorini"><?php esc_html_e( 'Santorini, Greece', 'bizpro-agency' ); ?></option>
							<option value="maldives"><?php esc_html_e( 'Maldives Islands', 'bizpro-agency' ); ?></option>
							<option value="kyoto"><?php esc_html_e( 'Kyoto & Tokyo, Japan', 'bizpro-agency' ); ?></option>
							<option value="dubai"><?php esc_html_e( 'Dubai & Abu Dhabi, UAE', 'bizpro-agency' ); ?></option>
						</select>
					</div>

					<div class="travel-search-group">
						<label class="travel-search-label">
							<span class="travel-icon">🗓️</span> <?php esc_html_e( 'When?', 'bizpro-agency' ); ?>
						</label>
						<select name="season" class="travel-select">
							<option value=""><?php esc_html_e( 'Any Month', 'bizpro-agency' ); ?></option>
							<option value="spring"><?php esc_html_e( 'Spring 2027', 'bizpro-agency' ); ?></option>
							<option value="summer"><?php esc_html_e( 'Summer Peak Season', 'bizpro-agency' ); ?></option>
							<option value="autumn"><?php esc_html_e( 'Autumn Foliage', 'bizpro-agency' ); ?></option>
							<option value="winter"><?php esc_html_e( 'Winter Holiday Escapes', 'bizpro-agency' ); ?></option>
						</select>
					</div>

					<div class="travel-search-group">
						<label class="travel-search-label">
							<span class="travel-icon">🎒</span> <?php esc_html_e( 'Tour Style', 'bizpro-agency' ); ?>
						</label>
						<select name="type" class="travel-select">
							<option value=""><?php esc_html_e( 'All Types', 'bizpro-agency' ); ?></option>
							<option value="luxury"><?php esc_html_e( 'Luxury & Honeymoon', 'bizpro-agency' ); ?></option>
							<option value="adventure"><?php esc_html_e( 'Mountain & Trekking', 'bizpro-agency' ); ?></option>
							<option value="beach"><?php esc_html_e( 'Tropical Island & Beach', 'bizpro-agency' ); ?></option>
							<option value="family"><?php esc_html_e( 'Family & Cultural', 'bizpro-agency' ); ?></option>
						</select>
					</div>

					<div class="travel-search-group travel-search-action">
						<button type="submit" class="travel-search-btn" style="background: linear-gradient(135deg, #059669, #047857) !important; color: #ffffff !important; border: none; cursor: pointer;">
							<span><?php esc_html_e( 'Search Trips', 'bizpro-agency' ); ?></span>
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
						</button>
					</div>
				</form>
			</div>

			<!-- Quick stats bar under hero -->
			<div class="travel-hero-chips">
				<div class="travel-chip">
					<strong>500+</strong> <span><?php esc_html_e( 'Curated Trips (Sample)', 'bizpro-agency' ); ?></span>
				</div>
				<div class="travel-chip-sep"></div>
				<div class="travel-chip">
					<strong>95%+</strong> <span><?php esc_html_e( 'Satisfied Guests (Sample)', 'bizpro-agency' ); ?></span>
				</div>
				<div class="travel-chip-sep"></div>
				<div class="travel-chip">
					<strong>50+</strong> <span><?php esc_html_e( 'Destinations (Sample)', 'bizpro-agency' ); ?></span>
				</div>
				<div class="travel-chip-sep"></div>
				<div class="travel-chip">
					<strong>24/7</strong> <span><?php esc_html_e( 'On-Trip Assistance', 'bizpro-agency' ); ?></span>
				</div>
			</div>
		</div>
	</section>

	<!-- 2. POPULAR DESTINATIONS GRID -->
	<section id="destinations" class="travel-section travel-destinations-section">
		<div class="container">
			<div class="travel-section-header">
				<span class="travel-section-badge"><?php esc_html_e( 'Top Destinations', 'bizpro-agency' ); ?></span>
				<h2 class="travel-section-title"><?php esc_html_e( 'Trending Places Loved by Travelers', 'bizpro-agency' ); ?></h2>
				<p class="travel-section-desc"><?php esc_html_e( 'Hand-picked iconic getaways with exclusive local guides and private transport.', 'bizpro-agency' ); ?></p>
			</div>

			<div class="travel-dest-grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
				<!-- Dest 1 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-02.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-tag"><?php esc_html_e( 'Top Choice', 'bizpro-agency' ); ?></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country"><?php esc_html_e( 'Indonesia', 'bizpro-agency' ); ?></span>
						<h3 class="travel-dest-name"><?php esc_html_e( 'Bali Island Paradise', 'bizpro-agency' ); ?></h3>
						<div class="travel-dest-meta">
							<span><?php esc_html_e( '18 Tour Packages', 'bizpro-agency' ); ?></span>
							<strong><?php esc_html_e( 'From $749', 'bizpro-agency' ); ?></strong>
						</div>
					</div>
				</a>

				<!-- Dest 2 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-03.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country"><?php esc_html_e( 'France', 'bizpro-agency' ); ?></span>
						<h3 class="travel-dest-name"><?php esc_html_e( 'Paris & French Riviera', 'bizpro-agency' ); ?></h3>
						<div class="travel-dest-meta">
							<span><?php esc_html_e( '14 Tour Packages', 'bizpro-agency' ); ?></span>
							<strong><?php esc_html_e( 'From $1,190', 'bizpro-agency' ); ?></strong>
						</div>
					</div>
				</a>

				<!-- Dest 3 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-04.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country"><?php esc_html_e( 'Australia', 'bizpro-agency' ); ?></span>
						<h3 class="travel-dest-name"><?php esc_html_e( 'Sydney & Great Barrier', 'bizpro-agency' ); ?></h3>
						<div class="travel-dest-meta">
							<span><?php esc_html_e( '11 Tour Packages', 'bizpro-agency' ); ?></span>
							<strong><?php esc_html_e( 'From $1,450', 'bizpro-agency' ); ?></strong>
						</div>
					</div>
				</a>

				<!-- Dest 4 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-05.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country"><?php esc_html_e( 'United Arab Emirates', 'bizpro-agency' ); ?></span>
						<h3 class="travel-dest-name"><?php esc_html_e( 'Dubai Luxury Oasis', 'bizpro-agency' ); ?></h3>
						<div class="travel-dest-meta">
							<span><?php esc_html_e( '22 Tour Packages', 'bizpro-agency' ); ?></span>
							<strong><?php esc_html_e( 'From $890', 'bizpro-agency' ); ?></strong>
						</div>
					</div>
				</a>

				<!-- Dest 5 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-06.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-tag"><?php esc_html_e( 'Winter & Summer', 'bizpro-agency' ); ?></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country"><?php esc_html_e( 'Switzerland', 'bizpro-agency' ); ?></span>
						<h3 class="travel-dest-name"><?php esc_html_e( 'Swiss Alps & Glacier Express', 'bizpro-agency' ); ?></h3>
						<div class="travel-dest-meta">
							<span><?php esc_html_e( '16 Tour Packages', 'bizpro-agency' ); ?></span>
							<strong><?php esc_html_e( 'From $1,680', 'bizpro-agency' ); ?></strong>
						</div>
					</div>
				</a>

				<!-- Dest 6 -->
				<a href="<?php echo esc_url( bizpro_agency_page_url( 'tour-packages' ) ); ?>" class="travel-dest-card" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-07.svg' ) ); ?>'); text-decoration: none; color: inherit; display: block;">
					<div class="travel-dest-overlay"></div>
					<div class="travel-dest-tag"><?php esc_html_e( 'Cultural Choice', 'bizpro-agency' ); ?></div>
					<div class="travel-dest-content">
						<span class="travel-dest-country"><?php esc_html_e( 'Japan', 'bizpro-agency' ); ?></span>
						<h3 class="travel-dest-name"><?php esc_html_e( 'Kyoto & Tokyo Blossom', 'bizpro-agency' ); ?></h3>
						<div class="travel-dest-meta">
							<span><?php esc_html_e( '19 Tour Packages', 'bizpro-agency' ); ?></span>
							<strong><?php esc_html_e( 'From $1,590', 'bizpro-agency' ); ?></strong>
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
				<span class="travel-section-badge"><?php esc_html_e( 'Handpicked Packages', 'bizpro-agency' ); ?></span>
				<h2 class="travel-section-title"><?php esc_html_e( 'Most Popular Tour Experiences', 'bizpro-agency' ); ?></h2>
				<p class="travel-section-desc"><?php esc_html_e( 'All-inclusive stays, airport transfers, curated meals and licensed English-speaking local guides.', 'bizpro-agency' ); ?></p>
			</div>

			<div class="travel-packages-grid">
				<!-- Package 1 -->
				<article class="travel-pkg-card">
					<div class="travel-pkg-thumb">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-08.svg' ) ); ?>" alt="<?php esc_attr_e( 'Maldives Overwater Bungalow', 'bizpro-agency' ); ?>">
						<span class="travel-pkg-badge"><?php esc_html_e( 'Best Seller', 'bizpro-agency' ); ?></span>
						<span class="travel-pkg-duration"><?php esc_html_e( '7 Days / 6 Nights', 'bizpro-agency' ); ?></span>
					</div>
					<div class="travel-pkg-body">
						<div class="travel-pkg-rating">
							<span class="travel-stars">★★★★★</span>
							<span class="travel-score">4.9</span>
							<span class="travel-reviews"><?php esc_html_e( '(128 reviews)', 'bizpro-agency' ); ?></span>
						</div>
						<h3 class="travel-pkg-title"><?php esc_html_e( 'Maldives Private Lagoon & Luxury Overwater Escape', 'bizpro-agency' ); ?></h3>
						<ul class="travel-pkg-features">
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Speedboat & Seaplane transfers</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> All-inclusive gourmet dining & drinks</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Coral reef snorkeling safari included</li>
						</ul>
						<div class="travel-pkg-footer">
							<div class="travel-pkg-price">
								<span class="travel-price-lbl"><?php esc_html_e( 'Starting from', 'bizpro-agency' ); ?></span>
								<strong class="travel-price-val">$1,299</strong>
								<span class="travel-price-sub"><?php esc_html_e( '/ person', 'bizpro-agency' ); ?></span>
							</div>
							<a href="#booking-contact" class="btn travel-book-btn"><?php esc_html_e( 'Book Now', 'bizpro-agency' ); ?></a>
						</div>
					</div>
				</article>

				<!-- Package 2 -->
				<article class="travel-pkg-card">
					<div class="travel-pkg-thumb">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-09.svg' ) ); ?>" alt="<?php esc_attr_e( 'Tokyo & Kyoto Japan', 'bizpro-agency' ); ?>">
						<span class="travel-pkg-badge travel-pkg-badge--trending"><?php esc_html_e( 'Trending', 'bizpro-agency' ); ?></span>
						<span class="travel-pkg-duration"><?php esc_html_e( '10 Days / 9 Nights', 'bizpro-agency' ); ?></span>
					</div>
					<div class="travel-pkg-body">
						<div class="travel-pkg-rating">
							<span class="travel-stars">★★★★★</span>
							<span class="travel-score">5.0</span>
							<span class="travel-reviews"><?php esc_html_e( '(128 reviews)', 'bizpro-agency' ); ?></span>
						</div>
						<h3 class="travel-pkg-title"><?php esc_html_e( 'Japan Golden Route: Tokyo, Kyoto & Mt. Fuji Bullet Train', 'bizpro-agency' ); ?></h3>
						<ul class="travel-pkg-features">
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> 7-Day JR Shinkansen Bullet Train Pass</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Traditional Ryokan onsen stay with dinner</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> English-speaking cultural heritage guide</li>
						</ul>
						<div class="travel-pkg-footer">
							<div class="travel-pkg-price">
								<span class="travel-price-lbl"><?php esc_html_e( 'Starting from', 'bizpro-agency' ); ?></span>
								<strong class="travel-price-val">$1,890</strong>
								<span class="travel-price-sub"><?php esc_html_e( '/ person', 'bizpro-agency' ); ?></span>
							</div>
							<a href="#booking-contact" class="btn travel-book-btn"><?php esc_html_e( 'Book Now', 'bizpro-agency' ); ?></a>
						</div>
					</div>
				</article>

				<!-- Package 3 -->
				<article class="travel-pkg-card">
					<div class="travel-pkg-thumb">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-10.svg' ) ); ?>" alt="<?php esc_attr_e( 'Santorini Sunset', 'bizpro-agency' ); ?>">
						<span class="travel-pkg-badge"><?php esc_html_e( 'Summer Special', 'bizpro-agency' ); ?></span>
						<span class="travel-pkg-duration"><?php esc_html_e( '8 Days / 7 Nights', 'bizpro-agency' ); ?></span>
					</div>
					<div class="travel-pkg-body">
						<div class="travel-pkg-rating">
							<span class="travel-stars">★★★★★</span>
							<span class="travel-score">4.9</span>
							<span class="travel-reviews"><?php esc_html_e( '(128 reviews)', 'bizpro-agency' ); ?></span>
						</div>
						<h3 class="travel-pkg-title"><?php esc_html_e( 'Greek Island Hopping: Athens, Mykonos & Santorini', 'bizpro-agency' ); ?></h3>
						<ul class="travel-pkg-features">
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> High-speed catamaran ferry tickets</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Caldera sunset sailing cruise & Greek wine</li>
							<li><svg width="15" height="15" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Boutique cliffside hotel with daily breakfast</li>
						</ul>
						<div class="travel-pkg-footer">
							<div class="travel-pkg-price">
								<span class="travel-price-lbl"><?php esc_html_e( 'Starting from', 'bizpro-agency' ); ?></span>
								<strong class="travel-price-val">$1,450</strong>
								<span class="travel-price-sub"><?php esc_html_e( '/ person', 'bizpro-agency' ); ?></span>
							</div>
							<a href="#booking-contact" class="btn travel-book-btn"><?php esc_html_e( 'Book Now', 'bizpro-agency' ); ?></a>
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
					<span class="travel-section-badge"><?php esc_html_e( 'Why Travelers Love Us', 'bizpro-agency' ); ?></span>
					<h2 class="travel-section-title"><?php esc_html_e( 'We Turn Dreams Into Flawless Memories', 'bizpro-agency' ); ?></h2>
					<p class="travel-section-desc">
						<?php esc_html_e( 'Planning international travel shouldn\'t be stressful. We handle flight bookings, visa documents, hotel upgrades, local private drivers, and customized itineraries so you can simply relax and immerse yourself.', 'bizpro-agency' ); ?>
					</p>

					<div class="travel-features-list">
						<div class="travel-feat-item">
							<div class="travel-feat-icon">🛡️</div>
							<div>
								<h4><?php esc_html_e( '100% Price & Quality Guarantee', 'bizpro-agency' ); ?></h4>
								<p><?php esc_html_e( 'No hidden charges, guaranteed verified accommodations, and price-match protection.', 'bizpro-agency' ); ?></p>
							</div>
						</div>
						<div class="travel-feat-item">
							<div class="travel-feat-icon">📞</div>
							<div>
								<h4><?php esc_html_e( '24/7 Dedicated Concierge', 'bizpro-agency' ); ?></h4>
								<p><?php esc_html_e( 'Your personal travel manager is on WhatsApp or phone throughout your journey.', 'bizpro-agency' ); ?></p>
							</div>
						</div>
						<div class="travel-feat-item">
							<div class="travel-feat-icon">🗺️</div>
							<div>
								<h4><?php esc_html_e( 'Handcrafted Private Itineraries', 'bizpro-agency' ); ?></h4>
								<p><?php esc_html_e( '100% tailored to your pace, preferences, dietary needs, and traveling style.', 'bizpro-agency' ); ?></p>
							</div>
						</div>
						<div class="travel-feat-item">
							<div class="travel-feat-icon">✈️</div>
							<div>
								<h4><?php esc_html_e( 'Seamless Visa & Flight Assistance', 'bizpro-agency' ); ?></h4>
								<p><?php esc_html_e( 'Our in-house visa division prepares and expedites visa applications for smooth transit.', 'bizpro-agency' ); ?></p>
							</div>
						</div>
					</div>
				</div>

				<div class="travel-why-visual">
					<div class="travel-why-img-card">
						<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/art/art-11.svg' ) ); ?>" alt="<?php esc_attr_e( 'Happy couple traveling', 'bizpro-agency' ); ?>">
						<div class="travel-floating-badge travel-floating-badge--top">
							<span class="travel-float-icon">🏆</span>
							<div>
								<strong><?php esc_html_e( 'Sample Travel Agency', 'bizpro-agency' ); ?></strong>
								<small><?php esc_html_e( 'Demo Data Only', 'bizpro-agency' ); ?></small>
							</div>
						</div>
						<div class="travel-floating-badge travel-floating-badge--bottom">
							<span class="travel-float-icon">⭐</span>
							<div>
								<strong><?php esc_html_e( '4.9 Star Rating', 'bizpro-agency' ); ?></strong>
								<small><?php esc_html_e( '500+ Verified Reviews', 'bizpro-agency' ); ?></small>
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
				<span class="travel-promo-badge"><?php esc_html_e( 'Limited Time Seasonal Deal', 'bizpro-agency' ); ?></span>
				<h2><?php esc_html_e( 'Save Up To 30% On Early Summer Bookings', 'bizpro-agency' ); ?></h2>
				<p><?php esc_html_e( 'Book your summer holiday package 60 days in advance and enjoy complimentary resort upgrades, free travel insurance, and zero cancellation fee.', 'bizpro-agency' ); ?></p>
			</div>
			<div class="travel-promo-actions">
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $bizpro_phone ) ); ?>" class="btn travel-promo-call-btn">
					<span>Call Us: <?php echo esc_html( $bizpro_phone ); ?></span>
				</a>
				<a href="mailto:<?php echo esc_attr( $bizpro_email ); ?>" class="btn travel-promo-email-btn">
					<?php esc_html_e( 'Request Custom Quote →', 'bizpro-agency' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- 6. TRAVELER REVIEWS / TESTIMONIALS -->
	<section class="travel-section travel-reviews-section">
		<div class="container">
			<div class="travel-section-header">
				<span class="travel-section-badge"><?php esc_html_e( 'Real Stories', 'bizpro-agency' ); ?></span>
				<h2 class="travel-section-title"><?php esc_html_e( 'What Our Travelers Say', 'bizpro-agency' ); ?></h2>
				<p class="travel-section-desc"><?php esc_html_e( 'Thousands of travelers have booked their adventures with us. (Sample testimonials for demo purposes.) Here are their experiences.', 'bizpro-agency' ); ?></p>
			</div>

			<div class="travel-reviews-grid">
				<div class="travel-review-card">
					<div class="travel-review-stars">★★★★★</div>
					<p class="travel-review-text">
						<?php esc_html_e( '"Our honeymoon trip to Bali was magical from start to finish! The private pool villa, daily driver, and romantic beach dinner were organized with such care. Will never book with anyone else!"', 'bizpro-agency' ); ?>
					</p>
					<div class="travel-reviewer">
						<div class="travel-reviewer-avatar"><?php esc_html_e( 'EK', 'bizpro-agency' ); ?></div>
						<div>
							<strong><?php esc_html_e( 'Emma & Kevin Vance', 'bizpro-agency' ); ?></strong>
							<span><?php esc_html_e( 'Traveled to Bali, Indonesia', 'bizpro-agency' ); ?></span>
						</div>
					</div>
				</div>

				<div class="travel-review-card">
					<div class="travel-review-stars">★★★★★</div>
					<p class="travel-review-text">
						<?php esc_html_e( '"The Swiss Alps tour was extraordinary. Every train connection, hotel voucher, and mountain pass was ready in our travel app. 24/7 WhatsApp support gave us complete peace of mind."', 'bizpro-agency' ); ?>
					</p>
					<div class="travel-reviewer">
						<div class="travel-reviewer-avatar"><?php esc_html_e( 'MS', 'bizpro-agency' ); ?></div>
						<div>
							<strong><?php esc_html_e( 'Dr. Marcus Sterling', 'bizpro-agency' ); ?></strong>
							<span><?php esc_html_e( 'Traveled to Zurich & Zermatt', 'bizpro-agency' ); ?></span>
						</div>
					</div>
				</div>

				<div class="travel-review-card">
					<div class="travel-review-stars">★★★★★</div>
					<p class="travel-review-text">
						<?php esc_html_e( '"Traveling with 3 young kids can be chaotic, but BizPro Travel arranged baby car seats, family-friendly hotel suites, and private Tokyo guides. Best family vacation of our lives!"', 'bizpro-agency' ); ?>
					</p>
					<div class="travel-reviewer">
						<div class="travel-reviewer-avatar"><?php esc_html_e( 'ST', 'bizpro-agency' ); ?></div>
						<div>
							<strong><?php esc_html_e( 'Sarah Takahashi', 'bizpro-agency' ); ?></strong>
							<span><?php esc_html_e( 'Family Trip to Japan', 'bizpro-agency' ); ?></span>
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
					<span class="travel-pill-badge"><?php esc_html_e( 'Let\'s Plan Your Trip', 'bizpro-agency' ); ?></span>
					<h3><?php esc_html_e( 'Speak With Our Specialist Travel Designers', 'bizpro-agency' ); ?></h3>
					<p><?php esc_html_e( 'Tell us your preferred destination, travel dates, and guest count. Our expert travel designers will curate a custom day-by-day itinerary with exact pricing in 24 hours.', 'bizpro-agency' ); ?></p>

					<div class="travel-direct-contacts">
						<div class="travel-contact-row">
							<span class="travel-c-icon">📞</span>
							<div>
								<small><?php esc_html_e( 'Direct Phone & WhatsApp', 'bizpro-agency' ); ?></small>
								<strong><?php echo esc_html( $bizpro_phone ); ?></strong>
							</div>
						</div>
						<div class="travel-contact-row">
							<span class="travel-c-icon">✉️</span>
							<div>
								<small><?php esc_html_e( 'Concierge Desk Email', 'bizpro-agency' ); ?></small>
								<strong><?php echo esc_html( $bizpro_email ); ?></strong>
							</div>
						</div>
						<div class="travel-contact-row">
							<span class="travel-c-icon">🏢</span>
							<div>
								<small><?php esc_html_e( 'Headquarters', 'bizpro-agency' ); ?></small>
								<strong><?php esc_html_e( '123 Business Avenue, New York, NY', 'bizpro-agency' ); ?></strong>
							</div>
						</div>
					</div>
				</div>

				<div class="travel-contact-form-wrap">
					<h4><?php esc_html_e( 'Request A Free Custom Itinerary', 'bizpro-agency' ); ?></h4>
					<form class="travel-inquiry-form" method="post" action="#booking-contact">
						<div class="travel-form-row">
							<input type="text" name="travel_name" placeholder="<?php esc_attr_e( 'Full Name *', 'bizpro-agency' ); ?>" required class="travel-input">
							<input type="email" name="travel_email" placeholder="<?php esc_attr_e( 'Email Address *', 'bizpro-agency' ); ?>" required class="travel-input">
						</div>
						<div class="travel-form-row">
							<input type="tel" name="travel_phone" placeholder="<?php esc_attr_e( 'Phone / WhatsApp', 'bizpro-agency' ); ?>" class="travel-input">
							<input type="text" name="travel_dest" placeholder="<?php esc_attr_e( 'Desired Destination', 'bizpro-agency' ); ?>" class="travel-input">
						</div>
						<div class="travel-form-row">
							<select name="travel_guests" class="travel-input">
								<option value="1"><?php esc_html_e( '1 Traveler (Solo)', 'bizpro-agency' ); ?></option>
								<option value="2" selected><?php esc_html_e( '2 Travelers (Couple)', 'bizpro-agency' ); ?></option>
								<option value="family"><?php esc_html_e( '3-5 Travelers (Family)', 'bizpro-agency' ); ?></option>
								<option value="group"><?php esc_html_e( '6+ Travelers (Group)', 'bizpro-agency' ); ?></option>
							</select>
							<select name="travel_budget" class="travel-input">
								<option value="standard"><?php esc_html_e( 'Standard Package ($1,000 - $2,500)', 'bizpro-agency' ); ?></option>
								<option value="premium" selected><?php esc_html_e( 'Premium Comfort ($2,500 - $5,000)', 'bizpro-agency' ); ?></option>
								<option value="luxury"><?php esc_html_e( 'Ultra Luxury ($5,000+)', 'bizpro-agency' ); ?></option>
							</select>
						</div>
						<textarea name="travel_notes" rows="3" placeholder="<?php esc_attr_e( 'Tell us about your interests, dream activities, or specific travel dates...', 'bizpro-agency' ); ?>" class="travel-textarea"></textarea>
						<button type="submit" class="btn travel-submit-btn"><?php esc_html_e( 'Get My Custom Plan & Quotes →', 'bizpro-agency' ); ?></button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php if ( bizpro_agency_get( 'show_demo_switcher' ) ) : ?>
	<!-- Demo switcher bar at bottom -->
	<div class="vp-demo-switcher" aria-label="<?php esc_attr_e( 'Theme demo switcher', 'bizpro-agency' ); ?>">
		<span><?php esc_html_e( 'Explore Other Demos:', 'bizpro-agency' ); ?></span>
		<div>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Agency Home', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'visa' ) ); ?>"><?php esc_html_e( 'Visa & Immigration', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'it' ) ); ?>"><?php esc_html_e( 'IT Solutions', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'consulting' ) ); ?>"><?php esc_html_e( 'Business Consulting', 'bizpro-agency' ); ?></a>
			<a href="<?php echo esc_url( bizpro_agency_page_url( 'home', 'corporate' ) ); ?>"><?php esc_html_e( 'Corporate Enterprise', 'bizpro-agency' ); ?></a>
		</div>
	</div>
	<?php endif; ?>

</main>

<?php
get_footer();
