(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_modules_popin_js"],{

/***/ "./assets/js/modules/popin.js":
/*!************************************!*\
  !*** ./assets/js/modules/popin.js ***!
  \************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* eslint-disable */
function Popin(btn_open) {
  var params = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var popin = document.getElementById(btn_open.getAttribute('aria-controls'));
  var box = popin.querySelector('.box');
  var btn_close = popin.querySelector('.btn-close');
  var items = popin.querySelectorAll('button,a,input');
  var lastItem = items[items.length - 1];
  var firstItem = items[0];
  var isShifted = false;
  var isLastItem = false;
  var isFirstItem = false;
  var clicktouch = 'ontouchstart' in document.documentElement ? 'touchstart' : 'click';

  var clickOut = function clickOut(e) {
    if (!box.contains(e.target) && !btn_open.contains(e.target)) close();
  };

  var keyup = function keyup(e) {
    e.key === 'Escape' && close();

    if (e.key === 'Shift') {
      isShifted = false;
    }

    if (isLastItem) {
      firstItem.focus();
      isLastItem = false;
    }

    if (isFirstItem) {
      lastItem.focus();
      isFirstItem = false;
    }
  };

  var ontab = function ontab() {
    if (document.activeElement === lastItem && !isShifted) {
      isLastItem = true;
    }

    if (document.activeElement === firstItem && isShifted) {
      isFirstItem = true;
    }
  };

  var keydown = function keydown(e) {
    if (e.key === 'Shift') {
      isShifted = true;
    }

    e.key === 'Tab' && ontab();
  };

  var open = function open() {
    popin.classList.add('open');
    popin.setAttribute('aria-hidden', false);
    btn_open.setAttribute('aria-expanded', true);
    document.addEventListener('keydown', keydown, false);
    document.addEventListener('keyup', keyup, false);
    window.addEventListener(clicktouch, clickOut);
    if (typeof params.onopen === 'function') params.onopen();
    firstItem.focus();
  };

  var close = function close() {
    popin.classList.add('close');
    box.addEventListener('animationend', function (e) {
      return e.stopImmediatePropagation();
    });
    popin.addEventListener('animationend', function () {
      popin.classList.remove('close');
      popin.classList.remove('open');
      popin.setAttribute('aria-hidden', true);
      btn_open.setAttribute('aria-expanded', false);
      document.removeEventListener('keydown', keydown);
      document.removeEventListener('keyup', keyup);
      window.removeEventListener(clicktouch, clickOut);
      if (typeof params.onclose === 'function') params.onclose();
      btn_open.focus();
    }, {
      once: true
    });
  };

  btn_open.addEventListener('click', open);
  btn_close.addEventListener('click', close);
}

/* harmony default export */ __webpack_exports__["default"] = (Popin);

/***/ })

}]);
//# sourceMappingURL=a097e85bb3faea9e84cb.js.map