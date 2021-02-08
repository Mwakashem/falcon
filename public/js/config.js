"use strict";

/* -------------------------------------------------------------------------- */

/*                           Navbar vertical config                           */

/* -------------------------------------------------------------------------- */
var CONFIG = {
  isNavbarVerticalCollapsed: false,
  theme: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light',
  isRTL: false,
  isFluid: false,
  navbarStyle: 'transparent',
  navbarPosition: 'combo'
};

var isNull = function isNull(key) {
  return localStorage.getItem(key) === null;
};

isNull('isNavbarVerticalCollapsed') && localStorage.setItem('isNavbarVerticalCollapsed', CONFIG.isNavbarVerticalCollapsed);
isNull('theme') && localStorage.setItem('theme', CONFIG.theme);
isNull('navbarStyle') && localStorage.setItem('navbarStyle', CONFIG.navbarStyle);
isNull('navbarPosition') && localStorage.setItem('navbarPosition', CONFIG.navbarPosition);
isNull('isRTL') && localStorage.setItem('isRTL', CONFIG.isRTL);
isNull('isFluid') && localStorage.setItem('isFluid', CONFIG.isFluid);
var isNavbarVerticalCollapsed = JSON.parse(localStorage.getItem('isNavbarVerticalCollapsed'));

if (isNavbarVerticalCollapsed) {
  document.documentElement.classList.add('navbar-vertical-collapsed');
}

var theme = localStorage.getItem('theme');

if (theme === 'dark') {
  document.documentElement.classList.add('dark');
}
//# sourceMappingURL=config.js.map
