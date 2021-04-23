const mobileOpenBtn = document.querySelector('#mobile-open-btn');
const mobileCloseBtn = document.querySelector('#mobile-close-btn');
const mobileNavCollapsed = document.querySelector('#mobile-nav-collapsed');
const mobileNavExpanded = document.querySelector('#mobile-nav-expanded');

window.addEventListener(
	'load',
	() => {
		mobileNavExpanded.classList.add('hidden');
	},
	false
);

mobileOpenBtn.addEventListener(
	'click',
	() => {
		mobileNavCollapsed.classList.add('hidden');
		mobileNavExpanded.classList.remove('hidden');
	},
	false
);

mobileCloseBtn.addEventListener(
	'click',
	() => {
		mobileNavExpanded.classList.add('hidden');
		mobileNavCollapsed.classList.remove('hidden');
	},
	false
);
