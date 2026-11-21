=== BizPro Agency ===
Contributors: kamrulhasan
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 2.2.1
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: business, custom-colors, custom-logo, custom-menu, featured-images, one-column, two-columns, threaded-comments, translation-ready, theme-options, blog, e-commerce, rtl-language-support, block-patterns

A clean, ultra-fast and fully responsive WordPress theme for service, IT, visa and travel, and business consultancy agencies.

== Description ==

BizPro Agency is a lightweight classic theme built with pure PHP, HTML5, modern CSS (Grid and Flexbox) and vanilla JavaScript. It needs no page builder, no jQuery and no external fonts, so it uses a lightweight front end with no required page builder or jQuery dependency.

Activate it and you immediately get a finished landing page with:

* Sticky header with top bar, call-to-action button and mobile hamburger menu
* Hero section with title, subtitle, CTA button and background image
* Client Trust Logos bar
* 4-column services grid with 8 built-in SVG icons
* About section with experience badge and bullet points
* Animated statistics counters
* Testimonials carousel / grid
* Case Studies section with tag and metric results
* Interactive Pricing Tables with "Most Popular" ribbon
* Dynamic FAQ Accordion with smooth vanilla JS
* Team showcase cards
* Contact / call-to-action banner
* 3-column widget footer with dynamic copyright bar and GDPR Cookie Notice
* Multiple niche homepage templates (Visa & Immigration, Travel, IT, Consulting, Corporate, Digital/SaaS and Default)
* Elementor Page Builder full-width template
* Blog, archive, search, page and single post templates

Everything above can be edited in real-time from Appearance > Customize without touching code.

== Installation ==

1. In your WordPress admin go to Appearance > Themes > Add New > Upload Theme.
2. Choose the bizpro-agency.zip file and click Install Now.
3. Click Activate.
4. Go to Appearance > Customize > BizPro Agency Options to personalise your site.

== Setting Up the Home Page ==

The landing page is displayed automatically when your site shows the latest posts on the home page. If you prefer a static front page:

1. Create two pages, for example "Home" and "Blog".
2. Go to Settings > Reading and choose "A static page".
3. Select "Home" as the Homepage and "Blog" as the Posts page.

The landing page layout is used for the front page in both cases.

== Customizer Options ==

Appearance > Customize contains 14 dedicated panels under BizPro Agency Options:

* Brand Colour: choose your primary brand colour with auto-calculated light/dark shades.
* Top Bar: show or hide the bar, and set phone, email and address.
* Header Button: button text and link.
* Hero Section: title, subtitle, button text, button link and hero image.
* Client Logos: toggle bar and set 6 client brand names.
* Services: toggle section, headings, and 4 cards with SVG icons.
* About Us: experience badge (e.g. 12+), description, and 3 key points.
* Stats Counters: 4 animated counters with numbers and suffixes.
* Testimonials: 3 client reviews with avatars and roles.
* Team Members: 4 key team leaders.
* Case Studies: 3 real-world success stories with metric achievements.
* Pricing Tables: 3 tiered pricing cards with feature list and popular badge.
* FAQ Section: 6 interactive Q&A accordion items.
* Footer & Cookie Banner: dynamic copyright text with {year} and GDPR notice.

== Frequently Asked Questions ==

= How do I change the services, stats, pricing or testimonials? =

Everything is controlled directly through the WordPress Live Customizer. Navigate to Appearance > Customize > BizPro Agency Options and select the section you want to customize. Changes appear instantly in the live preview.

= Does the theme support translation and RTL languages? =

Yes. The text domain is `bizpro-agency` and the theme includes an official translation catalog with 329 strings (languages/bizpro-agency.pot). It also features complete native Right-to-Left (RTL) language support via rtl.css for Arabic, Hebrew, and Persian.

= How do I import the demo content? =

Install the free "One Click Demo Import" plugin, then navigate to Appearance > Import Demo Data. Click import and your entire site will be populated with sample pages, menus, and layouts in one click.

= Does it work with Elementor and Gutenberg? =

Yes. All page templates are compatible with Elementor (including a dedicated Page Builder Full Width template) and Gutenberg block patterns are built-in under the "BizPro Agency" category.

== FAQ Answers Appearing Empty ==

The FAQ questions and answers are included by default. If an answer appears blank, use the current theme release and check that the FAQ section is enabled in the Customizer. The accordion script synchronizes the HTML hidden state and accessibility attributes when an answer opens or closes.

To edit the six questions and answers, go to Appearance > Customize > BizPro Agency Options > FAQ Section. Make sure "Show FAQ Section" is enabled, edit each Question and Answer field, and click Publish.

== Importing Demo Data ==

