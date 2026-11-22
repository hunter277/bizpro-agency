=== BizPro Agency ===
Contributors: kamrulhasan
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 2.6.0
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

Each demo is a separate, self-contained content pack with its own homepage, inner pages (About, Services, Pricing, FAQ, Case Studies, Team, Contact, Privacy Policy, Terms, Disclaimer), blog page, sample posts and menus. Import only the one you want, or several side by side.

1. Activate BizPro Agency.
2. Install and activate the free One Click Demo Import plugin (Appearance > Install Plugins, or Plugins > Add New).
3. Open Appearance > Import Demo Data.
4. Choose a demo (Main Agency, Visa & Immigration, Travel & Tour, IT Solutions, Business Consulting, Corporate Enterprise, or Digital Products & SaaS) and click Import.
5. The importer sets the homepage and posts page, the tagline, the header button, and assigns the demo's primary and footer menus.

The Digital Products & SaaS demo needs WooCommerce; the importer stops with a clear message if it is not active. Back up your site before importing. Demos import text content and menus only; images are theme artwork, not downloaded from third-party sites.

The optional "BizPro Agency Companion" plugin adds the Visa Pathways custom post type and Elementor templates. It is not required for demo import.

== Demo switcher ==

The "All Demos" menu, floating demo bar and demo showcase section are for showcase sites only. They are hidden by default; enable them in Appearance > Customize > Top Bar > Show demo switcher.

== Changelog ==

= 2.6.0 =
* Lead forms rewritten: honeypot, minimum-time and per-IP rate limit (no expiring nonce on cached pages), real error messages on network failure, no innerHTML injection.
* Visa hero form fixed (blank options, labels).
* Dark mode removed (it left headings and logo unreadable).
* Accessibility: colour-contrast fixes, relaxed letter-spacing.
* About 370 more strings made translatable.
* Hero statistic cards added to the default and front-page heroes.
* Mobile menu: drawer no longer covered by the overlay, header padding fixed.
* Demo previews now JPEG, Customizer null-guard added.

= 2.5.0 =
* Demo import rewritten: seven independent demo packs (demo-data/<demo>/content.xml), each with its own inner pages, posts, menus and homepage assignment.
* Inner pages are found through page keys (bizpro_agency_page_url), so prefixed demo pages link to each other correctly and no longer depend on page slugs.
* Removed slug-substring template routing; the Page Template chosen in the editor is always honoured.
* Theme activation no longer creates 19 pages automatically.
* Demo switcher, "All Demos" menu and demo showcase are off by default (Customizer option).
* Fonts (Outfit, Plus Jakarta Sans) are now bundled locally (WOFF2, SIL OFL); no Google Fonts request.
* Replaced hotlinked Unsplash photos with bundled SVG artwork.
* SEO meta, Open Graph and schema output stand down when Yoast, Rank Math, AIOSEO, SEOPress or The SEO Framework is active.
* Removed the forced robots meta tag; JSON-LD is hex-encoded.
* AdSense: ad code is supplied through widget areas only; removed raw theme_mod output.
* WordPress Coding Standards: zero PHPCS errors/warnings (WordPress-Extra), prefixed template variables, translators comments, nonce-safe reads.
* Companion plugin 1.2.0: demo importer removed (the theme owns it), text domain corrected.

= 2.4.0 =
* Added Digital Products & SaaS demo, FAQ, Pricing, Case Studies, Team, Visa Pathways and Tour Packages templates.
* Added lead handler, shortcodes and white-label settings.

= 2.2.1 =
* Fixed PHP syntax errors in front-page and single templates; corrected Digital/Corporate importer registration.

= 1.5.1 =
* Fixed FAQ accordion answers remaining hidden; synchronised aria-expanded and hidden states.

= 1.2.0 =
* Added Client Trust Logos bar, Case Studies, Pricing Tables, FAQ accordion, JSON-LD, Open Graph tags, breadcrumbs and cookie notice.

= 1.1.0 =
* Added Customizer controls, RTL support, WooCommerce styling, block patterns, OCDI integration and the welcome page.

= 1.0.0 =
* Initial release.

== Copyright ==

BizPro Agency WordPress Theme, Copyright 2026 Kamrul Hasan.
BizPro Agency is distributed under the terms of the GNU GPL v2 or later.

== Resources ==

* Outfit and Plus Jakarta Sans fonts - SIL Open Font License 1.1 (assets/fonts/OFL.txt), bundled as WOFF2.
* TGM Plugin Activation - GPL v2 or later, https://tgmpluginactivation.com
* Inline SVG icons, SVG artwork (assets/images/art), mockup graphics and screenshot - created for this theme, GNU GPL v2 or later.
* JavaScript: original vanilla JavaScript, no external libraries.
