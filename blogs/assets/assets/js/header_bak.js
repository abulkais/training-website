function bookNowHeaderMain(e){generateCaptcha();var e=e;localStorage.setItem("form_header",e)}function closeDialog(){}function isNumberKey(e){var t=e.which?e.which:event.keyCode;return 47>t||t>57?!1:!0}function genetaterecaptchaonclick(){generateCaptcha()}function delay1(){booknowmodel.style.display="inline"}function validateForm3(){var e=document.forms.sentMessage1.qname.value;if(""==e)return alert("Name must be filled out"),event.preventDefault(),!1;var t=document.forms.sentMessage1.qemail.value;if(""==t)return alert("email must be filled out"),event.preventDefault(),!1;var n=document.forms.sentMessage1.qloc.value;if(""==n)return alert("Location must be filled out"),event.preventDefault(),!1;var a=document.forms.sentMessage1.qphone.value;if(!/^\d{10}$/.test(a))return alert("Invalid number; must be ten digits"),event.preventDefault(),!1;var o=document.forms.sentMessage1.qemail.value,l=o.indexOf("@"),c=o.lastIndexOf(".");return 1>l||l+2>c||c+2>=o.length?(alert("Not a valid e-mail address"),event.preventDefault(),!1):void localStorage.setItem("modal_email_t",o)}function checkform5(e){var t="";return""==e.CaptchaInputhead.value&&(t+="- Please Enter CAPTCHA Code.\n"),""!=e.CaptchaInputhead.value&&0==ValidCaptcha1(e.CaptchaInputhead.value)&&(t+="- The CAPTCHA Code Does Not Match.\n"),""!=t?(alert(t),event.preventDefault(),!1):void 0}function ValidCaptcha1(){var e=removeSpaces1(document.getElementById("txtCaptchahead").value),t=removeSpaces1(document.getElementById("CaptchaInputhead").value);return e==t?!0:!1}function removeSpaces1(e){return e.split(" ").join("")}var google_conversion_id=851446431,google_custom_params=window.google_tag_params,google_remarketing_only=!0;$("a[rel=popover]").popover(),$(".bg-ad-header p span").on("click",function(){$(".bg-ad-header").fadeToggle("slow")}),$(".bg-ad-header .col-xs-1 span").on("click",function(){$(".bg-ad-header").fadeToggle("slow")}),!function(e,t,n,a,o,l,c){e.fbq||(o=e.fbq=function(){o.callMethod?o.callMethod.apply(o,arguments):o.queue.push(arguments)},e._fbq||(e._fbq=o),o.push=o,o.loaded=!0,o.version="2.0",o.queue=[],l=t.createElement(n),l.async=!0,l.src=a,c=t.getElementsByTagName(n)[0],c.parentNode.insertBefore(l,c))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js"),fbq("init","268171933576802"),fbq("track","PageView"),window.$zopim||function(e,t){var n=$zopim=function(e){n._.push(e)},a=n.s=e.createElement(t),o=e.getElementsByTagName(t)[0];n.set=function(e){n.set._.push(e)},n._=[],n.set._=[],a.async=!0,a.setAttribute("charset","utf-8"),a.src="https://v2.zopim.com/?4pkaL7DsKn4v0g7nXt0wWhTNH3FA8b86",n.t=+new Date,a.type="text/javascript",o.parentNode.insertBefore(a,o)}(document,"script"),function(e,t,n,a,o,l,c,r,i){t.className+=" "+n,l.start=1*new Date,l.end=c=function(){t.className=t.className.replace(RegExp(" ?"+n),"")},(e[a]=e[a]||[]).hide=l,setTimeout(function(){c(),l.end=null},o),l.timeout=o}(window,document.documentElement,"async-hide","dataLayer",4e3,{"GTM-PP7Q642":!0}),function(e,t,n,a,o,l,c){e.GoogleAnalyticsObject=o,e[o]=e[o]||function(){(e[o].q=e[o].q||[]).push(arguments)},e[o].l=1*new Date,l=t.createElement(n),c=t.getElementsByTagName(n)[0],l.async=1,l.src=a,c.parentNode.insertBefore(l,c)}(window,document,"script","https://www.google-analytics.com/analytics.js","ga"),ga("create","UA-100393938-1","kvch.in"),ga("require","GTM-PP7Q642"),ga("send","pageview"),$(document).ready(function(){}),window.onload=function(){var e=window.location.href.indexOf("certificate-form.html"),t=window.location.href.indexOf("verifycert.html"),n=localStorage.getItem("modal_email_t");null==n&&(29!=e||-1!=t)&&setTimeout(delay1,5e3)};var booknowmodel=document.getElementById("myModal1"),closebtn=document.getElementsByClassName("close-btn")[0],bookbtn=document.getElementById("booknowbtn");bookbtn.onclick=function(){booknowmodel.style.display="inline"},closebtn.onclick=function(){booknowmodel.style.display="none"},window.onclick=function(e){e.target==booknowmodel&&(booknowmodel.style.display="none")};var a=Math.ceil(9*Math.random())+"",b=Math.ceil(9*Math.random())+"",c=Math.ceil(9*Math.random())+"",d=Math.ceil(9*Math.random())+"",e=Math.ceil(9*Math.random())+"",code1=a+b+c+d+e;document.getElementById("txtCaptchahead").value=code1,document.getElementById("CaptchaDivhead").innerHTML=code1;