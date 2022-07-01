(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_strates_video_js"],{

/***/ "./assets/js/strates/video.js":
/*!************************************!*\
  !*** ./assets/js/strates/video.js ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* eslint-disable */
/* harmony default export */ __webpack_exports__["default"] = (function (el) {
  var imageContent = el.querySelector('.image-content');
  var videoContent = el.querySelector('.video-content');
  imageContent.addEventListener('click', function (event) {
    var videoId = videoContent.getAttribute('data-video-id');
    var html = '<iframe src="https://www.youtube.com/embed/' + videoId + '?autoplay=1&playsinline=1" frameborder="0" allowfullscreen></iframe>';
    videoContent.innerHTML = html;
    videoContent.classList.add('open');
  }, false);
});

/***/ })

}]);
//# sourceMappingURL=a4c1d65557d7fb2d025c.js.map