/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// hamburger menu - aub niet zomaar aan komen
(function () {
  $('.menu-wrapper').on('click', function () {
    $('.hamburger-menu').toggleClass('animate');
    $('.mobile-nav').toggleClass('active');
    $('body').toggleClass('scroll');
    $('#mobile-nav').addClass('opened');
  });
})(); // nav onscroll function


window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $('nav.main').addClass('scroll');
  } else {
    $('nav.main').removeClass('scroll');
  }
} ////cookies function
// make cookie save timer (14 days & 1 day)


var cookieTimer14 = new Date();
var cookieTimer1 = new Date(); // add 14 days & 1 day

cookieTimer14.setDate(cookieTimer14.getDate() + 14);
cookieTimer1.setDate(cookieTimer1.getDate() + 1); //function to call cookie type

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');

  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];

    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }

    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
  }

  return "";
} //// end cookies functions


(function () {
  $('#cookieAccept').on('click', function () {
    document.cookie = "cookieAccept=true;";
    $('.cookies-popup').addClass('hide');
  });
  $('#cookieDecline').on('click', function () {
    document.cookie = "cookieAccept=false; expires=" + cookieTimer1 + ";";
    $('.cookies-popup').addClass('hide');
  });
})(); // set cookie to var


var cookieCurrentStatus = getCookie("cookieAccept"); // hide popup cookie accept if already chosen

(function () {
  if (cookieCurrentStatus === "true") {
    $('.cookies-popup').addClass('hide');
  }

  if (cookieCurrentStatus === "false") {
    $('.cookies-popup').addClass('hide');
  }
})(); //cookie popup - offerte
//makes cookie if all cookies (cookieAccept) is accepted


$(document).ready(function () {
  $("#close-popup").click(function () {
    $('.popup').fadeOut("slow");
    $('body').removeClass("scroll");

    if (cookieCurrentStatus === "true") {
      document.cookie = "popupClosed=true; expires=" + cookieTimer14 + ";";
    }
  });
});
var cookieStatusOfferte = getCookie("popupClosed");

(function () {
  if (cookieStatusOfferte == "true") {
    $('body').removeClass("scroll");
    $('.popup').addClass("hide");
  }
})(); //cookie if page is cached


(function () {
  var isCached = performance.getEntriesByType("navigation")[0].transferSize === 0;

  if (isCached == true) {
    $('.loader-wrapper').addClass("hide");
  }
})(); //About


(function () {
  $("#member-jelle").click(function () {
    $("#member-jelle").addClass('active');
    $("#member-marco").removeClass('active');
    $("#member-tin").removeClass('active');
    $("#member-yeno").removeClass('active');
    $(".member-jelle").removeClass('hidden');
    $(".member-marco").addClass('hidden');
    $(".member-tin").addClass('hidden');
    $(".member-yeno").addClass('hidden');
  });
  $("#member-marco").click(function () {
    $("#member-jelle").removeClass('active');
    $("#member-marco").addClass('active');
    $("#member-tin").removeClass('active');
    $("#member-yeno").removeClass('active');
    $(".member-jelle").addClass('hidden');
    $(".member-marco").removeClass('hidden');
    $(".member-tin").addClass('hidden');
    $(".member-yeno").addClass('hidden');
  });
  $("#member-tin").click(function () {
    $("#member-jelle").removeClass('active');
    $("#member-marco").removeClass('active');
    $("#member-tin").addClass('active');
    $("#member-yeno").removeClass('active');
    $(".member-jelle").addClass('hidden');
    $(".member-marco").addClass('hidden');
    $(".member-tin").removeClass('hidden');
    $(".member-yeno").addClass('hidden');
  });
  $("#member-yeno").click(function () {
    $("#member-jelle").removeClass('active');
    $("#member-marco").removeClass('active');
    $("#member-tin").removeClass('active');
    $("#member-yeno").addClass('active');
    $(".member-jelle").addClass('hidden');
    $(".member-marco").addClass('hidden');
    $(".member-tin").addClass('hidden');
    $(".member-yeno").removeClass('hidden');
  });
})();

/***/ }),

/***/ "./resources/scss/main.scss":
/*!**********************************!*\
  !*** ./resources/scss/main.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/loader.scss":
/*!************************************!*\
  !*** ./resources/scss/loader.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/******/ 	// the startup function
/******/ 	// It's empty as some runtime module handles the default behavior
/******/ 	__webpack_require__.x = x => {};
/************************************************************************/
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// Promise = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0
/******/ 		};
/******/ 		
/******/ 		var deferredModules = [
/******/ 			["./resources/js/app.js"],
/******/ 			["./resources/scss/main.scss"],
/******/ 			["./resources/scss/loader.scss"]
/******/ 		];
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		var checkDeferredModules = x => {};
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime, executeModules] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0, resolves = [];
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					resolves.push(installedChunks[chunkId][0]);
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			while(resolves.length) {
/******/ 				resolves.shift()();
/******/ 			}
/******/ 		
/******/ 			// add entry modules from loaded chunk to deferred list
/******/ 			if(executeModules) deferredModules.push.apply(deferredModules, executeModules);
/******/ 		
/******/ 			// run deferred modules when all chunks ready
/******/ 			return checkDeferredModules();
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 		
/******/ 		function checkDeferredModulesImpl() {
/******/ 			var result;
/******/ 			for(var i = 0; i < deferredModules.length; i++) {
/******/ 				var deferredModule = deferredModules[i];
/******/ 				var fulfilled = true;
/******/ 				for(var j = 1; j < deferredModule.length; j++) {
/******/ 					var depId = deferredModule[j];
/******/ 					if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferredModules.splice(i--, 1);
/******/ 					result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 				}
/******/ 			}
/******/ 			if(deferredModules.length === 0) {
/******/ 				__webpack_require__.x();
/******/ 				__webpack_require__.x = x => {};
/******/ 			}
/******/ 			return result;
/******/ 		}
/******/ 		var startup = __webpack_require__.x;
/******/ 		__webpack_require__.x = () => {
/******/ 			// reset startup function so it can be called again when more startup code is added
/******/ 			__webpack_require__.x = startup || (x => {});
/******/ 			return (checkDeferredModules = checkDeferredModulesImpl)();
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	// run startup
/******/ 	__webpack_require__.x();
/******/ })()
;