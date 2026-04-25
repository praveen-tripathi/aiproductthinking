(function () {
	'use strict';

	function onReady(fn) {
		if (document.readyState !== 'loading') {
			fn();
		} else {
			document.addEventListener('DOMContentLoaded', fn);
		}
	}

	onReady(function () {
		// Mobile menu toggle (header.php hamburger inline already toggles, but support attribute too)
		var hamburger = document.querySelector('.hamburger');
		if (hamburger) {
			hamburger.addEventListener('click', function () {
				var nav = document.getElementById('main-nav');
				if (nav) nav.classList.toggle('open');
			});
		}

		// Pill-style radio behavior on contact page
		var rbtns = document.querySelectorAll('.rbtn');
		rbtns.forEach(function (b) {
			b.addEventListener('click', function (e) {
				e.preventDefault();
				rbtns.forEach(function (x) { x.classList.remove('sel'); });
				b.classList.add('sel');
				var hidden = document.getElementById('f-role');
				if (hidden) hidden.value = b.textContent.trim();
			});
		});

		// Soft confirmation for the contact form (theme provides progressive UX;
		// real submission should be handled by Contact Form 7, WPForms, or Fluent Forms).
		var form = document.getElementById('aipt-contact-form');
		if (form) {
			form.addEventListener('submit', function (e) {
				var ok = document.getElementById('form-ok');
				if (ok) {
					ok.style.display = 'block';
				}
			});
		}
	});
})();
