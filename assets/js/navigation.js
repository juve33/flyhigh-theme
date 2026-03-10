/**
 * @param {boolean} condition The condition under which the navigation changes
 */
function nav_style(condition) {

	if (condition){ 

		$('header.wp-block-template-part').addClass("flyhigh-header-default");

	}

	else{

		$('header.wp-block-template-part').removeClass("flyhigh-header-default");

	}

}


$(document).ready(function() {

    // SCROLLING

    let lastScrollTop = $(this).scrollTop();

    nav_style($(this).scrollTop() > 63);

    $(document).on('scroll', function() {

        let currentScrollTop = $(this).scrollTop();
        nav_style(currentScrollTop > 63);
        lastScrollTop = currentScrollTop;

    });

});