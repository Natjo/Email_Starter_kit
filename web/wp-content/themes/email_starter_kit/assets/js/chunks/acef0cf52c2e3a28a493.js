(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_strates_temoignages_js"],{

/***/ "./assets/js/modules/carousel.js":
/*!***************************************!*\
  !*** ./assets/js/modules/carousel.js ***!
  \***************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'swiper'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'swiper/css'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
/* eslint-disable */



function Carousel(el) {
  var carousel = el.querySelector('.temoignages-carousel');
  var btn_prev = el.querySelector('.btn-prev');
  var btn_next = el.querySelector('.btn-next');
  var swiper = new Object(function webpackMissingModule() { var e = new Error("Cannot find module 'swiper'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())(carousel, {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 10,
    loop: false,
    centeredSlides: false,
    centeredSlidesBounds: false,
    grabCursor: true,
    breakpoints: {
      576: {
        spaceBetween: 10,
        slidesPerView: 1
      },
      768: {
        spaceBetween: 10,
        slidesPerView: 1
      },
      992: {
        spaceBetween: 10,
        slidesPerView: 'auto'
      },
      1200: {
        spaceBetween: 10,
        slidesPerView: 'auto'
      },
      1370: {
        spaceBetween: 10,
        slidesPerView: 'auto'
      }
    }
  });

  var next = function next() {
    swiper.slideNext();
  };

  var prev = function prev() {
    swiper.slidePrev();
  };

  btn_prev.addEventListener('click', prev);
  btn_next.addEventListener('click', next);
}

/* harmony default export */ __webpack_exports__["default"] = (Carousel);

/***/ }),

/***/ "./assets/js/strates/temoignages.js":
/*!******************************************!*\
  !*** ./assets/js/strates/temoignages.js ***!
  \******************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../modules/carousel */ "./assets/js/modules/carousel.js");
/* eslint-disable */

/* harmony default export */ __webpack_exports__["default"] = (function (el) {
  (0,_modules_carousel__WEBPACK_IMPORTED_MODULE_0__.default)(el);
});

/***/ })

}]);
//# sourceMappingURL=acef0cf52c2e3a28a493.js.map