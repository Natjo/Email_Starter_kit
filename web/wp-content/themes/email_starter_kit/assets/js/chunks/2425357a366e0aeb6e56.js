(self["webpackChunkwordpress_starter_kit"] = self["webpackChunkwordpress_starter_kit"] || []).push([["assets_js_strates_push_3_colonnes_js"],{

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

/***/ }),

/***/ "./assets/js/strates/push_3_colonnes.js":
/*!**********************************************!*\
  !*** ./assets/js/strates/push_3_colonnes.js ***!
  \**********************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_popin__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../modules/popin */ "./assets/js/modules/popin.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

/* eslint-disable */

/* harmony default export */ __webpack_exports__["default"] = (function (el) {
  var _iterator = _createForOfIteratorHelper(el.querySelectorAll(".has-popin")),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var btn = _step.value;
      (0,_modules_popin__WEBPACK_IMPORTED_MODULE_0__.default)(btn, {
        onopen: function onopen() {
          console.log('open');
        },
        onclose: function onclose() {
          console.log('close');
        }
      });
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
});

/***/ })

}]);
//# sourceMappingURL=2425357a366e0aeb6e56.js.map