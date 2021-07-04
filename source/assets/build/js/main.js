/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/***/ (() => {

!function (r) {
  "use strict";

  var i = r("body");

  function s() {
    var a = r("#page-ajax-loaded");

    function t() {
      a.removeClass("fadeOutLeft closed"), a.show(), r("body").addClass("ajax-page-visible");
    }

    var o = r(".ajax-page-load").each(function () {
      if (o = r(this).attr("href"), location.hash == location.hash.split("/")[0] + "/" + o.substr(0, o.length - 5)) {
        var e = r(this).attr("href");
        return t(), a.load(e), !1;
      }
    });
    r(document).on("click", "#ajax-page-close-button", function (e) {
      e.preventDefault(), r("#page-ajax-loaded").addClass("fadeOutLeft closed"), r("body").removeClass("ajax-page-visible"), setTimeout(function () {
        r("#page-ajax-loaded.closed").html(""), a.hide();
      }, 500), location.hash = location.hash.split("/")[0];
    }).on("click", ".ajax-page-load", function () {
      var e = location.hash.split("/")[0] + "/" + r(this).attr("href").substr(0, r(this).attr("href").length - 5);
      return location.hash = e, t(), !1;
    });
  }

  function d() {
    150 < r(i).scrollTop() ? r(".nscharrenberg-scroll-to-top").removeClass("hidden-btn") : r(".nscharrenberg-scroll-to-top").addClass("hidden-btn");
  }

  r(function () {
    r("#contact_form").validator(), r("#contact_form").on("submit", function (e) {
      if (!e.isDefaultPrevented()) {
        return r.ajax({
          type: "POST",
          url: "contact_form/contact_form.php",
          data: r(this).serialize(),
          success: function success(e) {
            var a = "alert-" + e.type,
                t = e.message,
                o = '<div class="alert ' + a + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + t + "</div>";
            a && t && (r("#contact_form").find(".messages").html(o), r("#contact_form")[0].reset());
          }
        }), !1;
      }
    });
  }), r(window).on("load", function () {
    var e, a, t;
    r(".preloader").fadeOut(800, "linear"), e = r(window).width(), a = "", t = r("#page_container").attr("data-animation"), (a = r(991 < e ? ".page-container" : ".site-main")).addClass("animated " + t), r(".page-scroll").addClass("add-prespective"), a.addClass("transform3d"), setTimeout(function () {
      r(".page-scroll").removeClass("add-prespective"), a.removeClass("transform3d");
    }, 1e3);
  }).on("hashchange", function (e) {
    location.hash && s();
  }), r(document).on("ready", function () {
    var l = 15 / r(document).height(),
        n = 15 / r(document).width();
    r("body").on("mousemove", function (e) {
      var a = e.pageX - r(document).width() / 2,
          t = e.pageY - r(document).height() / 2,
          o = n * a * -1,
          i = l * t * -1;
      if (r(".page-container").hasClass("bg-move-effect")) var s = r(".home-photo .hp-inner:not(.without-move), .lm-animated-bg");else s = r(".home-photo .hp-inner:not(.without-move)");
      s.addClass("transition"), s.css({
        "background-position": "calc( 50% + " + o + "px ) calc( 50% + " + i + "px )"
      }), setTimeout(function () {
        s.removeClass("transition");
      }, 300);
    }).scroll(function () {
      d();
    });
    var e = r(".portfolio-grid"),
        a = r("#portfolio-gallery-grid");
    a.imagesLoaded(function () {
      a.masonry();
    }), e.imagesLoaded(function () {
      r(".portfolio-content").each(function () {
        r(this);
        var e = r(this).attr("id"),
            a = r("#" + e + " .portfolio-grid"),
            t = r("#" + e + " .portfolio-filters"),
            o = r("#" + e + " .portfolio-filters .filter");
        a && (a.shuffle({
          speed: 450,
          itemSelector: "figure"
        }), r(".site-auto-menu").on("click", "a", function (e) {
          a.shuffle("update");
        }), t.on("click", ".filter", function (e) {
          a.shuffle("update"), e.preventDefault(), o.parent().removeClass("active"), r(this).parent().addClass("active"), a.shuffle("shuffle", r(this).attr("data-group"));
        }));
      });
    }), r(".portfolio-page-carousel").each(function () {
      r(this).imagesLoaded(function () {
        r(".portfolio-page-carousel").owlCarousel({
          smartSpeed: 1200,
          items: 1,
          loop: !0,
          dots: !0,
          nav: !0,
          navText: !1,
          autoHeight: !0,
          margin: 10
        });
      });
    });
    var t,
        o = r(".blog-masonry");
    o.imagesLoaded(function () {
      o.masonry({
        itemSelector: ".item",
        resize: !1
      });
    }), r(".menu-toggle").on("click", function () {
      r(".site-nav").addClass("animate"), r(".site-nav").toggleClass("mobile-menu-hide");
    }), r(".text-rotation").owlCarousel({
      loop: !0,
      dots: !1,
      nav: !1,
      margin: 10,
      items: 1,
      autoplay: !0,
      autoplayHoverPause: !1,
      autoplayTimeout: 3800,
      animateOut: "fadeOut",
      animateIn: "fadeIn"
    }), r(".testimonials.owl-carousel").owlCarousel({
      nav: !1,
      items: 3,
      loop: !1,
      navText: !1,
      margin: 25,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        768: {
          items: 2
        },
        1200: {
          items: 2
        }
      }
    }), r(".clients.owl-carousel").imagesLoaded().owlCarousel({
      nav: !1,
      items: 2,
      loop: !1,
      navText: !1,
      margin: 10,
      autoHeight: !1,
      responsive: {
        0: {
          items: 2
        },
        768: {
          items: 4
        },
        1200: {
          items: 6
        }
      }
    }), i.magnificPopup({
      fixedContentPos: !1,
      delegate: "a.lightbox",
      type: "image",
      removalDelay: 300,
      mainClass: "mfp-fade",
      image: {
        titleSrc: "title",
        gallery: {
          enabled: !0
        }
      },
      iframe: {
        markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe><div class="mfp-title mfp-bottom-iframe-title"></div></div>',
        patterns: {
          youtube: {
            index: "youtube.com/",
            id: null,
            src: "%id%?autoplay=1"
          },
          vimeo: {
            index: "vimeo.com/",
            id: "/",
            src: "//player.vimeo.com/video/%id%?autoplay=1"
          },
          gmaps: {
            index: "//maps.google.",
            src: "%id%&output=embed"
          }
        },
        srcAction: "iframe_src"
      },
      callbacks: {
        markupParse: function markupParse(e, a, t) {
          a.title = t.el.attr("title");
        }
      }
    }), r(".ajax-page-load-link").magnificPopup({
      type: "ajax",
      removalDelay: 300,
      mainClass: "mfp-fade",
      gallery: {
        enabled: !0
      }
    }), r(".portfolio-page-wrapper .portfolio-grid").each(function () {
      r(this).magnificPopup({
        delegate: "a.gallery-lightbox",
        type: "image",
        gallery: {
          enabled: !0
        }
      });
    }), r(".form-control").val(""), r(".form-control").on("focusin", function () {
      r(this).parent(".form-group").addClass("form-group-focus");
    }), r(".form-control").on("focusout", function () {
      0 === r(this).val().length && r(this).parent(".form-group").removeClass("form-group-focus");
    }), r("body").append('<div id="page-ajax-loaded" class="page-portfolio-loaded animated fadeInLeft" style="display: none"><div class="preloader-portfolio"><div class="preloader-animation"><div class="preloader-spinner"></div></div></div></div>'), s(), r(".sidebar-toggle").on("click", function () {
      r("#blog-sidebar").toggleClass("open"), r(this).toggleClass("open");
    }), r(".nscharrenberg-scroll-to-top").click(function () {
      return r("body,html").animate({
        scrollTop: 0
      }, 400), !1;
    }), d(), t = "", r(".skill-container").each(function () {
      var e = r(this).attr("data-value");

      if (101 <= e && (e = "100"), void 0 !== e) {
        var a = r(this).attr("id");
        t += "#" + a + " .skill-percentage { width: " + e + "%; } ";
      }
    }), r("head").append('<style data-styles="nscharrenberg-skills-css" type="text/css">' + t + "</style>");
  });
}(jQuery);

/***/ }),

/***/ "./source/_assets/css/main.css":
/*!*************************************!*\
  !*** ./source/_assets/css/main.css ***!
  \*************************************/
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
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
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
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					result = fn();
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
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
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
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
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			for(moduleId in moreModules) {
/******/ 				if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 					__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 				}
/******/ 			}
/******/ 			if(runtime) var result = runtime(__webpack_require__);
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/js/main.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/css/main.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;