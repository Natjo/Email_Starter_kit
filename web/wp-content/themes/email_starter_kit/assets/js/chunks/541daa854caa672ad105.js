(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_strates_textLoop_js"],{

/***/ "./assets/js/strates/textLoop.js":
/*!***************************************!*\
  !*** ./assets/js/strates/textLoop.js ***!
  \***************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (function (textLoop) {
  var windowWidth = window.innerWidth;
  var headbandInner = textLoop.querySelector('.text-loop');
  var headbandNews = textLoop.querySelector('.loop');
  var headbandNews__width = headbandNews.offsetWidth;

  while (headbandNews__width < windowWidth * 2) {
    var clone = headbandNews.cloneNode(true);
    headbandInner.appendChild(clone);
    headbandNews__width += headbandNews.offsetWidth;
  }

  headbandInner.classList.add('start');
});

/***/ })

}]);
//# sourceMappingURL=541daa854caa672ad105.js.map