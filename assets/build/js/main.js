(()=>{var e,a={151:()=>{!function(e){"use strict";var a=e("body");function t(){var a=e("#page-ajax-loaded");function t(){a.removeClass("fadeOutLeft closed"),a.show(),e("body").addClass("ajax-page-visible")}var o=e(".ajax-page-load").each((function(){if(o=e(this).attr("href"),location.hash==location.hash.split("/")[0]+"/"+o.substr(0,o.length-5)){var i=e(this).attr("href");return t(),a.load(i),!1}}));e(document).on("click","#ajax-page-close-button",(function(t){t.preventDefault(),e("#page-ajax-loaded").addClass("fadeOutLeft closed"),e("body").removeClass("ajax-page-visible"),setTimeout((function(){e("#page-ajax-loaded.closed").html(""),a.hide()}),500),location.hash=location.hash.split("/")[0]})).on("click",".ajax-page-load",(function(){var a=location.hash.split("/")[0]+"/"+e(this).attr("href").substr(0,e(this).attr("href").length-5);return location.hash=a,t(),!1}))}function o(){150<e(a).scrollTop()?e(".nscharrenberg-scroll-to-top").removeClass("hidden-btn"):e(".nscharrenberg-scroll-to-top").addClass("hidden-btn")}e((function(){e("#contact_form").validator(),e("#contact_form").on("submit",(function(a){if(!a.isDefaultPrevented())return e.ajax({type:"POST",url:"contact_form/contact_form.php",data:e(this).serialize(),success:function(a){var t="alert-"+a.type,o=a.message,i='<div class="alert '+t+' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+o+"</div>";t&&o&&(e("#contact_form").find(".messages").html(i),e("#contact_form")[0].reset())}}),!1}))})),e(window).on("load",(function(){var a,t,o;e(".preloader").fadeOut(800,"linear"),a=e(window).width(),t="",o=e("#page_container").attr("data-animation"),(t=e(991<a?".page-container":".site-main")).addClass("animated "+o),e(".page-scroll").addClass("add-prespective"),t.addClass("transform3d"),setTimeout((function(){e(".page-scroll").removeClass("add-prespective"),t.removeClass("transform3d")}),1e3)})).on("hashchange",(function(e){location.hash&&t()})),e(document).on("ready",(function(){var i=15/e(document).height(),s=15/e(document).width();e("body").on("mousemove",(function(a){var t=a.pageX-e(document).width()/2,o=a.pageY-e(document).height()/2,n=s*t*-1,r=i*o*-1;if(e(".page-container").hasClass("bg-move-effect"))var l=e(".home-photo .hp-inner:not(.without-move), .lm-animated-bg");else l=e(".home-photo .hp-inner:not(.without-move)");l.addClass("transition"),l.css({"background-position":"calc( 50% + "+n+"px ) calc( 50% + "+r+"px )"}),setTimeout((function(){l.removeClass("transition")}),300)})).scroll((function(){o()}));var n=e(".portfolio-grid"),r=e("#portfolio-gallery-grid");r.imagesLoaded((function(){r.masonry()})),n.imagesLoaded((function(){e(".portfolio-content").each((function(){e(this);var a=e(this).attr("id"),t=e("#"+a+" .portfolio-grid"),o=e("#"+a+" .portfolio-filters"),i=e("#"+a+" .portfolio-filters .filter");t&&(t.shuffle({speed:450,itemSelector:"figure"}),e(".site-auto-menu").on("click","a",(function(e){t.shuffle("update")})),o.on("click",".filter",(function(a){t.shuffle("update"),a.preventDefault(),i.parent().removeClass("active"),e(this).parent().addClass("active"),t.shuffle("shuffle",e(this).attr("data-group"))})))}))})),e(".portfolio-page-carousel").each((function(){e(this).imagesLoaded((function(){e(".portfolio-page-carousel").owlCarousel({smartSpeed:1200,items:1,loop:!0,dots:!0,nav:!0,navText:!1,autoHeight:!0,margin:10})}))}));var l,c=e(".blog-masonry");c.imagesLoaded((function(){c.masonry({itemSelector:".item",resize:!1})})),e(".menu-toggle").on("click",(function(){e(".site-nav").addClass("animate"),e(".site-nav").toggleClass("mobile-menu-hide")})),e(".text-rotation").owlCarousel({loop:!0,dots:!1,nav:!1,margin:10,items:1,autoplay:!0,autoplayHoverPause:!1,autoplayTimeout:3800,animateOut:"fadeOut",animateIn:"fadeIn"}),e(".testimonials.owl-carousel").owlCarousel({nav:!1,items:3,loop:!1,navText:!1,margin:25,responsive:{0:{items:1},480:{items:1},768:{items:2},1200:{items:2}}}),e(".clients.owl-carousel").imagesLoaded().owlCarousel({nav:!1,items:2,loop:!1,navText:!1,margin:10,autoHeight:!1,responsive:{0:{items:2},768:{items:4},1200:{items:6}}}),a.magnificPopup({fixedContentPos:!1,delegate:"a.lightbox",type:"image",removalDelay:300,mainClass:"mfp-fade",image:{titleSrc:"title",gallery:{enabled:!0}},iframe:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe><div class="mfp-title mfp-bottom-iframe-title"></div></div>',patterns:{youtube:{index:"youtube.com/",id:null,src:"%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}},srcAction:"iframe_src"},callbacks:{markupParse:function(e,a,t){a.title=t.el.attr("title")}}}),e(".ajax-page-load-link").magnificPopup({type:"ajax",removalDelay:300,mainClass:"mfp-fade",gallery:{enabled:!0}}),e(".portfolio-page-wrapper .portfolio-grid").each((function(){e(this).magnificPopup({delegate:"a.gallery-lightbox",type:"image",gallery:{enabled:!0}})})),e(".form-control").val(""),e(".form-control").on("focusin",(function(){e(this).parent(".form-group").addClass("form-group-focus")})),e(".form-control").on("focusout",(function(){0===e(this).val().length&&e(this).parent(".form-group").removeClass("form-group-focus")})),e("body").append('<div id="page-ajax-loaded" class="page-portfolio-loaded animated fadeInLeft" style="display: none"><div class="preloader-portfolio"><div class="preloader-animation"><div class="preloader-spinner"></div></div></div></div>'),t(),e(".sidebar-toggle").on("click",(function(){e("#blog-sidebar").toggleClass("open"),e(this).toggleClass("open")})),e(".nscharrenberg-scroll-to-top").click((function(){return e("body,html").animate({scrollTop:0},400),!1})),o(),l="",e(".skill-container").each((function(){var a=e(this).attr("data-value");if(101<=a&&(a="100"),void 0!==a){var t=e(this).attr("id");l+="#"+t+" .skill-percentage { width: "+a+"%; } "}})),e("head").append('<style data-styles="nscharrenberg-skills-css" type="text/css">'+l+"</style>")}))}(jQuery)},661:()=>{}},t={};function o(e){var i=t[e];if(void 0!==i)return i.exports;var s=t[e]={exports:{}};return a[e](s,s.exports,o),s.exports}o.m=a,e=[],o.O=(a,t,i,s)=>{if(!t){var n=1/0;for(c=0;c<e.length;c++){for(var[t,i,s]=e[c],r=!0,l=0;l<t.length;l++)(!1&s||n>=s)&&Object.keys(o.O).every((e=>o.O[e](t[l])))?t.splice(l--,1):(r=!1,s<n&&(n=s));r&&(e.splice(c--,1),a=i())}return a}s=s||0;for(var c=e.length;c>0&&e[c-1][2]>s;c--)e[c]=e[c-1];e[c]=[t,i,s]},o.o=(e,a)=>Object.prototype.hasOwnProperty.call(e,a),(()=>{var e={522:0,870:0};o.O.j=a=>0===e[a];var a=(a,t)=>{var i,s,[n,r,l]=t,c=0;for(i in r)o.o(r,i)&&(o.m[i]=r[i]);if(l)var d=l(o);for(a&&a(t);c<n.length;c++)s=n[c],o.o(e,s)&&e[s]&&e[s][0](),e[n[c]]=0;return o.O(d)},t=self.webpackChunk=self.webpackChunk||[];t.forEach(a.bind(null,0)),t.push=a.bind(null,t.push.bind(t))})(),o.O(void 0,[870],(()=>o(151)));var i=o.O(void 0,[870],(()=>o(661)));i=o.O(i)})();