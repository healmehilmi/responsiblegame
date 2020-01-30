/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/vue/levels/level1.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/vue/levels/level1.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
/* harmony default export */ __webpack_exports__["default"] = ({
  mounted: function mounted() {
    console.log('Component mounted.');
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/vue/levels/level1.vue?vue&type=template&id=6cfc0e7c&":
/*!******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/vue/levels/level1.vue?vue&type=template&id=6cfc0e7c& ***!
  \******************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { attrs: { id: "vue-level1" } }, [
    _c(
      "section",
      {
        staticClass: "main",
        staticStyle: {
          display: "flex",
          "justify-content": "space-around",
          "margin-top": "50px"
        }
      },
      [
        _c("section", { attrs: { id: "sidebar" } }, [
          _c("div", { attrs: { id: "editor" } }, [
            _c("div", { attrs: { id: "css" } }, [
              _vm._m(0),
              _vm._v(" "),
              _c("div", { staticClass: "coding-1" }, [
                _c("pre"),
                _c("input", {
                  staticClass: "check003",
                  staticStyle: { height: "24px", width: "24px" },
                  attrs: { type: "text", id: "input001", size: "15" }
                }),
                _c("text", {
                  staticClass: "button002",
                  attrs: { id: "check001" }
                }),
                _vm._v(" "),
                _c("pre", [_vm._v(">")]),
                _vm._v(" "),
                _c("pre", { attrs: { id: "before" } }, [
                  _vm._v("I am a main Heading \n                              ")
                ]),
                _vm._v(" "),
                _c("pre"),
                _vm._v(" "),
                _c("input", {
                  staticClass: "check003",
                  staticStyle: { height: "24px", width: "24px" },
                  attrs: { type: "text", id: "input001", size: "15" }
                }),
                _c("text", {
                  staticClass: "button002",
                  attrs: { id: "check001" }
                }),
                _vm._v(" "),
                _c("pre", [_vm._v("/>")])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "coding-2" }, [
                _c("pre"),
                _vm._v(" "),
                _c("input", {
                  staticClass: "check003",
                  staticStyle: { height: "24px", width: "24px" },
                  attrs: { type: "text", id: "input002", size: "15" }
                }),
                _c("text", {
                  staticClass: "button002",
                  attrs: { id: "check002" }
                }),
                _vm._v(" "),
                _c("pre", [_vm._v(">")]),
                _vm._v(" "),
                _c("pre", { attrs: { id: "before" } }, [
                  _vm._v(
                    "I am a sub Heading \n                                   "
                  )
                ]),
                _vm._v(" "),
                _c("pre"),
                _vm._v(" "),
                _c("input", {
                  staticClass: "check003",
                  staticStyle: { height: "24px", width: "24px" },
                  attrs: { type: "text", id: "input002", size: "15" }
                }),
                _c("text", {
                  staticClass: "button002",
                  attrs: { id: "check002" }
                }),
                _vm._v(" "),
                _c("pre", [_vm._v("/>")])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "coding-3" }, [
                _c("pre"),
                _vm._v(" "),
                _c("input", {
                  staticClass: "check003",
                  staticStyle: { height: "24px", width: "24px" },
                  attrs: { type: "text", id: "input003", size: "15" }
                }),
                _c("text", {
                  staticClass: "button002",
                  attrs: { id: "check003" }
                }),
                _vm._v(" "),
                _c("pre", [_vm._v(">")]),
                _vm._v(" "),
                _c("pre", { attrs: { id: "before" } }, [
                  _vm._v(
                    "I am a sub sub Heading \n                                       "
                  )
                ]),
                _vm._v(" "),
                _c("pre"),
                _c("input", {
                  staticClass: "check003",
                  staticStyle: { height: "24px", width: "24px" },
                  attrs: { type: "text", id: "input003", size: "15" }
                }),
                _c("text", {
                  staticClass: "button002",
                  attrs: { id: "check003" }
                }),
                _vm._v(" "),
                _c("pre", [_vm._v("/>")])
              ])
            ]),
            _vm._v(" "),
            _vm._m(1),
            _c("br"),
            _vm._v(" "),
            _vm._m(2)
          ])
        ]),
        _vm._v(" "),
        _vm._m(3)
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "line-numbers" }, [
      _vm._v("\n                         1"),
      _c("br"),
      _vm._v("2"),
      _c("br"),
      _vm._v("3"),
      _c("br"),
      _vm._v("4"),
      _c("br"),
      _vm._v("5"),
      _c("br"),
      _vm._v("6"),
      _c("br"),
      _vm._v("7"),
      _c("br"),
      _vm._v("8"),
      _c("br"),
      _vm._v("9"),
      _c("br"),
      _vm._v("10\n                        ")
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { attrs: { id: "disappear001" } }, [
      _c("div", { attrs: { id: "center001" } }, [
        _c(
          "button",
          { staticClass: "button001", attrs: { onclick: "submit001()" } },
          [_vm._v("Submit")]
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { attrs: { id: "center001" } }, [
      _c("p", { attrs: { id: "message001" } }),
      _c("p", { attrs: { id: "reload001" } })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "section",
      { staticStyle: { width: "400px" }, attrs: { id: "exam" } },
      [
        _c("div", { staticClass: "header" }, [
          _c("div", { staticClass: "dropdown" }, [
            _c(
              "button",
              {
                staticClass: "btn btn-secondary dropdown-toggle",
                staticStyle: { "background-color": "#7a7aa5" },
                attrs: {
                  type: "button",
                  id: "dropdownMenuButton",
                  "data-toggle": "dropdown",
                  "aria-haspopup": "true",
                  "aria-expanded": "false"
                }
              },
              [_vm._v("\n    Levels\n  ")]
            ),
            _vm._v(" "),
            _c(
              "div",
              {
                staticClass: "dropdown-menu",
                attrs: { "aria-labelledby": "dropdownMenuButton" }
              },
              [
                _c(
                  "a",
                  { staticClass: "dropdown-item", attrs: { href: "#" } },
                  [_vm._v("Level 1")]
                ),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "dropdown-item", attrs: { href: "#" } },
                  [_vm._v("Level 2")]
                ),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "dropdown-item", attrs: { href: "#" } },
                  [_vm._v("Level 3")]
                )
              ]
            )
          ])
        ]),
        _vm._v(" "),
        _c("div", [
          _c("p", { attrs: { id: "level-1" } }, [
            _vm._v(
              "\n              Use headings correcly to organize the \n              structure of content ! \n\n              Screen reader users can use heading structure to navigate\n              content.By using headings (h1 , h2 , etc.) correctly\n              and strategically ,the the content of your website will be \n              well-organized and easily interpreted by screen readers.\n              Use h1 for the primary tiutle of the page.Avoid using an \n              h1 for anything other than the title of the website and the title of individual pages.\n              Use headings to indicate and organize your content structure.\n              Do not skip heading levels(e.g.,go from an h1 to an h3), as screen reader users will wonder a connection_statusis missing.\n\n            "
            )
          ])
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/vue/levels/level1.vue":
/*!*****************************************!*\
  !*** ./resources/vue/levels/level1.vue ***!
  \*****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _level1_vue_vue_type_template_id_6cfc0e7c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./level1.vue?vue&type=template&id=6cfc0e7c& */ "./resources/vue/levels/level1.vue?vue&type=template&id=6cfc0e7c&");
/* harmony import */ var _level1_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./level1.vue?vue&type=script&lang=js& */ "./resources/vue/levels/level1.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _level1_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _level1_vue_vue_type_template_id_6cfc0e7c___WEBPACK_IMPORTED_MODULE_0__["render"],
  _level1_vue_vue_type_template_id_6cfc0e7c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/vue/levels/level1.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/vue/levels/level1.vue?vue&type=script&lang=js&":
/*!******************************************************************!*\
  !*** ./resources/vue/levels/level1.vue?vue&type=script&lang=js& ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_level1_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./level1.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/vue/levels/level1.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_level1_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/vue/levels/level1.vue?vue&type=template&id=6cfc0e7c&":
/*!************************************************************************!*\
  !*** ./resources/vue/levels/level1.vue?vue&type=template&id=6cfc0e7c& ***!
  \************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_level1_vue_vue_type_template_id_6cfc0e7c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./level1.vue?vue&type=template&id=6cfc0e7c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/vue/levels/level1.vue?vue&type=template&id=6cfc0e7c&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_level1_vue_vue_type_template_id_6cfc0e7c___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_level1_vue_vue_type_template_id_6cfc0e7c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/vue/levels/level1 ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/vagrant/code/responsiblegame/resources/vue/levels/level1 */"./resources/vue/levels/level1.vue");


/***/ })

/******/ });