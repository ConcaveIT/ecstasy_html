$(".sm-menu").hide();


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

