$(".sm-menu").hide();
$('.content2').slideUp();

$(document).ready(function () {

$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
}); 
 
$(document).ready(function() {
	$(".megamenu").on("click", function(e) {
		e.stopPropagation();
	});
});


$(document).on('click', '#sidebar_show',  function() {
	$(".sidebar").css({'margin-left':'0%', 'transition':'.6s'});
});

$(document).on('click', '#sidebar_hide',  function() {
	$(".sidebar").css({'margin-left':'-100%', 'transition':'.65s'});
});
$(document).on('click', '#navbarDropdown',  function() {
	$(this).parent('.dropdown').find(".sm-menu").toggle();
	
});

$(document).on('click', '.tab1',  function(e) {
  $('.content1').slideUp();
  $(this).find('.fa').removeClass('fa-minus').addClass('fa-plus');
  $(this).addClass('minus_class');
  $(this).removeClass('tab1');
});
$(document).on('click', '.minus_class',  function(e) {
  $('.content1').slideDown();
  $(this).find('.fa').removeClass('fa-plus').addClass('fa-minus');
  $(this).removeClass('minus_class');
  $(this).addClass('tab1');
});


$(document).on('click', '.tab2',  function(e) {
  $('.content2').slideDown();
  $(this).find('.fa').removeClass('fa-plus').addClass('fa-minus');
  $(this).addClass('minus_class2');
  $(this).removeClass('tab2');
});
$(document).on('click', '.minus_class2',  function(e) {
  $('.content2').slideUp();
  $(this).find('.fa').removeClass('fa-minus').addClass('fa-plus');
  $(this).removeClass('minus_class2');
  $(this).addClass('tab2');
});


var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $("#myBtn").show();
  } else {
    $("#myBtn").hide();
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
