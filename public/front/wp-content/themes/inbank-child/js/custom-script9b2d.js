////////////////////////////////////////////////////////////////////////////////
// Javascript image scroll animation
//  By Sajeed
///////////////////////////////////////////////////////////////////////////////
var scrollme = (function (a) {
  var d = {};
  var c = a(document);
  var b = a(window);
  d.body_height = 0;
  d.viewport_height = 0;
  d.viewport_top = 0;
  d.viewport_bottom = 0;
  d.viewport_top_previous = -1;
  d.elements = [];
  d.elements_in_view = [];
  d.property_defaults = {
    opacity: 1,
    translatex: 0,
    translatey: 0,
    translatez: 0,
    rotatex: 0,
    rotatey: 0,
    rotatez: 0,
    scale: 1,
    scalex: 1,
    scaley: 1,
    scalez: 1,
  };
  d.scrollme_selector = ".scrollme";
  d.animateme_selector = ".animateme";
  d.update_interval = 10;
  d.easing_functions = {
    linear: function (e) {
      return e;
    },
    easeout: function (e) {
      return e * e * e;
    },
    easein: function (e) {
      e = 1 - e;
      return 1 - e * e * e;
    },
    easeinout: function (e) {
      if (e < 0.5) {
        return 4 * e * e * e;
      } else {
        e = 1 - e;
        return 1 - 4 * e * e * e;
      }
    },
  };
  d.init_events = ["ready", "page:load", "page:change"];
  d.init_if = function () {
    return true;
  };
  d.init = function () {
    if (!d.init_if()) {
      return false;
    }
    d.init_elements();
    d.on_resize();
    b.on("resize orientationchange", function () {
      d.on_resize();
    });
    b.load(function () {
      setTimeout(function () {
        d.on_resize();
      }, 100);
    });
    setInterval(d.update, d.update_interval);
    return true;
  };
  d.init_elements = function () {
    a(d.scrollme_selector).each(function () {
      var e = {};
      e.element = a(this);
      var f = [];
      a(this)
        .find(d.animateme_selector)
        .addBack(d.animateme_selector)
        .each(function () {
          var h = {};
          h.element = a(this);
          h.when = h.element.data("when");
          h.from = h.element.data("from");
          h.to = h.element.data("to");
          if (h.element.is("[data-crop]")) {
            h.crop = h.element.data("crop");
          } else {
            h.crop = true;
          }
          if (h.element.is("[data-easing]")) {
            h.easing = d.easing_functions[h.element.data("easing")];
          } else {
            h.easing = d.easing_functions.easeout;
          }
          var g = {};
          if (h.element.is("[data-opacity]")) {
            g.opacity = h.element.data("opacity");
          }
          if (h.element.is("[data-translatex]")) {
            g.translatex = h.element.data("translatex");
          }
          if (h.element.is("[data-translatey]")) {
            g.translatey = h.element.data("translatey");
          }
          if (h.element.is("[data-translatez]")) {
            g.translatez = h.element.data("translatez");
          }
          if (h.element.is("[data-rotatex]")) {
            g.rotatex = h.element.data("rotatex");
          }
          if (h.element.is("[data-rotatey]")) {
            g.rotatey = h.element.data("rotatey");
          }
          if (h.element.is("[data-rotatez]")) {
            g.rotatez = h.element.data("rotatez");
          }
          if (h.element.is("[data-scale]")) {
            g.scale = h.element.data("scale");
          }
          if (h.element.is("[data-scalex]")) {
            g.scalex = h.element.data("scalex");
          }
          if (h.element.is("[data-scaley]")) {
            g.scaley = h.element.data("scaley");
          }
          if (h.element.is("[data-scalez]")) {
            g.scalez = h.element.data("scalez");
          }
          h.properties = g;
          f.push(h);
        });
      e.effects = f;
      d.elements.push(e);
    });
  };
  d.update = function () {
    window.requestAnimationFrame(function () {
      d.update_viewport_position();
      if (d.viewport_top_previous != d.viewport_top) {
        d.update_elements_in_view();
        d.animate();
      }
      d.viewport_top_previous = d.viewport_top;
    });
  };
  d.animate = function () {
    var C = d.elements_in_view.length;
    for (var A = 0; A < C; A++) {
      var h = d.elements_in_view[A];
      var f = h.effects.length;
      for (var D = 0; D < f; D++) {
        var w = h.effects[D];
        switch (w.when) {
          case "view":
          case "span":
            var r = h.top - d.viewport_height;
            var n = h.bottom;
            break;
          case "exit":
            var r = h.bottom - d.viewport_height;
            var n = h.bottom;
            break;
          default:
            var r = h.top - d.viewport_height;
            var n = h.top;
            break;
        }
        if (w.crop) {
          if (r < 0) {
            r = 0;
          }
          if (n > d.body_height - d.viewport_height) {
            n = d.body_height - d.viewport_height;
          }
        }
        var g = (d.viewport_top - r) / (n - r);
        var x = w.from;
        var j = w.to;
        var o = j - x;
        var k = (g - x) / o;
        var v = w.easing(k);
        var l = d.animate_value(g, v, x, j, w, "opacity");
        var t = d.animate_value(g, v, x, j, w, "translatey");
        var u = d.animate_value(g, v, x, j, w, "translatex");
        var s = d.animate_value(g, v, x, j, w, "translatez");
        var B = d.animate_value(g, v, x, j, w, "rotatex");
        var z = d.animate_value(g, v, x, j, w, "rotatey");
        var y = d.animate_value(g, v, x, j, w, "rotatez");
        var E = d.animate_value(g, v, x, j, w, "scale");
        var q = d.animate_value(g, v, x, j, w, "scalex");
        var p = d.animate_value(g, v, x, j, w, "scaley");
        var m = d.animate_value(g, v, x, j, w, "scalez");
        if ("scale" in w.properties) {
          q = E;
          p = E;
          m = E;
        }
        w.element.css({
          opacity: l,
          transform:
            "translate3d( " +
            u +
            "px , " +
            t +
            "px , " +
            s +
            "px ) rotateX( " +
            B +
            "deg ) rotateY( " +
            z +
            "deg ) rotateZ( " +
            y +
            "deg ) scale3d( " +
            q +
            " , " +
            p +
            " , " +
            m +
            " )",
        });
      }
    }
  };
  d.animate_value = function (i, h, j, k, n, m) {
    var g = d.property_defaults[m];
    if (!(m in n.properties)) {
      return g;
    }
    var e = n.properties[m];
    var f = k > j ? true : false;
    if (i < j && f) {
      return g;
    }
    if (i > k && f) {
      return e;
    }
    if (i > j && !f) {
      return g;
    }
    if (i < k && !f) {
      return e;
    }
    var l = g + h * (e - g);
    switch (m) {
      case "opacity":
        l = l.toFixed(2);
        break;
      case "translatex":
        l = l.toFixed(0);
        break;
      case "translatey":
        l = l.toFixed(0);
        break;
      case "translatez":
        l = l.toFixed(0);
        break;
      case "rotatex":
        l = l.toFixed(1);
        break;
      case "rotatey":
        l = l.toFixed(1);
        break;
      case "rotatez":
        l = l.toFixed(1);
        break;
      case "scale":
        l = l.toFixed(3);
        break;
      default:
        break;
    }
    return l;
  };
  d.update_viewport_position = function () {
    d.viewport_top = b.scrollTop();
    d.viewport_bottom = d.viewport_top + d.viewport_height;
  };
  d.update_elements_in_view = function () {
    d.elements_in_view = [];
    var f = d.elements.length;
    for (var e = 0; e < f; e++) {
      if (
        d.elements[e].top < d.viewport_bottom &&
        d.elements[e].bottom > d.viewport_top
      ) {
        d.elements_in_view.push(d.elements[e]);
		// d.elements[e].effects[e].element.show()
		if(d.elements[e].effects.length){
			if(d.elements[e].effects.length){
				d.elements[e].effects[0].element.css('opacity', '1');
			}
		}
      }else{
		  if(d.elements[e].effects.length){
			  if(d.elements[e].effects.length){
					d.elements[e].effects[0].element.css('opacity', '0');
		 		 }
		  }
	}
    }
  };
  d.on_resize = function () {
    d.update_viewport();
    d.update_element_heights();
    d.update_viewport_position();
    d.update_elements_in_view();
    d.animate();
  };
  d.update_viewport = function () {
    d.body_height = c.height();
    d.viewport_height = b.height();
  };
  d.update_element_heights = function () {
    var g = d.elements.length;
    for (var f = 0; f < g; f++) {
      var h = d.elements[f].element.outerHeight();
      var e = d.elements[f].element.offset();
      d.elements[f].height = h;
      d.elements[f].top = e.top;
      d.elements[f].bottom = e.top + h;
    }
  };
  c.on(d.init_events.join(" "), function () {
    d.init();
  });
  return d;
})(jQuery);

