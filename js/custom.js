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

$('#review').hide();
$('#contact_part').hide();

$(document).on('click', '.overview',  function(e) {
  $('#view_3 ul li:last-child').css({'border-bottom':'0px solid #33333330'});
  $('#overview').slideDown();
  $('#review').hide();
  $('#contact_part').hide();
  $('.review').css({'border-bottom':'none'});
  $('.contact_part').css({'border-bottom':'none'});
  $('.overview').css({'border-bottom':'2px solid #000'});
});
$(document).on('click', '.review',  function(e) {
  $('#view_3 ul li:last-child').css({'border-bottom':'1px solid #33333330'});
  $('#review').slideDown();
  $('#overview').hide();
  $('#contact_part').hide();
  $('.overview').css({'border-bottom':'none'});
  $('.contact_part').css({'border-bottom':'none'});
  $('.review').css({'border-bottom':'2px solid #000'});
});
$(document).on('click', '.contact_part',  function(e) {
  $('#contact_part').slideDown();
  $('#overview').hide();
  $('#review').hide();
  $('.overview').css({'border-bottom':'none'});
  $('.review').css({'border-bottom':'none'});
  $('.contact_part').css({'border-bottom':'2px solid #000'});
  $('#view_3 ul li:last-child').css({'border-bottom':'1px solid #33333330'});
});

$(document).ready(function () {

  var navListItems = $('div.setup-panel div a'),
      allWells = $('.setup-content'),
      allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
          $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-success').addClass('btn-default');
          $item.addClass('btn-success');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function () {
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for (var i = 0; i < curInputs.length; i++) {
          if (!curInputs[i].validity.valid) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-success').trigger('click');
});