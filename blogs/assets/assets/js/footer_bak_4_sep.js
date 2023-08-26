$('a[rel=popover]').popover(); 
$('.popup_event').on('click',function()
{
$('.jx_ui_Widget').css('display','none');
})


$(document).ready(function()
{
$('.fixed-web-menu-bottom').css('margin-bottom','-32px');
});


$(document).scroll(function() {

  var y = $(this).scrollTop();
  if (y > 80) { 
   $('.fixed-web-menu-bottom').css('margin-bottom','0px');
    $('.fixed-web-menu-bottom').fadeIn();
  } else {
    $('.fixed-web-menu-bottom').fadeOut();
  }
});

 function genetaterecaptchaonclick()
{
generateCaptcha();
}

/***************popup model1 start here*/
var booknowmodel = document.getElementById('myModal1');
var closebtn = document.getElementsByClassName("close-btn")[0];
var bookbtn = document.getElementById("booknowbtn1");
var bookbtn2 = document.getElementById("booknowbtn2");



bookbtn.onclick = function() {
    booknowmodel.style.display = "inline";
}
bookbtn2.onclick = function() {
    booknowmodel.style.display = "inline";
}

closebtn.onclick = function() {
    booknowmodel.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == booknowmodel) {
        booknowmodel.style.display = "none";
    }
}
/**************popup model end here**************/

/*{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://kvch.in",
  "logo": "https://kvch.in/assets/img/logo.png"
}*/