(function ($) {
  setTimeout(function () {
    jQuery("input[name='_textBoxCompanyId']").removeAttr("required");
    //var s = skrollr.init();
    jQuery(".banking_type").on("change", function () {
      var current_value = jQuery(this).val();
      if (current_value == "Business Banking") {
        jQuery("#companyId").show();
        jQuery("input[name='_textBoxCompanyId']").attr("required", true);
        jQuery("form").attr(
          "action",
          "https://inbank.ebanking-services.com/EamWeb/Remote/RemoteLoginApi.aspx?appID=beb&brand=inbank"
        );
      } else {
        jQuery("input[name='_textBoxCompanyId']").removeAttr("required");
        jQuery("#companyId").hide();
        jQuery("form").attr(
          "action",
          "https://cibng.ibanking-services.com/EamWeb/Remote/RemoteLoginAPI.aspx?FIORG=56T&orgId=56T_102200245&FIFID=102200245&brand=56T_102200245&appId=ceb"
        );
      }
    });

    var userId = localStorage.getItem("textBoxUserId");
    var companyId = localStorage.getItem("textBoxCompanyId");

    if (userId != "") {
      jQuery("input[name='_textBoxUserId']").val(userId);
    }
    if (companyId != "") {
      jQuery("input[name='_textBoxCompanyId']").val(companyId);
    }

    // jQuery("#custom_bank_login").click(function (e) {
    //   e.preventDefault();

        jQuery('#banking_form').on('submit', function(e){
        e.preventDefault(); 

      var textBoxUserId = jQuery("input[name='_textBoxUserId']").val();
      var textBoxCompanyId = jQuery("input[name='_textBoxCompanyId']").val();

      var checkedval = jQuery("input[name='remember-me']").is(":checked");

      if (checkedval == true) {
        localStorage.setItem("textBoxUserId", textBoxUserId);
        localStorage.setItem("textBoxCompanyId", textBoxCompanyId);
      } else {
        localStorage.removeItem("textBoxUserId");
        localStorage.removeItem("textBoxCompanyId");
      }

        this.submit();
    });
  }, 200);

  jQuery(window).resize(function () {
    applyCustomMargin();
  });

  jQuery(document).ready(function () {
    smoothScroll();

    setTimeout(function(){
      applyCustomMargin();
    }, 500);

    $("img").on("load", function() {
      applyCustomMargin();
    });

    
    jQuery("#animation-image").addClass("animateme");

    jQuery("#animation-image").parent().addClass("scrollme");
    jQuery("#animation-image").attr({
      "data-when": "span",
      "data-from": "-0.1",
      "data-to": "1.5",
      "data-easing": "easeinout",
      "data-translatey": "750",
      "data-rotatez": "90",
      "data-scale": "0.4",
    });
    scrollme.init();
    windowSize();
    function windowSize() {
      if (jQuery(window).width() < 1280) {
        if (scrollme.elements.length) {
          scrollme.elements = [];
          jQuery("#animation-image").removeAttr("style");
        }
      } else if (
        jQuery(window).width() > 1280 &&
        jQuery(window).width() < 1920
      ) {
        if (scrollme.init() == true) {
          if (scrollme.elements.length) {
            scrollme.elements = [];
            scrollme.init();
          }
        }
      } else if (jQuery(window).width() > 1920) {
        if (scrollme.elements.length) {
          scrollme.elements[0].effects[0].to = 1.2;
        }
      }
    }
    jQuery(window).on("resize", function () {
      if (jQuery(window).width() < 1280) {
        if (scrollme.elements.length) {
          scrollme.elements = [];
          jQuery("#animation-image").removeAttr("style");
        }
      } else if (
        jQuery(window).width() > 1280 &&
        jQuery(window).width() < 1920
      ) {
        if (scrollme.init() == true) {
          if (scrollme.elements.length) {
            scrollme.elements = [];
            scrollme.init();
          }
        }
      } else if (jQuery(window).width() > 1920) {
        if (scrollme.elements.length) {
          scrollme.elements[0].effects[0].to = 1.2;
        }
      }
    });

    

    //Accordion
    $(".accordion-wrap > a.has-link").on("click", function () {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).siblings(".acc-content").slideUp(200);
        $(".accordion-wrap > a.has-link i")
          .removeClass("acc-minus")
          .addClass("acc-plus");
      } else {
        $(".accordion-wrap > a.has-link i")
          .removeClass("acc-minus")
          .addClass("acc-plus");
        $(this).find("i").removeClass("acc-plus").addClass("acc-minus");
        $(".accordion-wrap > a.has-link").removeClass("active");
        $(this).addClass("active");
        $(".acc-content").slideUp(200);
        $(this).siblings(".acc-content").slideDown(200);
      }
    });

    var mobile_div = document.getElementById("animation-image");

    //Tabs Functionality
    $(".tab-link").click(function () {
      var tab_id = $(this).attr("data-tab");
      let parent = $(this).parent().parent();
      parent.find(".tab-link").not(this).removeClass("current");
      parent.find(".tab-content").not($("#" + tab_id)).removeClass("current");

      $(this).addClass("current");
      parent.find("#" + tab_id).addClass("current");
    });

    $(".tab-bottom-link").click(function () {
      var tab_ref = $(this).attr("data-ref");
      $("#" +tab_ref).trigger('click');
      $('html, body').animate({
             scrollTop: $("#" +tab_ref).offset().top
         }, 1000);
    });
    /////////////

    $(".slider").slick({
      vertical: true,
      verticalSwiping: true,
      autoplay: true,
      autoplaySpeed: 3000,
      centerMode: true,
      speed: 1000,
      arrows: false,
      dots: false,
    });

    jQuery(".verticle-slider .slider").on(
      "beforeChange",
      function (event, slick, currentSlide, nextSlide) {
        let prevSlide = nextSlide - 1;
        let next = nextSlide + 1;
        jQuery(".slick-slide").removeClass("next--slide");
        jQuery(".slick-slide").removeClass("prev--slide");
        jQuery(`[data-slick-index='${prevSlide}']`).addClass("prev--slide");
        jQuery(`[data-slick-index='${next}']`).addClass("next--slide");
      }
    );

    $(".services-slider .owl-carousel").owlCarousel({
      loop: true,
      dots: false,
      nav: true,
      navText: [
        "<i class='left-circle-arrow navy-bg'></i>",
        "<i class='right-circle-arrow navy-bg'></i>",
      ],
      responsive: {
        0: {
          items: 1.1,
          margin: 15,
        },
        480: {
          items: 1.1,
          margin: 15,
        },
        481: {
          items:1.5,
        },
        580: {
          items: 1.5,
        },
        900: {
          items: 1.5,
        },
        901: {
          items: 2,
        },
        1201: {
          items: 3,
        },
      },
    });
    $(".services-box-slider .owl-carousel").owlCarousel({
      loop: true,
      items: 6,
      margin: 0,
      dots: false,
      nav: true,
      navText: [
        "<i class='left-circle-arrow navy-bg'></i>",
        "<i class='right-circle-arrow navy-bg'></i>",
      ],
    });
    $(".tweet-slider .owl-carousel").owlCarousel({
      loop: true,
      items: 3,
      margin: 30,
      dots: false,
      nav: true,
      navText: [
        "<i class='red-arrow-circle-left red-circle'></i>",
        "<i class='red-circle red-arrow-circle-right'></i>",
      ],
    });
    var teamowl = $(".team-slider .owl-carousel").owlCarousel({
      loop: false,
      items: 1,
      margin: 0,
      dots: false,
      nav: true,
      autoHeight:true,
      navText: [
        "<i data-name='left' class='arrow-circle-left white-circle'></i>",
        "<i data-name='right' class='arrow-circle-right white-circle'></i>",
      ],
    });

    teamowl.on("dragged.owl.carousel", function (event) { 
if(jQuery(".owl-item").hasClass("active")) { 
        if (event.relatedTarget['_drag']['direction'] == 'left') {
 var url = jQuery(".active").prev().find(".next-post-link a").attr("href"); 
  
}else {
    var url = jQuery(".active").next().find(".prev-post-link a").attr("href");
     }
      //  jQuery(".lds-spinner").show();
      // jQuery("body").css("overflow","hidden");
   setTimeout(function(){
    if(url != '' && url != undefined){

    window.location.assign(url);
    }
   },3000);
}
});
	  
	  

    // Submenu
    jQuery(".back-btn").click(function () {
      jQuery(".sub-menu").removeClass("business-sub-menu-open");
    });
      jQuery(".menu-item-has-children").append(
        "<div class='sub-menu-toggle'></div>"
      );
    jQuery(".sub-menu-toggle").click(function () {
        console.log('abhay');
        jQuery(this).siblings(".sub-menu").toggleClass("business-sub-menu-open");
      });
    jQuery("#site-navigation").click(function () {
      if (jQuery("#site-navigation").hasClass("toggled")) {
        jQuery("body").addClass("overflow-none");
      } else {
        jQuery("body").removeClass("overflow-none");
        jQuery(".sub-menu").removeClass("business-sub-menu-open");
      }
    });

    // Submenu end

    $(".testimonials-carousel .owl-carousel").owlCarousel({
      loop: true,
      items: 1,
      margin: 0,
      dots: false,
      nav: true,
      autoHeight:true,
      navText: [
        "<i class='red-arrow-circle-left red-circle'></i>",
        "<i class='red-circle red-arrow-circle-right'></i>",
      ],
      onInitialized: counter, //When the plugin has initialized.
      onTranslated: counter, //When the translation of the stage has finished.
    });
    function counter(event) {
      var element = event.target; // DOM element, in this example .owl-carousel
      var items = event.item.count; // Number of items
      var item = event.item.index + 1; // Position of the current item
      // it loop is true then reset counter from 1
      if (item > items) {
        item = item - items;
      }
      $("#counter").html(+item + "/" + items);
    }

    $(".image-carousel .owl-carousel").owlCarousel({
      loop: true,
      items: 2.44,
      center: true,
      margin: 140,
      dots: false,
      nav: true,
      navText: [
        "<i class='red-arrow-circle-left red-circle'></i>",
        "<i class='red-circle red-arrow-circle-right'></i>",
      ],

      responsive: {
        // breakpoint from 0 up
        0: {
          margin: 20,
          items:1.3,
        },
        580: {
          margin:20,
          items:1.3,
        },
        581: {
          margin:50,
          items:1.8,
        },
        991: {
          margin:50,
          items:1.8,
        },
        1380: {
          margin: 100,
          items: 2.5,
        },
        1580: {
          margin: 100,
        },
      },
    });

    // Sync Owl Carousel
    // sync video carousel for UNLV hidden page
    var sync1 = $(".sync1");
    var sync2 = $(".sync2");
    var slidesPerPage = 1; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1
      .owlCarousel({
        items: 1,
        nav: true,
        navText: [
          "<i class='arrow-circle-left white-circle'></i>",
          "<i class='arrow-circle-right white-circle'></i>",
        ],
        autoplay: false,
        dots: false,
        loop: false,
        responsiveRefreshRate: 200,
      })
      .on("changed.owl.carousel", syncPosition);

    sync2
      .on("initialized.owl.carousel", function () {
        sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
        items: slidesPerPage,
        dots: false,
        nav: false,
        smartSpeed: 200,
        slideSpeed: 1000,
        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
        responsiveRefreshRate: 100,
      })
      .on("changed.owl.carousel", syncPosition2);

    function syncPosition(el) {
      var current = el.item.index;
      sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = sync2.find(".owl-item.active").length - 1;
      var start = sync2.find(".owl-item.active").first().index();
      var end = sync2.find(".owl-item.active").last().index();

      if (current > end) {
        sync2.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        sync2.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        sync1.data("owl.carousel").to(number, 100, true);
      }
    }

    sync2.on("click", ".owl-item", function (e) {
      e.preventDefault();
      var number = $(this).index();
      sync1.data("owl.carousel").to(number, 300, true);
    });

    if (jQuery("#intro").length > 0) {
      gsap.registerPlugin(ScrollTrigger);
      console.log(ScrollTrigger);
      gsap.from("#intro", {
        scrollTrigger: {
          trigger: ".full-video-sec",
          scrub: true,
          pin: true,
          preventOverlaps: true,
          start: "20% 20%",
          end: "+=100%",
        },
        scale: 0.6,
        transformOrigin: "top center",
        ease: "none",
      });
    }
  });
})(jQuery);