1. Activate BizPro Agency.
2. Install and activate the free One Click Demo Import plugin (Appearance > Install Plugins if the theme recommends it, or Plugins > Add New and search for "One Click Demo Import").
3. Open Appearance > Import Demo Data.
4. Choose the starter site you want (Main Agency, Visa & Immigration, Travel, IT Solutions, Business Consulting, Corporate Enterprise, or Digital Products & SaaS) and click Import.
5. Wait for the importer to finish. It imports sample pages and menus, assigns the selected homepage layout, and rewrites internal demo links to your own site.
6. Go to Settings > Reading and confirm that Home is selected as the static homepage if it was not selected automatically.
7. Visit Appearance > Customize > BizPro Agency Options > FAQ Section to edit the FAQ content.

The importer adds sample page content and menu structure; it does not import a WordPress database backup or guarantee that every third-party image is locally downloaded. Back up your site before importing demo data. The theme provides its own OCDI integration; the optional companion ZIP is not required for the theme importer.

== Changelog ==

= 1.5.1 =
* Fixed FAQ accordion answers remaining hidden because of the HTML hidden attribute.
* Synchronized FAQ aria-expanded and hidden states when opening and closing accordion items.
* Demo import now restores missing default FAQ questions and answers.
* Updated installation and FAQ troubleshooting documentation.


= 1.2.0 =
* Added Client Trust Logos Bar with Customizer options.
* Added Case Studies section with metric results tags.
* Added Interactive Pricing Tables with 3 tiered plans and popular ribbon.
* Added dynamic FAQ Accordion with accessible ARIA tags and vanilla JS.
* Added Schema.org LocalBusiness microdata JSON-LD for rich SEO snippets.
* Added Open Graph & Twitter Card social sharing meta tags.
* Added Schema breadcrumbs navigation helper (inc/breadcrumbs.php).
* Added GDPR Cookie Consent banner with smooth dismiss animation.
* Updated POT translation catalog to 329 translatable strings.
* Updated theme root screenshot and documentation.

= 1.1.0 =
* Added dynamic Customizer controls for Services, About, Stats, Testimonials, and CTA sections.
* Added native Right-to-Left (RTL) language support with rtl.css.
* Added full WooCommerce compatibility with dedicated styling.
* Added Gutenberg Block Patterns for Hero, Services, and CTA Banner.
* Added One Click Demo Import (OCDI) integration.
* Added official translation template (languages/bizpro-agency.pot).
* Added Theme Info & Welcome page under Appearance > BizPro Agency.

= 1.0.0 =
* Initial release.

== Resources & Licenses ==

* System Font Stack (Segoe UI, Roboto, Helvetica Neue, Arial) - Native OS System Fonts (No third-party CDN or Google Fonts tracking, 100% GDPR compliant).
* Built-in SVG Icons - Created by Kamrul Hasan, licensed under GNU GPL v2 or later.
* Mockup Graphics & Screenshot - Created by Kamrul Hasan, licensed under CC0 / GNU GPL v2.

== Copyright ==

BizPro Agency WordPress Theme, Copyright 2026 Kamrul Hasan.
BizPro Agency is distributed under the terms of the GNU GPL v2 or later.

== Resources ==

This theme does not bundle third-party fonts, libraries or images.

* Fonts: the theme uses the visitor's system font stack.
* Icons: inline SVG icons created for this theme and released under the same GPL license.
* JavaScript: original vanilla JavaScript, no external libraries.


= 1.3.0 =
* Refreshed the visual system with a modern indigo palette, refined typography, updated cards, buttons, spacing and responsive layouts.
* Added polished starter content pages for About Us, Services and Contact to the demo import.


== Version 1.5.0 ==
* Refined Visa & Immigration demo with stronger section labels, elevated service cards, hover motion and improved testimonial readability.
* Added a photo-led About section with image zoom interaction and responsive sizing.
* Added travel-style demo page and included it in the demo content import.
* Added Elementor-ready and Gutenberg-compatible demo indicators and an in-page dark-mode toggle.
* Updated sample pricing to consultancy service packages rather than WordPress theme licence tiers. Prices are illustrative demo content and must be reviewed before publishing.
* Improved pricing badge alignment and CTA button hierarchy.
* Country finder remains a front-end enquiry selector; it does not determine visa eligibility or retrieve live processing times.

== 1.5.3 ==
* Fixed generic page template fallback so non-home pages no longer render the same homepage layout.
* Added page-template body classes and visual differentiation for Visa, Travel, IT, Consulting and Corporate demos.

== 1.5.4 ==
* Premium art direction for Visa, Travel, IT, Consulting, Corporate and Default homepage templates.
* Distinct hero photography, backgrounds, card styling, section treatments and responsive adjustments.


== 2.2.1 ==
* Fixed PHP syntax errors in the front-page and single-post templates.
* Fixed duplicate header rendering when a niche homepage template is delegated from the front page.
* Corrected the Digital Products and Corporate demo importer registration.
* Prevented the companion plugin from registering duplicate demo-import callbacks when the theme importer is available.
* Rewrote example.com internal links after demo import so links point to the buyer's own site.
* Added a working country and visa-type filter to the Visa Pathways Finder and removed fixed processing-time claims.
