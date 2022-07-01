(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_strates_temoignages_js-node_modules_swiper_swiper_min_css"],{

/***/ "./assets/js/modules/carousel.js":
/*!***************************************!*\
  !*** ./assets/js/modules/carousel.js ***!
  \***************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.min.css");
/* eslint-disable */



function Carousel(el) {
  var carousel = el.querySelector('.temoignages-carousel');
  var btn_prev = el.querySelector('.btn-prev');
  var btn_next = el.querySelector('.btn-next');

  var setclassbutton = function setclassbutton() {
    if (swiper.isBeginning) {
      btn_prev.addClass('disabled');
    } else {
      btn_prev.removeClass('disabled');
    }

    if (swiper.isEnd) {
      btn_next.addClass('disabled');
    } else {
      btn_next.removeClass('disabled');
    }
  };

  var swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__.default(carousel, {
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
    },
    on: {
      init: function init() {
        setclassbutton();
      }
    }
  });

  var next = function next() {
    swiper.slideNext();
    setclassbutton();
  };

  var prev = function prev() {
    swiper.slidePrev();
    setclassbutton();
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
//# sourceMappingURL=bf106bdef064dd5b1da4.js.map