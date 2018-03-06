/* SCRIPT.JS ======================================= */


/* Mobile Main Nav */
$(function() {
	$(".main-nav__m-open").click(function() {
		$(".main-nav__mobile-wrap").addClass("slide");
	});
});

$(function() {
	$(".main-nav__m-close").click(function() {
		$(".main-nav__mobile-wrap").removeClass("slide");
	});
});
/* /Mobile Main Nav */



/* Mobile Article Nav */
$(function() {
	$(".article-nav-mobile").click(function() {
		$(".article-nav__mobile-wrap").addClass("slide");
	});
});

$(function() {
	$(".article-nav__m-close").click(function() {
		$(".article-nav__mobile-wrap").removeClass("slide");
	});
});
/* /Mobile Article Nav */