function applyCustomMargin() {
  let marginLeft = jQuery(".container").css("margin-left");
  jQuery(".custom-container").css("margin-left", marginLeft);
}

function smoothScroll() {
  setTimeout(function(){
    if (window.location.hash) {
      var hash = window.location.hash;

      if (jQuery(hash).length) {
          jQuery('html, body').animate({
              scrollTop: jQuery(hash).offset().top
          }, 900, 'swing');
      }
    }
  },300);
}

// Adding mac class to body in mac devices
if(navigator.userAgent.indexOf('Mac') > 0){
  jQuery('body').addClass('mac-os');
}
 

jQuery(document).ready(function(){
var teamowl = '';
  
jQuery(".white-circle").click(function(){ 
if(jQuery(".owl-item").hasClass("active")) { 
     if(jQuery(this).hasClass("arrow-circle-left")){
   var url = jQuery(".active").find(".prev-post-link a").attr("href");
  
}else {
  var url = jQuery(".active").find(".next-post-link a").attr("href");
     }
      //  jQuery(".lds-spinner").show();
      // jQuery("body").css("overflow","hidden");
   setTimeout(function(){
    if(url != '' && url != undefined){
      window.location.assign(url);
    }
   },3000);
}
});





   // var member_id = jQuery(".team-slider").find(".active").next("div").find(".team-banner-wrap:first").attr("data-id");
    
   // //jQuery("input[type=hidden][name=c_id]").val(c_id);    
   //   jQuery.ajax({
   //       type : "post",
   //       dataType : "html",
   //       url : sbiajaxurl,
   //       data : {action: "get_members_data", member_id : member_id},
   //       success: function(response) { 
   //             jQuery(".next-post-link a").html(response);
             
   //       }
   //    }); 

 
//   jQuery(".white-circle").click(function(){
//     if(jQuery(this).attr("data-name") == 'right') {
//       var  member_id = jQuery(".active").next("div").next("div").find(".team-banner-wrap:first").attr("data-id");  
//     } else{
//       var  member_id = jQuery(".active").prev("div").next("div").find(".team-banner-wrap:first").attr("data-id");     
//     }
 
//  if(member_id !=''){
//     jQuery.ajax({
//          type : "post",
//          dataType : "html",
//          url : sbiajaxurl,
//          data : {action: "get_members_data", member_id : member_id},
//          success: function(response) { 
//                jQuery(".next-post-link a").html(response);
             
//          }
//       });   
//  }
// });

	      
 //if (window.location.href.indexOf("member") > -1) {  
if(jQuery("#team_id").length >= 1){
var team_id = jQuery("#team_id").val();
	
jQuery(".team-banner-wrap").each(function(i){    
    var member_id = jQuery(this).data("id");    
 if(member_id == team_id){
         jQuery('.team-slider  .owl-carousel').trigger('to.owl.carousel', [i, 1, true]);   
   } 


});
}
});


