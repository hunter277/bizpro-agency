/**
 * BizPro Agency - main.js
 * Vanilla JavaScript — zero dependencies, zero jQuery.
 * Version: 1.5.0 | Author: Kamrul Hasan | GPL v2+
 */
( function () {
	'use strict';

	var prefersReducedMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var hasObserver = 'IntersectionObserver' in window;

	/* =====================================================================
	 * 0. Accessible dark mode preference
	 * =================================================================== */
	function initThemeMode() {
		var toggles = document.querySelectorAll( '.bpa-theme-toggle' );
		if ( ! toggles.length ) { return; }
		var saved = null;
		try { saved = window.localStorage.getItem( 'bpa-theme-mode' ); } catch ( e ) {}
		if ( saved === 'dark' ) { document.documentElement.setAttribute( 'data-bpa-theme', 'dark' ); }
		function sync() {
			var dark = document.documentElement.getAttribute( 'data-bpa-theme' ) === 'dark';
			toggles.forEach( function ( toggle ) {
				toggle.setAttribute( 'aria-pressed', dark ? 'true' : 'false' );
				toggle.setAttribute( 'aria-label', dark ? 'Switch to light mode' : 'Switch to dark mode' );
			} );
		}
		toggles.forEach( function ( toggle ) {
			toggle.addEventListener( 'click', function () {
				var dark = document.documentElement.getAttribute( 'data-bpa-theme' ) !== 'dark';
				if ( dark ) { document.documentElement.setAttribute( 'data-bpa-theme', 'dark' ); } else { document.documentElement.removeAttribute( 'data-bpa-theme' ); }
				try { window.localStorage.setItem( 'bpa-theme-mode', dark ? 'dark' : 'light' ); } catch ( e ) {}
				sync();
			} );
		} );
		sync();
	}
	/* =====================================================================
	 * 1. Mobile Menu — Accessible Toggle
	 * =================================================================== */
	function initMenu() {
		var toggle = document.getElementById( 'menu-toggle' );
		var nav    = document.getElementById( 'site-navigation' );
		if ( ! toggle || ! nav ) { return; }

		function setOpen( open ) {
			toggle.setAttribute( 'aria-expanded', open ? 'true' : 'false' );
			nav.classList.toggle( 'is-open', open );
			document.body.classList.toggle( 'menu-is-open', open );
		}

		toggle.addEventListener( 'click', function () {
			setOpen( toggle.getAttribute( 'aria-expanded' ) !== 'true' );
		} );

		var closeBtn = document.getElementById( 'menu-close' );
		if ( closeBtn ) {
			closeBtn.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				setOpen( false );
				toggle.focus();
			} );
		}

		document.addEventListener( 'keydown', function ( e ) {
			if ( ( e.key === 'Escape' || e.key === 'Esc' ) && toggle.getAttribute( 'aria-expanded' ) === 'true' ) {
				setOpen( false );
				toggle.focus();
			}
		} );

		nav.addEventListener( 'click', function ( e ) {
			var link = e.target.closest && e.target.closest( 'a' );
			if ( link ) {
				var parentLi = link.closest( 'li' );
				// If tapping a parent item with a sub-menu on mobile, toggle the sub-menu
				if ( parentLi && parentLi.classList.contains( 'menu-item-has-children' ) && ( link.getAttribute( 'href' ) === '#' || window.innerWidth <= 991 ) ) {
					// If clicking directly on the arrow or the parent link on mobile
					if ( e.target.classList.contains( 'bpa-menu-arrow' ) || link.getAttribute( 'href' ) === '#' ) {
						e.preventDefault();
						parentLi.classList.toggle( 'sub-menu-open' );
						return;
					}
				}
				setOpen( false );
			}
		} );

		document.addEventListener( 'click', function ( e ) {
			if ( toggle.getAttribute( 'aria-expanded' ) === 'true' && ! nav.contains( e.target ) && ! toggle.contains( e.target ) ) {
				setOpen( false );
			}
		} );

		window.addEventListener( 'resize', function () {
			if ( window.innerWidth > 991 ) { setOpen( false ); }
		} );
	}

	/* =====================================================================
	 * 2. Sticky Header + Back-to-Top Button
	 * =================================================================== */
	function initScrollUI() {
		var header   = document.getElementById( 'masthead' );
		var backTop  = document.querySelector( '.bpa-back-to-top' );
		var ticking  = false;

		function update() {
			var y = window.pageYOffset || document.documentElement.scrollTop;
			if ( header )  { header.classList.toggle( 'is-scrolled', y > 10 ); }
			if ( backTop ) { backTop.classList.toggle( 'is-visible', y > 400 ); }
			ticking = false;
		}

		window.addEventListener( 'scroll', function () {
			if ( ! ticking ) { window.requestAnimationFrame( update ); ticking = true; }
		}, { passive: true } );

		if ( backTop ) {
			backTop.addEventListener( 'click', function () {
				window.scrollTo( { top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' } );
			} );
		}

		update();
	}

	/* =====================================================================
	 * 3. Animated Number Counters (Ease-out Cubic)
	 * =================================================================== */
	function animateCounter( el ) {
		var target = parseInt( el.getAttribute( 'data-count' ), 10 );
		var suffix = el.getAttribute( 'data-suffix' ) || '';
		if ( isNaN( target ) ) { return; }
		if ( prefersReducedMotion ) { el.textContent = target.toLocaleString() + suffix; return; }

		var duration = 1800;
		var start    = null;

		function step( ts ) {
			if ( start === null ) { start = ts; }
			var progress = Math.min( ( ts - start ) / duration, 1 );
			var eased    = 1 - Math.pow( 1 - progress, 3 );
			el.textContent = Math.round( target * eased ).toLocaleString() + suffix;
			if ( progress < 1 ) { window.requestAnimationFrame( step ); }
		}

		window.requestAnimationFrame( step );
	}

	function initCounters() {
		var counters = document.querySelectorAll( '.stat__number[data-count]' );
		if ( ! counters.length || ! hasObserver ) { return; }

		var obs = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) { animateCounter( entry.target ); obs.unobserve( entry.target ); }
			} );
		}, { threshold: 0.4 } );

		counters.forEach( function ( c ) {
			var suffix = c.getAttribute( 'data-suffix' ) || '';
			if ( ! prefersReducedMotion ) { c.textContent = '0' + suffix; }
			obs.observe( c );
		} );
	}

	/* =====================================================================
	 * 4. Scroll Reveal (staggered fade-in)
	 * =================================================================== */
	function initReveal() {
		if ( ! hasObserver || prefersReducedMotion ) { return; }

		var items = document.querySelectorAll(
			'.service-card, .testimonial, .stat, .post-card, .about__content, .about__media, .section__header, .team-card, .visa-card, .case-card, .pricing-card, .client-logo-item'
		);
		if ( ! items.length ) { return; }

		var obs = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) { entry.target.classList.add( 'is-visible' ); obs.unobserve( entry.target ); }
			} );
		}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' } );

		items.forEach( function ( el, i ) {
			el.classList.add( 'bpa-reveal' );
			el.style.transitionDelay = ( i % 4 ) * 90 + 'ms';
			obs.observe( el );
		} );
	}

	/* =====================================================================
	 * 5. FAQ Accordion (smooth max-height)
	 * =================================================================== */
	function initFAQ() {
		var items = document.querySelectorAll( '.faq-item' );
		if ( ! items.length ) { return; }

		items.forEach( function ( item ) {
			var btn    = item.querySelector( '.faq-question' );
			var answer = item.querySelector( '.faq-answer' );
			if ( ! btn || ! answer ) { return; }

			// Remove the HTML hidden attribute when opening; max-height alone cannot reveal it.
			btn.addEventListener( 'click', function () {
				var isOpen = item.classList.contains( 'is-open' );

				// Close other answers and keep their accessibility state in sync.
				items.forEach( function ( other ) {
					if ( other !== item ) {
						other.classList.remove( 'is-open' );
						var otherBtn = other.querySelector( '.faq-question' );
						var otherAnswer = other.querySelector( '.faq-answer' );
						if ( otherBtn ) { otherBtn.setAttribute( 'aria-expanded', 'false' ); }
						if ( otherAnswer ) { otherAnswer.hidden = true; }
					}
				} );

				item.classList.toggle( 'is-open', ! isOpen );
				btn.setAttribute( 'aria-expanded', ( ! isOpen ).toString() );
				answer.hidden = isOpen;
			} );
		} );
	}

	/* =====================================================================
	 * 6. Smooth Scroll for Same-Page Anchors
	 * =================================================================== */
	function initSmoothScroll() {
		if ( prefersReducedMotion ) { return; }
		document.querySelectorAll( 'a[href^="#"]' ).forEach( function ( anchor ) {
			anchor.addEventListener( 'click', function ( e ) {
				var id  = this.getAttribute( 'href' ).slice( 1 );
				var el  = id ? document.getElementById( id ) : null;
				if ( ! el ) { return; }
				e.preventDefault();
				el.scrollIntoView( { behavior: 'smooth', block: 'start' } );
			} );
		} );
	}

	/* =====================================================================
	 * 7. Sticky Active Nav Highlight on Scroll
	 * =================================================================== */
	function initActiveNav() {
		var sections = document.querySelectorAll( 'main [id]' );
		var navLinks = document.querySelectorAll( '.main-navigation a[href*="#"]' );
		if ( ! sections.length || ! navLinks.length || ! hasObserver ) { return; }

		var obs = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( entry.isIntersecting ) {
					navLinks.forEach( function ( link ) {
						var href = link.getAttribute( 'href' ) || '';
						link.classList.toggle( 'is-active-section', href.endsWith( '#' + entry.target.id ) );
					} );
				}
			} );
		}, { rootMargin: '-45% 0px -45% 0px' } );

		sections.forEach( function ( s ) { obs.observe( s ); } );
	}

	/* =====================================================================
	 * 8. Typewriter Hero Headline Rotate
	 * =================================================================== */
	function initTypewriter() {
		var el = document.querySelector( '[data-typewriter]' );
		if ( ! el || prefersReducedMotion ) { return; }

		var words  = ( el.getAttribute( 'data-typewriter' ) || '' ).split( '|' ).map( function ( w ) { return w.trim(); } ).filter( Boolean );
		if ( words.length < 2 ) { return; }

		var delay  = parseInt( el.getAttribute( 'data-typewriter-delay' ) || '2200', 10 );
		var idx    = 0;

		setInterval( function () {
			el.style.opacity = '0';
			el.style.transform = 'translateY(8px)';
			setTimeout( function () {
				idx = ( idx + 1 ) % words.length;
				el.textContent = words[ idx ];
				el.style.opacity = '1';
				el.style.transform = 'translateY(0)';
			}, 350 );
		}, delay );

		el.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
	}

		/* =====================================================================
	 * 7. Back to Top Button
	 * =================================================================== */
	function initBackToTop() {
		var btn = document.querySelector( '.bpa-back-to-top' );
		if ( ! btn ) { return; }
		window.addEventListener( 'scroll', function () {
			if ( window.pageYOffset > 400 ) {
				btn.classList.add( 'is-visible' );
			} else {
				btn.classList.remove( 'is-visible' );
			}
		}, { passive: true } );
		btn.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			window.scrollTo( { top: 0, behavior: prefersReducedMotion ? 'auto' : 'smooth' } );
		} );
	}

	/* =====================================================================
	 * 8. GDPR / AdSense Cookie Consent Banner
	 * =================================================================== */
	function initCookieBanner() {
		var banner = document.getElementById( 'bpa-cookie-notice' ) || document.getElementById( 'bpa-cookie-banner' );
		if ( ! banner ) { return; }
		try {
			if ( window.localStorage.getItem( 'bpa-cookie-consent' ) || document.cookie.indexOf( 'bpa_cookie=1' ) !== -1 ) {
				banner.setAttribute( 'hidden', '' );
				banner.classList.remove( 'is-visible', 'is-active' );
				return;
			}
		} catch ( e ) {}

		setTimeout( function () {
			banner.removeAttribute( 'hidden' );
			banner.classList.add( 'is-visible', 'is-active' );
		}, 800 );

		var acceptBtn = banner.querySelector( '.bpa-cookie-accept' ) || banner.querySelector( 'button' );
		if ( acceptBtn ) {
			acceptBtn.addEventListener( 'click', function () {
				try {
					window.localStorage.setItem( 'bpa-cookie-consent', 'accepted' );
					document.cookie = 'bpa_cookie=1; max-age=' + ( 365 * 24 * 60 * 60 ) + '; path=/; SameSite=Lax';
				} catch ( e ) {}
				banner.classList.remove( 'is-visible', 'is-active' );
				banner.style.transform = 'translateY(120%)';
				setTimeout( function () {
					banner.setAttribute( 'hidden', '' );
				}, 400 );
			} );
		}
	}

	/* =====================================================================
	 * Init — DOMContentLoaded safe
	 * =================================================================== */
	/* =====================================================================
	 * Tab Support
	 * =================================================================== */
	function initTabs() {
		var tabs = document.querySelectorAll( '.bpa-tab-trigger' );
		if ( ! tabs.length ) { return; }
		tabs.forEach( function ( tab ) {
			tab.addEventListener( 'click', function ( e ) {
				e.preventDefault();
				var target = this.getAttribute( 'data-tab' );
				if ( ! target ) { return; }
				document.querySelectorAll( '.bpa-tab-trigger' ).forEach( function ( t ) { t.classList.remove( 'active' ); } );
				document.querySelectorAll( '.bpa-tab-panel' ).forEach( function ( p ) { p.classList.remove( 'active' ); } );
				this.classList.add( 'active' );
				var panel = document.getElementById( target );
				if ( panel ) { panel.classList.add( 'active' ); }
			} );
		} );
	}

	function init() {
		initBackToTop();
		initCookieBanner();
		initThemeMode();
		initMenu();
		initScrollUI();
		initCounters();
		initReveal();
		initFAQ();
		initSmoothScroll();
		initActiveNav();
		initTypewriter();
		initTabs();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}

}() );
