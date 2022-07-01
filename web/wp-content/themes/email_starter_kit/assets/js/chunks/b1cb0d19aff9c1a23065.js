(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_modules_carousel_js-node_modules_swiper_swiper_min_css"],{

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
    }
  });

  var setclassbutton = function setclassbutton() {
    if (swiper.isBeginning) {
      btn_prev.classList.add('disabled');
    } else {
      btn_prev.classList.remove('disabled');
    }

    if (swiper.isEnd) {
      btn_next.classList.add('disabled');
    } else {
      btn_next.classList.remove('disabled');
    }
  };

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
  setclassbutton();
}

/* harmony default export */ __webpack_exports__["default"] = (Carousel);

/***/ })

}]);
//# sourceMappingURL=b1cb0d19aff9c1a23065.js.map