function createCookie(e,t,r){if(r){var n=new Date;n.setTime(n.getTime()+24*r*60*60*1e3);var o="; expires="+n.toGMTString()}else var o="";document.cookie=e+"="+t+o+"; path=/"}function readCookie(e){for(var t=e+"=",r=document.cookie.split(";"),n=0;n<r.length;n++){for(var o=r[n];" "==o.charAt(0);)o=o.substring(1,o.length);if(0==o.indexOf(t))return o.substring(t.length,o.length)}return null}function eraseCookie(e){createCookie(e,"",-1)}!function(e){function t(t){e("link[rel*=style][title]").each(function(e){this.disabled=!0,this.getAttribute("title")==t&&(this.disabled=!1)}),createCookie("style",t,365)}e(document).ready(function(){e(".styleswitch").click(function(){return t(this.getAttribute("data-switchcolor")),!1});var r=readCookie("style");r&&t(r)})}(jQuery),jQuery(".demo_changer .demo-icon").click(function(){jQuery(".demo_changer").hasClass("active")?jQuery(".demo_changer").animate({left:"-70px"},function(){jQuery(".demo_changer").toggleClass("active")}):jQuery(".demo_changer").animate({left:"0px"},function(){jQuery(".demo_changer").toggleClass("active")})}),$(window).on("load",function(){$(".selectpicker").selectpicker({selectedText:"cat"})}),jQuery(".demo_changer .PatternChanger a").click(function(){var e=jQuery(this).attr("href");return jQuery(".demo_changer .PatternChanger a").removeClass("current"),jQuery("body").css({backgroundColor:"#ffffff"}),jQuery(this).addClass("current"),jQuery("body").css({backgroundImage:"url("+e+")"}),jQuery(this).hasClass("bg_t")?jQuery("body").css({backgroundRepeat:"repeat",backgroundPosition:"50% 0",backgroundAttachment:"scroll"}):jQuery("body").css({backgroundRepeat:"repeat",backgroundPosition:"50% 0",backgroundAttachment:"scroll"}),!1});