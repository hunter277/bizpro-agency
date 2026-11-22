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

	function initVisaFinder() {
		var form = document.getElementById( 'bpa-visa-finder' );
		if ( ! form ) { return; }
		var country = document.getElementById( 'bpa-visa-country' );
		var type = document.getElementById( 'bpa-visa-type' );
		var cards = document.querySelectorAll( '.visa-country-card' );
		var status = document.getElementById( 'bpa-visa-results' );
		if ( ! country || ! type || ! cards.length ) { return; }

		form.addEventListener( 'submit', function ( event ) {
			event.preventDefault();
			var selectedCountry = country.value;
			var selectedType = type.value;
			var visible = 0;
			cards.forEach( function ( card ) {
				var countryMatch = selectedCountry === 'all' || card.getAttribute( 'data-country' ) === selectedCountry;
				var types = ( card.getAttribute( 'data-types' ) || '' ).split( ',' );
				var typeMatch = selectedType === 'all' || types.indexOf( selectedType ) !== -1;
				var show = countryMatch && typeMatch;
				card.hidden = ! show;
				if ( show ) { visible++; }
			} );
			if ( status ) {
				status.textContent = visible ? visible + ( visible === 1 ? ' pathway found.' : ' pathways found.' ) : 'No matching pathways. Try another country or visa type.';
			}
		} );
	}

	function initLeadForms() {
		var forms = document.querySelectorAll( '.visa-quick-form, .travel-inquiry-form, .bpa-lead-form' );
		if ( ! forms.length || typeof bpaLeadData === 'undefined' ) { return; }

		function labelFor( field ) {
			var label = null;
			if ( field.id ) { label = document.querySelector( 'label[for="' + field.id + '"]' ); }
			if ( ! label && field.closest ) {
				var wrap = field.closest( '.visa-form-field, .form-group, .contact-form__field' );
				label = wrap ? wrap.querySelector( 'label' ) : null;
			}
			var text = label ? label.textContent : ( field.getAttribute( 'placeholder' ) || field.getAttribute( 'aria-label' ) || field.name );
			return text.replace( /[*:]/g, '' ).trim();
		}

		function showMessage( form, text, isError ) {
			var box = form.querySelector( '.bpa-form-message' );
			if ( ! box ) {
				box = document.createElement( 'p' );
				box.className = 'bpa-form-message';
				box.setAttribute( 'role', 'alert' );
				form.appendChild( box );
			}
			box.className = 'bpa-form-message ' + ( isError ? 'is-error' : 'is-success' );
			box.textContent = text;
		}

		forms.forEach( function( form ) {
			var opened = Date.now();

			// Honeypot: humans never see or fill this field.
			var trap = document.createElement( 'input' );
			trap.type = 'text';
			trap.name = 'lead_website';
			trap.tabIndex = -1;
			trap.autocomplete = 'off';
			trap.setAttribute( 'aria-hidden', 'true' );
			trap.className = 'bpa-hp';
			form.appendChild( trap );

			form.addEventListener( 'submit', function( event ) {
				event.preventDefault();
				var btn = form.querySelector( 'button[type="submit"]' );
				var original = btn ? btn.innerHTML : '';
				if ( btn ) { btn.disabled = true; btn.textContent = bpaLeadData.sending; }

				var data = new FormData();
				data.append( 'action', 'bpa_submit_lead' );
				data.append( 'lead_website', trap.value );
				data.append( 'lead_elapsed', String( Date.now() - opened ) );

				var type = form.getAttribute( 'data-lead-type' ) || '';
				if ( ! type ) {
					if ( form.classList.contains( 'visa-quick-form' ) ) { type = 'Visa & Immigration Assessment'; }
					else if ( form.classList.contains( 'travel-inquiry-form' ) ) { type = 'Travel Itinerary Inquiry'; }
					else { type = 'Contact Form'; }
				}
				data.append( 'lead_type', type );

				form.querySelectorAll( 'input, select, textarea' ).forEach( function( field ) {
					if ( ! field.name || field.name.indexOf( 'lead_' ) === 0 || field.name.indexOf( 'nonce' ) !== -1 || field.name === '_wp_http_referer' || field.type === 'submit' ) { return; }
					if ( ( field.type === 'checkbox' || field.type === 'radio' ) && ! field.checked ) { return; }
					var value = field.tagName === 'SELECT' ? ( field.options[ field.selectedIndex ] ? field.options[ field.selectedIndex ].text : '' ) : field.value;
					var n = field.name.toLowerCase();
					if ( /email/.test( n ) ) { data.append( 'lead_email', value ); }
					else if ( /phone|tel/.test( n ) ) { data.append( 'lead_phone', value ); }
					else if ( /(^|_)name$/.test( n ) ) { data.append( 'lead_name', value ); }
					else { data.append( 'lead_fields[' + labelFor( field ) + ']', value ); }
				} );

				fetch( bpaLeadData.ajaxUrl, { method: 'POST', body: data, credentials: 'same-origin' } )
					.then( function( res ) { return res.json(); } )
					.then( function( res ) {
						if ( res && res.success ) {
							form.reset();
							showMessage( form, res.data && res.data.message ? res.data.message : bpaLeadData.success, false );
							if ( btn ) { btn.disabled = false; btn.innerHTML = original; }
						} else {
							showMessage( form, res && res.data && res.data.message ? res.data.message : bpaLeadData.error, true );
							if ( btn ) { btn.disabled = false; btn.innerHTML = original; }
						}
					} )
					.catch( function() {
						showMessage( form, bpaLeadData.error, true );
						if ( btn ) { btn.disabled = false; btn.innerHTML = original; }
					} );
			} );
		} );
	}

	function init() {
		initCookieBanner();
		initMenu();
		initScrollUI();
		initCounters();
		initReveal();
		initFAQ();
		initSmoothScroll();
		initActiveNav();
		initTypewriter();
		initTabs();
		initVisaFinder();
		initLeadForms();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}

}() );
