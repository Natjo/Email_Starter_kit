(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_modules_carousel_js"],{

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

/***/ })

}]);
//# sourceMappingURL=c49f4cb788a0903dae41.js.map