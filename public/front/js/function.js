if(function(e){e(".header-mobile__toolbar").on("click",function(){e(".main-header").toggleClass("menu-mobile-active"),e("body").toggleClass("active-body"),e(".mobile-menu-overlay").toggleClass("mobile-menu-overlay-active")}),e(".mobile-menu-overlay").on("click",function(){e(".main-header").toggleClass("menu-mobile-active"),e("body").toggleClass("active-body"),e(".mobile-menu-overlay").toggleClass("mobile-menu-overlay-active")}),e(".main-header .btn-close-header-mobile").on("click",function(){e(".main-header").toggleClass("menu-mobile-active"),e("body").toggleClass("active-body"),e(".mobile-menu-overlay").toggleClass("mobile-menu-overlay-active")}),e(".header-mobile-navigation__toolbar").on("click",function(){e(".main-navigation").toggleClass("menu-mobile-active"),e("body").toggleClass("active-body"),e(".mobile-menu-overlay").toggleClass("mobile-menu-overlay-active")}),e(".mobile-menu-overlay").on("click",function(){e(".main-navigation").toggleClass("menu-mobile-active"),e("body").toggleClass("active-body")}),e(".main-navigation .btn-close-header-mobile").on("click",function(){e(".main-navigation").toggleClass("menu-mobile-active"),e("body").toggleClass("active-body"),e(".mobile-menu-overlay").toggleClass("mobile-menu-overlay-active")}),e(window).on("load",function(){e("body").css("overflow-y","auto"),e(".loader-page").fadeOut(500),(new WOW).init()}),document.getElementsByClassName("selectpicker")[0]&&e(".selectpicker").selectpicker(),e(".widget__btn").click(function(){e(this).siblings().removeClass("selected"),e(this).addClass("selected")}),document.getElementsByClassName("datetimepicker")[0]&&e(".datetimepicker").datetimepicker({format:"yyyy/mm/dd",todayHighlight:!0,autoclose:!0,startView:2,minView:2,forceParse:0,pickerPosition:"bottom-left"}),document.getElementsByClassName("datetimepicker_2")[0]&&e(".datetimepicker_2").datetimepicker({inline:!0,format:"yyyy/mm/dd",debug:!0})}(jQuery),document.getElementById("myCalendar")){new VanillaCalendar({selector:"#myCalendar",onSelect:(e,o)=>{$("#dateSelected").val(e.date)}})}function closer(){$(".main-navigation").toggleClass("menu-mobile-active"),$(".main-header").toggleClass("menu-mobile-active"),$("body").toggleClass("active-body"),$(".mobile-menu-overlay").toggleClass("mobile-menu-overlay-active")}