(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_blocks_header-nav_js"],{

/***/ "./assets/js/blocks/header-nav.js":
/*!****************************************!*\
  !*** ./assets/js/blocks/header-nav.js ***!
  \****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* eslint-disable */
/* harmony default export */ __webpack_exports__["default"] = (function (el) {
  var body = document.querySelector('body');

  function toggleMenuMobile() {
    if (!body.classList.contains('menu-mobile-open')) {
      body.classList.add('menu-mobile-open');
    } else {
      body.classList.remove('menu-mobile-open');
    }
  }

  el.addEventListener('click', toggleMenuMobile);
});

/***/ })

}]);
//# sourceMappingURL=0ea61b95b92df9861c9f.js.map